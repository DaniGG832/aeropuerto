<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compania extends Model
{
    use HasFactory;


    protected $table='companias';
    /**
     * Get all of the comments for the Compania
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vuelos()
    {
        return $this->hasMany(Vuelo::class);
    }
}
