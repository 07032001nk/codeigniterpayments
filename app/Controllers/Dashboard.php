<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
  
class Dashboard extends Controller
{
    public function index()
    {
        $session = session();
        define('WELCOME', "Welcome back bhaisaab, ".$session->get('user_name'));
        echo view('client/dashboard/welcome.php');
    }
}