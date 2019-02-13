<?php 
$str='Have you ever gone shopping and';
function str($string){
    $len=strlen($string);
    $arr=[];
    for ($i=0; $i < $len; $i++) { 
        if(isset($arr($string[$i]))){
            $arr($string[$i])++;
        }
        if($arr($string[$i])==3){
            return $arr($string[$i]);
        }
    }
} 
print_r(str($str));
?>