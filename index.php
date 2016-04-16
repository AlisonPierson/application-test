<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    function showRowInfo(thebutton) {
		var person = $(thebutton).closest("tr").find("td:lt(5)");  // collects all the data from the buttons row
		var first_name = person[2].innerHTML,
			last_name = person[3].innerHTML,
			email = person[4].innerHTML;
		alert( first_name + ' ' + last_name + ' ' + email ); 
	}
</script>
</head>
<?php
	$people = array(
	   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
	   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
	   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
	   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
	   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
	);	
	echo "<table>";
	foreach($people as $person) {
		echo "<tr>", "<td>";
		echo "<input type='button' onclick='showRowInfo(this);' value='contact info'>";
		echo "</td>"; 		
		foreach($person as $info)  {
			echo "<td>";
			echo $info;
			echo "</td>";
		};
		echo "</tr>";
	};
?>
</table>
</body>
</html>
