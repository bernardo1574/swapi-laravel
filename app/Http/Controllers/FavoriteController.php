<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        return view('favorites.main');
    }

    public function store(Request $request)
    {

        $request->validate ([
           'name' => 'required',
            'type' => 'required',
            'user_id' => 'required',
            'url' => 'url'
        ]);
        Favorite::create ([
            'name' => $request['name'],
            'type' => $request['type'],
            'user_id' => $request['user_id'],
            'url' => $request['url'],
        ]);

        return view ('favorites.main')->with ('success', 'Adicionado ao favorito com sucesso!');

    }

    public function delete(Request $request)
    {
        $favorite = Favorite::find($request['id']);
        $favorite->delete();
        return view ('favorites.main')->with ('success', 'Adicionado ao favorito com sucesso!');
    }

    public function getType($type){
        $return = array (
            'type' => $type,
            'typeString' => ($type === 'planet') ? 'Planetas' : 'Naves',
            'array' => []);
        $return['array'] = Favorite::all ()->where ('type', $type)->where ('user_id', Auth::user()->id);

        return view('favorites.get', compact ('return'));
    }
}
