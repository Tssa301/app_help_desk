<?php

session_start();

//Variavel que verifica se a autenticação foi realizada.
$ususario_autenticado = false;

//usuarios do sistema
$susuarios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '123456'),
    array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
);

foreach($susuarios_app as $user) {
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
    $ususario_autenticado = true;
    } 
}

if($ususario_autenticado) {
    echo 'Usuário autenticado';
    $_SESSION['autenticado'] = 'SIM';
} else {
    $_SESSION['autenticado'] = 'NÃO';
    header('Location: index.php?login=erro');
}


/*
echo $_POST['email'];
echo '<br>';
echo $_POST['senha'];

*/

?>