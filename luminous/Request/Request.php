<?php

namespace Luminous\Request;

class Request
{
    protected $error = [
      'string'      =>  'Value should be string',
      'email'       =>  'Value should be email',
      'unique'      =>  'Value already exist in the database',
      'exist'       =>  'Value already does not exist in the database',
      'required'    =>  'This field is required',
      'max'         =>  'Value should not be that big!',
      'confirmed'   =>  'Both Fields should match'
    ];

    private $errorMessage = [];

    public function __construct()
    {
        foreach ($_POST as $key=>$value){
            $this->{$key} = $value;
        }

        foreach ($_GET as $key=>$value){
            $this->{$key} = $value;
        }
    }

    public function validate($rules){
        foreach ($rules as $key=>$values){
            foreach ($values as $value){
                $property = explode(':', $value);
                $this->{strtok($value,":")}($key ,end($property));
            }
        }
        return $this->errorMessage;
    }


    private function string($attribute, $property){
        if(!is_string($this->{$attribute}))
            $this->errorMessage[$attribute][] = $this->error['string'];
    }

    private function email($attribute, $property){
        if(!filter_var($this->{$attribute}, FILTER_VALIDATE_EMAIL))
            $this->errorMessage[$attribute][] = $this->error['email'];
    }

    private function unique($attribute, $property){
        $className = 'App\Model\\' . $property;
        $obj = new $className;
        $response = $obj->isUnique($attribute, $this->{$attribute});
        if ($response->c)
            $this->errorMessage[$attribute][] = $this->error['unique'];
    }

    private function exist($attribute, $property){
        $className = 'App\Model\\' . $property;
        $obj = new $className;
        $response = $obj->isUnique($attribute, $this->{$attribute});
        if ($response->c == 0)
            $this->errorMessage[$attribute][] = $this->error['exist'];
    }

    private function required($attribute, $property){
        if($_POST[$attribute] == '')
            $this->errorMessage[$attribute][] = $this->error['required'];
    }

    private function max($attribute, $property){
        if (strlen($this->{$attribute})>$property)
            $this->errorMessage[$attribute][] = $this->error['max'];
    }

    private function confirmed($attribute, $property){
        if ($this->{$attribute}!=$this->{'confirm_'.$attribute})
            $this->errorMessage[$attribute][]= $this->error['confirmed'];
    }

}