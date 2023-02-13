<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'fiscal-vivo';

    $conection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($conection->connect_erro)
    {
        echo "Houve um problema ao conectar...";
    }
    else {
        echo "Conectado com sucesso!";
    }
?>