<?php
session_start();

// Muodosta tietokantayhteys
include_once 'config/db.php';

// Tarkista tullaanko oikealta lomakkeelta
if (!isset($_POST['firstname']) || !isset($_POST['lastname'])) {
    header('Location: register.php');
    die('Et tullut oikealta lomakkeelta');
}

// Tarkistetaan käyttäjän antaman syötteet

/* 
TODO:
1. Tarkista onko email käytössä
2. Tarkista syötteistä SQL-injektio
*/

if ($_POST['passwd'] != $_POST['passwd2']) {
    echo "Salasanat eivät täsmää";
    die();
}


// Luodaan sql-kysely, joka tallentaa tiedot
// prepare sql and bind parameters
// $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, passwd, password_hint)
//                         VALUES (:firstname, :lastname, :email, :passwd, :password_hint)");
// $stmt->bindParam(':firstname', $firstname);
// $stmt->bindParam(':lastname', $lastname);
// $stmt->bindParam(':email', $email);
// $stmt->bindParam(':passwd', $passwd);
// $stmt->bindParam(':password_hint', $password_hint);

// prepare and bind
$stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, passwd, password_hint)
                         VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $firstname, $lastname, $email, $passwd, $password_hint);



// insert a row
$firstname = trim($_POST['firstname']);
$lastname = trim($_POST['lastname']);;
$email = trim($_POST['email']);
$password_hint = trim($_POST['password_hint']);


$passwd = trim($_POST['passwd']);
$passwd = password_hash($passwd, PASSWORD_DEFAULT);

if ($stmt->execute()) {
    echo "Käyttäjä lisätty";
} else {
    echo "Joku ongelma";
}