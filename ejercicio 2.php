<?php


    function esPrimo($n){
        if($n <= 1) return false;
        for($i = 2; $i < $n; $i ++){
            if($n % $i == 0) return false;
        }
        return true;
    }
     $n = 2;
    if(esPrimo($n)){
        echo "$n El numero es un numero primo";
    }else{
        echo "$n No es numero primo";
    }








?>