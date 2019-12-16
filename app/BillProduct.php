<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $bill_product_id
 * @property int $bill_id
 * @property int $product_id
 * @property int $bill_product_qty
 * @property float $bill_product_unit_price
 * @property int $bill_product_created_at
 * @property int $bill_product_updated_at
 * @property Bill $bill
 */
class BillProduct extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'bill_product';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'bill_product_id';

    /**
     * @var array
     */
    protected $fillable = ['bill_id', 'product_id', 'bill_product_qty', 'bill_product_unit_price', 'bill_product_created_at', 'bill_product_updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bill()
    {
        return $this->belongsTo('App\Bill', null, 'bill_id');
    }
}
