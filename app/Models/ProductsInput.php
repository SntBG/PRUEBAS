<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductsInput
 *
 * @property $id
 * @property $date
 * @property $inventory_inputs_id
 * @property $products_id
 * @property $quantity
 * @property $created_at
 * @property $updated_at
 *
 * @property InventoryInput $inventoryInput
 * @property Product $product
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ProductsInput extends Model
{
    
    static $rules = [
		'date' => 'required',
		'inventory_inputs_id' => 'required',
		'products_id' => 'required',
		'quantity' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['date','inventory_inputs_id','products_id','quantity'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function inventoryInput()
    {
        return $this->hasOne('App\Models\InventoryInput', 'id', 'inventory_inputs_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'products_id');
    }
    

}
