<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $images = [
            [
                'name' => 'Red leather GUCCI bage',
                'price' => '234 DDD',
                'discount' => '234 DDD',
                'image' => 'https://alloggio.qodeinteractive.com/wp-content/uploads/2020/03/h5-room-img-02.jpg'
            ],
            [
                'name' => 'Red leather GUCCI bage',
                'price' => '454 DDt',
                'discount' => '334 DDt',
                'image' => 'https://alloggio.qodeinteractive.com/wp-content/uploads/2020/03/h5-room-img-05.jpg'
            ],
            [
                'name' => 'Red leather GUCCI bage',
                'price' => '333 33t',
                'discount' => '4550 DFF',
                'image' => 'https://alloggio.qodeinteractive.com/wp-content/uploads/2020/03/h5-room-img-06.jpg'
            ],
            [
                'name' => 'Red leather GUCCI bage',
                'price' => '233 HTM',
                'discount' => 'E444 HTLM',
                'image' => 'https://alloggio.qodeinteractive.com/wp-content/uploads/2020/03/h5-room-img-01.jpg'
            ],
            [
                'name' => 'Red leather GUCCI bage',
                'price' => '33 HTL',
                'discount' => '456 HTL',
                'image' => 'https://alloggio.qodeinteractive.com/wp-content/uploads/2020/03/h5-room-img-06.jpg'
            ],
            [
                'name' => 'Red leather GUCCI bage',
                'price' => '33 HTL',
                'discount' => '456 HTL',
                'image' => 'https://alloggio.qodeinteractive.com/wp-content/uploads/2020/03/h5-room-img-06.jpg'
            ]
            ];
        return view('layouts.shop',['images'=> $images]);
    }
}