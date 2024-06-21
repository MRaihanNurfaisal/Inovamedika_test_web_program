<?php

class WilayahController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Wilayah');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionView($id)
    {
        $model = Wilayah::model()->findByPk($id);
        if (!$model) {
            throw new CHttpException(404, 'Wilayah tidak ditemukan.');
        }
        $this->render('view', array('model' => $model));

        // $model = Wilayah::model()->findByPk($id);
        // $this->render('view', array('model' => $model));
    }

    public function actionCreate()
    {
        $model = new Wilayah;

        if (isset($_POST['Wilayah'])) {
            $model->attributes = $_POST['Wilayah'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array('model' => $model));
    }

    public function actionUpdate($id)
    {
        $model = Wilayah::model()->findByPk($id);

        if (isset($_POST['Wilayah'])) {
            $model->attributes = $_POST['Wilayah'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array('model' => $model));
    }

    public function actionDelete($id)
    {
        if (Yii::app()->request->isPostRequest) {
            Wilayah::model()->findByPk($id)->delete();
            if (!isset($_GET['ajax']))
                $this->redirect(array('index'));
        } else {
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
    }
}
