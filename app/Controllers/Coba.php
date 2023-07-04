<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        return 'hanya testing';
    }

    public function About($names = '', $age = 0)
    {
        echo "we name $names & $age";
    }
}