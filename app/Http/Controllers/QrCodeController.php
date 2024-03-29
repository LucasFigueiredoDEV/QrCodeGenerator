<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{

    public function home(){
        $qrCode = QrCode::size(300)->generate('https://www.instagram.com/_lulucass/');
        return view('home', compact('qrCode'));
    }

    public function geradorQrCode(){
        return view('gerarQrCode');
    }

    public function gerarQrCode(Request $request){
        $input = $request->all();
        $qrCode = QrCode::size(300)->generate('https://www.instagram.com/_lulucass/');
        $qrCodeGerado = QrCode::size(300)->generate($input['link']);
        $validator = 'QrCode Gerado com Sucesso!';
        return view('qrCode', compact('qrCode', 'qrCodeGerado'))
                        ->withErrors($validator)
						->withInput(session()->flashInput($request->input()));
    }

    public function qrCode(){
        return view('QrCode');
    }

    public function download(Request $request)
    {
        $input = $request->all();
        dd($input);
        return response()->streamDownload(
            function () {
                echo QrCode::size(300)
                    ->format('png')
                    ->generate($input['qrCode']);
            },
            'qr-code.png',
            [
                'Content-Type' => 'image/png',
            ]
        );
    }
}
