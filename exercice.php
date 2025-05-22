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


<form action="exercice.php" method="post">
    <p>Votre nom : <input type="text" name="first_name" /></p>
    <p><input type="submit" value="OK"></p>
</form>


<?php
//ETAPE 2

if (isset($_GET["first_name"]) && trim($_GET["first_name"]) !== ''){
    echo 'Bonjour ' . htmlspecialchars($_GET["first_name"]) . '!';
}elseif(isset($_POST["first_name"]) && trim($_POST["first_name"])){
    echo 'Bonjour ' . htmlspecialchars($_POST["first_name"]) . '!';
}else{
    echo "Bonjour anonyme !";
}
?>