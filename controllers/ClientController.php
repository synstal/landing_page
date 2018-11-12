<?php

namespace app\controllers;
use \yii\web\Controller;
use \app\models\Client;
use Yii;
use yii\helpers\Html;
use yii\helpers\Url;

class ClientController extends Controller
{
    public function actionIndex()
    {
//        echo \Yii::getAlias('@webroot');
//        die;
        Yii::setAlias('@webroot', '/');
        $model = new Client;
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
        return $this->render('index', compact('model'));
    }

}
