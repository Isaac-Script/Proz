 <link rel="stylesheet" type="text/css" href="style.css">
<?php

$login ="batata";
$senha ="4423";

if($_POST["login"] == $login and $_POST["senha"] == $senha){
    echo "<h4> Login efetuado com sucesso! </h4>";
    echo "<a href='office.html'> Promoções </a>";
   // header (header: "Refresh: 2; URL=office.html");
}
else
     {
        echo"Login ou senha invalidos";
        echo "<a href='index.html'> Home </a>";
        //header (header: "Refresh: 2; URL=index.html");
    }

?>