<?php

namespace Tp\Books\Controller;

use Tp\Books\View;

abstract class Controller
{
    public function notFound()
    {
        return View::notFound();
    }

    public function redirect($url)
    {
        header('location: '.$url);
    }
}