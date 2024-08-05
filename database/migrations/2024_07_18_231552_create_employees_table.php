<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->string('cnpj',14)->nullable();
            $table->string('rg',15)->nullable();
            $table->char('cpf',11);
            $table->string('alcunha',70)->nullable();
            $table->string('logradouro',70)->nullable();
            $table->string('numero',5)->nullable();
            $table->string('uf',2)->nullable();
            $table->string('cep',8)->nullable();
            $table->string('bairro',50)->nullable();
            $table->string('cidade',30)->nullable();
            $table->string('complemento',15)->nullable();
            $table->string('conjuge',100)->nullable();
            $table->string('pai',100)->nullable();
            $table->string('mae',100)->nullable();
            $table->string('telefone_contato',15)->nullable();
            $table->string('celular',15)->nullable();
            $table->date('data_nascimento')->nullable();
            $table->date('data_admissao');
            $table->date('data_demissao')->nullable();
            $table->string('naturalidade',45)->nullable();
            $table->string('nacionalidade',45)->nullable();
            $table->integer('id_seguimento', false, false);
            $table->string('profissao',30)->nullable();
            $table->string('restricao',8)->nullable();
            $table->string('email',100)->nullable();
            $table->string('contato',80)->nullable();
            $table->string('regiao',25)->nullable();
            $table->text('observacao')->nullable();
            $table->integer('codigo_funcao')->nullable();
            $table->decimal('remuneracao', 12, 2)->nullable();
            $table->decimal('valor_peca_pintura', 12, 2)->nullable();
            $table->decimal('valor_peca_preparacao_alta', 12, 2)->nullable();
            $table->decimal('valor_peca_preparacao_media', 12, 2)->nullable();
            $table->decimal('valor_peca_pintura_alta', 12, 2)->nullable();
            $table->decimal('valor_peca_pintura_media', 12, 2)->nullable();
            $table->decimal('valor_peca_preparacao', 12, 2)->nullable();
            $table->decimal('comissao', 8, 2)->nullable();
            $table->decimal('comissao_2', 8, 2)->nullable();
            $table->decimal('desconto_pecas', 8, 2)->nullable();
//            $table->decimal('desconto_servicos', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
