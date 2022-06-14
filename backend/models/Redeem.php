<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $created_at
 * @property string $updated_at
 */
class Redeem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'redeem_master';
    }
}
