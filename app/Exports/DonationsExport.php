<?php
namespace App\Exports;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Models\Transaction;
use Illuminate\Support\Facades\Storage;
use Stevebauman\Location\Facades\Location;

class DonationsExport
{
    public function export()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Subaccount ID');
        $sheet->setCellValue('B1', 'Subaccount Name');
        $sheet->setCellValue('C1', 'Donation ID');
        $sheet->setCellValue('D1', 'Donation Status');
        $sheet->setCellValue('E1', 'Donation Date');
        $sheet->setCellValue('F1', 'Success Date');
        $sheet->setCellValue('G1', 'Failed Date');
        $sheet->setCellValue('H1', 'Donation Frequency');
        $sheet->setCellValue('I1', 'Recurring ID');
        $sheet->setCellValue('J1', 'Installment');
        $sheet->setCellValue('K1', 'Designation ID');
        $sheet->setCellValue('L1', 'Designation Code');
        $sheet->setCellValue('M1', 'Designation Name');
        $sheet->setCellValue('N1', 'Donation Comment');
        $sheet->setCellValue('O1', 'Campaign ID');
        $sheet->setCellValue('P1', 'Campaign Code');
        $sheet->setCellValue('Q1', 'Campaign Name');
        $sheet->setCellValue('R1', 'Element ID');
        $sheet->setCellValue('S1', 'Element Type');
        $sheet->setCellValue('T1', 'Element Name');
        $sheet->setCellValue('U1', 'Supporter ID');
        $sheet->setCellValue('V1', 'Supporter First Name');
        $sheet->setCellValue('W1', 'Supporter Last Name');
        $sheet->setCellValue('X1', 'Supporter Email');
        $sheet->setCellValue('Y1', 'Phone No');
        $sheet->setCellValue('Z1', 'On Behalf of');

        $sheet->setCellValue('AA1', 'Anonymus Donation');
        $sheet->setCellValue('AB1', 'Terms');
        $sheet->setCellValue('AC1', 'Mailing address line 1');
        $sheet->setCellValue('AD1', 'Mailing address line 2');
        $sheet->setCellValue('AE1', 'Mailing City');
        $sheet->setCellValue('AF1', 'Mailing Zip/Postal');
        $sheet->setCellValue('AG1', 'Mailing State/Region');
        $sheet->setCellValue('AH1', 'Mailing Country Code');
        $sheet->setCellValue('AI1', 'Mailing Country');
        $sheet->setCellValue('AJ1', 'Supporter IP Address');
        $sheet->setCellValue('AK1', 'Supporter IP Geolocation');
        $sheet->setCellValue('AL1', 'Supporter Employer');
        $sheet->setCellValue('AM1', 'Payment ID');
        $sheet->setCellValue('AN1', 'Payment Processor');
        $sheet->setCellValue('AO1', 'Payment Method');
        $sheet->setCellValue('AP1', 'Credit Card Type');
        $sheet->setCellValue('AQ1', 'Credit Card Last 4');
        $sheet->setCellValue('AR1', 'Credit Card Expiration Date');
        $sheet->setCellValue('AS1', 'Credit Card Expiration Month');
        $sheet->setCellValue('AT1', 'Credit Card Expiration Year');
        $sheet->setCellValue('AU1', 'Converted Donation Amount');
        $sheet->setCellValue('AV1', 'Donation Amount');
        $sheet->setCellValue('AW1', 'Donation Currency');
        $sheet->setCellValue('AX1', 'Donation Amount Before Fees Covered Option');
        $sheet->setCellValue('AY1', 'Converted Donation Amount Before Fees Covered Option');
        $sheet->setCellValue('AZ1', 'Converted Payout Amount');

        $sheet->setCellValue('BA1', 'Payout Amount');
        $sheet->setCellValue('BB1', 'Payout Currency');
        $sheet->setCellValue('BC1', 'Converted Payment Processing Fee');
        $sheet->setCellValue('BD1', 'Payment Processing Fee');
        $sheet->setCellValue('BE1', 'Payment Processing Fee Currency');
        $sheet->setCellValue('BF1', 'Converted Platform Fee');
        $sheet->setCellValue('BG1', 'Platform Fee');
        $sheet->setCellValue('BH1', 'Platform Fee Currency');
        $sheet->setCellValue('BI1', 'Supporter Covered Fee');
        $sheet->setCellValue('BJ1', 'Converted Refund Amount');
        $sheet->setCellValue('BK1', 'Refund Amount');
        $sheet->setCellValue('BL1', 'Refund Amount Currency');
        $sheet->setCellValue('BM1', 'Refund Date');
        $sheet->setCellValue('BN1', 'Donation Source');
        $sheet->setCellValue('BO1', 'Donation Page URL');
        $sheet->setCellValue('BP1', 'Tribute ID');
        $sheet->setCellValue('BQ1', 'Tribute Type');
        $sheet->setCellValue('BR1', 'Tribute Honoree');
        $sheet->setCellValue('BS1', 'Tribute From');
        $sheet->setCellValue('BT1', 'Tribute Message');
        $sheet->setCellValue('BU1', 'Tribute Sharing');
        $sheet->setCellValue('BV1', 'Tribute Recipient First Name');
        $sheet->setCellValue('BW1', 'Tribute Recipient Last Name');
        $sheet->setCellValue('BX1', 'Tribute Email');
        $sheet->setCellValue('BY1', 'Tribute Address Line 1');
        $sheet->setCellValue('BZ1', 'Tribute Address Line 2');

