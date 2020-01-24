<?php
	//echo 'hello';
	echo "<br>";
	$student = array(
				array("name" => "sabeen", "marks" => "92"),
				array("name" => "zehra", "marks" => "94"),
				array("name" => "sana", "marks" => "96"),
				);
	//print_r($student);
	$table = "<table border>";
	$table .= "<thead><tr>";
	$table .= "<th>Name</th>";
	$table .= "<th>Marks</th>";
	$table .= "</tr><thead><body>";
	// for each loop 
	foreach ($student as $key => $b) {
		$table .= "<tr>";
		$table .= "<td>" .$b["name"]."</td>";
		$table .= "<td>" .$b["marks"]."</td>";
		$table .= "</tr>";
	}
		$table .="</body></table>";
		echo $table;
		echo "<br>";
	// another example
		$std = array(
					array("roll-num" => "35", "marks" => "85"),
					array("roll-num" => "36", "marks" => "82"),
					array("roll-num" => "37", "marks" => "87"),
					);
		//print_r($std);
		$tb = "<table border>";
		$tb .= "<thead><tr>";
		$tb .= "<th>Roll-num</th>";
		$tb .= "<th>Marks</th>";
		$tb .= "<tr></thead><tbody>";
		//for each loop
		foreach ($std as $key => $b) {
			$tb .= "<tr>";
			$tb .= "<td>" . $b["roll-num"]. "</td>";
			$tb .= "<td>". $b["marks"]. "</td>";
			$tb .= "</tr>";
		}
		$tb .= "</tbody></table>";
		echo $tb;
		echo "<br>";

		echo "<h2>star pyramid pattern </h2>";

		for ($i=1; $i<=5; $i++)	
			{	 
				for($j=1;$j<=$i;$j++)	  
				{	  	
					echo " * ";	 
				}
					  	
			echo "<br/>";   	
			}  




?>
<style>
table{
    border-collapse: collapse;
}
</style>