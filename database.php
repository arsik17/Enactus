<?php

function db_connect(){
    $link = mysqli_connect('localhost', 'root', '', 'blog')
    or die("Error: ".mysqli_error($link));

    return $link;
}

?>