<?php

require_once ($_SERVER["DOCUMENT_ROOT"] . "/functions.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/main_menu.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="styles.css" rel="stylesheet" />
<link href="/public/style/css/style.css" rel="stylesheet" />
<title>Project - ведение списков</title>
</head>

<body>
    <?php var_dump(spaceMenu\arrayByKey($mainMenu, "path"));?>
<?=spaceMenu\printMenu(spaceMenu\arrayByKey($mainMenu, "title"), spaceMenu\arrayByKey($mainMenu, "path"), 1, "header", "class=\"current-item\"")?>