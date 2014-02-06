<?php include 'logout_header.php'; ?>
	
	<div class="mainBody">
		<!-- Nav tabs -->
		<div id="profileCont">
		<!-- Tab panes -->
			<div id="profContent">
			<h2>Hi, Sayaka Yamamoto</h2><!-- in actual implementation, show full name of the user -->
			
			<p>Student Number: 2010-00123</p>
			<p>Course: BSCS</p>
			<p>College: CAS</p>
			<p>Curriculum: 2008-BSCS-PR</p>
			
			<p>Email Address:&nbsp;<input id="email" type="text" value="y.sayaka@gmail.com" disabled>&nbsp;
			<input type="submit" id="update_email" value="Update Email" class="btn btn-primary btn-sm" onclick="edit()">
			<input type="submit" id="set_email" value="Save" class="btn btn-primary btn-sm" onclick="validate()" style="display:none;" data-toggle="modal">
			<input type="submit" id="cancel" value="Cancel" class="btn btn-primary btn-sm" onclick="cancel_email()" style="display:none;">
			
			<!--To check if the profile has been successfully updated -->

			<div class="modal fade" id="email_dialog" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h3 class="modal-title" id="myModalLabel">Update Email</h3>
				  </div>
				  <div class="modal-body">
				      <form class="form-signin" role="form">
						<h4 class="form-signin-heading">Your email has been successfully updated. </h4>						
				  </div>
				  <div class="modal-footer">
					<input href="#ok" data-dismiss="modal" onclick="" type="submit" value="Done" class="btn btn-primary"/>
					 </form>
				  </div>
				</div>
			  </div>
			</div>
			
			<script type="text/javascript">
			
				function edit(){
					
					var w = document.getElementById('cancel');
					var x = document.getElementById('email');
					var y = document.getElementById('update_email');
					var z = document.getElementById('set_email');
					x.disabled=false;
					y.style.display="none";
					z.style.display="inline";
					w.style.display="inline";
					
				}
				
				function validate(){
				
					var email = document.getElementById('email');
					var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					var y = document.getElementById('update_email');
					var z = document.getElementById('set_email');
					var w = document.getElementById('cancel');

					if (filter.test(email.value)){
					
						email.disabled=true;
						w.style.display="none";
						y.style.display="inline";
						z.style.display="none";
						z.setAttribute('data-target','#email_dialog');
					
					}
					
					else{
					
						alert('Please provide a valid email address');
						email.focus;

					}
				
				}
				
				function cancel_email(){
				
					var w = document.getElementById('cancel');
					var x = document.getElementById('email');
					var y = document.getElementById('update_email');
					var z = document.getElementById('set_email');
					x.disabled=true;
					y.style.display="inline";
					z.style.display="none";
					w.style.display="none";
					
				}
				
			</script>
			
			<p>Password&nbsp;
			
			<input id="password" type="password" value="adeadbodysdream" disabled>&nbsp;
			<input id="re_password" type="password" value="" style="display:none;">
			<input type="submit" id="update_password" value="Update Password" class="btn btn-primary btn-sm" onclick="edit_password()">
			<input type="submit" id="set_password" value="Save" class="btn btn-primary btn-sm" onclick="validate_password()" style="display:none;" data-toggle="modal">
			<input type="submit" id="cancel_pword" value="Cancel" class="btn btn-primary btn-sm" onclick="cancel()" style="display:none;">
			
			<!--To check if the profile has been successfully updated -->

			<div class="modal fade" id="password_dialog" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h3 class="modal-title" id="myModalLabel">Update Password</h3>
				  </div>
				  <div class="modal-body">
				      <form class="form-signin" role="form">
						<h4 class="form-signin-heading">Your password has been successfully updated. </h4>						
				  </div>
				  <div class="modal-footer">
					<input href="#ok" data-dismiss="modal" onclick="" type="submit" value="Done" class="btn btn-primary"/>
					 </form>
				  </div>
				</div>
			  </div>
			</div>
			
			<script type="text/javascript">
			
				function edit_password(){
					
					var w = document.getElementById('password');
					var x = document.getElementById('re_password');
					var y = document.getElementById('update_password');
					var z = document.getElementById('set_password');
					var a = document.getElementById('cancel_pword');
					w.disabled=false;
					x.style.display="inline";
					y.style.display="none";
					z.style.display="inline";
					a.style.display="inline";
					
				}
				
				function validate_password(){
				
					var w = document.getElementById('password');
					var x = document.getElementById('re_password');
					var y = document.getElementById('update_password');
					var z = document.getElementById('set_password');
					var a = document.getElementById('cancel');
					
					if (w.value!=x.value) {
					alert('Please retype your password.');
					w.focus;
					return false;
					}
					
					else{
					
						w.disabled=true;
						a.style.display="none";
						x.style.display="none";
						y.style.display="inline";
						z.style.display="none";
						a.style.display="none";
						z.setAttribute('data-target', '#password_dialog');
						
					}
				
				}
				
				function cancel(){
				
					var w = document.getElementById('cancel_pword');
					var x = document.getElementById('password');
					var y = document.getElementById('re_password');
					var z = document.getElementById('set_password');
					var a = document.getElementById('update_password');
					w.style.display="none";
					x.disabled=true;
					y.style.display="none";
					z.style.display="none";
					a.style.display="inline";
					
				}
				
			</script>
			
			<h3>Profile Summary:</h3>

			<p><h4>Books on Hand</h4>
			<table class="table table-hover" id="onhand" summary="Results" border="1" cellspacing="5" cellpadding="5" align = "center">
	 <thead>
              <tr>
                <th style="width:100px;" abbr="lmID" scope="col" title="Libary Material ID">Library Material ID</th>
                <th style="width:100px;" abbr="CourseClassification" scope="col" title="Course Classification">Course Classification</th>
                <th abbr="Type" scope="col" title="Type">Type</th>
                <th abbr="Title" scope="col" title="Title">Title</th>
                <th abbr="Author" scope="col" title="Author">Author</th>
                <th style="width:100px;" abbr="YrofPub" scope="col" title="Year of Publication">Year of Publication</th>
                <th abbr="Edition" scope="col" title="Edition">Edition</th>
				<th abbr="Date borrowed" scope="col" title="Date borrowed">Date Borrowed</th>
				<th abbr="Due Date" scope="col" title="Date borrowed">Due Date</th>
              </tr>
            </thead>
			
              <tr>
                <td>L.Mat. ID 1</td>
                <td>CMSC1</td>
                <td>Type 1</td>
                <td>Title 1</td>
                <td>Author 1</td>
                <td>0001</td>
                <td>Edition 1</td>
				<td>Date</td>
				<td>Due Date</td>
              </tr>
			  
              <tr>
                <td>L.Mat. ID 2</td>
                <td>CMSC2</td>
                <td>Type 2</td>
                <td>Title 2</td>
                <td>Author 2</td>
                <td>0002</td>
                <td>Edition 2</td>
				<td>Date</td>
				<td>Due Date</td>				
              </tr>
			  
              <tr>
                <td>L.Mat. ID 3</td>
                <td>CMSC2</td>
                <td>Type 3</td>
                <td>Title 3</td>
                <td>Author 3</td>
                <td>0003</td>
                <td>Edition 3</td>
				<td>Date</td>
				<td>Due Date</td>
              </tr>
			  
			</table>
			
						
			<!--Reserved -->

			<p><h4>Reserved Books</h4>
			<table class="table table-hover" summary="Results" border="1" cellspacing="5" cellpadding="5">
	 <thead>
              <tr>
                <th style="width:100px;" abbr="lmID" scope="col" title="Libary Material ID">Library Material ID</th>
                <th style="width:100px;" abbr="CourseClassification" scope="col" title="Course Classification">Course Classification</th>
                <th abbr="Type" scope="col" title="Type">Type</th>
                <th abbr="Title" scope="col" title="Title">Title</th>
                <th abbr="Author" scope="col" title="Author">Author</th>
                <th style="width:100px;" abbr="YrofPub" scope="col" title="Year of Publication">Year of Publication</th>
                <th abbr="Edition" scope="col" title="Edition">Edition</th>
                <th abbr="Action" scope="col" title="Action">Action</th>
              </tr>
			  
            </thead>
			
              <tr>
			  
                <td>L.Mat. ID 1</td>
                <td>CMSC1</td>
                <td>Type 1</td>
                <td>Title 1</td>
                <td>Author 1</td>
                <td>0001</td>
                <td>Edition 1</td>
                <td><input type="submit" value="Cancel"/></td>
              </tr>
			  
              <tr>
                <td>L.Mat. ID 2</td>
                <td>CMSC2</td>
                <td>Type 2</td>
                <td>Title 2</td>
                <td>Author 2</td>
                <td>0002</td>
                <td>Edition 2</td>
                <td><input type="submit" value="Cancel"/></td>
              </tr>
			  
              <tr>
                <td>L.Mat. ID 3</td>
                <td>CMSC2</td>
                <td>Type 3</td>
                <td>Title 3</td>
                <td>Author 3</td>
                <td>0003</td>
                <td>Edition 3</td>
                <td><input type="submit" value="Cancel"/></td>
              </tr>
			  
			</table>
			
			</p>
		</div>
		</div>

	<div class="container marketing">
<?php include 'home_footer.php'; ?>