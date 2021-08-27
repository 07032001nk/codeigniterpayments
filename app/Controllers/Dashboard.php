<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class Dashboard extends Controller
{
    public function dashboard($username =  NULL)
    {
        $session = session();

        define('USER', $session->get('user_name'));

        $model = new UserModel();

        $data['user'] = $model->getUser($username);

        $data['member'] = $data['user']['member'];

        define('MEMBER', $data['member']);

        define('WELCOME', "Welcome back bhaisaab,". USER);
        
        echo view('client/dashboard/welcome.php', $data);
    }
}