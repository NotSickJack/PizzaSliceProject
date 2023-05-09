<?php
//http://stackoverflow.com/questions/26476162/can-i-blindly-replace-all-mysql-functions-with-mysqli
//preparo le variabili di connessione
$host = "localhost"; /* indirizzo/nome dominio del server*/
$user = "root"; /* Super user di Mamp*/
$psw = ""; /* password super user root di Mamp*/
$db = "pizza_slice"; /*nome esatto del database*/
// connessione a MySQL con l'estensione MySQLi
$mysqli = new mysqli($host, $user, $psw, $db); 
// verifica dell'avvenuta connessione
if (mysqli_connect_errno()) {
           // notifica in caso di errore
        echo "Errore in connessione al DB: ".mysqli_connect_error();
           // interruzione delle esecuzioni i caso di errore
        exit();
}
else {
           // notifica in caso di connessione attiva
        $avviso_conn = "Connessione avvenuta con successo";
}
// chiusura della connessione
//$mysqli->close();
?>