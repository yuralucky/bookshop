<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Book
 *
 * @property-read mixed $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book query()
 * @mixin \Eloquent
 */
class Book extends Model
{
    protected $fillable=['title','author','ISBN','category',
        'pages','image','year','language','description','price'];


    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    public static function getExcerpt(string $str)
    {

        if (strlen($str) > 50) {
            $excerpt = substr($str, 0, 20);
            $excerpt .= '...';
        } else {
            $excerpt = $str;
        }
        return $excerpt;
    }

}
