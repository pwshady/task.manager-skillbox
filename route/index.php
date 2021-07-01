<?php

include($_SERVER["DOCUMENT_ROOT"] . "/app/views/layouts/header.php");

?>
<h1><?=$mainMenu[array_search($_SERVER['REQUEST_URI'], spaceMenu\arrayByKey($mainMenu, "path"))]["title"]?><h1>

<?php

    switch ($numberPartition){
        case 3: //Page load file.
        {
            var_dump($_FILES);
            $errorList = null;
            include($_SERVER["DOCUMENT_ROOT"] . "/app/views/file/load-file.php");
            if (isset($_POST["upload"])){
                if (($_FILES["picFile"]["type"] !== "image/jpeg") || ($_FILES["picFile"]["type"] !== "image/jpeg")|| ($_FILES["picFile"]["type"] !== "image/jpeg")){
                    if (is_null($errorList)){
                        $errorList = ["format invalid"];
                    }else{
                    array_push($errorList, "format invalid");
                    };
                };
                if ($_FILES["picFile"]["size"] > 4000000){
                    if (is_null($errorList)){
                        $errorList = ["file size exceeded"];
                    }else{
                    array_push($errorList, "file size exceeded");
                    };
                };
                if (!empty($_FILES["picFile"]["error"])){
                    array_push($errorList, $_FILES["picFile"]["error"]);
                };
                if (is_null($errorList)){
                    $uploadPath = $_SERVER["DOCUMENT_ROOT"] . "/public/img/";
                    move_uploaded_file($_FILES["picFile"]["tmp_name"], $uploadPath . $_FILES["picFile"]["name"]);
                }else{
                    var_dump($errorList);
                };
            };
        };
    };

?>
<?php

include($_SERVER["DOCUMENT_ROOT"] . "/app/views/layouts/footer.php");

?>