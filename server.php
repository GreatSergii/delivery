<?php
$_POST = json_decode( file_get_contents("php://input"), true );
echo var_dump($_POST);


// как на php коде получить json данные и с ними поработать < =