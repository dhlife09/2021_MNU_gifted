<?php
    $errMsg = "업로드 실패!";
    if ($_FILES["upload"]["error"] == UPLOAD_ERR_OK) {
        $tname = $_FILES["upload"]["tmp_name"];
        $fname = $_FILES["upload"]["name"];
        $fsize = $_FILES["upload"]["size"];
        $save_name = iconv("utf-8", "cp949", $fname);        
        if (file_exists("files/$save_name"))

        else if (move_uploaded_file($tname, "files/$save_name")) {
            require("StorageDB.php");

            $sdb->addFileInfo( , date("Y-m-d H:i:s"), $fsize);
            header("Location: storage.php?sort=$_REQUEST[sort]" 
                   . "&dir=$_REQUEST[dir]");
            exit();
        }
    }
?>
<!doctype html>
<html>
<head>    <meta charset="utf-8">   </head>
<body>
<script>
    alert('<?= $errMsg ?>');
    history.back();
</script>
</body>
</html>