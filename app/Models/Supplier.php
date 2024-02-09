<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Supplier
 *
 * @property $id
 * @property $supplier
 * @property $created_at
 * @property $updated_at
 *
 * @property InventoryInput[] $inventoryInputs
 * @property Product[] $products
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Supplier extends Model
{
    
    static $rules = [
		'supplier' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['supplier'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryInputs()
    {
        return $this->hasMany('App\Models\InventoryInput', 'suppliers_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Models\Product', 'suppliers_id', 'id');
    }
    

}
