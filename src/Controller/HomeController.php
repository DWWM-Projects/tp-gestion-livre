<?php

namespace Tp\Books\Controller;

use Tp\Books\View;

class HomeController
{
    public function home()
    {
        return View::render('accueil');
    }
}