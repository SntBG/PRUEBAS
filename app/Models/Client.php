<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 *
 * @property $id
 * @property $client
 * @property $created_at
 * @property $updated_at
 *
 * @property InventoryOutput[] $inventoryOutputs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Client extends Model
{
    
    static $rules = [
		'client' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['client'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryOutputs()
    {
        return $this->hasMany('App\Models\InventoryOutput', 'clients_id', 'id');
    }
    

}
