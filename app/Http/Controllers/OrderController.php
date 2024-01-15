<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::orderBy('id','ASC')->get();
        $data['orders']=$orders;
        return view('pdf',$data);
    }

    
    public function downloadpdf(){
        $orders = Order::orderBy('id','ASC')->get();
        $data['orders']=$orders;
       $pdf = Pdf::loadView('pdf.order',$data);
       return $pdf->download('order.pdf');
    //    return $pdf->stream();
    }


}
