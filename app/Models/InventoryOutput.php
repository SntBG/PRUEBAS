<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InventoryOutput
 *
 * @property $id
 * @property $date
 * @property $clients_id
 * @property $persons_id
 * @property $comments
 * @property $regional
 * @property $created_at
 * @property $updated_at
 *
 * @property Client $client
 * @property Person $person
 * @property ProductsOutput[] $productsOutputs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class InventoryOutput extends Model
{
    
    static $rules = [
		'date' => 'required',
		'clients_id' => 'required',
		'persons_id' => 'required',
		'regional' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['date','clients_id','persons_id','comments','regional'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function client()
    {
        return $this->hasOne('App\Models\Client', 'id', 'clients_id');
    }
    
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
    public function productsOutputs()
    {
        return $this->hasMany('App\Models\ProductsOutput', 'inventory_outputs_id', 'id');
    }   

}
