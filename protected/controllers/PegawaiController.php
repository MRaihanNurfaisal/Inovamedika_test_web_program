<?php

class PegawaiController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Pegawai');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionView($id)
    {
        $model = Pegawai::model()->findByPk($id);
        if (!$model) {
            throw new CHttpException(404, 'Pegawai tidak ditemukan.');
        }
        $this->render('view', array('model' => $model));

        // $model = Pegawai::model()->findByPk($id);
        // $this->render('view', array('model' => $model));
    }

    public function actionCreate()
    {
        $model = new Pegawai;

        if (isset($_POST['Pegawai'])) {
            $model->attributes = $_POST['Pegawai'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array('model' => $model));
    }

    public function actionUpdate($id)
    {
        $model = Pegawai::model()->findByPk($id);

        if (isset($_POST['Pegawai'])) {
            $model->attributes = $_POST['Pegawai'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array('model' => $model));
    }

    public function actionDelete($id)
    {
        if (Yii::app()->request->isPostRequest) {
            Pegawai::model()->findByPk($id)->delete();
            if (!isset($_GET['ajax']))
                $this->redirect(array('index'));
        } else {
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
    }
}
