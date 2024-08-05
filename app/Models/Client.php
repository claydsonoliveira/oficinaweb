<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * 
     * Um cliente tem muitos orcamentos
     */
    public function budgets() {
        return $this->hasMany(Budget::class);
    }

}
