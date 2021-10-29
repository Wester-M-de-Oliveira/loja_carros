<?php
//sessão
session_start();

//conexão
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
  $id= mysqli_escape_string($connect, $_POST['id']);


  $sql ="DELETE FROM estoque WHERE id='$id'";

  if(mysqli_query($connect, $sql)):
    header("Location: ../Consultar.php?Sucesso");
  else:
    header("Location: ../Consultar.php?Erro");
  endif;
endif;
