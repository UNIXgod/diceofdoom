 <html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
You rolled : <?php echo $_POST["diceroll"]; echo " times";

function nl(){
	    echo "<br>";
}
nl();
nl();


function dice($min, $max){
    echo rand( $min, $max);
}

function roll(){
  echo dice( 1, 6);
  echo "<br>";
}



for ($x=1; $x <= intval($_POST["diceroll"]); $x++) {
    //echo "The number is: $x <br>";
    echo "roll ";
   // echo "The number is: " . nl();
    roll();
}
?>

</body>
</html> 
