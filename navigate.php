<?php
session_start();

$path = $_GET['path'];


$_SESSION['path'] = $path;

echo json_encode(['path' => $_SESSION['path']]);
