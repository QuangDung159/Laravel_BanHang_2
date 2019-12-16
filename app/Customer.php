<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $customer_id
 * @property string $customer_name
 * @property string $customer_gender
 * @property string $customer_email
 * @property string $customer_address
 * @property string $customer_phone
 * @property string $customer_note
 * @property int $customer_created_at
 * @property int $customer_updated_at
 * @property Bill[] $bills
 */
class Customer extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customer';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'customer_id';

    /**
     * @var array
     */
    protected $fillable = ['customer_name', 'customer_gender', 'customer_email', 'customer_address', 'customer_phone', 'customer_note', 'customer_created_at', 'customer_updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bill()
    {
        return $this->hasMany('App\Bill', 'customer_id', 'customer_id');
    }
}
