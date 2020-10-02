<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormularioFisemisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulario_fisemis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto')->nullable();
            $table->string('instituicao_ensino')->nullable();
            $table->string('nome')->nullable();
            $table->string('rg')->nullable();
            $table->string('orgao_expedidor')->nullable();
            $table->string('cpf')->nullable();
            $table->string('telefone')->nullable();
            $table->string('data_nacimento')->nullable();
            $table->string('idade')->nullable();
            $table->string('nome_mae')->nullable();
            $table->string('nome_pai')->nullable();
            $table->string('endereco')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('estado_civil')->nullable();
            $table->integer('quantidade_filhos')->nullable();
            $table->string('email')->nullable();
            $table->string('arrimo')->nullable();
            $table->integer('numero_dependente')->nullable();
            $table->string('servico_publico')->nullable();
            $table->string('anos')->nullable();
            $table->string('meses')->nullable();
            $table->string('dias')->nullable();
            $table->string('tipo_documento')->nullable();
            $table->string('ra')->nullable();
            $table->string('data_emissao')->nullable();
            $table->integer('servico_militar_anos')->nullable();
            $table->integer('servico_militar_meses')->nullable();
            $table->integer('servico_militar_dias')->nullable();
            $table->string('organizacao_militar_expedidora')->nullable();
            $table->string('ministerio')->nullable();
            $table->string('posto_graduacao')->nullable();
            $table->string('quadro_corpo')->nullable();
            $table->string('data_incorporacao')->nullable();
            $table->string('data_licenciamento')->nullable();
            $table->string('voluntario_servico_militar')->nullable();
            $table->string('exercito')->nullable();
            $table->string('marinha')->nullable();
            $table->string('aeronaltica')->nullable();
            $table->string('qualquer_forca')->nullable();
            $table->string('prioridade_1')->nullable();
            $table->string('prioridade_2')->nullable();
            $table->string('prioridade_3')->nullable();
            $table->string('localidade_1')->nullable();
            $table->string('localidade_2')->nullable();
            $table->string('localidade_3')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formulario_fisemis');
    }
}