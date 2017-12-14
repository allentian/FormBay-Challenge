<?php
namespace api\modules\v1\models;
use \yii\db\ActiveRecord;
/**
 * Company Model
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $founded
 * @property integer $createdAt
 * @property integer $updatedAt
 * @property integer $isArchived
 * */

class Company extends ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'company';
	}

    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['id'];
    }

    /**
     * Define rules for validation
     */
    public function rules()
    {
        return [
            [['name', 'description', 'founded'], 'required']
        ];
    }

	/**
	 * @inheritdoc
	 */
    public function fields()
    {
	    return [
	        'id',
		    'name',
		    'description',
		    'founded'
	    ];
    }
}
