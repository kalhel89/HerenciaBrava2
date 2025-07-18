<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'fecha', 'lugar', 'descripcion'];

    public function peleas()
    {
        return $this->hasMany(Pelea::class);
    }
}
