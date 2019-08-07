<?php
//$error = $_FILES["icon"]["error"];
$date = date('Y-m-d H:i:s');

$tmp_filename = $_FILES['icon']['tmp_name'];
$dest_filename = 'upload/' . $_POST['fileName'];
$res = array('status' => 0, 'fileName' => '');

if(!move_uploaded_file($tmp_filename, $dest_filename)){
    echo json_encode($res);
} else{
    $res['status'] = 1;
    $res['fileName'] = $dest_filename;
    echo json_encode($res);
}
