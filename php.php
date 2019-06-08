<?php
        $result= null;
    //Aqui php recebe as informacoes;
        $quant = $_GET['quant'];
        $var = $_GET['lag'];
        $var2 = $_GET['cheg'];
    // -------------------
       
        echo "Quantidade de competidores $quant <br> ";
        echo  "Posiçoes iniciais "; 
    // Splita o primeiro
        $names = str_split($var);
        foreach ($names as $x=>$y){
            echo " $y";
        }
    //--------------    
        echo "<br>";
        echo "Posiçoes de chegada ";
    // Splita o segundo   
        $names2 = str_split($var2);
        foreach ($names2 as $z=>$v){
            echo " $v";
        }
    //--------------------    
        echo"<br>";
    
    // Roda um for duplo para passar por todas as informaçoes;    
        foreach ($names as $x=>$y){
            foreach($names2 as $z=>$v){
    //-------------------------------------------------------
    //  verifica a posiçao das variaveis            
                $key = array_search($y, $names);
                $key2 = array_search($y, $names2);
    // verifica se as variaveis sao iguais               
                    if($v == $y){
                        if($key2>$key){
                        $result+= ($key2 - $key);
                       
                        }        
                        
                    }   
            }
        }
        echo "<br>Resultado esperado: $result ultrapassagens  "; 
        
?>