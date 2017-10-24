<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           
         $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
 try{
       //creamos una instancía de la clase phpmailer
       // $mail = new PHPMailer();
        //$mail = new PHPMailer;
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'rmcentinela@gmail.com';                 // SMTP username
$mail->Password = 'varekay1';                           // SMTP password
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'rmcentinela@gmail.com';
$mail->FromName = 'Test phpmailer';
$mail->addAddress('tsubasa_80@hotmail.com');               // Name is optional

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Prueba de correo phpMailer';
$mail->Body    = '<a href="www.google.com">Link</a> <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
 
 }catch(phpmailerException $e){
    dd($e);
 }catch(Exception $e){
    dd($e);
 } 
        /* 
            // $db = DB::connection();
        $mysqli = new PDO('mysql:host=localhost;dbname=servicios', "root", "");
       


//$mysqli = DB::connection();
//dd($mysqli);
$procInput1 = 123;
$procInput2 = 456;
$procInput3 = 789;

//$mysqli = new mysqli();

$call = $mysqli->prepare('CALL test_proc(:uno, :dos, :tres, @sum, @product, @average)');
$call->bindParam(':uno', $procInput1, PDO::PARAM_INT);
$call->bindParam(':dos', $procInput2, PDO::PARAM_INT);
$call->bindParam(':tres', $procInput3, PDO::PARAM_INT);
$call->execute();

$select = $mysqli->query('SELECT @sum, @product, @average');
//dd($call);
$result = $select->fetch(PDO::FETCH_ASSOC);
$procOutput_sum     = $result['@sum'];
$procOutput_product = $result['@product'];
$procOutput_average = $result['@average'];
dd($result);
        */
        return view('home');
    }
}
