<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{

    public function geradorQrCode(){
        return view('gerarQrCode');
    }

    public function gerarQrCode(Request $request){
        $input = $request->all();
        $qrCode = QrCode::size(200)->generate($input['link']);
        $validator = 'QrCode Gerado com Sucesso!';
        return view('qrCode', compact('qrCode'))
                        ->withErrors($validator)
						->withInput(session()->flashInput($request->input()));
    }

    public function qrCode(){
        return view('QrCode');
    }
}
