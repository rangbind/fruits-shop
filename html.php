<!DOCTYPE html>
<html>
<!--<head>
	<meta charset="utf-8">
	<title> html tags practice </title>

	<style>
	body{

		background-color: lightpink;
	}
	</style>

	<link rel="stylesheet" type="text/css" href="favicon/style.css">

	<script>

		alert("hello");

	</script>

	<script src="js/script.js"></script>

</head>-->

<body>

	<!--<h3> html tags </h3>

	<p>Mohandas Karamchand Gandhi (/ˈɡɑːndi, ˈɡændi/;[2] 2 October 1869 – 30 January 1948) was an Indian lawyer,[3] anti-colonial nationalist[4] and political ethicist[5] who employed nonviolent resistance to lead the successful campaign for India's independence from British rule[6] and in turn to inspire movements for civil rights and freedom across the world. The honorific Mahātmā (Sanskrit: "great-souled", "venerable"), first applied to him in 1914 in South Africa, is now used throughout the world.[7][8]<br>
	<div>Born and raised in a Hindu family in coastal Gujarat, Gandhi trained in the law at the Inner Temple, London, and was called</div> <div>to the bar at age 22 in June 1891. After two uncertain years in India, where he was unable to start a successful law</div> practice, he moved to South Africa in 1893 to <b>represent an Indian merchant in a lawsuit.</b> He went on to live in South Africa for 21 years. It was here that Gandhi raised a family and first employed nonviolent resistance in a campaign for civil 
	rights.<br>
	<span>In 1915, aged 45, he returned to India. &nbsp; &nbsp;&nbsp;&nbsp;He set about organising peasants, farmers, and urban labourers to protest against</span>
	<br>
	excessive land-tax and discrimination. Assuming leadership of the Indian National Congress in 1921, Gandhi led nationwide campaigns for easing poverty, expanding women's rights, building religious and ethnic amity, ending untouchability, and above all for achieving swaraj or self-rule.[9]</p>

	
	

	
	<select >
		<optgroup label="car"> 
		<option value="car"> BMW </option>
		<option value="car"> honda </option>
		<option value="car"> maruti </option>
		<option value="car"> activa </option>
		</optgroup>

		<optgroup label="foods">
		<option value="car"> milk </option>
		<option value="car"> fruits </option>
		<option value="car"> maggy </option>
		<option value="car"> pasta </option>
		</optgroup>


	</select>
	<br><br>

	<h3><form> 
		<input type="radio" name="Gender" value="male"> Male
		<input type="radio" name="Gender" value="Female"> Female
		<input type="radio" name="Gender" value="other"> Other
		<br><br>
		<input type="radio" name="emptype" value="manager"> manager
		<input type="radio" name="emptype" value="developer"> developer


	</form></h3>
	<br><br><br>

	<h3><form> 
		<input type="Checkbox" name="sports"> cricket
		<input type="Checkbox" name="sports"> football
		<input type="Checkbox" name="sports"> hockey
		

	</form></h3>
	<br><br><br>

	<b><form>
		search <input type="text" list="search">
		<datalist id="search">
			<option value="apple">
			<option value="mango">
			<option value="orange">
			<option value="car">

		</datalist>
		<input type="submit" name="search">
	</form></b>
	<br><br><br><br><br><br>


	<b><form>
		<fieldset>
			<legend> basic information </legend>
			<label for="fname"> first name </label>
			<input type="text" name="first_name" id="fname">
			<label for="lname"> last name </label>
			<input type="text" name="last_name" id="lname">
		</fieldset>

		<fieldset>
			<legend> others information </legend>
			<label for="address"> Address </label>
			<input type="text" name="address" id="address">
			<label for="mobile"> mobile no </label>
			<input type="text" name="mobile" id="mobile">
		</fieldset>

		<fieldset>
			<input type="submit">
		</fieldset>
	</form></b>-->

</body>
</html>

	





<<html>
<head>
<title>Student Registration Form</title>

	<style type="text/css">
	h3{
  font-family: Calibri; 
  font-size: 25pt;         
  font-style: normal; 
  font-weight: bold; 
  color:SlateBlue;
  text-align: center; 
  text-decoration: underline
}

table{
  font-family: Calibri; 
  color:white; 
  font-size: 11pt; 
  font-style: normal;
  font-weight: bold;
  text-align:; 
  background-color: SlateBlue; 
  border-collapse: collapse; 
  border: 2px solid navy
}
table.inner{
  border: 0px
}

