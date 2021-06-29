<?php

    if(isset($_GET["file_name"]))
    {
        $file_name=$_SERVER["DOCUMENT_ROOT"] . "/" . $_GET["file_name"];
        print $file_name;
        header("Content-Length: ".filesize($file_name));
        header("Content-Disposition: attachment; filename=empty.xlsx"); 
        header("Content-Type: application/x-force-download; name=\"".$file_name."\"");
        readfile($file_name);
    }
    else
    print "no";

?>