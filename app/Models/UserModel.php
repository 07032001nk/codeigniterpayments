<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class UserModel extends Model{
    protected $table = 'users';
    protected $allowedFields = ['user_name','user_email','user_password','user_created_at', 'member'];

    public function getUser($username = false)
    {
        if ($username === false)
        {
            return $this->findAll();
        }

        return $this->asArray()
                    ->where(['user_name' => $username])
                    ->first();
    }

}