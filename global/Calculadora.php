<?php

    
    //variavel

    $botao = $_POST["botao"];
    $Campo1 = $_POST["campo1"];
    $Campo2 = $_POST["campo2"];
  

    
    if($botao =="+") //quando for + 
        echo"<br>Resultado da Soma: ".$Campo1 + $Campo2; //aparece o resultado do campo1 + campo2

    elseif($botao =="-")
        echo"<br>Resultado da Soma: " .$Campo1 - $Campo2; //aparece o resultado do campo1 - campo2
        echo "<br><br><a href=calculadoraform.html> Voltar</a>";  //botão voltar
        

?>