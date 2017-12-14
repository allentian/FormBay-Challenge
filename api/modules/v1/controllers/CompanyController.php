<?php

namespace api\modules\v1\controllers;

use api\modules\v1\filters\Auth;
use api\modules\v1\models\Company;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;

/**
 * Country Controller API
 */
class CompanyController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Company';

	/**
	 * @inheritdoc
	 */
	public function behaviors()
	{
		$behaviors = parent::behaviors();
		$behaviors['authenticator'] = [
			'class' => Auth::className(),
		];
		return $behaviors;
	}

	/**
	 * Full-text search by name.
	 * @param $name
	 * @return ActiveDataProvider
	 */
	public function actionSearch($name)
	{
		return new ActiveDataProvider([
			'query' => Company::find()->andWhere(['name' => $name, 'isArchived' => 0])
		]);
	}
}


