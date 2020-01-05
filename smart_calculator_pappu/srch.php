<?php
require 'conn.php';
//$str = "Hello ";
//echo json_encode($_POST['srch']);
if (isset($_POST['srch'])) {
	# code...
	if (empty($_POST['srch'])) {
		$res = "Pappu not found anything";
	}
	 $session_id = $_POST['session_id'];
	  $str =  $_POST['srch'];
	//$str = "find the addition of 6524 and 7874";
	//$session_id = '446151';
	

	$str_length = str_word_count($str);
	preg_match_all('!\d+!', $str, $matches);
	//print_r($matches);
	$i=0;
	while ( $i<5) {
	 	
	  	$nbr = "nbr$i";
	  	$$nbr = 0;
		
		 		
		if (isset($matches[0][$i]))
		 {		

				$$nbr =   $matches[0][$i];
		 }
		 $i++;
	}
		// echo($nbr0."<br>".$nbr1."<br>".$nbr2);
	if  (strchr($str,"your") && strchr($str,"name")) {
			$res = "Pappu";
			//echo json_encode($res);
		}
	elseif(strchr($str,"sum")||strchr($str,"add")||strchr($str,"addition")||strchr($str,"plus")|| strchr($str,"+")) 
		{
			$res = $nbr0 +$nbr1+$nbr2+$nbr3+$nbr4;
			
			//echo json_encode($res);
			
		}
		elseif (strchr($str,"hii")||strchr($str,"hii pappu")||strchr($str,"hlo")||strchr($str,"hlo pappu")||strchr($str,"hi pappu")||strchr($str,"hi")||strchr($str,"hello pappu")||strchr($str,"hello")) {
			$res = "Hi, I\'m Pappu, The Smart Calculator - Pappu<br>How may I help you ?";
		}
		elseif (strchr($str,"invent")||strchr($str,"create")||strchr($str,"discover")||strchr($str,"founder")) {
			$res = "Sahil Singhroha & Abhishek Singh Dhull inventer of me";
		}
		elseif (strchr($str,"mult")||strchr($str,"multiply")||strchr($str,"*")) {
			$res = $nbr0 * $nbr1;
		}
		elseif (strchr($str,"subtract")||strchr($str,"minus")||strchr($str,"- ")||strchr($str,"sub")||strchr($str,"subtraction")) 
		{
				if (strchr($str,"from")) 
				{
					$res = $nbr1 -$nbr0;
				}
				else
				{
					$res = $nbr0 - $nbr1;
				}
		}
		elseif (strchr($str,"divide")||strchr($str,"/")) {
			$res = $nbr1 / $nbr0;
		}
		elseif (strchr($str,"reminder")||strchr($str,"%")) {
			$res = $nbr0 % $nbr1;
		}
		elseif (strchr($str,"^")) {
			$res = pow($nbr0,$nbr1);
		}
		elseif($str =="")
		{
			$res = "Sorry, Pappu become clever, pls give some input";	
		}
		else{
			$res = "Sorry, Pappu got failed";
		}
}
else{
	$res = "Enter your cmd here";
	echo json_encode($res);
}
	insertData($str,$conn,$res,$session_id);
	function insertData($str,$conn,$res,$session_id)
	{
		 mysqli_query($conn,"INSERT INTO query ( `session_id`, `query`, `output`) VALUES ($session_id,'$str','$res') ");
		
	}
	 fetchdata($conn,$session_id);
	function fetchdata($conn,$session_id)
	{	
		$output ="";
		$result_array = array();
		$data = mysqli_query($conn, "SELECT * from query where session_id = $session_id order by id asc ");
		if (mysqli_num_rows($data) > 0)
     		while ($row  = mysqli_fetch_assoc($data) ) {
				$dat = $row['output'];
				$dat1 = $row['query'];
				$output ='<div class="qus alert alert-danger">'.$dat1.'</div>
				<div class="ans alert alert-success">'.$dat.'</div>';
			 	echo $output;
		}
		
	}

/*echo($matches);
//echo "String Lenght".$str_length;
$res = preg_split('/\s+/', $str);
$count = count($res);
echo $count;

$arr = explode(" ",$str);
*/

?>