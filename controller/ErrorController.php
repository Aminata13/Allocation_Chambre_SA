<?php

class ErrorController {
    public function showError ($errorMsg){
        die($errorMsg);
    }
}