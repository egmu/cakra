<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "fasilitas".
 *
 * @property int $kode_fasilitas
 * @property string $nama_fasilitas
 */
class Fasilitas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fasilitas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_fasilitas', 'nama_fasilitas'], 'required'],
            [['kode_fasilitas'], 'integer'],
            [['nama_fasilitas'], 'string', 'max' => 50],
            [['kode_fasilitas'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_fasilitas' => 'Kode Fasilitas',
            'nama_fasilitas' => 'Nama Fasilitas',
        ];
    }
}
