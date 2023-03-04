<?php 

function setFlash($key, $message, $type = 'danger'){

    if(!isset($_SESSION['flash'][$key])) {
        $_SESSION['flash'][$key] = "<div class ='alert alert-" . $type .  "'>". $message ."</div>";
    }
}

function getFlash($key) {

    if(isset($_SESSION['flash'][$key])) {
        
        $message = $_SESSION['flash'][$key];

        unset($_SESSION['flash'][$key]);

        return $message ?? ''; //?? caso message não tenha valor retorna ''
    }

}