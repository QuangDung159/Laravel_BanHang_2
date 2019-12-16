<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $product_id
 * @property int $type_id
 * @property string $product_name
 * @property string $product_description
 * @property float $product_unit_price
 * @property float $product_promotion_price
 * @property string $product_image
 * @property string $product_unit
 * @property int $product_qty
 * @property int $product_created_at
 * @property int $product_updated_at
 * @property ProductType $productType
 */
class Product extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'product_id';

    /**
     * @var array
     */
    protected $fillable = ['type_id', 'product_name', 'product_description', 'product_unit_price', 'product_promotion_price', 'product_image', 'product_unit', 'product_qty', 'product_created_at', 'product_updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productType()
    {
        return $this->belongsTo('App\ProductType', 'type_id', 'product_type_id');
    }
}
