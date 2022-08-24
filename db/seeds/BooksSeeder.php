<?php

use Phinx\Seed\AbstractSeed;


class BooksSeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            [
                'title'    => 'Les fous du roi',
                'df-price'    => '2190',
                'author'    => 'Robert Penn Warren',
                'isbn'    => '9782253043256',
                'parution' => '1996-01-31',
                'image' => 'null',
            ],
            [
                'title'    => 'Là-bas',
                'df-price'    => '2390',
                'author'    => 'Joris-Karl Huysmans',
                'isbn'    => '9782070376810',
                'parution' => '1985-10-23',
                'image' => 'null',
            ],
            [
                'title'    => 'Cyrano de Bergerac',
                'df-price'    => '2490',
                'author'    => 'Edmond Rostand',
                'isbn'    => '9782253005674',
                'parution' => '1972-10-01',
                'image' => 'null',
            ],
            [
                'title'    => 'La vie devant soi',
                'df-price'    => '1990',
                'author'    => 'Romain Gary',
                'isbn'    => '9782070373628',
                'parution' => '1985-10-23',
                'image' => 'null',
            ],
            
        ];

        $books = $this->table('books');
        $books->insert($data)
            ->saveData();
    }
        
}
