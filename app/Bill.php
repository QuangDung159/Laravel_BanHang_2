<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $bill_id
 * @property int $customer_id
 * @property int $bill_date_order
 * @property float $bill_total
 * @property string $bill_payment
 * @property string $bill_note
 * @property int $bill_created_at
 * @property int $bill_updated_at
 * @property Customer $customer
 * @property BillProduct[] $billProducts
 */
class Bill extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bill';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'bill_id';

    /**
     * @var array
     */
    protected $fillable = ['customer_id', 'bill_date_order', 'bill_total', 'bill_payment', 'bill_note', 'bill_created_at', 'bill_updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo('App\Customer', 'customer_id', 'customer_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function billProduct()
    {
        return $this->hasMany('App\BillProduct', 'bill_id', 'bill_id');
    }
}
