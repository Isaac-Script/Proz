<?php

$login ="batata";
$senha ="4423";

if($_POST["login"] == $login and
$_POST["senha"] == $senha){
    echo "Login efetuado com sucesso!";
}
else
    {
        echo"Login ou senha invalidos";
    }