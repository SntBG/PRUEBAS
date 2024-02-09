<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PackagingType
 *
 * @property $id
 * @property $type
 * @property $created_at
 * @property $updated_at
 *
 * @property Product[] $products
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PackagingType extends Model
{
    
    static $rules = [
		'type' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['type'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Models\Product', 'packaging_types_id', 'id');
    }
    

}
