<html>
<head>
    <link rel="stylesheet" type="text/css" href="estilo.css" >
</head>
<body>
    
    <?php
    
        for ($i = 1; $i <= 100; $i++) {
                
                if(($i % 3) == 0){
                    
                ?> <li class="list"> <?php echo "Quanto" ?> </li> <?php
                }
                
                if(($i % 5) == 0){
                    ?> <li class="list"> <?php echo "Sobra" ?> </li> <?php
                }
                if(($i % 3)!=0 and (($i % 5) != 0) ){
                    ?> <li class="list"> <?php echo $i  ?> </li> <?php
                }
        }
    ?>
    
    
   
</body>
</html>