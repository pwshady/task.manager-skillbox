<?php

include ("book_data.php");

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Заголовок</title>
    <style type="text/css">.red {color: red;}</style>
</head>
<body>
<h1 <?=$red ?: 'class="red"' ?>>Заголовок</h1>
<!-- Выведите все книги -->
<? for($i = 0; $i < count($book); $i++): ?>
    <p>Книга <?=$book[$i]["name_book"]?>, ее написал <?=$author[$book[$i]["email_book"]]["name"]?> (<?=$author[$book[$i]["email_book"]]["email"]?>)</p>
<? endfor ?>
</body>
</html>
