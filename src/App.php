<?php

namespace Tp\Books;

class App extends \AltoRouter
{
    public function run()
    {
        $match = $this->match();

        if (is_array($match)) {
            [$controller, $method] = explode('@', $match['target']);
            $controller = 'Tp\\Books\\Controller\\'.$controller;
            $call = new $controller();

            $call->$method(...$match['params']);
        } else {
            View::notFound();
        }
    }
}