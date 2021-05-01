<?php 
session_start();

echo "Dados da sessão anterior:";
echo $_SESSION['id'];
echo $_SESSION['name'];

?>