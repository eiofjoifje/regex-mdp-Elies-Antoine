<?php
$password = $_POST['password'];

if (strlen($password) < 8) {
    echo "Faible";
}
elseif (preg_match("/^(?=.*[0-9]).{8,}$/", $password)) {
    echo "Moyen";
}
if (preg_match("/^(?=.*[A-Z])(?=.*[0-9])(?=.*[^a-zA-Z0-9]).{10,}$/", $password)) {
    echo "Fort";
}
?>
