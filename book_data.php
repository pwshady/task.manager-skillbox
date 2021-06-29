<?php

$authors = ["author1" => ["name" => "FIO1", "email" => "E-MAIL1"], 
            "author2" => ["name" => "FIO2", "email" => "E-MAIL2"]];
$books = ["name_book1" => ["name_book" => "BOOK1", "email" => "AUTHOR_E-MAIL1"],
          "name_book2" => ["name_book" => "BOOK2", "email" => "AUTHOR_E-MAIL2"],
          "name_book3" => ["name_book" => "BOOK3", "email" => "AUTHOR_E-MAIL3"]];
$result2 = ["authors" => $authors, "books" => $books];
var_dump($result2);

?>