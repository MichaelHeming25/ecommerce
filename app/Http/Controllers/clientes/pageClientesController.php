<?php

namespace App\Http\Controllers\clientes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clientes;

class pageClientesController extends Controller
{
    public function index()
    {
        $this->middleware('clientes');

        $clientes = clientes::all();

        foreach ($clientes as $key => $cliente) {
            if ($cliente['id'] == session()->get('id')) {
                $id = $cliente['id'];
                $name = $cliente['name'];
                $email = $cliente['email'];
                $telefone = $cliente['telefone'];
                $cpf = $cliente['cpf'];
                $usuario = $cliente['usuario'];
                $senha = decrypt($cliente['password']);
                $avatar = $cliente['avatar'];
                $ext_img = $cliente['ext_img'];
                $name_img = $cliente['name_img'];
            }
        }

        $data = ['id'=>$id, 'name'=>$name, 'email'=>$email, 'telefone'=>$telefone, 'cpf'=>$cpf, 'usuario'=>$usuario, 'senha'=>$senha, 'name_img'=>$name_img, 'ext_img'=>$ext_img, 'avatar'=>$avatar];

        return view('clientes.index', ['data' => $data]);
    }
    public function endereco()
    {
        $this->middleware('clientes');

        $clientes = clientes::all();

        foreach ($clientes as $key => $cliente) {
            if ($cliente['id'] == session()->get('id')) {
                $id = $cliente['id'];
                $name = $cliente['name'];
                $email = $cliente['email'];
                $telefone = $cliente['telefone'];
                $cpf = $cliente['cpf'];
                $usuario = $cliente['usuario'];
                $senha = decrypt($cliente['password']);
                $avatar = $cliente['avatar'];
                $ext_img = $cliente['ext_img'];
                $name_img = $cliente['name_img'];
            }
        }

        $data = ['id'=>$id, 'name'=>$name, 'email'=>$email, 'telefone'=>$telefone, 'cpf'=>$cpf, 'usuario'=>$usuario, 'senha'=>$senha, 'name_img'=>$name_img, 'ext_img'=>$ext_img, 'avatar'=>$avatar];

        return view('clientes.endereco.endereco', ['data' => $data]);
    }
}