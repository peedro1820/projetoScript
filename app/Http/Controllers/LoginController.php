<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function telaLogin() {
        return view('telalogin');
    }

    public function telaEsqueceuSenha() {
        echo 'Abriria a viw de esqueceu a senha';
    }

    public function logar(Request $request) {
        
        if($request->email == 'pedro@gmail.com' && $request->senha == '123456'){
            session(['nome' => 'Pedro']);
            session(['id' => '1'])
            return redirect()->route('produtos.blade.php');
        }else{
            return ->withErrors('telalogin.blade.php')->with('erro', 'Login ou senha inválida');
        }

        print $request->email;
        echo '<br/>';
        echo $request->senha;
        echo 'Cheguei aqui';
    }
}
