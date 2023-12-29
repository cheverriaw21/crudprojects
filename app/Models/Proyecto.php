<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = [
        'NombreProyecto',
        'fuenteFondos',
        'MontoPlanificado',
        'MontoPatrocinado',
        'MontoFondosPropios',
    ];

    protected $casts = [
        'MontoPlanificado' => 'decimal:2',
        'MontoPatrocinado' => 'decimal:2',
        'MontoFondosPropios' => 'decimal:2',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function($proyecto){
            $proyecto->user_id = auth()->id();
        });
    }

    //
    public function user():BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}
