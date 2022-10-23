<?php

require_once '../../librerias/dompdf/autoload.inc.php';
use Dompdf\Dompdf;

$id=$_GET['idventa'];

function file_get_contents_curl($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}

 $html=file_get_contents("http://localhost/ventasAlmacen/vistas/ventas/ticketVentaPdf.php?idventa=".$id);


 

$pdf = new DOMPDF();
 


$pdf->set_paper(array(0,0,104,250));
 

$pdf->load_html($html);
 

$pdf->render();
 

$pdf->stream('reporteVenta.pdf');



