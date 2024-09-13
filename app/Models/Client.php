<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use function PHPUnit\Framework\returnSelf;

class Client extends Model
{
    use HasFactory;
    protected $estado = "";


    protected $guarded = ['id'];

    /**
     * 
     * Um cliente tem muitos orcamentos
     * @return HasMany
     */
    public function budgets() {
        return $this->hasMany(Budget::class);
    }

    /**
     * 
     * Um Cliente tem um segmento
     * 
     * @return BelongsTo
     */
    public function segments() {
        return $this->belongsTo(Segment::class);
    }

    protected function enderecoCompleto(): Attribute {

        return Attribute::make(
            get: function(mixed $value, array $attributes) {
    
/*                if ($attributes['uf'] == '12') $this->estado = 'AC';
                if ($attributes['uf'] == '27') $this->estado = 'AL';
                if ($attributes['uf'] == '16') $this->estado = 'AP';
                if ($attributes['uf'] == '13') $this->estado = 'AM';
                if ($attributes['uf'] == '29') $this->estado = 'BA';
                if ($attributes['uf'] == '23') $this->estado = 'CE';
                if ($attributes['uf'] == '53') $this->estado = 'DF';
                if ($attributes['uf'] == '32') $this->estado = 'ES';
                if ($attributes['uf'] == '52') $this->estado = 'GO';
                if ($attributes['uf'] == '21') $this->estado = 'MA';
                if ($attributes['uf'] == '51') $this->estado = 'MT';
                if ($attributes['uf'] == '50') $this->estado = 'MS';
                if ($attributes['uf'] == '31') $this->estado = 'MG';
                if ($attributes['uf'] == '15') $this->estado = 'PA';
                if ($attributes['uf'] == '25') $this->estado = 'PB';
                if ($attributes['uf'] == '50') $this->estado = 'MS';
                if ($attributes['uf'] == '31') $this->estado = 'MG';
                if ($attributes['uf'] == '41') $this->estado = 'PR';
                if ($attributes['uf'] == '26') $this->estado = 'PE';
                if ($attributes['uf'] == '22') $this->estado = 'PI';
                if ($attributes['uf'] == '33') $this->estado = 'RJ';
                if ($attributes['uf'] == '24') $this->estado = 'RN';
                if ($attributes['uf'] == '14') $this->estado = 'RR';
                if ($attributes['uf'] == '43') $this->estado = 'RS';
                if ($attributes['uf'] == '11') $this->estado = 'RO';
                if ($attributes['uf'] == '42') $this->estado = 'SC';
                if ($attributes['uf'] == '35') $this->estado = 'SP';
                if ($attributes['uf'] == '28') $this->estado = 'SE';
                if ($attributes['uf'] == '17') $this->estado = 'TO';
*/
                return vsprintf('%s, %s - %s, %s - %s %s', [
                    $attributes['logradouro'],
                    $attributes['numero'],
                    $attributes['bairro'],
                    $attributes['cidade'],
                    $attributes['uf'],
//                    $this->estado,                    
                    $attributes['cep']

                ]);
            } 
        );
    }

}
