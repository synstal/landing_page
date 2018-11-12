<?php

namespace app\models;

use Yii;
//use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "clients".
 *
 * @property int $id
 * @property string $fio
 * @property string $birthday
 * @property int $tel
 * @property string $datec
 * @property string $ip
 * @property string $headinfo
 */
class Client extends \yii\db\ActiveRecord
{
    
//    public function behaviors()
//    {
//        return [
//            [
//                'class' => TimestampBehavior::className(),
//            ],
//            [
//                'class' => TimestampBehavior::className(),
//                'createdAtAttribute' => 'datec',
////                'updatedAtAttribute' => 'lastVisit',
//                'value' => function () { 
//                    return date('Y-m-d H:i:s');
//                }
//            ]
//        ];
//    } 
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'birthday', 'tel','email','citycode'], 'required'],
            [['datec'], 'safe'],
            [['firstname', 'lastname', 'middlename'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'citycode' => 'Город',
            'firstname' => 'Имя',
            'lastname' => 'Фамилия',
            'middlename' => 'Отчество',
            'birthday' => 'Дата рождения',
            'tel' => 'Телефон',
            'email' => 'Email',
            'datec' => 'Datec',
            'ip' => 'Ip',
            'headinfo' => 'Headinfo',
        ];
    }
}
