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
        Schema::table('budgets', function (Blueprint $table) {
            $table->unique(['cnpj','numero_orcamento']);
            $table->index(['cnpj','id_seguradora','id_modelo','numero_orcamento','data_orcamento','nome','placa','cor'],$name = 'idx_diversos');
            $table->index('id');
            $table->index('client_id');
            $table->index(['cnpj','id_seguradora']);
            $table->index(['cnpj','numero_orcamento']);
            $table->index(['cnpj','data_orcamento']);
            $table->index(['cnpj','nome']);
            $table->index(['cnpj','placa']);
            $table->index(['cnpj','cor']);
            $table->index(['cnpj','importado_pre_orcamento']);
            $table->index(['cnpj','id']);
            $table->index(['id_marca','id_modelo','id_ano_modelo']);
            $table->index(['cnpj','id_modelo']);
            $table->index(['cnpj','id_funcionario']);
            $table->index(['cor_prisma','data_conclusao','codigo_prisma']);
          

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
