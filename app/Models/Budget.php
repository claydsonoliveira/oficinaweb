<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Budget extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    /**
     * 
     * Um Orcamento pertence a um cliente
     * 
     * @return BelongsTo
     */
    public function client() {
        return $this->belongsTo(Client::class);

    }
}
