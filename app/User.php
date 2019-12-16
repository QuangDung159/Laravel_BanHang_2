<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $user_id
 * @property string $user_full_name
 * @property string $user_email
 * @property string $user_password
 * @property string $user_remember_token
 * @property int $user_created_at
 * @property int $user_updated_at
 */
class User extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'user';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'user_id';

    /**
     * @var array
     */
    protected $fillable = ['user_full_name', 'user_email', 'user_password', 'user_remember_token', 'user_created_at', 'user_updated_at'];

}
