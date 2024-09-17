<!DOCTYPE html>
<html>
<head>
<title>General Patient Information</title>
<style>
    h3{
  font-family: Calibri; 
  font-size: 25pt;         
  font-style: normal; 
  font-weight: bold; 
  color: slateblue;
  text-align: center; 
  text-decoration: underline
}

table{
  font-family: Calibri; 
  color:black; 
  font-size: 11pt; 
  font-style: normal;
  font-weight: bold;
  text-align:; 
  background-color: #48C9B0; 
  border-collapse: collapse; 
  border: 3px solid greenyellow
}
table.inner{
  border: 0px
}
</style>
</head>
 
<body style="background-color:lightgrey;">
    <form action="insert.php" method="post">
<h3>General Patient Information</h3>

 
<table align="center" cellpadding = "10">
 

<tr>
<td>FIRST NAME</td>
<td><input type="text" name="First_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 

<tr>
<td>MIDDLE NAME</td>
<td><input type="text" name="Middle_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>


<tr>
<td>LAST NAME</td>
<td><input type="text" name="Last_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 

<tr>
<td>DATE OF BIRTH</td>
 
<td>
<select name="Birthday_day"  id="Birthday_Day">
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

<!----- Adhar card Number ---------------------------------------------------------->
<tr>
<td>ADHAR NUMBER</td>
<td>
<input type="text" name="Adhar_Number" maxlength="12" />
(12 digit number)
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
 

<tr>
<td>STATE</td>
<td><input type="text" name="State" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>
 

<tr>
<td>COUNTRY</td>
<td><input type="text" name="Country" value="India" readonly="readonly" /></td>
</tr>


<tr>
<td>HEIGHT</td>
<td><input type="integer" name="height" maxlength="1000"  /></td>
</tr>
 

<tr>
<td>WEIGHT</td>
<td><input type="integer" name="height" maxlength="1000"  /></td>


 
<tr>
<td>Disease <br /><br /><br /></td>
 
<td>
Anemia
<input type="checkbox" name="Anemia_d" value="Anemia" /><br>
Asthma
<input type="checkbox" name="Asthma_d" value="Asthma" /><br>
Arthritis
<input type="checkbox" name="Arthritis_d" value="Arthritis" /><br>
Cancer
<input type="checkbox" name="Cancer_d" value="Cancer" /><br>
Gout
<input type="checkbox" name="Gout_d" value="Gout" /><br>
Diabetes
<input type="checkbox" name="Diabetes_d" value="Diabetes" /><br>
Emotional Disorder
<input type="checkbox" name="Emotional_Disorder_d" value="Emotional_Disorder" /><br>
Epilepsy Seizures
<input type="checkbox" name="Epilepsy_Seizures_d" value="Epilepsy_Seizures" /><br>
Fainting Spells
<input type="checkbox" name="Fainting_Spells_d" value="Fainting_Spells" /><br>
Gallstone
<input type="checkbox" name="Gallstone_d" value="Gallstone" /><br>
Heart Disease
<input type="checkbox" name="Heart_Disease_d" value="Heart_Disease" /><br>
Heart Attack
<input type="checkbox" name="Heart_Attack_d" value="Heart_Attack" /><br>
Rheumatitic Fever
<input type="checkbox" name="Rheumatitic_Fever_d" value="Rheumatitic_Fever" /><br>
High Blood Pressure
<input type="checkbox" name="High_Blood_Pressure" value="High_Blood_Pressure" /><br>
Digestive Problems
<input type="checkbox" name="Digestive_Problems_d" value="Digestive_Problems" /><br>
Ulcerative Colitis
<input type="checkbox" name="Hobby_Cooking" value="Cooking" /><br>
Ulcer Disease
<input type="checkbox" name="Ulcer_Disease_d" value="Ulcer_Disease" /><br>
Hepatitis
<input type="checkbox" name="Hepatitis_d" value="Hepatitis" /><br>
Kidney Diesease
<input type="checkbox" name="Kidney_Diesease_d" value="Kidney_Diesease" /><br>
Liver Disease
<input type="checkbox" name="Liver_Disease_d" value="Liver_Disease" />
<br />
Others
<input type="checkbox" name="Hobby_Other" value="Other">
<input type="text" name="Other_Hobby" maxlength="30" />
</td>
</tr>


 




<tr>
<td>Exercise</td>
<td>
Never
<input type="radio" name="Exercise_Never" value="Never"><br>
1-2 days
<input type="radio" name="Exercise_1-2_days" value="1-2_days"><br>
3-4 days
<input type="radio" name="Exercise_3-4_days" value="3-4_days"><br>
5+ days
<input type="radio" name="Exercise_5+_days" value="5+_days"><br>
</td>
</tr>

<tr>
<td>Diat Plan</td>
<td>
I have a loose diat
<input type="radio" name="I_have_a loose_diatI have_a loose_diat" value="loose"><br>
I have a strict diat
<input type="radio" name="I_have_a_strict_diat" value="strict"><br>
I dont have diat plan
<input type="radio" name="I_dont_have_diat_plan" value="no_plan"><br>
</td>
</tr>


<tr>
<td>Do you smoke?</td>
<td>
No
<input type="radio" name="no_v" value="no"><br>
Yes
<input type="radio" name="yes_v" value="yes"><br>
</td>
</tr>






<tr>
<td colspan="2" align="center">
<input type="submit" name= "submit" value="submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
 
</form>

</body>
</html>