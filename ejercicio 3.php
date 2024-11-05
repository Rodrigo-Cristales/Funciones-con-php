<?php

    function esParalindramo($caracteres){

        $caracteres = strtolower($caracteres);
        $caracteres = str_replace(' ', '', $caracteres);

        $cadenaInvertida = ''; 
        
        for($i = strlen($caracteres) -1; $i >=0; $i--){
                $cadenaInvertida .= $caracteres[$i];
        }
            if($caracteres === $cadenaInvertida){
                return true;

            }else{
                return false;
            }
    }
        $parrafo1 = "Salas";
        $parrafo2 = "La bicicleta";

        if(esParalindramo($parrafo1)){
            echo "\"$parrafo1\" es un palidramo.\n";
        }else{
            echo "\"$parrafo1\" no es un palidramo.\n";
        }

        
        if(esParalindramo($parrafo2)){
            echo "\"$parrafo2\" es un palidramo.\n";
        }else{
            echo "\"$parrafo2\" no es un palidramo.\n";
        }


?>