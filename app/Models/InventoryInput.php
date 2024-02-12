<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InventoryInput
 *
 * @property $id
 * @property $date
 * @property $suppliers_id
 * @property $persons_id
 * @property $comments
 * @property $regional
 * @property $created_at
 * @property $updated_at
 *
 * @property Person $person
 * @property ProductsInput[] $productsInputs
 * @property Supplier $supplier
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class InventoryInput extends Model
{
    
    static $rules = [
		'date' => 'required',
		'suppliers_id' => 'required',
		'persons_id' => 'required',
		'regional' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['date','suppliers_id','persons_id','comments','regional'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function person()
    {
        return $this->hasOne('App\Models\Person', 'id', 'persons_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productsInputs()
    {
        return $this->hasMany('App\Models\ProductsInput', 'inventory_inputs_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function supplier()
    {
        return $this->hasOne('App\Models\Supplier', 'id', 'suppliers_id');
    }
    

}
