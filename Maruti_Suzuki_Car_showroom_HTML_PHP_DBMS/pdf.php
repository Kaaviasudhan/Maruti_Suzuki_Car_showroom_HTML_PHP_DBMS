<?php
if(!empty($_POST['submit']))
{
    $f_name = $_POST['name'];
    $phone = $_POST['Phone_number'];
    $email = $_POST['email'];
    $vehicle = $_POST['vehicle'];

    require("fpdf/fpdf.php");
    
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont("Arial","B",12);
    $pdf->Multicell(0,6,"****Maruthi Suzuki Driving School For Beginners since 2005****\n\nDriven by world-class technology & training curriculum, Maruti Suzuki Driving School has elevated and redefined the standards of driving training in the country.
    ");
    $pdf->Multicell(0,6,"Candidate Name:$f_name \nYour Application for Maruthi Suzuki Driving School is successfull!!\nThank You");
    $pdf->Multicell(0,6,"\nPhone : +918527834283\nE-Mail: maruthisuzukicust@outlook.in\nCheck Your Registration Details");

    $pdf->Cell(50,10,"First Name",1,0);
    $pdf->Cell(40,10,"Phone No.s",1,0);
    $pdf->Cell(50,10,"Dri. Vehical Name",1,0);
    $pdf->Cell(0,10,"Email Id",1,1);


    $pdf->Cell(50,10,$f_name,1,0);
    $pdf->Cell(40,10,$phone,1,0);
    $pdf->Cell(50,10,$vehicle,1,0);
    $pdf->Cell(0,10,$email,1,0);


    $file = time().'.pdf';
    $pdf->output($file,'D');
}
?>