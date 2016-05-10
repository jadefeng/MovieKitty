<?php
    $img = $_REQUEST['i'];
    $image_mime = getimagesize($img)['mime'] ;
    header("Content-type: " .$image_mime);
    echo file_get_contents($img);
?>