<?php
namespace api\modules\v1\filters;

use common\models\User;
use yii\filters\auth\AuthInterface;
use yii\filters\auth\AuthMethod;
use yii\web\IdentityInterface;

class Auth extends AuthMethod implements AuthInterface
{
	/**
	 * @inheritdoc
	 */
	public function authenticate($user, $request, $response)
	{
		if ($request->headers->has('access-token')) {
			$token = $request->headers->get('access-token');
			/** @var User|IdentityInterface $userClass */
			$userClass = \Yii::$app->user->identityClass;
			$user = $userClass::findIdentityByAccessToken($token);
			if (!empty($user)) {
				\Yii::$app->user->login($user);

				return $user;
			}
		} elseif ($user && $user->identity instanceof User && !empty($user->id)) {
			return $user->identity;
		}

		return null;
	}
}