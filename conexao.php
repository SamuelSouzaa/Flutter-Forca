<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: *");


$servername = "localhost";
$username = "id21547173_flutter_forca";
$password = "@Flutter_forca2023";
$dbname = "id21547173_flutter_forca";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$result = $conn->query("SELECT palavra FROM palavras ORDER BY RAND() LIMIT 1");

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $palavra = $row["palavra"];
    echo json_encode(["palavra" => $palavra]);
} else {
    echo "Nenhuma palavra encontrada";
}

$conn->close();

?>
