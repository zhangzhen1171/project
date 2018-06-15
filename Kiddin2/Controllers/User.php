<?php 
class User extends Controller
{
	public function login()
	{
		$this->display('User/login');
	}
	public function register()
	{
		$this->display('User/register');
	}
}
