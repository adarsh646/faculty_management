	<html>
	<head>
	  <link rel="stylesheet" type="text/css" href ="style3.css">
	</head>
	<body>
	 <center> 
	<form action="apply_formbackend.php" method="POST">
	  <div class="container9">
	    <section id="tittle"><h1>Apply Form</h1></section>
	    <section id="data">
	  <table>
	    <tr>
      
	      <td>    <label for="Yourname"><b>Yourname  :<b></label></td>
	    <td><input type="text" placeholder="Yourname" name="Yourname" required></td>
	   </tr>
	   <br>
	   <tr>
	   <td><label for="Depertment"><b>Department  :</b></label></td>
	  <td><select name="dept">
	    <option value="non"> </option> 
	    <option value="Computer Science"> Computer Science</option>
	    <option value="Maths">Maths</option>
	    <option value="Comerce">Comerce</option>
	    <option value="Language">Languages</option>
	  </select></td>

	   </tr>
	   <br>

	 <tr>
	  <td><label for="Designation"><b>Designation  :</b></label></td>
	  <td><select name="dropdown">
	    <option value="non"> </option>
	    <option value="HOD"> HOD</option>
	    <option value="staff">Teaching staff</option>
	  </select></td>
	   <br>
	</tr>
	  
	<tr>
	 <td><label for="Yourname"><b>Purpose  :<b></label></td>
	<td><textarea rows="3" cols="26" placeholder="Purpose" name="Purpose" required></textarea></td>
	</tr>
	    
	<tr>
	      
	      <td>    <label for="Time Out"><b>Time Out  :<b></label></td>
	    <td><input type="Time"  name="timeout" required></td>
	   </tr>
   <br>
   <tr>
	      
	      <td>    <label for="Time In"><b>Time In  :<b></label></td>
	    <td><input type="Time"  name="timein" required></td>
	   </tr>


	</table>
	</section>
	    <br>
		    <div class="btn">
		    <button type="ok" class="apply" style="background-color: #33cc33; cursor: pointer; border:none;">Apply</button>
		    <button type="reset" class="close" style="background-color: crimson; cursor: pointer; border: none;">Close</button>
		  </div>
	  </div>

	  
	</form>
	</body>
	<html>
