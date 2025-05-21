<?php

if (empty($_GET["first_name"]))
{
    echo "Bonjour anonyme !";
}else{
    echo 'Bonjour ' . $_GET["first_name"] . '!';
};
?>

<form action="exercice.php" method="post">
    <p>Votre nom : <input type="text" name="first_name" /></p>
    <p><input type="submit" value="OK"></p>
</form>
