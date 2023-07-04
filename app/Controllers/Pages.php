<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
      $data = [
         'title' => 'Home Page'
      ];
      return view('Pages/home',$data);
    }

    public function About()
    {
      $data = [
        'title' => 'About Page',
     ];
      return view('Pages/About', $data);
    }

    public function Contact()
    {
      $data = [
        'title' => 'Contact Page',
        'contact' => [
             [
              'email' => 'tes@gmail.com',
              'city' => 'Jakarta'
             ],
             [
              'email' => 'tes@gmail.com',
              'city' => 'Bogor'
             ]
        ]
     ];
      return view('Pages/Contact', $data);
    }

}
