<?php

$action = "/route/load-picture.php";

?>

<form enctype="multipart/form-data" method="POST" action="<?=$action?>">
    <span>Load file: </span>
    <input type="file" name="picFile" />
    <br/>
    <input type="submit" name="upload" value="load"/>
    <?=$action?>
</form>