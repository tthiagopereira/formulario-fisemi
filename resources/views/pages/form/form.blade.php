<div class="card">
    <div class="card-header bg-dark">
        <strong class="text-white"> <i class="fa fa-bank "></i> DADOS</strong>
        @if(isset($registro->id))
            <div class="col text-right">
                <a type="button" class="btn btn-primary cinza text-white"
                   href="{{route('fisemi.impressao',$registro->id)}}" target="_blank">
                    <h3><i class="fa fa-file"> IMPRIMIR</i></h3>
                </a>
            </div>
        @endif
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="email" class="audiowide"> <i class="fa fa-envelope"></i> E-mail</label>
                    <input type="email" class="form-control" name="email" id="email"
                           value="{{isset($registro->email) ? $registro->email : ''}}"
                           aria-describedby="nameHelp"  placeholder="Informe o seu email" required autofocus>
                    <small id="nameHelp" class="form-text text-muted">Informe seu email.</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="nome" class="audiowide"> <i class="fa fa-book"></i> Instituição de ensino</label>
                    <input type="text" class="form-control caixa_alta" name="instituicao_ensino"
                           id="instituicao_ensino" aria-describedby="nameHelp"  placeholder="Entre com a instituição de ensino"
                           value="{{isset($registro->instituicao_ensino) ? $registro->instituicao_ensino : ''}}" required>
                    <small id="nameHelp" class="form-text text-muted">Informe a instituição de ensino.</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="foto" class="audiowide"> <i class="fa fa-camera"></i> Insira sua foto </label>
                    <input type="file" class="form-control caixa_alta" name="foto"
                           id="foto" aria-describedby="nameHelp"
                           value="{{isset($registro->foto) ? $registro->foto : ''}}" >
                    <small id="nameHelp" class="form-text text-muted">Insira uma imagem</small>
                    @if(isset($registro->foto))
                        <img src="{{asset($registro->foto)}}" alt="Imagem do candidato" width="90px" height="90px">
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header bg-dark">
        <strong class="text-white"> <i class="fa fa-user-secret"></i> DADOS PESSOAIS</strong>
    </div>
    <div class="card-body">

        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <label for="nome" class="audiowide"> <i class="fa fa-user-circle-o"></i> Nome completo</label>
                    <input type="text" class="form-control caixa_alta" name="nome" id="nome"
                           value="{{isset($registro->nome) ? $registro->nome : ''}}"
                           aria-describedby="nameHelp"  placeholder="Entre com o nome" required>
                    <small id="nameHelp" class="form-text text-muted">Informe o nome completo</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="nome" class="audiowide"> <i class="fa fa-id-card"></i> R.G</label>
                    <input type="text" class="form-control caixa_alta" name="rg"
                           value="{{isset($registro->rg) ? $registro->rg : ''}}"
                           id="rg" aria-describedby="nameHelp"  placeholder="Entre com o RG" required>
                    <small id="nameHelp" class="form-text text-muted">Informe o R.G</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="nome" class="audiowide"> <i class="fa fa-building"></i> Orgão expedidor</label>
                    <input type="text" class="form-control caixa_alta" name="orgao_expedidor"
                           value="{{isset($registro->orgao_expedidor) ? $registro->orgao_expedidor : ''}}"
                           id="orgao_expedidor" aria-describedby="nameHelp"  placeholder="Entre com o orgão expedidor" required>
                    <small id="nameHelp" class="form-text text-muted">Informe o orgão expedidor.</small>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <label for="nome" class="audiowide"> <i class="fa fa-id-card-o"></i> C.P.F</label>
                    <input type="text" class="form-control caixa_alta" name="cpf" id="cpf"
                           value="{{isset($registro->cpf) ? $registro->cpf : ''}}"
                           aria-describedby="nameHelp"  placeholder="Entre com o C.P.F" required>
                    <small id="nameHelp" class="form-text text-muted">Informe seu CPF</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="data_nacimento" class="audiowide"> <i class="fa fa-calendar"></i> Data de nascimento</label>
                    <input type="date" class="form-control caixa_alta" name="data_nacimento" id="data_nacimento"
                           value="{{isset($registro->data_nacimento) ? $registro->data_nacimento : ''}}"
                           aria-describedby="nameHelp"  placeholder="" required>
                    <small id="nameHelp" class="form-text text-muted">Informe sua data de nacimento</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="idade" class="audiowide"> <i class="fa fa-calendar-times-o"></i> Informe sua idade</label>
                    <input type="number" class="form-control caixa_alta" name="idade" id="idade"
                           value="{{isset($registro->idade) ? $registro->idade : ''}}"
                           aria-describedby="nameHelp"  placeholder="Entre com sua idade" required>
                    <small id="nameHelp" class="form-text text-muted">Informe sua idade.</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="estado_civil" class="audiowide"> <i class="fa fa-resistance"></i> Estado civil</label>
                    <select class="form-control" id="estado_civil" name="estado_civil" required>
                        <option value="">Informe um estado civil</option>
                        <option value="solteiro" @if (isset($registro->estado_civil)) @if ($registro->estado_civil == "solteiro") selected="selected" @endif @endif> Solteiro(a) </option>
                        <option value="casado" @if (isset($registro->estado_civil)) @if ($registro->estado_civil == "casado") selected="selected" @endif @endif> Casado(a) </option>
                        <option value="divorciado" @if (isset($registro->estado_civil)) @if ($registro->estado_civil == "divorciado") selected="selected" @endif @endif> divorciado(a) </option>
                        <option value="viuvo" @if (isset($registro->estado_civil)) @if ($registro->estado_civil == "viuvo") selected="selected" @endif @endif> Viúvo(a) </option>
                    </select>
                    <small id="guerraHelp" class="form-text text-muted">Informe seu Estado Civil.</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="nome_mae" class="audiowide"> <i class="fa fa-female"></i> Nome da Mãe</label>
                    <input type="text" class="form-control caixa_alta" name="nome_mae" id="nome_mae"
                           value="{{isset($registro->nome_mae) ? $registro->nome_mae : ''}}"
                           aria-describedby="nameHelp"  placeholder="Informe o nome da mãe" required>
                    <small id="nameHelp" class="form-text text-muted">Informe o nome da mãe</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="nome_pai" class="audiowide"> <i class="fa fa-male"></i> Nome da Pai</label>
                    <input type="text" class="form-control caixa_alta" name="nome_pai" id="nome_pai"
                           value="{{isset($registro->nome_pai) ? $registro->nome_pai : ''}}"
                           aria-describedby="nameHelp"  placeholder="Informe o nome da mãe">
                    <small id="nameHelp" class="form-text text-muted">Informe o nome do pai</small>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="quantidade_filhos" class="audiowide"> <i class="fa fa-meh-o"></i> Quantidade de filhos</label>
                    <input type="number" class="form-control caixa_alta" name="quantidade_filhos" id="quantidade_filhos"
                           value="{{isset($registro->quantidade_filhos) ? $registro->quantidade_filhos : ''}}"
                           aria-describedby="nameHelp"  placeholder="" required>
                    <small id="nameHelp" class="form-text text-muted">Informe a quantidade de filhos</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="arrimo" class="audiowide"> <i class="fa fa-resistance"></i> Arrimo</label>
                    <select class="form-control" id="arrimo" name="arrimo" required>
                        <option value="">Informe</option>
                        <option value="sim" @if (isset($registro->arrimo)) @if ($registro->arrimo == "sim") selected="selected" @endif @endif> SIM </option>
                        <option value="nao" @if (isset($registro->arrimo)) @if ($registro->arrimo == "nao") selected="selected" @endif @endif> NÃO </option>
                    </select>
                    <small id="guerraHelp" class="form-text text-muted">Informe Arrimo.</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="numero_dependente" class="audiowide"> <i class="fa fa-male"></i> Num de dependentes</label>
                    <input type="number" class="form-control caixa_alta" name="numero_dependente" id="numero_dependente"
                           value="{{isset($registro->numero_dependente) ? $registro->numero_dependente : ''}}"
                           aria-describedby="nameHelp"  placeholder="Informe o número">
                    <small id="nameHelp" class="form-text text-muted">Informe o número de dependentes</small>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header bg-dark">
        <strong class="text-white"> <i class="fa fa-address-card"></i> CONTATO E ENDEREÇO</strong>

    </div>
    <div class="card-body">

        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <label for="bairro" class="audiowide"> <i class="fa fa-mobile-phone"></i> Informe o bairro</label>
                    <input type="text" class="form-control caixa_alta" name="bairro"  id="bairro"
                           value="{{isset($registro->bairro) ? $registro->bairro : ''}}"
                           aria-describedby="nameHelp"  placeholder="Informe seu bairro">
                    <small id="nameHelp" class="form-text text-muted">Informe seu bairro</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="nome" class="audiowide"> <i class="fa fa-mobile-phone"></i> Número para contato</label>
                    <input type="text" class="form-control caixa_alta" name="telefone"  id="telefone"
                           value="{{isset($registro->telefone) ? $registro->telefone : ''}}"
                           aria-describedby="nameHelp"  placeholder="Informe seu telefone">
                    <small id="nameHelp" class="form-text text-muted">Informe seu número para contato</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="cidade" class="audiowide"> <i class="fa fa-map-pin"></i> Informe sua cidade</label>
                    <input type="text" class="form-control caixa_alta" name="cidade" id="idcidadeade"
                           value="{{isset($registro->cidade) ? $registro->cidade : ''}}"
                           aria-describedby="nameHelp"  placeholder="Entre com sua cidade" required>
                    <small id="nameHelp" class="form-text text-muted">Informe sua cidade.</small>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="endereco" class="audiowide"> <i class="fa fa-map-marker"></i> Informe seu endereço</label>
                    <input type="text" class="form-control caixa_alta" name="endereco" id="endereco"
                           value="{{isset($registro->endereco) ? $registro->endereco : ''}}"
                           aria-describedby="nameHelp"  placeholder="Informe seu endereço" required>
                    <small id="nameHelp" class="form-text text-muted">Informe o endereço</small>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="estado" class="audiowide"> <i class="fa fa-map"></i> Selecione o Estado</label>
                    <select class="form-control" id="estado" name="estado" required>
                        <option value="">Informe o Estado</option>
                        <option value="AC" @if (isset($registro->estado)) @if ($registro->estado == "AC") selected="selected" @endif @endif> Acre </option>
                        <option value="AL" @if (isset($registro->estado)) @if ($registro->estado == "AL") selected="selected" @endif @endif> Alagoas </option>
                        <option value="AP" @if (isset($registro->estado)) @if ($registro->estado == "AP") selected="selected" @endif @endif> Amapá </option>
                        <option value="AM" @if (isset($registro->estado)) @if ($registro->estado == "AM") selected="selected" @endif @endif> Amazonas </option>
                        <option value="BA" @if (isset($registro->estado)) @if ($registro->estado == "BA") selected="selected" @endif @endif> Bahia </option>
                        <option value="CE" @if (isset($registro->estado)) @if ($registro->estado == "CE") selected="selected" @endif @endif> Ceará </option>
                        <option value="DF" @if (isset($registro->estado)) @if ($registro->estado == "DF") selected="selected" @endif @endif> Distrito Federal </option>
                        <option value="ES" @if (isset($registro->estado)) @if ($registro->estado == "ES") selected="selected" @endif @endif> Espírito Santo </option>
                        <option value="GO" @if (isset($registro->estado)) @if ($registro->estado == "GO") selected="selected" @endif @endif> Goiás </option>
                        <option value="MA" @if (isset($registro->estado)) @if ($registro->estado == "MA") selected="selected" @endif @endif> Maranhão </option>
                        <option value="MT" @if (isset($registro->estado)) @if ($registro->estado == "MT") selected="selected" @endif @endif> Mato Grosso </option>
                        <option value="MS" @if (isset($registro->estado)) @if ($registro->estado == "MS") selected="selected" @endif @endif> Mato Grosso do Sul </option>
                        <option value="MG" @if (isset($registro->estado)) @if ($registro->estado == "MG") selected="selected" @endif @endif> Minas Gerais </option>
                        <option value="PA" @if (isset($registro->estado)) @if ($registro->estado == "PA") selected="selected" @endif @endif> Pará </option>
                        <option value="PB" @if (isset($registro->estado)) @if ($registro->estado == "PB") selected="selected" @endif @endif> Paraíba </option>
                        <option value="PR" @if (isset($registro->estado)) @if ($registro->estado == "PR") selected="selected" @endif @endif> Paraná </option>
                        <option value="PE" @if (isset($registro->estado)) @if ($registro->estado == "PE") selected="selected" @endif @endif> Pernambuco </option>
                        <option value="PI" @if (isset($registro->estado)) @if ($registro->estado == "PI") selected="selected" @endif @endif> Piauí </option>
                        <option value="RJ" @if (isset($registro->estado)) @if ($registro->estado == "RJ") selected="selected" @endif @endif> Rio de Janeiro </option>
                        <option value="RN" @if (isset($registro->estado)) @if ($registro->estado == "RN") selected="selected" @endif @endif> Rio Grande do Norte </option>
                        <option value="RS" @if (isset($registro->estado)) @if ($registro->estado == "RS") selected="selected" @endif @endif> Rio Grande do Sul </option>
                        <option value="RO" @if (isset($registro->estado)) @if ($registro->estado == "RO") selected="selected" @endif @endif> Rondônia </option>
                        <option value="RR" @if (isset($registro->estado)) @if ($registro->estado == "RR") selected="selected" @endif @endif> Roraima </option>
                        <option value="SC" @if (isset($registro->estado)) @if ($registro->estado == "SC") selected="selected" @endif @endif> Santa Catarina </option>
                        <option value="SP" @if (isset($registro->estado)) @if ($registro->estado == "SP") selected="selected" @endif @endif> São Paulo </option>
                        <option value="SE" @if (isset($registro->estado)) @if ($registro->estado == "SE") selected="selected" @endif @endif> Sergipe </option>
                        <option value="TO" @if (isset($registro->estado)) @if ($registro->estado == "TO") selected="selected" @endif @endif> Tocantins </option>
                        <option value="EX" @if (isset($registro->estado)) @if ($registro->estado == "EX") selected="selected" @endif @endif> Estrangeiro </option>
                    </select>
                    <small id="guerraHelp" class="form-text text-muted">Informe o Estado.</small>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header bg-dark">
        <strong class="text-white"> <i class="fa fa-address-card"></i> TEMPO DE SERVIÇO PUBLÍCO</strong>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="servico_publico" class="audiowide"> <i class="fa fa-calendar-check-o"></i> Tempo de serviço público</label>
                    <select class="form-control" id="servico_publico" name="servico_publico" required>
                        <option value="">Informe</option>
                        <option value="sim" @if (isset($registro->servico_publico)) @if ($registro->servico_publico == "sim") selected="selected" @endif @endif> SIM </option>
                        <option value="nao" @if (isset($registro->servico_publico)) @if ($registro->servico_publico == "nao") selected="selected" @endif @endif> NÃO </option>
                    </select>
                    <small id="guerraHelp" class="form-text text-muted">Informe tempo servico público.</small>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="anos" class="audiowide"> <i class="fa fa-calendar-minus-o"></i> Anos</label>
                    <input type="number" class="form-control caixa_alta" name="anos" id="anos"
                           value="{{isset($registro->anos) ? $registro->anos : ''}}"
                           aria-describedby="nameHelp"  placeholder="Informe os anos" required>
                    <small id="nameHelp" class="form-text text-muted">Informe os anos.</small>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="meses" class="audiowide"> <i class="fa fa-calendar-minus-o"></i> Meses</label>
                    <input type="number" class="form-control caixa_alta" name="meses" id="meses"
                           value="{{isset($registro->meses) ? $registro->meses : ''}}"
                           aria-describedby="nameHelp"  placeholder="Informe os meses" required>
                    <small id="nameHelp" class="form-text text-muted">Informe os meses.</small>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="dias" class="audiowide"> <i class="fa fa-calendar-minus-o"></i> Dias</label>
                    <input type="number" class="form-control caixa_alta" name="dias" id="dias"
                           value="{{isset($registro->dias) ? $registro->dias : ''}}"
                           aria-describedby="nameHelp"  placeholder="Informe os dias" required>
                    <small id="nameHelp" class="form-text text-muted">Informe os dias.</small>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="card">
    <div class="card-header bg-dark">
        <strong class="text-white"> <i class="fa fa-address-card"></i> DOCUMENTO COMPRABATÓRIO DE SITUAÇÃO MILITAR</strong>
    </div>
    <div class="card-body">
        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <label for="tipo_documento" class="audiowide"> <i class="fa fa-newspaper-o"></i> Tipo de documento</label>
                    <input type="text" class="form-control caixa_alta" name="tipo_documento" id="anotipo_documentos"
                           value="{{isset($registro->tipo_documento) ? $registro->tipo_documento : ''}}"
                           aria-describedby="nameHelp"  placeholder="Informe o tipo de documento">
                    <small id="nameHelp" class="form-text text-muted">Informe o tipo documento .</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="ra" class="audiowide"> <i class="fa fa-sort-numeric-asc"></i> R.A</label>
                    <input type="number" class="form-control caixa_alta" name="ra" id="ra"
                           value="{{isset($registro->ra) ? $registro->ra : ''}}"
                           aria-describedby="nameHelp"  placeholder="Informe o ra">
                    <small id="nameHelp" class="form-text text-muted">Informe o ra .</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="data_emissao" class="audiowide"> <i class="fa fa-calendar"></i> Data de emissao</label>
                    <input type="date" class="form-control caixa_alta" name="data_emissao" id="data_emissao"
                           value="{{isset($registro->data_emissao) ? $registro->data_emissao : ''}}"
                           aria-describedby="nameHelp"  placeholder="Informe a data de emissao">
                    <small id="nameHelp" class="form-text text-muted">Informe a data de emissao .</small>
                </div>
            </div>

        </div>

        <div class="card">
            <div class="card-header bg-dark">
                <strong class="text-white"> <i class="fa fa-address-card"></i> TEMPO DE SERVIÇO MILITAR PRESTADOR:</strong>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="servico_militar_anos" class="audiowide"> <i class="fa fa-calendar-minus-o"></i> Anos</label>
                            <input type="number" class="form-control caixa_alta" name="servico_militar_anos" id="servico_militar_anos"
                                   value="{{isset($registro->servico_militar_anos) ? $registro->servico_militar_anos : ''}}"
                                   aria-describedby="nameHelp"  placeholder="Informe os anos" required>
                            <small id="nameHelp" class="form-text text-muted">Informe os anos.</small>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="servico_militar_meses" class="audiowide"> <i class="fa fa-calendar-minus-o"></i> Meses</label>
                            <input type="number" class="form-control caixa_alta" name="servico_militar_meses" id="servico_militar_meses"
                                   value="{{isset($registro->servico_militar_meses) ? $registro->servico_militar_meses : ''}}"
                                   aria-describedby="nameHelp"  placeholder="Informe os meses" required>
                            <small id="nameHelp" class="form-text text-muted">Informe os meses.</small>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="servico_militar_dias" class="audiowide"> <i class="fa fa-calendar-minus-o"></i> Dias</label>
                            <input type="number" class="form-control caixa_alta" name="servico_militar_dias" id="servico_militar_dias"
                                   value="{{isset($registro->servico_militar_dias) ? $registro->servico_militar_dias : ''}}"
                                   aria-describedby="nameHelp"  placeholder="Informe os dias" required>
                            <small id="nameHelp" class="form-text text-muted">Informe os dias.</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <label for="organizacao_militar_expedidora" class="audiowide"> <i class="fa fa-first-order"></i> Organização militar expedidora</label>
                    <input type="text" class="form-control caixa_alta" name="organizacao_militar_expedidora" id="organizacao_militar_expedidora"
                           value="{{isset($registro->organizacao_militar_expedidora) ? $registro->organizacao_militar_expedidora : ''}}"
                           aria-describedby="nameHelp"  placeholder="Informe a organização militar expedidora">
                    <small id="nameHelp" class="form-text text-muted">Informe a organização militar expedidora .</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="ministerio" class="audiowide"> <i class="fa fa-arrow-circle-o-right"></i> Ministério</label>
                    <input type="text" class="form-control caixa_alta" name="ministerio" id="ministerio"
                           value="{{isset($registro->ministerio) ? $registro->ministerio : ''}}"
                           aria-describedby="nameHelp"  placeholder="Informe o ministerio">
                    <small id="nameHelp" class="form-text text-muted">Informe o ministerio .</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="posto_graduacao" class="audiowide"> <i class="fa fa-resistance"></i> Posto e graduação</label>
                    <select class="form-control" id="posto_graduacao" name="posto_graduacao" >
                        <option value="">POS/GRAD</option>
                        <option value="Gen Ex" @if (isset($registro->posto_graduacao)) @if ($registro->posto_graduacao == "Gen Ex") selected="selected" @endif @endif>Gen Ex</option>
                        <option value="Gen Div" @if (isset($registro->posto_graduacao)) @if ($registro->posto_graduacao == "Gen Div") selected="selected" @endif @endif>Gen Div</option>
                        <option value="Gen Bda" @if (isset($registro->posto_graduacao)) @if ($registro->posto_graduacao == "Gen Bda") selected="selected" @endif @endif>Gen Bda</option>
                        <option value="Cel" @if (isset($registro->posto_graduacao)) @if ($registro->posto_graduacao == "Cel") selected="selected" @endif @endif>Cel</option>
                        <option value="Ten Cel" @if (isset($registro->posto_graduacao)) @if ($registro->posto_graduacao == "Ten Cel") selected="selected" @endif @endif>Ten Cel</option>
                        <option value="Maj" @if (isset($registro->posto_graduacao)) @if ($registro->posto_graduacao == "Maj") selected="selected" @endif @endif>Maj</option>
                        <option value="Cap" @if (isset($registro->posto_graduacao)) @if ($registro->posto_graduacao == "Cap") selected="selected" @endif @endif>Cap</option>
                        <option value="1º Ten" @if (isset($registro->posto_graduacao)) @if ($registro->posto_graduacao == "1º Ten") selected="selected" @endif @endif>1º Ten</option>
                        <option value="2º Ten" @if (isset($registro->posto_graduacao)) @if ($registro->posto_graduacao == "2º Ten") selected="selected" @endif @endif>2º Ten</option>
                        <option value="Asp" @if (isset($registro->posto_graduacao)) @if ($registro->posto_graduacao == "Asp") selected="selected" @endif @endif>Asp</option>
                        <option value="ST" @if (isset($registro->posto_graduacao)) @if ($registro->posto_graduacao == "ST") selected="selected" @endif @endif>ST</option>
                        <option value="1º Sgt" @if (isset($registro->posto_graduacao)) @if ($registro->posto_graduacao == "1º Sgt") selected="selected" @endif @endif>1º Sgt</option>
                        <option value="2º Sgt" @if (isset($registro->posto_graduacao)) @if ($registro->posto_graduacao == "2º Sgt") selected="selected" @endif @endif>2º Sgt</option>
                        <option value="3º Sgt" @if (isset($registro->posto_graduacao)) @if ($registro->posto_graduacao == "3º Sgt") selected="selected" @endif @endif>3º Sgt</option>
                        <option value="Cb" @if (isset($registro->posto_graduacao)) @if ($registro->posto_graduacao == "Cb") selected="selected" @endif @endif>Cb</option>
                        <option value="Taif" @if (isset($registro->posto_graduacao)) @if ($registro->posto_graduacao == "Taif") selected="selected" @endif @endif>Taif</option>
                        <option value="Sd" @if (isset($registro->posto_graduacao)) @if ($registro->posto_graduacao == "Sd") selected="selected" @endif @endif>Sd</option>
                        <option value="SC" @if (isset($registro->posto_graduacao)) @if ($registro->posto_graduacao == "SC") selected="selected" @endif @endif>SC</option>
                    </select>
                    <small id="guerraHelp" class="form-text text-muted">Informe o posto e graduação</small>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <label for="quadro_corpo" class="audiowide"> <i class="fa fa-object-group"></i> Quadro ou corpo</label>
                    <input type="text" class="form-control caixa_alta" name="quadro_corpo" id="quadro_corpo"
                           value="{{isset($registro->quadro_corpo) ? $registro->quadro_corpo : ''}}"
                           aria-describedby="nameHelp"  placeholder="Informe o quadro corpo">
                    <small id="nameHelp" class="form-text text-muted">Informe o quadro corpo.</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="data_incorporacao" class="audiowide"> <i class="fa fa-calendar"></i> Data incorporação</label>
                    <input type="date" class="form-control caixa_alta" name="data_incorporacao" id="data_incorporacao"
                           value="{{isset($registro->data_incorporacao) ? $registro->data_incorporacao : ''}}"
                           aria-describedby="nameHelp"  placeholder="Informe a data de incorporação">
                    <small id="nameHelp" class="form-text text-muted">Informe a data de incorporação</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="data_licenciamento" class="audiowide"> <i class="fa fa-calendar"></i> Data de licenciamento</label>
                    <input type="date" class="form-control caixa_alta" name="data_licenciamento" id="data_licenciamento"
                           value="{{isset($registro->data_licenciamento) ? $registro->data_licenciamento : ''}}"
                           aria-describedby="nameHelp"  placeholder="Informe a data de licenciamento">
                    <small id="nameHelp" class="form-text text-muted">Informe a data de licenciamento</small>
                </div>
            </div>

        </div>

    </div>

