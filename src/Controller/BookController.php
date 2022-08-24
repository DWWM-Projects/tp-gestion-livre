<?php 

namespace Tp\Books\Controller;

use Tp\Books\Model\Book;
use Tp\Books\View;

class BookController
{
    public function list()
    {
        $books = Book::all();

        return View::render('book/list', [
            'books' => $books,


        ]);
    }

    // public function create()
    // {
    //     $book = new Book();
    //     $

    // }
}