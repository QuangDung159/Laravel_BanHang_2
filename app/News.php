<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $news_id
 * @property string $news_title
 * @property string $news_content
 * @property string $news_image
 * @property int $news_created_at
 * @property int $news_updated_at
 */
class News extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'news_id';

    /**
     * @var array
     */
    protected $fillable = ['news_title', 'news_content', 'news_image', 'news_created_at', 'news_updated_at'];

}
