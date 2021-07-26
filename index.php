<?php

 print("hi");
 
$comments = file_get_contents("https://jsonplaceholder.typicode.com/comments");
$object = json_decode($comments);
var_dump($object);
$posts = file_get_contents("https://jsonplaceholder.typicode.com/posts");
$object = json_decode($posts );
var_dump($object);