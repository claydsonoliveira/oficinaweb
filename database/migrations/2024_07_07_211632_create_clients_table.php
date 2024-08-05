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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->string('cnpj',14)->nullable();
            $table->string('tipo_pessoa',10)->nullable();
            $table->string('tipo_documento_1',25)->nullable();
            $table->string('documento_1',15)->nullable();
            $table->string('tipo_documento_2',25)->nullable();
            $table->string('documento_2',15)->nullable();
            $table->string('alcunha',70)->nullable();
            $table->string('logradouro',70)->nullable();
            $table->string('numero',5)->nullable();
            $table->string('uf',2)->nullable();
            $table->string('cep',9)->nullable();
            $table->string('bairro',50)->nullable();
            $table->string('cidade',30)->nullable();
            $table->string('complemento',15)->nullable();
            $table->string('conjuge',100)->nullable();
            $table->string('pai',100)->nullable();
            $table->string('mae',100)->nullable();
            $table->string('telefone_contato',15)->nullable();
            $table->string('celular',15)->nullable();
            $table->date('data_nascimento')->nullable();
            $table->string('naturalidade',45)->nullable();
            $table->string('nacionalidade',45)->nullable();
            $table->integer('id_seguimento', false, false)->nullable();
            $table->string('profissao',30)->nullable();
            $table->string('restricao',8)->nullable();
            $table->string('email',100)->nullable();
            $table->string('contato',80)->nullable();
            $table->string('regiao',25)->nullable();
            $table->string('tabela_preco',25)->nullable();
            $table->text('observacao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
