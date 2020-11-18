<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PHPUnit\Exception;

class ConsumeApiController extends Controller
{
    protected $url = 'https://swapi.dev/api/';

    public function getApi($type, $page){
        $this->url .= $type;
        if (!empty ($page))
            $this->url .= '?page='.$page;

        try {
            $response = Http::get ($this->url);
            $data = json_decode ($response, true);
            $array = array(
                'type' => $type,
                'next' => substr($data['next'], -1),
                'previous'=> substr($data['previous'], -1),
                'arrayApi' => [],
            );
            foreach ($data['results'] as $key => $value){
                array_push ($array['arrayApi'], [
                    'name' => $value['name'],
                    'url' => $value['url'],
                ]);
            }
            return view ('api.index', ['return'=> $array]);
        } catch (Exception $e){
            return view('404');
        }
    }
}
