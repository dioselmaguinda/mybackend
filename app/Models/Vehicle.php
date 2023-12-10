<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vehicle';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'Vin_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'brand_name',
        'model_name',
        'inventory_status',
    ];
}
