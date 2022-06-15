<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;

    protected $guarded =[];

    /**
     * Get the user that owns the Vuelo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function aeropuertoSalida()
    {
        return $this->belongsTo(Aeropuerto::class, 'salida_id');
    }

    /**
     * Get the user that owns the Vuelo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function aeropuertoLlegada()
    {
        return $this->belongsTo(Aeropuerto::class, 'llegada_id');
    }
    /**
     * Get all of the comments for the Vuelo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    /**
     * Get the companias that owns the Vuelo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function compania()
    {
        return $this->belongsTo(Compania::class);
    }

    /**
     * Get all of the comments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

    
}
