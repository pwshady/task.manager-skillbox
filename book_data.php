<?php

$author = ["name" => "FIO", "email" => "E-MAIL"];
$book = ["name_book" => "firstBook", "email" => $author["email"]];
$result1 = [$author, $book];
var_dump($result1);

?>