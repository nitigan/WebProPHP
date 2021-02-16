<?php
    echo getcwd().'<br>';
    $dir = 'C:\xampp\htdocs';
    $files = scandir($dir);
    foreach($files as $value){
        echo "$value<br>";
    }
    echo getcwd().'<br>';
    chdir('../');
    echo getcwd().'<br>';
?>