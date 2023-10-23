<?php
  include "conexao.php";
  $id_m=$_GET['id_m'];
   $sql= "DELETE FROM mensagens WHERE id_mensagem = $id_m";
   $delete_m = $conexao->prepare($sql);
   $delete_m -> execute();
   
   header("location:https://sapiencia.free.nf/mensagens");


?>