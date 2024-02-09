<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $categories_id
 * @property $product
 * @property $suppliers_id
 * @property $packaging_types_id
 * @property $minimum_stock
 * @property $state
 * @property $created_at
 * @property $updated_at
 *
 * @property Category $category
 * @property PackagingType $packagingType
 * @property ProductsInput[] $productsInputs
 * @property ProductsOutput[] $productsOutputs
 * @property RegionalStock[] $regionalStocks
 * @property Supplier $supplier
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'categories_id' => 'required',
		'product' => 'required',
		'suppliers_id' => 'required',
		'packaging_types_id' => 'required',
		'minimum_stock' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['categories_id','product','suppliers_id','packaging_types_id','minimum_stock','state'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'categories_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function packagingType()
    {
        return $this->hasOne('App\Models\PackagingType', 'id', 'packaging_types_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productsInputs()
    {
        return $this->hasMany('App\Models\ProductsInput', 'products_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productsOutputs()
    {
        return $this->hasMany('App\Models\ProductsOutput', 'products_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function regionalStocks()
    {
        return $this->hasMany('App\Models\RegionalStock', 'products_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function supplier()
    {
        return $this->hasOne('App\Models\Supplier', 'id', 'suppliers_id');
    }
    

}
