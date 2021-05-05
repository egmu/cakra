<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "detail_sewa".
 *
 * @property int $no_nota
 * @property int|null $no_mobil
 * @property int|null $id_driver
 * @property string $tgl_kembali
 * @property int|null $pembayaran
 * @property int|null $denda
 *
 * @property Mobil $noMobil
 * @property Sewa $noNota
 * @property Driver $driver
 * @property Sewa $sewa
 */
class DetailSewa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_sewa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_mobil', 'id_driver', 'pembayaran', 'denda'], 'integer'],
            [['tgl_kembali'], 'required'],
            [['tgl_kembali'], 'safe'],
            [['no_mobil'], 'exist', 'skipOnError' => true, 'targetClass' => Mobil::className(), 'targetAttribute' => ['no_mobil' => 'no_mobil']],
            [['no_nota'], 'exist', 'skipOnError' => true, 'targetClass' => Sewa::className(), 'targetAttribute' => ['no_nota' => 'no_nota']],
            [['id_driver'], 'exist', 'skipOnError' => true, 'targetClass' => Driver::className(), 'targetAttribute' => ['id_driver' => 'id_driver']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_nota' => 'No Nota',
            'no_mobil' => 'No Mobil',
            'id_driver' => 'Id Driver',
            'tgl_kembali' => 'Tgl Kembali',
            'pembayaran' => 'Pembayaran',
            'denda' => 'Denda',
        ];
    }

    /**
     * Gets query for [[NoMobil]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoMobil()
    {
        return $this->hasOne(Mobil::className(), ['no_mobil' => 'no_mobil']);
    }

    /**
     * Gets query for [[NoNota]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoNota()
    {
        return $this->hasOne(Sewa::className(), ['no_nota' => 'no_nota']);
    }

    /**
     * Gets query for [[Driver]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDriver()
    {
        return $this->hasOne(Driver::className(), ['id_driver' => 'id_driver']);
    }

    /**
     * Gets query for [[Sewa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSewa()
    {
        return $this->hasOne(Sewa::className(), ['no_nota' => 'no_nota']);
    }
}
