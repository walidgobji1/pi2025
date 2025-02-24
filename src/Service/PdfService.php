<?php
namespace App\Service;

use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\Response;

class PdfService
{
    private Dompdf $domPdf;

    public function __construct() {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Garamond');
        
        $this->domPdf = new Dompdf($pdfOptions);
    }

    public function showPdfFile(string $html): Response {
        $this->domPdf->loadHtml($html);
        $this->domPdf->render();

        $pdfOutput = $this->domPdf->output();

        return new Response($pdfOutput, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="cours.pdf"',
        ]);
    }
}
