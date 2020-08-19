<?php

// Common functions

function render_component(string $template, array $data = []){
    require("../server/components/${template}.php");
}

function read_data(){
    $json_contents= file_get_contents("../server/data.json");
    return json_decode($json_contents, true);
}

function write_data($data){
    $fp = fopen('../server/data.json', 'w');
    fwrite($fp, json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
    fclose($fp);
}