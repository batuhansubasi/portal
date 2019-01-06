<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ziyaret".
 *
 * @property int $ID
 * @property string $IP
 * @property string $Giris_Zamani
 */
class Ziyaret extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ziyaret';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IP', 'Giris_Zamani'], 'required'],
            [['IP'], 'string'],
            [['Giris_Zamani'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'IP' => 'Ip',
            'Giris_Zamani' => 'Giris  Zamani',
        ];
    }
}
