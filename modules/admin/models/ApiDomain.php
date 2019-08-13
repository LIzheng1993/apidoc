<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "dc_api_domain".
 *
 * @property integer $id
 * @property string $system_id
 * @property string $env
 * @property string $domain
 */
class ApiDomain extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dc_api_domain';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['system_id'], 'required'],
            [['system_id'], 'string', 'max' => 32],
            [['env', 'domain'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'system_id' => Yii::t('app', 'System ID'),
            'env' => Yii::t('app', 'Env'),
            'domain' => Yii::t('app', 'Domain'),
        ];
    }
}
