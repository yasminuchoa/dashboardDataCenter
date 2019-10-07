<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Historico;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Buscar todos os historicos do banco
        $historicos = Historico::all();

        $temperaturas24 = DB::table('historicos')->where([['id', '=', 3], ['data', '=', '2019-10-24']])->get();

        $temperaturas25 = DB::table('historicos')->where([['id', '=', 3], ['data', '=', '2019-10-25']])->get();

        $temperaturas26 = DB::table('historicos')->where([['id', '=', 3], ['data', '=', '2019-10-26']])->get();

        return view('home', compact('historicos', '$temperaturas24', '$temperaturas25', '$temperaturas26'));
    }

    public function notificacoes()
    {
        return view('notificacoes');
    }
}
