<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'user_tb';
	protected $primaryKey           = 'user_cd';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['email_ds', 'password_ds', 'user_nm', 'birthDate_dt', 'phoneNumber_ds', 'cpf_ds', 'accountStatus_dt'];
}
