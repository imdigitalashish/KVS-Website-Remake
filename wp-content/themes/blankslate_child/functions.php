<?php

function return_as_json($arr) {
    echo json_encode($arr);
}

add_filter("returnjson", "return_as_json");