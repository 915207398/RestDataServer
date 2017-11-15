<?php
$file_name = 'http://127.0.0.1:8080/RestServer/data/sort_content_data_1.json';
$file = file_get_contents($file_name);

echo $file;