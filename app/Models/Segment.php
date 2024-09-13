<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * 
     * Um segmento tem muitos clientes
     * @return HasMany
     */
    public function client() {
        return $this->hasMany(Client::class);
    }


}
