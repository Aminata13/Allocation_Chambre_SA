<?php

class Validator {
    private $errors = [];
    
    public function isValid() {
        return count($this->errors)==0;
    }

    public function isVide($champ, $key, $msg='Champ Obligatoire') {
        if(empty($champ)) {
            $this->errors[$key] = $msg;
        }
    }

    /**
     * Get the value of error
     */ 
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Set the value of error
     *
     * @return  self
     */ 
    public function setErrors($errors)
    {
        $this->errors = $errors;

        return $this;
    }
}