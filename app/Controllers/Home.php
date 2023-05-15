<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('default/header');
        echo view('default/navbar');
        echo view('pages/index');
        echo view('default/footer');
        // return view('welcome_message');
    }

    public function platform()
    {
        echo view('default/header');
        echo view('default/navbar');
        echo view('pages/platform');
        echo view('default/footer');
    }


    public function aboutUs()
    {
        echo view('default/header');
        echo view('default/navbar');
        echo view('pages/aboutUs');
        echo view('default/footer');
    }

    public function accountType()
    {
        echo view('default/header');
        echo view('default/navbar');
        echo view('pages/accountType');
        echo view('default/footer');
    }

    public function market()
    {
        echo view('default/header');
        echo view('default/navbar');
        echo view('pages/market');
        echo view('default/footer');
    }

    public function partnership()
    {
        echo view('default/header');
        echo view('default/navbar');
        echo view('pages/partnership');
        echo view('default/footer');
    }

    public function register()
    {
        echo view('default/header');
        echo view('default/navbar');
        echo view('pages/register');
        echo view('default/footer');
    }

    public function form_index()
    {
        //echo view('default/header');
        //echo view('default/navbar');
        echo view('form/form_index');
        //echo view('default/footer');
    }

    public function form_demo_acc()
    {
        //echo view('default/header');
        //echo view('default/navbar');
        echo view('form/form_demo_acc');
        //echo view('default/footer');
    }

    public function form_contact()
    {
        //echo view('default/header');
        //echo view('default/navbar');
        echo view('form/form_contact');
        //echo view('default/footer');
    }
}
