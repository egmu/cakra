<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "testimoni".
 *
 * @property int $id
 * @property string $isi
 */
class Testimoni extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testimoni';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isi'], 'required'],
            [['isi'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isi' => 'Isi',
        ];
    }
}
