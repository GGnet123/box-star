<?php

namespace backend\controllers;

use Yii;
use backend\models\SettingsPartners;
use backend\models\SettingsPartnersSearch;
use yii\helpers\FileHelper;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * SettingsPartnersController implements the CRUD actions for SettingsPartners model.
 */
class SettingsPartnersController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all SettingsPartners models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SettingsPartnersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SettingsPartners model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new SettingsPartners model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SettingsPartners();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SettingsPartners model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SettingsPartners model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SettingsPartners model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SettingsPartners the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SettingsPartners::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionSaveLogo() {
        $request = Yii::$app->request;
        if ($request->isPost) {
            $imageFile = UploadedFile::getInstancesByName('SettingsPartners');
            $directory = Yii::getAlias('@frontend') . '/web/assets/images/logos/';
            if (!is_dir($directory)) {
                FileHelper::createDirectory($directory);
            }

            if ($imageFile) {
                $files = [];

                $uid = uniqid(time(), true);
                $rand_str = Yii::$app->security->generateRandomString(8);
                $fileName = $uid . $rand_str . '.' . $imageFile[0]->extension;
                $filePath = $directory . $fileName;
                if ($imageFile[0]->saveAs($filePath)) {
                    $path = '/' . $fileName;

                    $files['files'][] =  [
                        'name' => $fileName,
                        'size' => $imageFile[0]->size,
                        'url' => $path,
                        'thumbnailUrl' => $path,
                        'deleteUrl' => 'delete-logo?name=' . $fileName,
                        'deleteType' => 'POST',
                    ];
                }

                Yii::$app->session->set(Yii::$app->session->id, $path ? $path : '');

                return Json::encode($files);
            }
        }
        return '';
    }

    public function actionDeleteLogo() {
        return '';
    }
}
