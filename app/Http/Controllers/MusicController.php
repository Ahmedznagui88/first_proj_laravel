<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicController extends Controller
{
    public $sounds = [
        [
            'picture' => '/media/Synth1.jpg',
            'id' => 1,
            'name' => 'Classic',
            'description' => 'Beautifull Classic Sound',
            'price' => '$100',
        ],
        [
            'picture' => '/media/Cyberpunk.jpeg',
            'id' => 2,
            'name' => 'Futuristic',
            'description' => 'Future sound',
            'price' => '$89',
        ],
        [   'picture' => '/media/Ground.jpg',
            'id' => 3,
            'name' => 'Ground',
            'description' => 'Classic Hip Hop',
            'price' => '$160',
        ],
        [   'picture' => '/media/Lo-Fi.webp',
            'id' => 4,
            'name' => 'Lo-Fi',
            'description' => 'Relax Study Beats',
            'price' => '$50',
        ],
    ];
    public function index() {

        return view('music', ['sounds' => $this->sounds]);
    }

    public function show($id){
        foreach($this->sounds as $sound){
            if($id == $sound['id']){
                return view ('dettaglio-sound', ['sound' => $sound]);
            }
        }
    }
}
