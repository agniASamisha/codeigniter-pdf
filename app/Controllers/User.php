<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Services\Pdf_service;
class User extends BaseController
{
    protected $pdfService;
    public function __construct() {
        $this->pdfService = new Pdf_service();
    }
    
    public function generatePdf() {
        // Example HTML content for PDF
        $html = '<h1>Hello, World!</h1><p>This is a PDF generated using Dompdf in CodeIgniter.</p>
        <h1> Make Sure You Know Your Dummy Data</h1>
        <p>A classic slip-up for new analysts is not knowing dummy data from real data, which be confusing (and embarrassing) when you’re working fast on a project with others. That’s because in some cases dummy data can “look” real, so make sure to ensure everyone involved is aware when dummy data is active.</p>
  ';

        // Generate PDF
        $this->pdfService->generatePdf($html, 'example_document');
    }
}
