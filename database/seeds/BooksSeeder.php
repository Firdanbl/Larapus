<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Sampel penulis
        $author1 = Author::create(['name'=>'Mohammad Fauzil Adhim']);
        $author2 = Author::create(['name'=>'Salim A Fillah']);
        $author3 = Author::create(['name'=>'Aam Amiruddin']);

        //Sampel buku
        $book1 = Book::create(['title'=>'Kupinang engkau dengan Hamdalah',
        		'amount'=>3, 'author_id'=>$author1->id]);
        $book2 = Book::create(['title'=>'Jalan cinta para pejuang',
        		'amount'=>2, 'author_id'=>$author2->id]);
        $book3 = Book::create(['title'=>'Membingkai surga dalam rumah tangga',
        		'amount'=>4, 'author_id'=>$author3->id]);
        $book4 = Book::create(['title'=>'Cinta & Seks rumah tangga muslim',
        		'amount'=>3, 'author_id'=>$author3->id]);


    }
}
