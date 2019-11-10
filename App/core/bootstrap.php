<?php
function view($action, $data = false){
if($data) {
    extract($data);
}
    return require 'views/'.$action.'.view.php';
}