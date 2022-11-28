<?php
namespace Luminous\Controller;

Abstract class Controller
{
    public function __construct($request=[])
    {
        foreach ($request as $key=>$value){
            $this->{$key} = $value;
        }
    }
}
