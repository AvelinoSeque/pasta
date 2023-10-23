<?php /* Template name: proces_mensagem */ ?>
<?php
try {
    $user = "if0_34644766";
    $passe = "8PlqdEBMvh";
    $bdado = "if0_34644766_mensagens";
    $host = "sql112.infinityfree.com";
    $conexao = new PDO("mysql:dbname=$bdado;host=$host",$user,$passe);

}catch (PDOException $erro){
    echo $erro->getMessage();

}

$email = $_REQUEST['email_u'];
$mensagem = $_REQUEST['mensagem_u'];
$sql="INSERT INTO mensagens (email_u,mensagem) VALUES('$email','$mensagem')";
$inserir=$conexao->prepare($sql);
$inserir->execute();
?>