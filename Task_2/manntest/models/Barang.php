<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $id_barang
 * @property string $nama_barang
 * @property string $jenis_barang
 */
class Barang extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_barang', 'nama_barang', 'jenis_barang'], 'required'],
            [['id_barang'], 'integer'],
            [['nama_barang'], 'string', 'max' => 16],
            [['jenis_barang'], 'string', 'max' => 32],
            [['id_barang'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_barang' => 'Id Barang',
            'nama_barang' => 'Nama Barang',
            'jenis_barang' => 'Jenis Barang',
        ];
    }

}
