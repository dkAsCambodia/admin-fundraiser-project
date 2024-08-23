<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Transaction;
use App\Models\User;
use PDF;

class PdfDownload extends Component
{
    public function downloadPdf()
    {
        // Data to pass to the PDF view
        $data = ['title' => 'My PDF Document'];

        // Load a view to render into PDF
        $pdf = PDF::loadView('pdf.my-pdf-view', $data);

        // Download the generated PDF
        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->output();
        }, 'document.pdf');
    }

    public function render()
    {
        return view('livewire.pdf-download');
    }
}
