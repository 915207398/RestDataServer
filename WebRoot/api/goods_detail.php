<?php
$goods_id = $_GET['goods_id'];
$file_name = "http://127.0.0.1:8080/RestServer/data/goods_detail_data_$goods_id.json";
$file = file_get_contents($file_name);

echo $file;