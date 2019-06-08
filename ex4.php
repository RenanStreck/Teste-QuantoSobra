<html>
<head>
</head>
<body>
  
    Dados <br /> <input type="text" id = "dadoscliente"><br>
    
    <button  type="button" id="button" onclick="separa()">Click</button>


</body>
<script type="text/Javascript">
    //funcao de split
    function separa(){
        var names = document.getElementById("dadoscliente").value;

        var re = /[,]|[.]|^[-]/;
        var nameList = names.split(re);

        console.log(nameList);
        
    }
    

</script>
</html>