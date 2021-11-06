<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function create(){
        
        return view('cadastro', ['page' => 'cadastro']);

    }

    //cadastro de usuários 
    public function insert(Request $form){

        $user = new Users();

        $user->name = $form->name;
        $user->email = $form->email;
        $user->user = $form->user;
        $user->password = Hash::make($form->password);

        $user->save();

        return redirect()->route('login');

    }

    //ações de login
    public function login(Request $form){

        //enviando o form
        if ($form->isMethod('POST')) {
            
            $email = $form->email;
            $password = $form->password;

            $query = Users::select('id','name','email','user','password')->where('email', $email)->get();

            //confere se encontrou usuário
            if($query->count()) {
                //confere se senha está correta
                if (Hash::check($password, $query[0]->password)) {

                    unset($query[0]->password);

                    session()->put('email', $query[0]);

                    return redirect()->route('site.index');
                }
            }

            //login errado
            return redirect()->route('login')->with('erro', 'Usuário ou senha inválidos.');
        }

        return view('login');
    }

    public function logout(){
        
        session()->forget('user');
        return redirect()->route('login');
    }
}