</style>

</head>
 


<body>
<h3>STUDENT REGISTRATION FORM</h3>

 
<table align="center" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="First_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="Last_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE OF BIRTH</td>
 
<td>
<select name="Birthday_day" id="Birthday_Day">
<option value="-1">Day:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
 
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
 
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
 
<option value="31">31</option>
</select>
 
<select id="Birthday_Month" name="Birthday_Month">
<option value="-1">Month:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>
 
<select name="Birthday_Year" id="Birthday_Year">
 
<option value="-1">Year:</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
 
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
 
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
</select>
</td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type="text" name="Email_Id" maxlength="100" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="Mobile_Number" maxlength="10" />
(10 digit number)
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="Gender" value="Male" />
Female <input type="radio" name="Gender" value="Female" />
</td>
</tr>
 
<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="Address" rows="4" cols="30"></textarea></td>
</tr>
 
<!----- City ---------------------------------------------------------->
<tr>
<td>CITY</td>
<td><input type="text" name="City" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>PIN CODE</td>
<td><input type="text" name="Pin_Code" maxlength="6" />
(6 digit number)
</td>
</tr>
 
<!----- State ---------------------------------------------------------->
<tr>
<td>STATE</td>
<td><input type="text" name="State" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Country ---------------------------------------------------------->
<tr>
<td>COUNTRY</td>
<td><input type="text" name="Country" value="India" readonly="readonly" /></td>
</tr>
 
<!----- Hobbies ---------------------------------------------------------->
 
<tr>
<td>HOBBIES <br /><br /><br /></td>
 
<td>
Drawing
<input type="checkbox" name="Hobby_Drawing" value="Drawing" />
Singing
<input type="checkbox" name="Hobby_Singing" value="Singing" />
Dancing
<input type="checkbox" name="Hobby_Dancing" value="Dancing" />
Sketching
<input type="checkbox" name="Hobby_Cooking" value="Cooking" />
<br />
Others
<input type="checkbox" name="Hobby_Other" value="Other">
<input type="text" name="Other_Hobby" maxlength="30" />
</td>
</tr>
 
<!----- Qualification---------------------------------------------------------->
<tr>
<td>QUALIFICATION <br /><br /><br /><br /><br /><br /><br /></td>
 
<td>
<table>
 
<tr>
<td align="center"><b>Sl.No.</b></td>
<td align="center"><b>Examination</b></td>
<td align="center"><b>Board</b></td>
<td align="center"><b>Percentage</b></td>
<td align="center"><b>Year of Passing</b></td>
</tr>
 
<tr>
<td>1</td>
<td>Class X</td>
<td><input type="text" name="ClassX_Board" maxlength="30" /></td>
<td><input type="text" name="ClassX_Percentage" maxlength="30" /></td>
<td><input type="text" name="ClassX_YrOfPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td>2</td>
<td>Class XII</td>
<td><input type="text" name="ClassXII_Board" maxlength="30" /></td>
<td><input type="text" name="ClassXII_Percentage" maxlength="30" /></td>
<td><input type="text" name="ClassXII_YrOfPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td>3</td>
<td>Graduation</td>
<td><input type="text" name="Graduation_Board" maxlength="30" /></td>
<td><input type="text" name="Graduation_Percentage" maxlength="30" /></td>
<td><input type="text" name="Graduation_YrOfPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td>4</td>
<td>Masters</td>
<td><input type="text" name="Masters_Board" maxlength="30" /></td>
<td><input type="text" name="Masters_Percentage" maxlength="30" /></td>
<td><input type="text" name="Masters_YrOfPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td></td>
<td></td>
<td align="center">(10 char max)</td>
<td align="center">(upto 2 decimal)</td>
</tr>
</table>
 
</td>
</tr>
 
<!----- Course ---------------------------------------------------------->
<tr>
<td>COURSES<br />APPLIED FOR</td>
<td>
BCA
<input type="radio" name="Course_BCA" value="BCA">
B.Com
<input type="radio" name="Course_BCom" value="B.Com">
B.Sc
<input type="radio" name="Course_BSc" value="B.Sc">
B.A
<input type="radio" name="Course_BA" value="B.A">
</td>
</tr>
 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
 
</form>
 
</body>
</html>
<br><br><br><br><br><br>
<br>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

	<h3> new project </h3>





</head>
<body>









</body>
</html>