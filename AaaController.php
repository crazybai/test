<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\goods;
class AaaController extends Controller{
    public function actionIndex(){
        $str=0;
        $sum=0;
        for($i=0;$i<$str;$i++){
           $str=$str+$i;
        }else{
            $sum=$sum+$str;
        }
        echo $sum;

        $N=0;
        $s=0;
        for($i=0;$i<$N;$i++){
            $N=$N+1;
            $s=$s-1;
        }else{
            $N*($N-$s);
            
        }
        echo $N;
    }

    class Person{
        $age=18;
        $name='张三';
        
    }
    class walk{
       implements
    }
    public function newclass(){
        $stt= new Stud;
        $see= new Stee;
        $scc= new stg;
        $scw= new swf;
        $sgg= new ggs;
        $stt= new gga;
        $sha= new gggs;
        $new= new ggaa;
    }

} 