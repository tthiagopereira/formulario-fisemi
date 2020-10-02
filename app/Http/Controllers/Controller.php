<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function mensagemErro($mensagem)
    {
        return \Session::flash('mensagem', ['msg' => $mensagem, 'cor' => '#6e0500']);
    }

    public function mensagemSucesso($mensagem)
    {
        return \Session::flash('mensagem', ['msg' => $mensagem, 'cor' => '#0f6a18']);
    }

    public function mesagemAviso($mensagem)
    {
        return \Session::flash('mensagem', ['msg' => $mensagem, 'cor' => '#0028ff']);
    }

    public function saveImage($image, $cpf)
    {
        $rand = rand(11111, 99999);
        $diretorio = 'img/foto/fisemi';
        $ext = $image->guessClientExtension();
        $nomeArquivo = "_img_" . $rand . "." . $ext;
        $image->move($diretorio, $nomeArquivo);
        return $diretorio . '/' . $nomeArquivo;
    }
}