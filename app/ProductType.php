<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $product_type_id
 * @property string $product_type_name
 * @property string $product_type_description
 * @property string $product_type_image
 * @property int $product_type_created_at
 * @property int $product_type_updated_at
 * @property Product[] $products
 */
class ProductType extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_type';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'product_type_id';

    /**
     * @var array
     */
    protected $fillable = ['product_type_name', 'product_type_description', 'product_type_image', 'product_type_created_at', 'product_type_updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Product', 'type_id', 'product_type_id');
    }
}
