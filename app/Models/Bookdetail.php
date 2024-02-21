<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Bookdetail
 *
 * @property int $id
 * @property string $name
 * @property int $book_id
 * @property string $isbn
 * @property string $published_date
 * @property int $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Book|null $book
 * @method static \Illuminate\Database\Eloquent\Builder|Bookdetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bookdetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bookdetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bookdetail whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bookdetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bookdetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bookdetail whereIsbn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bookdetail whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bookdetail wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bookdetail wherePublishedDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bookdetail whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Bookdetail extends Model
{
    //use HasFactory;
    public function book()
    {
        return $this->belongsTo('\App\Models\Book');
    }
}
