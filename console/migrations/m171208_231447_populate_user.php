<?php

use common\models\User;
use yii\db\Migration;

/**
 * Class m171208_231447_populate_user
 */
class m171208_231447_populate_user extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
	    $security = Yii::$app->getSecurity();
	    $user = new User([
	    	'username' => 'FormBay',
		    'auth_key' => $security->generateRandomString(),
		    'password_hash' => $security->generatePasswordHash('password'),
		    'password_reset_token' => $security->generateRandomString() . '_' . time(),
		    'email' => 'help@formbay.com.au',
		    'accessToken' => 'RjYfaFxsJQ2bC7orZUF6K3M9vCEzJ_dx',
		    'created_at' => time(),
		    'updated_at' => time()
	    ]);
		$user->save();
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
	    $this->execute('DELETE FROM user');
	    return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171208_231447_populate_user cannot be reverted.\n";

        return false;
    }
    */
}
