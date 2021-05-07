<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index() {
        return view('index');
    }

    public function logar(Request $request) {
        $nome = $request->nome;
        $senha = $request->senha;

        if ($nome == 'nando' && $senha == 123) {
            return view('feed');
        }

        return view('index');
    }

    public function cadastro(){
        return view('cadastro');
    }

    public function register(Request $request) {
        if ($request->senha !== $request->senhaConfirm) {
            return back()->with(
                'senha',
                'as senhas nao coincidem',
            );
        }

        $request->validate([
            'email' => 'required|email|max:255',
            'senha' => 'required|max:255',
            'senhaConfirm' => 'required|max:255'
        ]);

        return redirect('feed');
    }

    public function friends() {

        $users['users'] = [
            ['name' => 'Luiz Gustavo @tchow#2569', 'imageBack' => "https://via.placeholder.com/400x100/6495ED", 'imageCard' => asset('assets/img/gustavo.jpg'), 'description' => 'Cristão em formação'],
            ['name' => 'Lucas Matheus M Sants @pinye#7777', 'imageBack' => "https://via.placeholder.com/400x100/008B8B", 'imageCard' => asset('assets/img/lucasm.jpg'), 'description' => 'Bateirista e Desenvolvedor'],
            ['name' => 'Carlos W Gama @carloswgama#9999', 'imageBack' => "https://via.placeholder.com/400x100/9932CC", 'imageCard' => asset('assets/img/carlos.jpg'), 'description' => 'Professor e Desenvolvedor'],
            ['name' => 'Arthur Porto @tucario#8585', 'imageBack' => "https://via.placeholder.com/400x100/228B22", 'imageCard' => asset('assets/img/arthur.jpg'), 'description' => 'Student at Harvard'],
            ['name' => 'cleitonpin @Lok#1234', 'imageBack' => asset('assets/img/nogamenolife.jpg'), 'imageCard' => asset('assets/img/cleiton.jpg'), 'description' => 'Desenvolvedor FullStack PHP'],
            ['name' => 'Lucas N Rezende@rezende#8798', 'imageBack' => "https://via.placeholder.com/400x100/FF4500", 'imageCard' => asset('assets/img/rezende.jpg'), 'description' => 'Desenvolvedor FullStack PHP']
        ];

        return view('amigos', $users);
    }
}
