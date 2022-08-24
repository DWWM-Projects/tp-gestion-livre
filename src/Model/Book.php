<?php

namespace Tp\Books\Model;

use Tp\Books\Model\Model;

class Book extends Model
{
    protected $title;
    protected $df_price;
    protected $author;
    protected $isbn;
    protected $parution;
    protected $image;

    public function ttc()
    {
        $tax = ($this->df_price * 20) / 100;
        $ttc = ($this->df_price + $tax) / 100;

        return $ttc;
    }
}
