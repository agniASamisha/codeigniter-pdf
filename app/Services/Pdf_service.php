<?php
namespace App\Services;

use Dompdf\Dompdf;

class Pdf_service {

    protected $dompdf;

    public function __construct() {
        $this->dompdf = new Dompdf();
    }

    public function generatePdf($html, $filename = 'document') {
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper('A4', 'portrait');
        $this->dompdf->render();
        
        $this->dompdf->stream($filename . '.pdf', array('Attachment' => 0));
    }
}
?>
