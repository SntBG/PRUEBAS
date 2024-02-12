<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegionalStock
 *
 * @property $id
 * @property $products_id
 * @property $intputs
 * @property $outputs
 * @property $stock
 * @property $regional
 * @property $created_at
 * @property $updated_at
 *
 * @property Product $product
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RegionalStock extends Model
{
    
    static $rules = [
		'products_id' => 'required',
		'intputs' => 'required',
		'outputs' => 'required',
		'stock' => 'required',
		'regional' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['products_id','intputs','outputs','stock','regional'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'products_id');
    }
       

}
