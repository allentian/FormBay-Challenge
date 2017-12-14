<?php

use yii\db\Migration;

/**
 * Class m171208_230316_populate_company
 */
class m171208_230316_populate_company extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
	    $this->execute("
            INSERT INTO `company` (name, description, founded, createdAt, updatedAt) 
            	VALUES 
            	('FormBay','FormBay is a small SaaS startup entering the market for electronic document workflows.', 2010, UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
            	('Google','Google LLC is an American multinational technology company that specializes in Internet-related services and products. ',1998,UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
            	('Facebook','Facebook is an American for-profit corporation and an online social media and social networking service based in Menlo Park, California.',2004, UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
            	('Amazon','Amazon.com, Inc., doing business as Amazon, is an American electronic commerce and cloud computing company based in Seattle, Washington ',1994, UNIX_TIMESTAMP(), UNIX_TIMESTAMP());
        ");
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
	    $this->execute('DELETE FROM company');
	    return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171208_230316_populate_company cannot be reverted.\n";

        return false;
    }
    */
}
