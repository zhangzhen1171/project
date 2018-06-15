<?php 
class Controller
{
	public function display($action)
	{
		include 'View/'.$action.'.php';
	}
}
 