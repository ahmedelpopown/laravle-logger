<?php
namespace Ahmedelpopown\LaravelLogger\Services;
class LaravelLoggerService{


    public function laravelPrint($message):void{
            echo'<pre>';
        echo $message;
        echo'</pre>';
    }
}