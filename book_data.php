<?php

$author = ["EMAIL1" => ["name" => "NAME1", "email" => "EMAIL1", "date" => "01.01.1970"], 
           "EMAIL2" => ["name" => "NAME2", "email" => "EMAIL2", "date" => "01.01.1980"]];
$book = [["name_book" => "BOOK1", "email_book" => $author["EMAIL1"]["email"]],
        ["name_book" => "BOOK2", "email_book" => $author["EMAIL1"]["email"]],
        ["name_book" => "BOOK3", "email_book" => $author["EMAIL2"]["email"]]];

$result3 = ["authors" => $author, "books" => $book, ];
var_dump($result3);

for ($i = 0; $i < count($book); $i++)
{
    $author_id = $book[$i]["email_book"];
    print "<p>Book: " . $book[$i]["name_book"] . ". Author: " . $author[$author_id]["name"] . ", born: " . $author[$author_id]["date"] . ", e-mail: " . $author[$author_id]["email"] . ".</p>";
};
shuffle($book);
for ($i = 0; $i < count($book); $i++)
{
    $author_id = $book[$i]["email_book"];
    print "<p>Book: " . $book[$i]["name_book"] . ". Author: " . $author[$author_id]["name"] . ", born: " . $author[$author_id]["date"] . ", e-mail: " . $author[$author_id]["email"] . ".</p>";
};

?>