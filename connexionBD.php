<?php
try 
{
    $pdo = new PDO("mysql:host=localhost;port=3308;dbname=info","root", "");
}catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>