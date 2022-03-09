<?php

$files = scandir('../files');
$data = '';
foreach ($files as $file) {
    
    if ($file != "." && $file != "..") {
         $data .= file_get_contents('../files/' . $file);
    }
}

$result = [];
if ($data)
{
    foreach (explode(',', $data) as $key => $value) {
        $result[$key] = [
            'string' => $value,
            'string_count' => strlen($value)
        ];
    }
}

echo json_encode($result);




