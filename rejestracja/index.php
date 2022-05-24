<?php
/**
 * Pola: 
 	- login / nr rejestracyjny:
 	- hasÅ‚o: 
 */
 echo dahlo ;
 if(!empty($_POST['login']) && !empty($_POST['tablicaRejestracyjna']) && !empty($_POST['pierwszehaslo']) && !empty($_POST['drugiehaslo']) && !empty($_POST['capacha'])){
 	 echo "halo";
 	 if($_POST['pierwszehaslo']==$_POST['drugiehaslo']){
 	 	 $dbh = new PDO('mysql:host=localhost;dbname=lo2kk',$user,$password);
 	 	 echo "ELLLLO";
 	 } else {
 	 	 //unset($_POST["pierwszehaslo"],$_POST["drugiehaslo"]);
 	 	 echo "hasla sa rozne";
 	 }
 	 
 }
?>
Zarejestruj
	
<form method="post">
	<input type="text" name="login" id="logowanie"placeholder="login"/><br />
	<input type="text" name="tablicaRejestracyjna" placeholder="numer rejestracyjny"/><br />
	<input type="password" name="password" id="pierwszehaslo" placeholder="haslo"/><br />
	<input type="password" name="password2" id="drugiehaslo" placeholder="powtórz haslo"/><br />
	<input type="email" name="email" placeholder="email" /><br />
	<input type="tel" name="numer telefonu" placeholder="numer telefonu" /><br /><br />
	<input type="number" name="capacha" placeholder=" + "><br />
	<input type="submit" value="Zarejestruj" />
</form>
<br /><br />lub zaloguj
