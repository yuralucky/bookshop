<?php

namespace Tests\Unit;

use App\Book;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SimpleTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $db_book=\DB::select('select *from books where id=1');
        $db_book_author=ucfirst($db_book[0]->author);

        $model_book=DB::table('books')->find(1);
        $model_book_author=$model_book->author;

        $this->assertEquals($db_book_author,$model_book_author);
    }
}