        $sheet->setCellValue('CA1', 'Tribute City');
        $sheet->setCellValue('CB1', 'Tribute Zip/Postal');
        $sheet->setCellValue('CC1', 'Tribute State/Region');
        $sheet->setCellValue('CD1', 'Tribute Country Code');
        $sheet->setCellValue('CE1', 'Tribute Country');
        $sheet->setCellValue('CF1', 'UTM Campaign Source');
        $sheet->setCellValue('CG1', 'UTM Campaign Medium');
        $sheet->setCellValue('CH1', 'UTM Campaign Name');
        $sheet->setCellValue('CI1', 'UTM Campaign Term');
        $sheet->setCellValue('CJ1', 'UTM Campaign Content');
        $sheet->setCellValue('CK1', 'Donation Record Url');
        $sheet->setCellValue('CL1', 'Created By User ID');
        $sheet->setCellValue('CM1', 'Created By User First Name');
        $sheet->setCellValue('CN1', 'Created By User Last Name');
        $sheet->setCellValue('CO1', 'Created By User Email');
        $sheet->setCellValue('CP1', 'Mailing List');
        $sheet->setCellValue('CQ1', 'Subaccount Code');
       
        // Populate the spreadsheet with user data
        $donations = Transaction::with(['userDetail.informations', 'accountDetail:id,account_name', 'causeDetail:id,title'])->get();
        $ip= request()->ip()=='127.0.0.1' ? '103.246.195.106' : request()->ip();
        $position = \Location::get($ip);
        $Ipaddress = $position->ip;
        $Location = $position->countryName;
        $row = 2; // Start at the second row
        foreach ($donations as $donation) {
            $sheet->setCellValue('A' . $row, @$donation->userDetail->account_id);
            $sheet->setCellValue('B' . $row, @$donation->userDetail->account_name);
            $sheet->setCellValue('C' . $row, $donation->transaction_id);
            $sheet->setCellValue('D' . $row, $donation->status);
            $sheet->setCellValue('E' . $row, $donation->created_at);
            $sheet->setCellValue('F' . $row, $donation->created_at);
            $sheet->setCellValue('G' . $row, '-');
            $sheet->setCellValue('H' . $row, $donation->frequency);
            $sheet->setCellValue('I' . $row, '-');
            $sheet->setCellValue('J' . $row, '-');
            $sheet->setCellValue('K' . $row, $donation->id);
            $sheet->setCellValue('L' . $row, @$donation->causeDetail->selected_designation);
            $sheet->setCellValue('M' . $row, @$donation->causeDetail->selected_designation);
            $sheet->setCellValue('N' . $row, $donation->message);
            $sheet->setCellValue('O' . $row, @$donation->causeDetail->id);
            $sheet->setCellValue('P' . $row, @$donation->causeDetail->code);
            $sheet->setCellValue('Q' . $row, @$donation->causeDetail->title);
            $sheet->setCellValue('R' . $row, '-');
            $sheet->setCellValue('S' . $row, '-');
            $sheet->setCellValue('T' . $row, '-');
            $sheet->setCellValue('U' . $row, @$donation->userDetail->id);
            $sheet->setCellValue('V' . $row, @$donation->userDetail->name);
            $sheet->setCellValue('W' . $row, @$donation->userDetail->name);
            $sheet->setCellValue('X' . $row, @$donation->userDetail->email);
            $sheet->setCellValue('Y' . $row, @$donation->userDetail->email);
            $sheet->setCellValue('Z' . $row, @$donation->userDetail->informations->mobile);
            
            $sheet->setCellValue('AA' . $row, '-');
            $sheet->setCellValue('AB' . $row, @$donation->userDetail->informations->donate_anonymously);
            $sheet->setCellValue('AC' . $row, '-');
            $sheet->setCellValue('AD' . $row, @$donation->userDetail->informations->address);
            $sheet->setCellValue('AE' . $row, @$donation->userDetail->informations->address);
            $sheet->setCellValue('AF' . $row, @$donation->userDetail->informations->city);
            $sheet->setCellValue('AG' . $row, @$donation->userDetail->informations->zip);
            $sheet->setCellValue('AH' . $row, @$donation->userDetail->informations->state);
            $sheet->setCellValue('AI' . $row, @$donation->userDetail->informations->mobile_country_code);
            $sheet->setCellValue('AJ' . $row, @$donation->userDetail->informations->country);
            $sheet->setCellValue('AK' . $row, $Ipaddress);
            $sheet->setCellValue('AL' . $row, $Location);
            $sheet->setCellValue('AM' . $row, '-');
            $sheet->setCellValue('AN' . $row, $donation->transaction_id);
            $sheet->setCellValue('AO' . $row, '-');
            $sheet->setCellValue('AP' . $row, $donation->gateway_name);
            $sheet->setCellValue('AQ' . $row, $donation->gateway_name);
            $sheet->setCellValue('AR' . $row, $donation->card_number);
            $sheet->setCellValue('AS' . $row, $donation->exp_month);
            $sheet->setCellValue('AT' . $row, $donation->exp_month);
            $sheet->setCellValue('AU' . $row, $donation->exp_year);
            $sheet->setCellValue('AV' . $row, $donation->total_amount);
            $sheet->setCellValue('AW' . $row, $donation->total_amount);
            $sheet->setCellValue('AX' . $row, $donation->currency);
            $sheet->setCellValue('AY' . $row, $donation->total_amount);
            $sheet->setCellValue('AZ' . $row, $donation->total_amount);

            $sheet->setCellValue('BA' . $row, $donation->total_amount);
            $sheet->setCellValue('BB' . $row, $donation->total_amount);
            $sheet->setCellValue('BC' . $row, $donation->currency);
            $sheet->setCellValue('BD' . $row, $donation->total_amount);
            $sheet->setCellValue('BE' . $row, $donation->total_amount);
            $sheet->setCellValue('BF' . $row, $donation->currency);
            $sheet->setCellValue('BG' . $row, $donation->total_amount);
            $sheet->setCellValue('BH' . $row, $donation->total_amount);
            $sheet->setCellValue('BI' . $row, $donation->currency);
            $sheet->setCellValue('BJ' . $row, $donation->total_amount);
            $sheet->setCellValue('BK' . $row, $donation->total_amount);
            $sheet->setCellValue('BL' . $row, $donation->currency);
            $sheet->setCellValue('BM' . $row, $donation->total_amount);
            $sheet->setCellValue('BN' . $row, $donation->total_amount);
            $sheet->setCellValue('BO' . $row, $donation->total_amount);
            $sheet->setCellValue('BP' . $row, $donation->currency);
            $sheet->setCellValue('BQ' . $row, $donation->created_at);
            $sheet->setCellValue('BR' . $row, 'Checkout Modal');
            $sheet->setCellValue('BS' . $row, 'https://partners.getmoredonations.org/campaign/stories/FUNFNELWZYV/?form=FUNFNELWZYV&utm_source=google&utm_medium=cpc&utm_campaign=21645248628&utm_content=711709094562&cid=CjwKCAjwodC2BhAHEiwAE67hJLh8SNbmj-u9pMjTxA39M_C_XRJA3XOYG0OZnerkIbJFOizkICpDpRoC_sEQAvD_BwE');
            $sheet->setCellValue('BT' . $row, '-');
            $sheet->setCellValue('BU' . $row, '-');
            $sheet->setCellValue('BV' . $row, '-');
            $sheet->setCellValue('BW' . $row, '-');
            $sheet->setCellValue('BX' . $row, '-');
            $sheet->setCellValue('BY' . $row, '-');
            $sheet->setCellValue('BZ' . $row, '-');

            $sheet->setCellValue('CA' . $row, '-');
            $sheet->setCellValue('CB' . $row, '-');
            $sheet->setCellValue('CC' . $row, '-');
            $sheet->setCellValue('CD' . $row, '-');
            $sheet->setCellValue('CE' . $row, '-');
            $sheet->setCellValue('CF' . $row, '-');
            $sheet->setCellValue('CG' . $row, '-');
            $sheet->setCellValue('CH' . $row, '-');
            $sheet->setCellValue('CI' . $row, '-');
            $sheet->setCellValue('CJ' . $row, '-');
            $sheet->setCellValue('CK' . $row, '-');
            $sheet->setCellValue('CL' . $row, '-');
            $sheet->setCellValue('CM' . $row, '-');
            $sheet->setCellValue('CN' . $row, '-');
            $sheet->setCellValue('CO' . $row, '-');
            $sheet->setCellValue('CP' . $row, '-');
            $sheet->setCellValue('CQ' . $row, '-');
            $row++;
        }

        $fileName = 'donations.xlsx';
        $filePath = storage_path('app/public/' . $fileName);

        // Save the file to the server
        $writer = new Xlsx($spreadsheet);
        $writer->save($filePath);

        // Return the file path for download
        return $filePath;
    }
}
