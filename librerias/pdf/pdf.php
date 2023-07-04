<?php  
require_once __DIR__ . '/vendor/autoload.php';
// el paquete que he utilizado, ejecutar en la terminal: 
// composer require mpdf/mpdf
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('
    <h1>Mi primer pdf</h1>
    <img src="https://r-charts.com/es/parte-todo/diagrama-sectores-porcentajes-ggplot2_files/figure-html/diagrama-sectores-porcentajes-color-ggplot.png"></img>');
$mpdf->Output();
?>