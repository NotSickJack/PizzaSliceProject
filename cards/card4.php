<?php

$ingrendienti = "SELECT * FROM ingredienti";
$data_ingrendienti = $mysqli->query($ingrendienti) or die($mysqli->error);