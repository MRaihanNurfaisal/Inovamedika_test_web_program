<?php

class TindakanController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Tindakan');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionView($id)
    {
        $model = Tindakan::model()->findByPk($id);
        if (!$model) {
            throw new CHttpException(404, 'Tindakan tidak ditemukan.');
        }
        $this->render('view', array('model' => $model));

        // $model = Tindakan::model()->findByPk($id);
        // $this->render('view', array('model' => $model));
    }

    public function actionCreate()
    {
        $model = new Tindakan;

        if (isset($_POST['Tindakan'])) {
            $model->attributes = $_POST['Tindakan'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array('model' => $model));
    }

    public function actionUpdate($id)
    {
        $model = Tindakan::model()->findByPk($id);

        if (isset($_POST['Tindakan'])) {
            $model->attributes = $_POST['Tindakan'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array('model' => $model));
    }

    public function actionDelete($id)
    {
        if (Yii::app()->request->isPostRequest) {
            Tindakan::model()->findByPk($id)->delete();
            if (!isset($_GET['ajax']))
                $this->redirect(array('index'));
        } else {
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
    }
}
