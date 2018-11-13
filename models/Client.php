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
    public $iagree_term;
    public $iagree_email;
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
            [['firstname', 'lastname', 'birthday', 'tel','email','citycode', 'iagree_term'], 'required'],
            [['datec'], 'safe'],
            [['firstname', 'lastname', 'middlename'], 'string', 'max' => 255],
            ['email', 'email'],
            ['iagree_term', 'compare', 'compareValue' => 1, 'message' => 'Выствите чебокс, иначе форма не отправится!'], 

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'iagree_term' => '',
            'iagree_email' => '',
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
