<?php

use Illuminate\Database\Seeder;
use App\Models\Book;
class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books=config('books');
        foreach ($books as $book) {
           $new_book= new Book();

           $new_book->fill($book);
           $new_book->save();
        }
    }
}
