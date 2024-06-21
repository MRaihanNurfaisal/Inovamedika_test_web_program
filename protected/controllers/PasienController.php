<?php

class PasienController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Pasien');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionView($id)
    {
        $model = Pasien::model()->findByPk($id);
        if (!$model) {
            throw new CHttpException(404, 'Pasien tidak ditemukan.');
        }
        $this->render('view', array('model' => $model));

        // $model = Pasien::model()->findByPk($id);
        // $this->render('view', array('model' => $model));
    }

    public function actionCreate()
    {
        $model = new Pasien;

        if (isset($_POST['Pasien'])) {
            $model->attributes = $_POST['Pasien'];
            if ($model->save())
				$this->redirect(Yii::app()->baseUrl);
        }

        $this->render('create', array('model' => $model));
    }

    public function actionUpdate($id)
    {
        $model = Pasien::model()->findByPk($id);

        if (isset($_POST['Pasien'])) {
            $model->attributes = $_POST['Pasien'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array('model' => $model));
    }

    public function actionDelete($id)
    {
        if (Yii::app()->request->isPostRequest) {
            Pasien::model()->findByPk($id)->delete();
            if (!isset($_GET['ajax']))
                $this->redirect(array('index'));
        } else {
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
    }
}
