<?php

class ObatController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Obat');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionView($id)
    {
        $model = Obat::model()->findByPk($id);
        if (!$model) {
            throw new CHttpException(404, 'Obat tidak ditemukan.');
        }
        $this->render('view', array('model' => $model));

        // $model = Obat::model()->findByPk($id);
        // $this->render('view', array('model' => $model));
    }

    public function actionCreate()
    {
        $model = new Obat;

        if (isset($_POST['Obat'])) {
            $model->attributes = $_POST['Obat'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array('model' => $model));
    }

    public function actionUpdate($id)
    {
        $model = Obat::model()->findByPk($id);

        if (isset($_POST['Obat'])) {
            $model->attributes = $_POST['Obat'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array('model' => $model));
    }

    public function actionDelete($id)
    {
        if (Yii::app()->request->isPostRequest) {
            Obat::model()->findByPk($id)->delete();
            if (!isset($_GET['ajax']))
                $this->redirect(array('index'));
        } else {
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
    }
}
