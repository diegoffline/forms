
<?php

$to = 'email@dominio.com';
/**
 * ou enviar para mais de um email usando um Array
 * $to      = ['email@dominio.com', 'outroemail@dominio.com']; 
 * 
 */
 $subject = 'Contato';
 $nome = $_POST['nome'];
 $telefone = $_POST['telefone'];
 $email = $_POST['email'];
 $email = $_POST['msg'];
 $message = "Email:".$email."\n  Nome:".$nome."\n Telefone".$telefone."\n mensagem:".$_POST['msg'];

/**
 * Obrigatorio que o email seja do seu dominio
 *   
 */
$headers = 'From: seuemail@seudominio' . "\r\n" .
    'Reply-To: seuemail@seudominio' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    /**
     * função mail recebe o destinatario, a mensagem e o headers do email
     * 
     */
mail($to, $subject, $message, $headers);

/**
 * forma simples sem condicional IF
 * 
 */
echo "<script>alert('Email enviado com sucesso');</script>";



 header("Refresh:0; url=/contato"); 

?>