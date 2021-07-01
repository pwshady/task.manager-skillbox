<?php

include($_SERVER["DOCUMENT_ROOT"] . "/app/views/layouts/header.php");

?>
<h1><?=$mainMenu[array_search($_SERVER['REQUEST_URI'], spaceMenu\arrayByKey($mainMenu, "path"))]["title"]?><h1>

<?php

    switch ($numberPartition){
        case 3: //Page load file.
        {
            var_dump($_FILES);
            include($_SERVER["DOCUMENT_ROOT"] . "/app/views/file/load-file.php");
            if (isset($_POST["upload"])){
                if (
                    (($_FILES["picFile"]["type"] === "image/jpeg") || ($_FILES["picFile"]["type"] === "image/jpeg")|| ($_FILES["picFile"]["type"] === "image/jpeg")) &&
                    ($_FILES["picFile"]["size"] < 4000000)
                ){
                    print "ok";
                }

            }
        };
    };

?>
<?php

include($_SERVER["DOCUMENT_ROOT"] . "/app/views/layouts/footer.php");

?>