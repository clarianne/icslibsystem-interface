<?php include 'home_header.php'; ?>   
    <div class="container">
	
	<div id="register-cont">

      <form class="form-signin" role="form" method="post"">
        <h2 class="form-signin-heading">Please Register</h2>
		<b>Full Name: </b> <input type="text" class="form-control" placeholder="First Name" required autofocus>
		<input type="text" class="form-control" placeholder="Middle Name" required autofocus>
		<input type="text" class="form-control" placeholder="Last Name" required autofocus>
		<br>
		<input type="text" class="form-control" placeholder="Employee/Student Number" required autofocus>
		<input type="text" class="form-control" placeholder="Email address" required autofocus>
        <input type="password" class="form-control" placeholder="Password" required>
        <input type="password" class="form-control" placeholder="Re-type Password" required>
       
		<br>
		<label for="college">College:</label>
		<select id="college" class="form-control small">
			<option value="CA">CA</option>
			<option value="CAS">CAS</option>
			<option value="CDC">CDC</option>
			<option value="CEAT">CEAT</option>
			<option value="CEM">CEM</option>
			<option value="CHE">CHE</option>
			<option value="CFNR">CFNR</option>
			<option value="CVM">CVM</option>
			<option value="CPAF">CPAF</option>
			<option value="SESAM">SESAM</option>
			<option value="SESAM">GS</option>
		</select>
		 <input type="password" class="form-control" placeholder="Course" required>
		 <br>
		<b>Sex:&nbsp&nbsp</b>
		<label class="checkbox-inline"><input type="radio" id="letter" value="1" name="sex"> Male</label>
		<label class="checkbox-inline"><input type="radio" id="letter" value="2" name="sex"> Female</label>
		
		
		<br>
		<br>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
      </form>
	  
	  </div> <!--cont-->

    </div> <!-- /container -->

    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
<?php include 'footer.php'; ?>   