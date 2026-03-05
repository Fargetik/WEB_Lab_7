<?php

require 'db.php';
require 'Student.php';

$student = new Student($pdo);

$username = htmlspecialchars($_POST['username']);
$number_of_ticket = intval($_POST['number_of_ticket']);
$genre = htmlspecialchars($_POST['genre'] ?? '');
$subscribe = isset($_POST['subscribe']) ? 1 : 0;
$time = $_POST['time'] ?? '';

$student->add($username, $number_of_ticket, $genre, $subscribe, $time);

header("Location: index.php");
exit();

