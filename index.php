<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

<html>
	<head>
		 <script src="//ajax.googleapis.com/ajax/libs/mootools/1.5.2/mootools.min.js"></script>
		 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		 <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.js"></script>

		 <style type="text/css">
			td {
			      text-align:center;
			      vertical-align:middle;
			}
		</style>
	</head>

	<body>

	    <?php


	    	$people = array(
				      array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
				      array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
				      array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
				      array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
				      array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
			    	);

			$id = array_column($people,'id');
			$firstName = array_column($people,'first_name');
			$lastName = array_column($people,'last_name');
			$email = array_column($people,'email');

			// print_r($id);
			// print_r($firstName);
			// print_r($lastName);
			// print_r($email);

			$value1 = array_values($id);
			$value2 = array_values($firstName);
			$value3 = array_values($lastName);
			$value4 = array_values($email);

			// echo($value4[0]);

			echo '<table border="1" width="75%" align="center"><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th></th></tr>';	

			for($i = 0; $i < 5; $i++) {



			    echo '<tr><td>'. $value1[$i] .'</td><td>'.$value2[$i].'</td><td>'.$value3[$i].'</td><td>'.$value4[$i].'</td><td><button id="button">Click Me!</button></td></tr>';
        
			}

			echo '</table>';
	    
	    ?>	


	</body>

	<script type="text/javascript">

		$(document).ready(function(){

			var jqueryarray1 = JSON.parse('<?php echo json_encode($value1); ?>');
			var jqueryarray2 = JSON.parse('<?php echo json_encode($value2); ?>');
			var jqueryarray3 = JSON.parse('<?php echo json_encode($value3); ?>');
			var jqueryarray4 = JSON.parse('<?php echo json_encode($value4); ?>');

		
			$('button').eq(0).click(function(){

				alert(jqueryarray2[0] + " " + jqueryarray3[0] + "\n" +jqueryarray4[0]);

			});

			$('button').eq(1).click(function(){

				alert(jqueryarray2[1] + " " + jqueryarray3[1] + "\n" +jqueryarray4[1]);

			});

			$('button').eq(2).click(function(){

				alert(jqueryarray2[2] + " " + jqueryarray3[2] + "\n" +jqueryarray4[2]);

			});

			$('button').eq(3).click(function(){

				alert(jqueryarray2[3] + " " + jqueryarray3[3] + "\n" +jqueryarray4[3]);

			});

			$('button').eq(4).click(function(){

				alert(jqueryarray2[4] + " " + jqueryarray3[4] + "\n" +jqueryarray4[4]);

			});


		});
		

	</script>

</html>
