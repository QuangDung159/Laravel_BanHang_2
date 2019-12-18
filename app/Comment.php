<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $comment_id
 * @property int $customer_id
 * @property string $comment_content
 * @property int $comment_created_at
 * @property Customer $customer
 */
class Comment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comment';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'comment_id';

    /**
     * @var array
     */
    protected $fillable = ['customer_id', 'comment_content', 'comment_created_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo('App\Customer', 'customer_id', 'customer_id');
    }
}
