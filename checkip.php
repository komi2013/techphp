<?php

$addr = $_SERVER["REMOTE_ADDR"];

file_put_contents("test/sample.txt", $_SERVER["REMOTE_ADDR"]);

?>