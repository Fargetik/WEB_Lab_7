<?php
require 'db.php';
require 'Student.php';

$student = new Student($pdo);
$all = $student->getAll();
?>
<h2>Сохранённые данные:</h2>
<ul>
<?php foreach($all as $row): ?>
    <li><?= $row['username'] ?>, Номер билета: <?= $row['number_of_ticket'] ?>, Жанр: <?= $row['genre'] ?>, <?= $row['time'] ?>, Электронная Версия: <?= $row['subscribe'] ? 'Да' : 'Нет' ?></li>
<?php endforeach; ?>
</ul>

<a href="form.html">Заполнить форму</a>
