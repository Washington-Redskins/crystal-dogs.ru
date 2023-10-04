<?php

function debug($arr){
    echo '<pre>' . print_r($arr, true) . '</pre>';
}

function redirect($http = false){                          //принимает некий адрес (необязательный)
    if($http){                      //если передан http - значит пользователь хочет сделать редирект
        $redirect = $http;
    }else{                      //если не передан
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH; //проверим, если в массиве $server HTTP_REFER (откуда пользователь пришел), тогда берем ее, иначе отправить на главную страницу
    }
    header("Location: $redirect");          //сделать редикт по сформированному адресу по $redirect
    exit;
}