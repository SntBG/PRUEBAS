<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Regional
 *
 * @property $id
 * @property $regional
 * @property $created_at
 * @property $updated_at
 *
 * @property InventoryInput[] $inventoryInputs
 * @property InventoryOutput[] $inventoryOutputs
 * @property RegionalStock[] $regionalStocks
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Regional extends Model
{
    
    static $rules = [
		'regional' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['regional'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryInputs()
    {
        return $this->hasMany('App\Models\InventoryInput', 'regionals_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryOutputs()
    {
        return $this->hasMany('App\Models\InventoryOutput', 'regionals_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function regionalStocks()
    {
        return $this->hasMany('App\Models\RegionalStock', 'regionals_id', 'id');
    }
    

}
