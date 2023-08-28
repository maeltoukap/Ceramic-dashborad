<?php
    include('../../fpdf/fpdf.php');
    

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


    function generatorQrCode(){
        
        
    $noofQRs = 2;
    // $qrcodeimage = "/img/qrCodeImg/$noofQRs.png";
    for($i=1;$i<=$noofQRs;$i++){
        //     $qrcodeValue = rand(10000,999999999);
        // $pdf = new FPDF('P','mm', 'a5');
        // $pdf->SetTopMargin(75);
        // $pdf->AddPage();
        // $pdf->Image("$noofQRs",0,0,150,210);
        // $pdf->SetFont('Arial','',14);
        // $pdf->Cell(0,10,"Install some QR reader app,",0,0,'C');
        // $pdf->Ln();
        // $pdf->Cell(0,10,"and scan this image.",0,0,'C');
        // $pdf->Image($qrcodeimage,38,100,75,75);
        // $pdf->Output("pdfqrcodes/someqrpdf.pdf", "F");
            
        // echo "Done generating QR Code PDF.";
        // fpdf/fpdf.php

    
        // $qrcodeimage = "pdfqrcodes/someqrcode.png";
        $random = generateRandomString();
        $qrcodeimage = "/img/qrCodeImg/$random.png";
        
        $pdf = new FPDF('P','mm', 'a5');
        $pdf->SetTopMargin(75);
        $pdf->AddPage();
        $pdf->Image("QRCodeTemplate.jpg",0,0,150,210);
        $pdf->SetFont('Arial','',14);
        $pdf->Cell(0,10,"Install some QR reader app,",0,0,'C');
        $pdf->Ln();
        $pdf->Cell(0,10,"and scan this image.",0,0,'C');
        $pdf->Image($qrcodeimage,38,100,75,75);
        $pdf->Output("../../img/qrCodePdf/somepdf.pdf", "F");
            
        echo "Done generating QR Code PDF.";
    }
    
}


    // $noofQRs = 2;
    // for($i=1;$i<=$noofQRs;$i++){
    //         $qrcodeValue = rand(10000,99999);
    //         $imageName = $qrcodeValue;
    //         $filename = $PNG_TEMP_DIR.$imageName.'.png';
    //         QRcode::png($imageName, $filename, $errorCorrectionLevel, $matrixPointSize, 2);
    //         $pdf->AddPage();//1 page will create
    //         $pdf->AddFont('Helvetica-Bold','','helveticab.php');
    //         $img1 = $PNG_WEB_DIR.basename($filename);
    //         $pdf->Image($img1,5,10,200);
    //         $pdf->Ln(220);   
    //         $pdf->SetFont('Helvetica-Bold','',28);
    //         $pdf->SetTextColor(0,0,0);
    //         $pdf->Cell(0,0,$imageName,0,0,'C');
    // }
    // $targetFile = 'Downloads/qrcodes.pdf';
    // $contentToStore = $pdf->Output($targetFile ,'F'); 
    // // echo '<a target="_blank" href="'.$targetFile.'" download> <button> Download PDF </button></a>';
?>