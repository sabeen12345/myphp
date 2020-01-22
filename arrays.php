<?php
		echo "<h2>Array</h2> <br>";
		$a = array("sabeen", "Zehra", "Fatima");
		print_r($a);
		echo "<br>";

		$b=array("id"=> 1001, "name" => "sabeen", "Grade" => "A" );
		echo "<h2>Assosiative Array</h2> <br>";
		echo "Name : " .$b["name"], "<br>";
		echo "Id :" .$b["id"], "<br>";
		echo "Grade :" .$b["Grade"];
		echo "<br>";

		$Marks = array('Sabeen' => array
							('biology' => 92,
							'chemistry' => 95,
							'physics' => 75, ),
						'Zehra' => array 
							('biology' => 86,
							'chemistry' => 92,
							'physics' => 82,));
		//echo "Marks for Sabeen in Biology:" . $Marks ["Sabeen"]["Biology"];
		//echo " $Marks ['sabeen']['Biology']";
		echo "<h2>Multidimensional Array</h2> <br>";
		 echo "Marks for Sabeen in Biology : " ;
         echo $Marks['Sabeen']['biology'] . "<br />";
          echo "Marks for Sabeen in chemistry : " ;
          echo $Marks['Sabeen']['chemistry'] . "<br />";
           echo "Marks for Sabeen in physics : " ;
          echo $Marks['Sabeen']['physics'] . "<br />";
          echo "<br>";
          echo "Marks for Zehra in Biology : " ;
           echo $Marks['Zehra']['biology'] . "<br />";
          echo "Marks for Zehra in chemistry : " ;
          echo $Marks['Zehra']['chemistry'] . "<br />";
           echo "Marks for Zehra in physics : " ;
          echo $Marks['Zehra']['physics'] . "<br />";
          echo "<br>";
		
?>