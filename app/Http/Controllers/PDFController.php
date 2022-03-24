<?php

namespace App\Http\Controllers;

use App\Child;
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

        $view = \View::make('PDF.vaccinationCenter.order', compact('orders'));

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
    public function child_PDF()
    {

      $pdf = new TCPDF(  true, 'UTF-8', false);
      $children= Child::where('user_id',auth()->user()->id)->get();

        // $view = \View::make('pdf.test');

        $view = \View::make('PDF.vaccinationCenter.childern', compact('children'));

        $html_content = $view->render();

        // TCPDF::SetTitle("List of users");

        $pdf->AddPage();

        $pdf->setRTL(true);

        $pdf->writeHTML($html_content, true, false, true, false, '');

        $pdf->SetFont('aealarabiya', '', 14, '', true);

        // D is the change of these two functions. Including D parameter will avoid
        // loading PDF in browser and allows downloading directly

        $pdf->Output('تقرير الاطفال.pdf', 'D');

    }
    public function avalibel_vaccin_PDF()
    {

      $pdf = new TCPDF(  true, 'UTF-8', false);
      $vaccinations= auth()->user()->vaccinations;

        // $view = \View::make('pdf.test');

        $view = \View::make('PDF.vaccinationCenter.vaccination', compact('vaccinations'));

        $html_content = $view->render();

        // TCPDF::SetTitle("List of users");

        $pdf->AddPage();

        $pdf->setRTL(true);

        $pdf->writeHTML($html_content, true, false, true, false, '');

        $pdf->SetFont('aealarabiya', '', 14, '', true);

        // D is the change of these two functions. Including D parameter will avoid
        // loading PDF in browser and allows downloading directly

        $pdf->Output('تقرير التطعيمات .pdf', 'D');

    }
}
