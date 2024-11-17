<?php
    // Define constantes para os dados de conexão com o banco de dados
    define("HOST","localhost");// Define o nome do servidor do BD
    define("USER","root");// Define o nome do usuário do BD
    define("PASS","");// Define a senha do usuário do BD
    define("BASE","cadastroproj");// Define o nome do BD


    // Cria uma conexão com o banco de dados usando a classe `mysqli`
    $conn = new mysqli(HOST,USER,PASS,BASE);


    // if ($conn->connect_error)
    // {
    //     echo "Erro"; 
    // }
    // else {
    //     echo "Conectado";
    // }


    // {
    //     die("Falha na conexão: " . $conn->connect_error); // Mostra a mensagem de erro e interrompe o script
    // }


    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error); // Mostra a mensagem de erro e interrompe o script
    }






?>
