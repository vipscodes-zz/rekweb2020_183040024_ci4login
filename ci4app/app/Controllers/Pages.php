<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {


        $data = [
            'title' => 'Home | VIP CODE STUDIO'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | VIP CODE STUDIO'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | VIP CODE STUDIO',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jl. Setiabudhi No. 123',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'Jl. Setiabudhi No. 193',
                    'kota' => 'Bandung'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }

    //--------------------------------------------------------------------

}
