<?php
// ETAPE 1
//echo 'Bonjour ' . $_GET["first_name"] . '!';
?>

<?php
/*if (empty($_GET["first_name"]))
{
    echo "Bonjour anonyme !";
}else{
    echo 'Bonjour ' . $_GET["first_name"] . '!';
};*/
?>

<?php session_start();?>


<form action="exercice.php" method="post">
    <p>Votre nom : <input type="text" name="first_name" /></p>
    <p><input type="submit" value="OK"></p>
    <p><input type="submit" name="reset" value="Reset"></p>
</form>


<?php
//ETAPE 2
/*
if (isset($_GET["first_name"]) && trim($_GET["first_name"]) !== ''){
    echo 'Bonjour ' . htmlspecialchars($_GET["first_name"]) . '!';
}elseif(isset($_POST["first_name"]) && trim($_POST["first_name"])){
    echo 'Bonjour ' . htmlspecialchars($_POST["first_name"]) . '!';
}else{
    echo "Bonjour anonyme !";
}*/
?>

<?php

if (isset($_POST['reset'])) {
    session_unset();
    session_destroy();
    header("Location: exercice.php");
    exit;
}

if (isset($_GET["first_name"]) && trim($_GET["first_name"]) !== ''){
    echo 'Bonjour ' . htmlspecialchars($_GET["first_name"]) . '!';

}elseif(isset($_SESSION["first_name"]) && trim($_SESSION["first_name"])){
    echo 'Bonjour ' . htmlspecialchars($_SESSION["first_name"]) . '!';

}elseif(isset($_POST["first_name"]) && trim($_POST["first_name"])){
    echo 'Bonjour ' . htmlspecialchars($_POST["first_name"]) . '!';
    $_SESSION["first_name"] = $_POST["first_name"];

}else{
    echo "Bonjour anonyme !";
}

?>