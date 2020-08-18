<?php

// Common functions

function render_component(string $template, array $data = []){
    require(APP_ROOT."/server/components/${template}.php");
}

function read_data(){
    $json_contents= file_get_contents(APP_ROOT."/server/data.json");
    return json_decode($json_contents, true);
}

function write_data($data){
    $fp = fopen(APP_ROOT.'/server/data.json', 'w');
    fwrite($fp, json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
    fclose($fp);
}