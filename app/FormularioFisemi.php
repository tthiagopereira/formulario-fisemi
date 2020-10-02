<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormularioFisemi extends Model
{
    protected $fillable = [
        'foto','instituicao_ensino','nome','rg','orgao_expedidor','cpf',
        'telefone','data_nacimento','idade','nome_mae','nome_pai','endereco','bairro','cidade',
        'estado','estado_civil','quantidade_filhos','email','arrimo','numero_dependente','servico_publico',
        'anos','meses','dias','tipo_documento','ra','data_emissao','servico_militar_anos',
        'servico_militar_meses','servico_militar_dias','organizacao_militar_expedidora','ministerio',
        'posto_graduacao','quadro_corpo','data_incorporacao','data_licenciamento','voluntario_servico_militar',
        'exercito','marinha','aeronaltica','qualquer_forca',
        'prioridade_1','prioridade_2','prioridade_3','localidade_1','localidade_2','localidade_3'
    ];
}
