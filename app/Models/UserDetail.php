<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nombre_completo',
        'edad',
        'peso',
        'talla',
        'membresia',
        'ejercicios',
        'kcal',
        'minutos',
        'peso_meta',
        'peso_inicial'
    ];

    protected $casts = [
        'peso' => 'decimal:2',
        'peso_meta' => 'decimal:2',
        'peso_inicial' => 'decimal:2',
        'edad' => 'integer',
        'ejercicios' => 'integer',
        'kcal' => 'integer',
        'minutos' => 'integer'
    ];

    // Relación con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
