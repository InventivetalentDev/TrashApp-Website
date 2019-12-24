<?php
$query = $_GET;
if (!array_key_exists("utm_medium",$query)) {
    $query["utm_medium"] = "qrcode";
}
$query = http_build_query($query);
header("Location: https://trashapp.cc/?".$query);
