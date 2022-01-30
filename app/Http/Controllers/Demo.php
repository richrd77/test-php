<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Demo extends Controller
{
   function getData(){
       return ["name"=>"Richard","emailId"=>"richard@gami.com","address"=>"Bidar"];
   }
}
