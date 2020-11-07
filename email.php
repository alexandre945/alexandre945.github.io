<?php
 $para= "xandylambamg@hotmail.com";
 $assunto= "contato pelo site";
 $assunto=    $_REQUEST['assunto'];
 $nome=       $_REQUEST['nome'];
 $email=      $_REQUEST['email'];
 $mensagem=   $_REQUEST['mensagem'];
 
 $corpo= "<strong>mensagem de contato</strong><br><br>";
 $corpop .= "<stronge>assunto:</stronge> $assunto";
 $corpop .= "<br><stronge>Nome:</stronge> $nome";
 $corpop .= "<br><stronge>Email:</stronge> $email";
 $corpo  .= "<br><stronge>Mensagem</stronge> $mensagem";


$header = "content-type: text/html; charset= utf-8\n";
$header .= "From: $email reply-to: $email\n";

@mail($para,$assunto,$corpo,$header);

header("location:index.html?mensagem=enviado");
?>