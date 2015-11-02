<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$vyemekadi=$_POST['yemekadi'];
echo $vyemekadi;

include_once 'baglan.php';


// Sorgumuzu hazırlıyoruz
$query = $db->prepare('INSERT INTO tbyemekler (yemekad) VALUES(?)');
 
// Sorguda belirttiğimiz yerlere gelecek değerleri veriyoruz
$query->execute(array($vyemekadi));

foreach($db->query('SELECT * FROM tbyemekler') as $row) {
    echo $row['yemekad'] . '<br/>';
}



$db=null;


?>
