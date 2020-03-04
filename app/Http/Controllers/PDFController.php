<?php

namespace App\Http\Controllers;

use App\Order;
use Elibyy\TCPDF\TCPDF;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function userOrders()
    {
       
      $pdf = new TCPDF(  true, 'UTF-8', false);
      $orders= Order::where('user_id',auth()->user()->id)->get();
   
    // $view = \View::make('pdf.test');

    $view = \View::make('PDF.childern', compact('orders'));

    $html_content = $view->render();

    // TCPDF::SetTitle("List of users");

    $pdf->AddPage();

    $pdf->setRTL(true);

    $pdf->writeHTML($html_content, true, false, true, false, '');

    $pdf->SetFont('aealarabiya', '', 14, '', true);

    // D is the change of these two functions. Including D parameter will avoid 
    // loading PDF in browser and allows downloading directly
    
    $pdf->Output('تقرير الطلبات.pdf', 'D'); 

    }
}
