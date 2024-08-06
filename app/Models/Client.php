<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * 
     * Um cliente tem muitos orcamentos
     * @return HasMany
     */
    public function budgets() {
        return $this->hasMany(Budget::class);
    }

}
