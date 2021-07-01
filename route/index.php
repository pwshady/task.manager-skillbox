<?php

include($_SERVER["DOCUMENT_ROOT"] . "/app/views/layouts/header.php");

?>
<h1><?=$mainMenu[array_search($_SERVER['REQUEST_URI'], spaceMenu\arrayByKey($mainMenu, "path"))]["title"]?><h1>
<?php

include($_SERVER["DOCUMENT_ROOT"] . "/app/views/layouts/footer.php");

?>