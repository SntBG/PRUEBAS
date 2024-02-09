<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Person
 *
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @property InventoryInput[] $inventoryInputs
 * @property InventoryOutput[] $inventoryOutputs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Person extends Model
{
    
    static $rules = [
		'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryInputs()
    {
        return $this->hasMany('App\Models\InventoryInput', 'persons_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryOutputs()
    {
        return $this->hasMany('App\Models\InventoryOutput', 'persons_id', 'id');
    }
    

}
