<?php

       function Serie_Fibonnaci ($n) {
              if($n <= 0 ){
                     return "El valor de n debe ser mayor a 0.";
              }
              $fibonacci = array();
              

              if($n >= 1){
                     $fibonacci [] = 0;
              }
              if($n >= 2){
                     $fibonacci[] = 1;
              }
              for($i = 2; $i < $n; $i++){
                     $fibonacci[] = $fibonacci[$i-1] + $fibonacci[$i-2];
              }
              return $fibonacci;
       }

       $n = 10;

       $fibonacci = Serie_Fibonnaci($n);

       echo "Los primeros $n terminos de la serie de fibonacci son :" .implode(",", $fibonacci);

?>