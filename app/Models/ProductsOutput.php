<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductsOutput
 *
 * @property $id
 * @property $date
 * @property $inventory_outputs_id
 * @property $products_id
 * @property $quantity
 * @property $created_at
 * @property $updated_at
 *
 * @property InventoryOutput $inventoryOutput
 * @property Product $product
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ProductsOutput extends Model
{
    
    static $rules = [
		'date' => 'required',
		'inventory_outputs_id' => 'required',
		'products_id' => 'required',
		'quantity' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['date','inventory_outputs_id','products_id','quantity'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function inventoryOutput()
    {
        return $this->hasOne('App\Models\InventoryOutput', 'id', 'inventory_outputs_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'products_id');
    }
    

}
