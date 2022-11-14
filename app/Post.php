<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Post
 *
 * @mixin \Eloquent
 * @property int $id
 * @property int $author_id
 * @property string $title
 * @property string $slug
 * @property string $excerpt
 * @property string $body
 * @property string $image
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereAuthorId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereExcerpt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereUpdatedAt($value)
 */
class Post extends Model
{
    //
}
