<?php
$form = '<form action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'" method="post">
	<input type = hidden name="ac" value = "user_save">
	<input type = hidden name="user_ID" value = "';
	if(isset($this->r_user_ID))
	{
		$form .= $this->r_user_ID;
	} 
	$form .= '">'.
		FORENAME.': <input type="text" name="forename" value="'; 
	if(isset($this->aRow['forename'])){
		$form .= $this->aRow['forename'];
	} 
	$form .='"><br>'.
		SURNAME.': <input type="text" name="surname" value="';
	if(isset($this->aRow['surname'])){
		$form .= $this->aRow['surname'];
	}
	$form .= '"> <br>'.
		EMAIL.': <input type="text" name="email" value="';
	if(isset($this->aRow['email'])){
		$form .= $this->aRow['email'];
	}
	$form .= '"> <br>'.
		PASSWORD.': <input type="password" name="password">  <br>';
	
	if ($_SESSION['admin']==1){
	$form .= ADMIN.': <input type="radio" id="yes" name="admin" value="1"';
	if ($this->aRow['admin']==1){echo'checked';}
	$form .='>
	<label for="yes">'.YES.'</label>
	<input type="radio" id="no" name="admin" value="0"'; 
		if ($this->aRow['admin']==0){
			$form .= 'checked';
		}
	$form .= '>
	<label for id ="no"> '.NO.'</label><br>'; 
	}
	$form .= '
	<input type="submit" value="'.BUTTON_SEND.'">
	<input type="reset" value="'.BUTTON_RESET.'";
	</form>';
echo $form;
?>
