<?php
class usuarios
{
	public function isLogged()
	{
		if(isset($_SESSION['twlg']) && !empty($_SERVER['twlg'])){
			return true;
		}

		return;
	}
}