<?php

namespace App\Http\Controllers;

use App\FormularioFisemi;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\DeclareDeclare;

class FormularioFisemiController extends Controller
{

    public function index()
    {
        return view('pages.index');
    }

    public function create()
    {
        return view('pages.form.create');
    }

    public function curriculo()
    {
        return \PDF::loadView('pages.form.curriculo')
            // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
            //            ->download('SISEMI.pdf');
            ->stream('Curriculo');
        //        return view('pages.form.curriculo');
    }

    public function store(Request $request)
    {
        $registro = new FormularioFisemi();
        $registro->email = $request['email'];
        $registro->instituicao_ensino = $request['instituicao_ensino'];
        $registro->nome = $request['nome'];
        $registro->rg = $request['rg'];
        $registro->orgao_expedidor = $request['orgao_expedidor'];
        $registro->cpf = $request['cpf'];
        $registro->data_nacimento = $request['data_nacimento'];
        $registro->idade = $request['idade'];
        $registro->estado_civil = $request['estado_civil'];
        $registro->nome_mae = $request['nome_mae'];
        $registro->nome_pai = $request['nome_pai'];
        $registro->quantidade_filhos = $request['quantidade_filhos'];
        $registro->arrimo = $request['arrimo'];
        $registro->numero_dependente = $request['numero_dependente'];
        $registro->telefone = $request['telefone'];
        $registro->endereco = $request['endereco'];
        $registro->bairro = $request['bairro'];
        $registro->cidade = $request['cidade'];
        $registro->servico_publico = $request['servico_publico'];
        $registro->anos = $request['anos'];
        $registro->meses = $request['meses'];
        $registro->dias = $request['dias'];
        $registro->tipo_documento = $request['tipo_documento'];
        $registro->ra = $request['ra'];
        $registro->data_emissao = $request['data_emissao'];
        $registro->servico_militar_anos = $request['servico_militar_anos'];
        $registro->servico_militar_meses = $request['servico_militar_meses'];
        $registro->servico_militar_dias = $request['servico_militar_dias'];
        $registro->organizacao_militar_expedidora = $request['organizacao_militar_expedidora'];
        $registro->ministerio = $request['ministerio'];
        $registro->posto_graduacao = $request['posto_graduacao'];
        $registro->estado = $request['estado'];
        $registro->quadro_corpo = $request['quadro_corpo'];
        $registro->data_incorporacao = $request['data_incorporacao'];
        $registro->data_licenciamento = $request['data_licenciamento'];
        $registro->voluntario_servico_militar = $request['voluntario_servico_militar'];
        $registro->exercito = $request['exercito'];
        $registro->marinha = $request['marinha'];
        $registro->aeronaltica = $request['aeronaltica'];
        $registro->qualquer_forca = $request['qualquer_forca'];
        $registro->prioridade_1 = $request['prioridade_1'];
        $registro->prioridade_2 = $request['prioridade_2'];
        $registro->prioridade_3 = $request['prioridade_3'];
        $registro->localidade_1 = $request['localidade_1'];
        $registro->localidade_2 = $request['localidade_2'];
        $registro->localidade_3 = $request['localidade_3'];

        $image = $request->file('foto');

        if ($image) {
            $registro->foto = $this->saveImage($image, $request['cpf']);
        }
        $registro->save();
        $this->mensagemSucesso('Formulario preenchido com sucesso!');
        return redirect()->route('fisemi');
    }

    public function edit(Request $request)
    {
        $registro = FormularioFisemi::where('cpf', $request['cpf'])->first();
        if (!$registro) {
            $this->mesagemAviso('Registro não encontrado Realize o cadastro');
            return redirect()->route('fisemi');
        }

        return view('pages.form.edit', compact('registro'));
    }

    public function update(Request $request, $id)
    {
        $registro = FormularioFisemi::find($id);
        $registro->update($request->all());
        $this->mensagemSucesso('Atualizado com sucesso');
        return redirect()->route('fisemi');
    }

    public function impressao($id)
    {
        $registro = FormularioFisemi::find($id);
        return \PDF::loadView('pages.form.pdf', compact('registro'))
            // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
            ->download('FISEMI_' . $registro->nome . '.pdf');
        //            ->stream('Ficha Fisemi');
    }
}