</div>

<div class="card">
    <div class="card-header bg-dark">
        <strong class="text-white"> <i class="fa fa-address-card "></i> PRESTAÇÃO DO SERVIÇO MILITAR</strong>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="voluntario_servico_militar" class="audiowide"> <i class="fa fa-resistance"></i> Voluntário para serviço militar</label>
                    <select class="form-control" id="voluntario_servico_militar" name="voluntario_servico_militar" >
                        <option value="">Voluntário para serviço militar</option>
                        <option value="sim" @if (isset($registro->voluntario_servico_militar)) @if ($registro->voluntario_servico_militar == "sim") selected="selected" @endif @endif>Sim</option>
                        <option value="nao" @if (isset($registro->voluntario_servico_militar)) @if ($registro->voluntario_servico_militar == "nao") selected="selected" @endif @endif>Não</option>
                    </select>
                    <small id="guerraHelp" class="form-text text-muted">Voluntário para serviço militar</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="exercito" class="audiowide"> <i class="fa fa-resistance"></i> Voluntario exército</label>
                    <select class="form-control" id="exercito" name="exercito" >
                        <option value="">Voluntário</option>
                        <option value="sim" @if (isset($registro->exercito)) @if ($registro->exercito == "sim") selected="selected" @endif @endif>Sim</option>
                        <option value="nao" @if (isset($registro->exercito)) @if ($registro->exercito == "nao") selected="selected" @endif @endif>Não</option>
                    </select>
                    <small id="guerraHelp" class="form-text text-muted">Voluntário para serviço militar</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="marinha" class="audiowide"> <i class="fa fa-resistance"></i> Voluntario marinha</label>
                    <select class="form-control" id="marinha" name="marinha" >
                        <option value="">Voluntário</option>
                        <option value="sim" @if (isset($registro->marinha)) @if ($registro->marinha == "sim") selected="selected" @endif @endif>Sim</option>
                        <option value="nao" @if (isset($registro->marinha)) @if ($registro->marinha == "nao") selected="selected" @endif @endif>Não</option>
                    </select>
                    <small id="guerraHelp" class="form-text text-muted">Voluntário para serviço militar</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="aeronaltica" class="audiowide"> <i class="fa fa-resistance"></i> Voluntario aeronáltica</label>
                    <select class="form-control" id="aeronaltica" name="aeronaltica" >
                        <option value="">Voluntário</option>
                        <option value="sim" @if (isset($registro->aeronaltica)) @if ($registro->aeronaltica == "sim") selected="selected" @endif @endif>Sim</option>
                        <option value="nao" @if (isset($registro->aeronaltica)) @if ($registro->aeronaltica == "nao") selected="selected" @endif @endif>Não</option>
                    </select>
                    <small id="guerraHelp" class="form-text text-muted">Voluntário para serviço militar</small>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="qualquer_forca" class="audiowide"> <i class="fa fa-resistance"></i> Voluntario qualquer força</label>
                    <select class="form-control" id="qualquer_forca" name="qualquer_forca" >
                        <option value="">Voluntário</option>
                        <option value="sim" @if (isset($registro->qualquer_forca)) @if ($registro->qualquer_forca == "sim") selected="selected" @endif @endif>Sim</option>
                        <option value="nao" @if (isset($registro->qualquer_forca)) @if ($registro->qualquer_forca == "nao") selected="selected" @endif @endif>Não</option>
                    </select>
                    <small id="guerraHelp" class="form-text text-muted">Voluntário para serviço militar</small>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header bg-dark">
        <strong class="text-white"> <i class="fa fa-address-card "></i> CASO DE CONVOCADO, DESEJO SERVIR, SE POSSIVEL</strong>
    </div>
    <div class="card-body">
        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <label for="prioridade_1" class="audiowide"> <i class="fa fa-resistance"></i> Prioridade 1</label>
                    <select class="form-control" id="prioridade_1" name="prioridade_1" >
                        <option value="">prioridade 1</option>
                        <option value="exercito" @if (isset($registro->prioridade_1)) @if ($registro->prioridade_1 == "exercito") selected="selected" @endif @endif>Exército</option>
                        <option value="marinha" @if (isset($registro->prioridade_1)) @if ($registro->prioridade_1 == "marinha") selected="selected" @endif @endif>Marinha</option>
                        <option value="aeronaltica" @if (isset($registro->prioridade_1)) @if ($registro->prioridade_1 == "aeronaltica") selected="selected" @endif @endif>Aeronáltica</option>
                    </select>
                    <small id="guerraHelp" class="form-text text-muted">Prioridade 1</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="prioridade_2" class="audiowide"> <i class="fa fa-resistance"></i> Prioridade 2</label>
                    <select class="form-control" id="prioridade_2" name="prioridade_2" >
                        <option value="">prioridade 2</option>
                        <option value="exercito" @if (isset($registro->prioridade_2)) @if ($registro->prioridade_2 == "exercito") selected="selected" @endif @endif>Exército</option>
                        <option value="marinha" @if (isset($registro->prioridade_2)) @if ($registro->prioridade_2 == "marinha") selected="selected" @endif @endif>Marinha</option>
                        <option value="aeronaltica" @if (isset($registro->prioridade_2)) @if ($registro->prioridade_2 == "aeronaltica") selected="selected" @endif @endif>Aeronáltica</option>
                    </select>
                    <small id="guerraHelp" class="form-text text-muted">Prioridade 2</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="prioridade_3" class="audiowide"> <i class="fa fa-resistance"></i> Prioridade 3</label>
                    <select class="form-control" id="prioridade_3" name="prioridade_3" >
                        <option value="">prioridade 1</option>
                        <option value="exercito" @if (isset($registro->prioridade_3)) @if ($registro->prioridade_3 == "exercito") selected="selected" @endif @endif>Exército</option>
                        <option value="marinha" @if (isset($registro->prioridade_3)) @if ($registro->prioridade_3 == "marinha") selected="selected" @endif @endif>Marinha</option>
                        <option value="aeronaltica" @if (isset($registro->prioridade_3)) @if ($registro->prioridade_3 == "aeronaltica") selected="selected" @endif @endif>Aeronáltica</option>
                    </select>
                    <small id="guerraHelp" class="form-text text-muted">Prioridade 3</small>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <label for="localidade_2" class="audiowide"> <i class="fa fa-calendar"></i> Guarnição/Localidade prioridade 1</label>
                    <input type="text" class="form-control caixa_alta" name="localidade_1" id="localidade_1"
                           value="{{isset($registro->localidade_2) ? $registro->localidade_2 : ''}}"
                           aria-describedby="nameHelp"  placeholder="Informe a localidade">
                    <small id="nameHelp" class="form-text text-muted">Informe a prioridade</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="localidade_2" class="audiowide"> <i class="fa fa-calendar"></i> Guarnição/Localidade prioridade 2</label>
                    <input type="text" class="form-control caixa_alta" name="localidade_2" id="localidade_2"
                           value="{{isset($registro->localidade_2) ? $registro->localidade_2 : ''}}"
                           aria-describedby="nameHelp"  placeholder="Informe a localidade">
                    <small id="nameHelp" class="form-text text-muted">Informe a prioridade</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="localidade_2" class="audiowide"> <i class="fa fa-calendar"></i> Guarnição/Localidade prioridade 3</label>
                    <input type="text" class="form-control caixa_alta" name="localidade_3" id="localidade_3"
                           value="{{isset($registro->localidade_3) ? $registro->localidade_3 : ''}}"
                           aria-describedby="nameHelp"  placeholder="Informe a localidade">
                    <small id="nameHelp" class="form-text text-muted">Informe a prioridade</small>
                </div>
            </div>
        </div>
    </div>
</div>



