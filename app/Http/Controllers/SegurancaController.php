<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use RealRashid\SweetAlert\Facades\Alert;

class SegurancaController extends Controller
{
    // USUARIOS

    public function user_index(){

        $usuarios = User::orderBy('created_at', 'desc');

        $usuarios = $usuarios->paginate(10);

        return view('seguranca.usuarios.index', compact('usuarios'));
    }

    public function user_inserir(){
        return view('seguranca.usuarios.inserir');
    }

    public function user_store(Request $request){

        $user = User::create([
            'nome' => $request->nome,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'ativo' => $request->ativo,
        ]);

        Alert::success('Parabéns', 'Usuário cadastrado com sucesso!');

        return redirect()->route('seguranca.user.index');
    }

    public function user_edit($user_id){

        $usuario = User::findOrFail($user_id);

        return view('seguranca.usuarios.edit', compact('usuario'));
    }

    public function user_update(Request $request, $user_id){

        $user = User::findOrFail($user_id);

        $user->update([
            'nome' => $request->nome,
            'username' => $request->username,
            'email' => $request->email,
            // 'password' => Hash::make($request->password),
            'ativo' => $request->ativo,
        ]);

        Alert::success('Parabéns', 'Usuário atualizado com sucesso!');

        return redirect()->route('seguranca.user.index');
    }

    public function user_senha_edit($user_id){

        $usuario = User::findOrFail($user_id);

        return view('seguranca.usuarios.senha', compact('usuario'));
    }

    public function user_senha_update(Request $request, $user_id){

        $user = User::findOrFail($user_id);

        if(!Hash::check($request->old_password, $user->password)){
            throw ValidationException::withMessages(['old_password' => 'Senha incorreta']);
        }

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        Alert::success('Parabéns', 'Senha de usuário atualizada com sucesso!');

        return redirect()->route('seguranca.user.index');
    }

    public function user_destroy(){
        return view('seguranca.usuarios.index');
    }
}
