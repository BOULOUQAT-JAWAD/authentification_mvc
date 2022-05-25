<?php

$chemin = substr($_SERVER['SCRIPT_FILENAME'], 0, -9);
define("ROOT", $chemin);

include_once ROOT . 'Model/Model.php';
include_once ROOT . 'Controller/Controller.php';
//include_once ROOT.'Views/public/header.php';
//include_once ROOT.'Views/public/footer.php';
$url = $_GET['url'];
$id = 0;
$info_url = explode("/", $url);
if($info_url[0]!="") {
    if (file_exists(ROOT . 'Controller/' . $info_url[0] . '.php')) {
        include_once ROOT . 'Controller/' . $info_url[0] . '.php';
        $contr = new $info_url[0]();
        $action="";
        if (isset($info_url[1]))
            $action = $info_url[1];
        if (method_exists($contr, $action)) {
            if (isset($_POST['submit'])) {
                $contr->$action($_POST['username'], $_POST['password']);
            }
            elseif ($action=='logout')
                $contr->$action();
            else
                echo "not set";
        }else
                echo "Erreur!!, methode n'existe pas";
    }
//    elseif (file_exists(ROOT . 'View/' . $info_url[0]. '/')){
//        include_once ROOT . 'View/' . $info_url[0] . '/';
//
//    }
    else{
        ?>
<center>
    <h1>Formulaire</h1>
    <form action="ProfsC/login" method="post">
        <table>
            <tr>
                <td>Login</td>
                <td> <input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
                <td><input type="reset" value="Annuler"></td>
            </tr>
        </table>
    </form>
<?php
        if ($info_url[0]=="ERROR=wrongLogin") {
            $ERROR = explode("=", $info_url[0]);
            if ($ERROR[1] == 'wrongLogin')
                echo 'password/login est invalid';
        }
    }

?>
    </center>
<?php
}
else
{
    ?>
    <center>
        <h1>Formulaire</h1>
        <form action="ProfsC/login" method="post">
            <table>
                <tr>
                    <td>Login</td>
                    <td> <input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit"></td>
                    <td><input type="reset" value="Annuler"></td>
                </tr>
            </table>
        </form>
    </center>
<?php


}
