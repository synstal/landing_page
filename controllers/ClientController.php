<?php

namespace app\controllers;
use \yii\web\Controller;
use \app\models\Client;
use \app\models\City;
use Yii;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

class ClientController extends Controller
{
    public function actionIndex()
    {
//        echo \Yii::getAlias('@webroot');
//        die;
        Yii::setAlias('@webroot', '/');
        $model = new Client;
        $model_city = new City;
        if(!empty(Yii::$app->request->post())){
            $postdata=Yii::$app->request->post();
            $vowels = array("(", ")", "_", " ", "+");
            $tel = str_replace($vowels, "", $postdata['Client']['tel']);
//            print_r($postdata['Client']['tel']);
//            print_r($tel);
//            die;
            if($model->load($postdata)){
                if($model->validate()){
                    $model->tel = $tel;
                    $model->datec = date('Y-m-d  H:i:s');
                    $model->birthday = date('Y-m-d',strtotime($model->birthday));
                    $model->ip = Yii::$app->request->userIP;
                    $headers = Yii::$app->request->headers;
                    $model->headinfo = $headers['user-agent'];      
                    $model->save();
                    $imgthanks = Html::img('img/thanks.jpg',['alt' => 'thanks','style'=>'margin:auto']);
                    return $this->render('thanks', compact('model','imgthanks'));

                }else{
                    
                }
            }
        }
        // получаем всех авторов
    $cites = City::find()->all();
// формируем массив, с ключем равным полю 'id' и значением равным полю 'name' 
    $items_city = ArrayHelper::map($cites,'code','name');
        return $this->render('index', compact('model','items_city'));
    }

}
