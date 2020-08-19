<?php

require_once "../server/core/functions.php"; 

render_component("header", [
    "title" => "SarioRC",
    "styles" => [
        "./css/style.css"
    ]
]);

render_component("hello", [
    "name" => "User"
]);

render_component("footer", [
    "scripts" => [
        "./js/main.js"
    ]
]);
