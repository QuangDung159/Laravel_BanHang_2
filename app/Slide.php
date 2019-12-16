<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $slide_id
 * @property string $slide_link
 * @property string $slide_image
 * @property int $slide_created_at
 * @property int $slide_updated_at
 */
class Slide extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'slide';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'slide_id';

    /**
     * @var array
     */
    protected $fillable = ['slide_link', 'slide_image', 'slide_created_at', 'slide_updated_at'];

}
