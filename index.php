<?php
	echo "This is a test";
	
?>
<html>
	<body>
		<table width="100%" height="100%" border="1">
		  <tbody>
		    <tr>
				
		      <td width="30%" align="center" valign="top">
				  
				 <?php
				  // FUNCTIONS <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
				  function LoginForm(){
					echo "<form method='post'>   
					<table>   
					<tr><td>Name:</td><td> <input type='text' name='name'/></td></tr>  
					<tr><td>Password:</td><td> <input type='password' name='password'/></td></tr>   
					<tr><td colspan='2'><input type='submit' name='btn1' value='login'/>  </td></tr>  
					</table>  
					</form>";
				  }
				  
				  function adminForm(){
					  echo "Succesfully Login <br>";
					  echo "<form method='post'><input type='submit' name='btn2' value='Back'/></form>";
					  echo "<form method='post'><input type='submit' name='btn3' value='Write'/></form>";
				  }
				  
				  function writeForm(){
					$fp = fopen('datafile.txt', 'w');//open file in write mode  
					fwrite($fp, 'hello ');  
					fwrite($fp, 'php file');  
					fclose($fp);  
					echo "File written successfully"; 
				  }
				  // END OF FUNCTIONS <<<<<<<<<<<<<<<<<<<<<<<<<<<<
					  
				  if(array_key_exists('btn1', $_POST)) {
						adminForm();
					}elseif(array_key_exists('btn2', $_POST)){
						LoginForm();
				    }elseif(array_key_exists('btn3', $_POST)){
						writeForm();
				    }else{
					  LoginForm();
				  }
				
	
				?>
				
				  
				  
				</td>
		      <td width="70%" align="center" valign="top">not</td>
				
	        </tr>
	      </tbody>
    </table>
		this is a sample
	</body>
</html>
