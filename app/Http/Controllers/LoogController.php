<?php

namespace Proflot\Http\Controllers;

use Illuminate\Http\Request;

use Proflot\Http\Requests;
use Proflot\Http\Controllers\Controller;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
class LoogController extends Controller
{

    public function index()
    {
        
            $xsql = explode("?", $sql);
            $nsql = "";
            $br = "</br>";
            $h4a = "<h3>";
            $h4f= "</h3>";
            $tempo = $time;

            for ($i=0; $i < count($xsql)-1; $i++) {
             $nsql .= $xsql[$i] . $bindings[$i];
         
         $view_log = new Logger("SQL");
          return $view_log->addInfo($br.$h4a.$nsql.$h4f?:$h4a.$sql.$h4f.$br);
        }
    
      }
    
}
