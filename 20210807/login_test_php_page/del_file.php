<?php
    require("StorageDB.php");
    $sdb = new Storage();
    $file_name = $sdb->deleteFileInfo(  );
 
    header("Location: storage.php?sort=$_REQUEST[sort]" 
           . "&dir=$_REQUEST[dir]");
?>