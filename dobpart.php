<html>
<form method="post" action="<?PHP=$_SERVER['PHP_SELF']?>">
Month<br>
<select name="month" size="1">
<option value="january">01
<option value="february">02
<option value="march">03
<option value="april">04
<option value="may">05
<option value="june">06
<option value="july">07
<option value="august">08
<option value="september">09
<option value="october">10
<option value="november">11
<option value="december">12
</select>
<p>
Day<br>
<select name="day" size="1">
<option value="01">01
<option value="02">02
<option value="03">03
<option value="04">04
<option value="05">05
<option value="06">06
<option value="07">07
<option value="08">08
<option value="09">09
<option value="10">10
<option value="11">11
<option value="12">12
<option value="13">13
<option value="14">14
<option value="15">15
<option value="16">16
<option value="17">17
<option value="18">18
<option value="19">19
<option value="20">20
<option value="21">21
<option value="22">22
<option value="23">23
<option value="24">24
<option value="25">25
<option value="26">26
<option value="27">27
<option value="28">28
<option value="29">29
<option value="30">30
<option value="31">31
</select>
<p>
Year<br>
<input type="text" name="year" size="2">
<p>
<input type="submit" value="Submit Data">
</form>
</html>
<?php
//connect
$sql = mysql_connect("host", "user", "pass" ) OR DIE
("Couldn't connect." );
//select
$select = mysql_select_db("dbname" ) OR DIE
("Couldn't select." );
$insert = "INSERT INTO table_name
(month, day, year) VALUES ('$month', '$day', '$year')";
if (!$insert) {
echo "Error inserting data.";
}
?>
