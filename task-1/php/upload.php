<?php
$file = $_FILES['file']['name'];
if (pathinfo($file, PATHINFO_EXTENSION) == 'txt') {
    if (move_uploaded_file($_FILES['file']['tmp_name'], "../files/" . rand(100000, 5000000).$file)) {
        echo json_encode(1);
    } else {
        echo json_encode(0);
    }
}else {
    echo 'extension_error';
}
