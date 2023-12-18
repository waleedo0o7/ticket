<?php
// Set the character encoding
header('Content-Type: text/html; charset=UTF-8');

// Include the MPDF library
require_once __DIR__ . '/vendor/autoload.php';

// Create an instance of MPDF
$mpdf = new \Mpdf\Mpdf();


$mpdf->SetDefaultBodyCSS('background', "url('bg-full.svg')");
$mpdf->SetDefaultBodyCSS('background-image-resize', 6);


// Configure MPDF for Arabic support
$mpdf->autoScriptToLang = true;
$mpdf->autoLangToFont = true;

// Load the HTML template with Arabic content
$template = file_get_contents('test.html');

// Generate the PDF
$mpdf->WriteHTML($template);
$mpdf->Output('output.pdf', 'D');
