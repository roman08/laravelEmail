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
