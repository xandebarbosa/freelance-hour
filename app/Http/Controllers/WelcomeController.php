<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        //$user = User::find(1); //buscando registro
        //User tem metodos estáticos, que são metodos que posso chamar sem a necessidade de instanciar um elemento
        //$user = User::query()->create([
        //    'name' => 'Alexandre Barbosa',
        //    'email' => 'alexandre@email.com',
        //    'password' => 'alexandre'
        //]);

        //dd($user);

        //$user->email_verified_at = now();

        //dd($user->email_verified_at);

        //Auth::login($user);
        //Auth::logout();

        //return WelcomeController::class;
        return view('welcome');
    }
}
