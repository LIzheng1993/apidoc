<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hosts_bak".
 *
 * @property integer $id
 * @property string $ip
 * @property string $domain
 * @property string $alias
 * @property string $remark
 */
class HostsBak extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hosts_bak';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ip', 'domain', 'alias'], 'required'],
            [['ip', 'domain', 'alias', 'remark'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'ip' => Yii::t('app', 'Ip'),
            'domain' => Yii::t('app', 'Domain'),
            'alias' => Yii::t('app', 'Alias'),
            'remark' => Yii::t('app', 'Remark'),
        ];
    }
}