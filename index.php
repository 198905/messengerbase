<?php
session_start();
$erreur='';
if(isset($_POST['pseudo']) && ($_POST['pseudo']!=='') ) {
    $_SESSION['name']= htmlspecialchars(addslashes($_POST['pseudo']));
    $id=$_POST['pseudo'];
}else if(isset($_POST['pseudo'])&&($_POST['pseudo']=='')){
    $erreur='LE PSEUDO!';
    unset($_SESSION['pseudo']);
}
if (isset($_POST['sessionD'])) {
    $_SESSION['name']='';
    session_destroy();
}
require('main.php');
require('model.php');