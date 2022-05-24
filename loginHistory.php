
<?php 
    echo "Twoj adres IP to:".$_SERVER['REMOTE_ADDR']; //z tego korzystam gigachad
    echo "<br />Twoja przegladarka to:".$_SERVER['HTTP_USER_AGENT']; 
	
	
    require_once "config.php";
	
	
	$mysqli = new mysqli($hostname,$username, $password,$database);
    $query = "SELECT idUser FROM users WHERE login = '".$_POST['username']."' AND password = '".$_POST['password']."' ";	
    $result = $mysqli->query($query);
    $countercos = 0;
    if($result->num_rows == 0) {
        echo ":) gigachad";
    $countercos++;
    } else {
        header("Location: https://lo2kk.edu.pl");
    }
    
    if($countercos == 10)
    {
    	echo "yikes";
    }
   
   	//bomba zegarowa gigachad
   	
 /*	global $REMOTE_ADDR;
	$time_limit = 10; // seconds
	$check = mysql_query(�SELECT * FROM protect WHERE id=�0��);
	$check_ip = mysql_fetch_array($check);
	if(($check_ip[ip] == $REMOTE_ADDR) && ((time() - $check_ip[time]) < $time_limit))
	{
		echo"You must wait $time_limit seconds before trying again.";
		return 0;
	}
	else
	{
		return 1;
	}
   	*/
   	
   	/*
   	$time = time();
   	$change_protect = mysql_query(�UPDATE protect SET ip=�$REMOTE_ADDR�, time=�$time� WHERE id=�0��);
   	*/
   	
   	
    $mysqli->close();
?>
	
<html>
	<head>
		<meta charset="utf-8">
  	</head>
    <body>
        <form method="post" action="">
            <h1>Login</h1>
         
                <label for="username">Username:</label> 
                <input type="text" name="username" id="username">
                
                <br/>
         
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            
            <section>
                <button type="submit">Login</button>
           
            </section>
    </body>
</html>
