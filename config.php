<?php
    //Configurando as variaiveis de conecção
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'cadastro'); 

      $conn = new MySQLi(HOST,USER,PASS,BASE);