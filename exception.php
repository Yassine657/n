<?php
namespace exception;
use Exception;
class EXC extends Exception{
    public $msg;
    public $code;
    function __construct($msg,$code)
    {
        parent::__construct($msg,$code);
    }
}