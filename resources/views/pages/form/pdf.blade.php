<!DOCTYPE html>
<html>
<head>
    <style>
        p {
            line-height: 0.7;
        }
        .solid {
            border: 1px solid black;
        }

        .central {
            text-align: center;
            margin: 0px;
        }
        .textos {
            margin: 5px;
        }

        hr {
            border: 1px solid black;
        }
        table, td, th {
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }
        img {
            /*border-radius: 8px;*/
            position: absolute;
            left: 78.5%;
            top: 7%;
        }
    </style>
</head>
<body>
    <img src="{{$registro->foto}}" alt="Imagem do candidato" height="150px" width="150px">
<h3 class="central">FICHA INDIVIDUAL PARA O SERVIÇO MILITAR (FISEMI)</h3>
<div class="solid">
    <h4 class="central">FISEMI</h4>
    <h4 class="central">Decreto nº 63.704, de 29 de novembro de 1968</h4>
    <hr>
    <p class="textos"><strong>INSTITUIÇÃO DE ENSINO:</strong> {{$registro->instituicao_ensino}}</p>
    <hr>
    <p class="textos"><strong>Nome:</strong> {{$registro->nome}}</p>
    <hr>
    <p class="textos">
        <strong>RG:</strong> {{$registro->rg}}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <strong>ÓRGÃO EXPEDIDOR:</strong> {{$registro->orgao_expedidor}}
    </p>
    <hr>
    <p class="textos">
        <strong>CPF:</strong> {{$registro->cpf}}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <strong>TELEFONE Nº:</strong> {{$registro->telefone}}
    </p>
    <hr>
    <p class="textos">
        <strong>DATA DE NASCIMENTO:</strong> {{date('d/m/Y', strtotime($registro->data_nacimento))}}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <strong>IDADE:</strong> {{$registro->idade}}
    </p>
    <hr>
    <p class="textos"><strong>NOME DA MÃE:</strong> {{$registro->nome_mae}}</p>
    <hr>
    <p class="textos"><strong>NOME DA PAI:</strong> {{$registro->nome_pai}}</p>
    <hr>
    <p class="textos"><strong>ENDEREÇO:</strong> {{$registro->endereco}}</p>
    <hr>
    <p class="textos">
        <strong>BAIRRO:</strong> {{$registro->bairro}}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <strong>CIDADE:</strong> {{$registro->cidade}}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <strong>ESTADO:</strong> {{$registro->estado}}
    </p>
    <hr>
    <p class="textos">
        <strong>ESTADO CIVIL:</strong> {{$registro->estado_civil}}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <strong>Nº DE FILHOS:</strong> {{$registro->quantidade_filhos}}
    </p>
    <hr>
    <p class="textos"><strong>E-MAIL:</strong> {{$registro->email}}</p>
    <hr>
    <p class="textos">
        <strong>ARRIMO:</strong> {{$registro->arrimo}}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <strong>Nº DE DEPENDENTES:</strong> {{$registro->numero_dependente}}
    </p>
    <hr>
    <p class="textos">
        <strong>TEMPO DE SERVIÇO PÚBLICO:</strong> {{$registro->servico_publico}}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <strong>ANOS:</strong> {{$registro->anos}}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <strong>MESES:</strong> {{$registro->meses}}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <strong>DIAS:</strong> {{$registro->dias}}
    </p>
    <hr>
    <h4 class="central">DOCUMENTO COMPROBATÓRIO DE SITUAÇÃO MILITAR</h4>
    <hr>
    <p class="textos"><strong>TIPO DE DOCUMENTO:</strong> {{$registro->tipo_documento}}</p>
    <hr>
    <p class="textos">
        <strong>RA:</strong> {{$registro->ra}}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <strong>DATA EMISSÃO:</strong> {{date('d/m/Y', strtotime($registro->data_emissao))}}
    </p>
    <hr>
    <p class="textos">
        <strong>TEMPO DE SERVIÇO MILITAR PRESTADO:</strong>
        <strong>ANOS:</strong> {{$registro->servico_militar_anos}}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <strong>MESES:</strong> {{$registro->servico_militar_meses}}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <strong>DIAS:</strong> {{$registro->servico_militar_dias}}
    </p>
    <hr>
    <p class="textos">
        <strong>ORGANIZAÇÃO MILITAR EXPEDIDORA:</strong> {{$registro->organizacao_militar_expedidora}}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <strong>MINISTÉRIO:</strong> {{$registro->ministerio}}
    </p>
    <hr>
    <p class="textos">
        <strong>POSTO OU GRADUAÇÃO:</strong> {{$registro->posto_graduacao}}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <strong>QUADRO OU CORPO:</strong> {{$registro->quadro_corpo}}
    </p>
    <hr>
    <p class="textos">
        <strong>DATA DE INCORPORAÇÃO:</strong> {{date('d/m/Y', strtotime($registro->data_incorporacao))}}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <strong>DATA DE LICENCIAMENTO:</strong> {{date('d/m/Y',strtotime($registro->data_licenciamento))}}
    </p>
    <hr>
    <h4 class="central">PRESTAÇÃO DO SERVIÇO MILITAR</h4>
    <hr>
    <p class="textos"><strong>VOLUNTÁRIO AO SERVIÇO MILITAR:</strong> {{$registro->voluntario_servico_militar}}</p>
    <hr>
    <p class="textos">
        <strong>EXÉRCITO:</strong> {{$registro->exercito}}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <strong>MARINHA:</strong> {{$registro->marinha}}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <strong>AERONÁLTICA:</strong> {{$registro->aeronaltica}}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <strong>QUALQUER FORÇA:</strong> {{$registro->qualquer_forca}}
    </p>
    <hr>
    <h4 class="central">CASO CONVOCADO, DESEJO SERVIR, SE POSSÍVEL</h4>
    <hr>
    <table>
        <tr>
            <th>PRIORIDADE</th>
            <th>FORÇA</th>
            <th>GUARNIÇÃO/LOCALIDADE</th>
        </tr>
        <tr>
            <td>1ª</td>
            <td>{{$registro->prioridade_1}}</td>
            <td>{{$registro->localidade_1}}</td>
        </tr>
        <tr>
            <td>2ª</td>
            <td>{{$registro->prioridade_2}}</td>
            <td>{{$registro->localidade_2}}</td>
        </tr>
        <tr>
            <td>3ª</td>
            <td>{{$registro->prioridade_3}}</td>
            <td>{{$registro->localidade_3}}</td>
        </tr>
    </table>
    <br>
    <p class="textos central">EM_______DE_________DE___________</p>
    <br>
    <p class="textos central">__________________________________________</p>
    <p class="textos central">Assinatura</p>
</div>
</body>
</html>
