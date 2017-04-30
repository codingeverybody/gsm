<?php
$title = $_GET['title'];
$desc = $_GET['description'];
file_put_contents('data/'.$title, $desc);