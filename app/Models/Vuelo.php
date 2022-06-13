<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the Vuelo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function aeropuertoSalida()
    {
        return $this->belongsTo(User::class, 'salida_id');
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
    public function companias()
    {
        return $this->belongsTo(Compania::class);
    }
}
