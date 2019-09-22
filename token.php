<?php
function token($qtd){ 
//Under the string $Caracteres you write all the characters you want to be used to randomly generate the code. 
$Caracteres = 'abcdrfgjijklmopqrstuvxwyzABCDEFGHIJKLMOPQRSTUVXWYZ0123456789'; 
$QuantidadeCaracteres = strlen($Caracteres); 
$QuantidadeCaracteres--; 

$Hash=NULL; 
    for($x=1;$x<=$qtd;$x++){ 
        $Posicao = rand(0,$QuantidadeCaracteres); 
        $Hash .= substr($Caracteres,$Posicao,1); 
    } 

return $Hash; 
} 

//Here you specify how many characters the returning string must have 
function id($qtdy){ 
//Under the string $Caracteres you write all the characters you want to be used to randomly generate the code. 
$Caracteres = '1234567890'; 
$QuantidadeCaracteres = strlen($Caracteres); 
$QuantidadeCaracteres--; 

$Hash=NULL; 
    for($x=1;$x<=$qtdy;$x++){ 
        $Posicao = rand(0,$QuantidadeCaracteres); 
        $Hash .= substr($Caracteres,$Posicao,1); 
    } 

return $Hash; 
} 

//Here you specify how many characters the returning string must have 
echo token(5000000000000);
?>  
