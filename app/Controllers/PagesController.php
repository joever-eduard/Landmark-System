<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class PagesController extends BaseController
{
    public function index()
    {
        return view('homepage');
    }

    public function about()
    {
        return view('about');
    }

    public function search()
    {
        return view('search');
    }

    public function adminHome()
    {   
        $data = [];

        echo view('adminhome', $data);
    }

    public function adminAbout()
    {
        return view('adminabout');
    }

    public function adminSearch()
    {
        return view('adminsearch');
    }

    public function documents()
    {
        return view('documents');
    }

    public function reports()
    {
        return view('reports');
    }

    public function add()
    {
        return view('add');
    }

    public function update()
    {
        return view('update');
    }
    
}
