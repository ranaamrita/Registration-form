<?php
$firstnum=10;
$secondnum=5;
$add=$firstnum+$secondnum;
echo " The sum is:" . $add;
echo "<br>";
?>

	<?php
	   $t=date("H");
	   if($t < "15"){
	   echo "Have a good day!";
	}
	else {
		echo "Hava a bad day!";
	}
	?>


	<?php
	   $t=date("15");
	   echo "<p>The hour (of the server) is ". $t;
	   echo ", and will give the following message:</p>";

	   if ($t < "8") {
	   	  echo "Have a good morning!";
	   }elseif ($t < "10") {
	   	  echo "Have a good day!";
	   }else
	   {
	   	echo "Have a good night!";
	   }
	   echo "<br>";
	?>

	<?php
	  $favcolor ="green";

	   switch ($favcolor) {
	   	case 'red':
	   		# code...
	   	    echo "Your favourite color is red!";
	   		break;
	   		case 'blue':
	   			# code...
	   		    echo "Your favourite color is blue!";
	   			break;
	   	    case 'pink':
	   	    	# code...
	   	        echo "Your favourite color is pink!";
	   	    	break;
	   	
	   	default:
	   		# code...
	   	    echo "Your favourite color is neither red,blue,nor pink!";
	   		break;
	   }
	   echo "<br>";
	?>


	<?php
	  $x=2;

	  do {
	  	echo "The number is : $x <br>";
	  	$x++;

	  }while ($x<=10); 
	  	echo "<br>";
	?>