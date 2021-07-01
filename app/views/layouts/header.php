<?php

require_once ($_SERVER["DOCUMENT_ROOT"] . "/functions.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/main_menu.php");
$numberPartition = array_search($_SERVER['REQUEST_URI'], spaceMenu\arrayByKey($mainMenu, "path"));

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="styles.css" rel="stylesheet" />
<link href="/public/style/css/style.css" rel="stylesheet" />
<title><?=$mainMenu[array_search($_SERVER['REQUEST_URI'], spaceMenu\arrayByKey($mainMenu, "path"))]["title"]?></title>
</head>

<body>
<?=spaceMenu\printMenu(spaceMenu\arrayByKey($mainMenu, "title"), spaceMenu\arrayByKey($mainMenu, "path"), $numberPartition, "header", "class=\"current-item\"", 15)?>