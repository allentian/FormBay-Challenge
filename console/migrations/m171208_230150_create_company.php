<?php

use yii\db\Migration;
use yii\db\mysql\Schema;

/**
 * Class m171208_230150_create_company
 */
class m171208_230150_create_company extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
	    $tableOptions = null;
	    if ($this->db->driverName === 'mysql') {
		    $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
	    };

	    $this->createTable("company", [
		    "id" => $this->primaryKey(),
		    'name' => Schema::TYPE_STRING . ' NOT NULL',
		    'description' => Schema::TYPE_STRING . ' NOT NULL',
		    'founded' => Schema::TYPE_INTEGER . ' NOT NULL',
		    "createdAt" => $this->integer(11),
		    "updatedAt" => $this->integer(11),
		    "isArchived" => $this->smallInteger(1)->defaultValue(0),
	    ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
	    $this->dropTable('company');
	    return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171208_230150_create_company cannot be reverted.\n";

        return false;
    }
    */
}
