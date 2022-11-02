<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function index()
    {
        return view("inc/head")
              .view("inc/header")
              .view("inc/side")
              .view("inc/footer")
        ;
        
    }
}