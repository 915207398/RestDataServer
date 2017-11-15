<?php
$file_name = 'http://127.0.0.1:8080/RestServer/data/address.json';
$file = file_get_contents($file_name);

echo $file;