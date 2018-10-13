<form method="post" action="index1.php">

<p>
<label>Patients name
<input type="text" name="customer_name" required>
</label> 
</p>

<p>
<label>Phone 
<input type="tel" name="phone_number" required>
</label>
</p>

<p>
<label>Email 
<input type="email" name="email_address" required>
</label>
</p>


<fieldset>
<legend>Gender</legend>
<p><label> <input type="checkbox" name="gender" value="male"> male </label></p>
<p><label> <input type="checkbox" name="gender" value="female"> female </label></p>
<p><label> <input type="checkbox" name="gender" value="others"> others </label></p>

</fieldset>

<p>
<label>DOB
<input type="datetime-local" name="dob" value="date" required>
</label>
</p>
<p>
<label>Password: <input type="password" name="password" required ></label>

</p>

<fieldset>
<legend>other ailments</legend>
<p><label> <input type="checkbox" name="ailment[]" value="high bp"> high bp </label></p>
<p><label> <input type="checkbox" name="ailment[]" value="obesity"> obesity </label></p>
<p><label> <input type="checkbox" name="ailment[]" value="others"> others </label></p>
</fieldset>



<input type ="submit" value="submit">

</form>

