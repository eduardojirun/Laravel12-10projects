<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfGeneratorController extends Controller
{
    public function index()
    {
        $data = [
            'imagePath'    => public_path('img/profile.jpg'),
            'name'         => 'Lalo Landa',
            'address'      => 'CDMX',
            'mobileNumber' => '1122334455',
            'email'        => 'lalo@landa.com'
        ];
        $pdf = Pdf::loadView('resume', $data);
        return $pdf->stream('resume.pdf');
    }
}
