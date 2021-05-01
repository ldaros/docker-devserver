<head>
    <title>Procesando</title>
    <meta http-equiv="refresh" content="5; url = /formulario.php">
</head>

<?php
define( 'MYSQL_HOST', 'mysql' );
define( 'MYSQL_USER', 'luan' );
define( 'MYSQL_PASSWORD', 'senha123' );
define( 'MYSQL_DB_NAME', 'tutorial' );

try
{
    $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
}
catch ( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}

$nome = $_GET['nome'];
$senha = $_GET['senha'];
$email = $_GET['email'];

$sql = "INSERT INTO contas (nome,senha,email)
        VALUES ('$nome','$senha','$email')";

$result = $PDO->query( $sql );


?>