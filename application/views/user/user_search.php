<?php include 'logout_header.php'; ?> 
   <!--Putting it here for nonsense problem-->
 
    <br />
	 <div class="search_area">
      <div class="panel panel-info">
		<div class="panel-heading"><h3 class="form-signin-heading">Search: </h3></div>
	  
	  <br />
	  <br />
<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; bordercolor: #111111" width="600" id="abc">
	<tr>
		<td align="left" valign="top" height="20" style="padding-left: 5px; padding-right: 5px; padding-bottom: 5px; padding-top: 0px" nowrap>
		<TABLE align="center" style="border-collapse: collapse; background-color: #efefef; width:100%; bordercolor: #999999" cellspacing=0 cellpadding="2" border="1">
			<TBODY>
				<TR>
					<TD style="padding: 6px; color: #222222" align="left">
				 	<!-- Begin Box 1 -->
						<table bgcolor="#dedede" cellspacing="0" cellpadding="2" border="0" style="width: 100%; border-collapse: collapse; bordercolor: #111111">
							<tr>
								<td align="left">
									<select size="1" name="field1">
										<option value="author">Author</option>
										<option value="author">Course Subject</option>
										<option value="title" SELECTED>Title</option>
										<option value="keyword">Any Keyword</option>
									</select>
								</td>
								<td align="left"><input name="query2" size="50" style="width: 370px" />&nbsp;</td>
								<td align="left">
									<input type="submit" value="    Search    " name="eventSubmit_doSearchadvanced" id="defaultButton" />&nbsp;&nbsp;
									<input type="reset" value="    Reset    " name="btnReset" /></td>
									<td align = "center"><button onclick="toggle()">Advanced Search</button></td>
								</td>
							</tr>	
</table>				 
				 	<!-- End Box 1 -->
				 	</TD>
				</TR>
			</TBODY>
		</TABLE>
		</td>
	</tr>
  <!-- end of box 1 row -->


	<tr>
		<td align="left" valign="top" height="20" style="padding-left: 5px; padding-right: 5px; padding-bottom: 5px; padding-top: 0px" nowrap>
	<tr>
		<td align="left" valign="top" height="20" style="padding-left: 5px; padding-right: 5px; padding-bottom: 5px; padding-top: 0px" nowrap>


<table style="display:none;" id="hidethis" style="padding-left: 0px; padding-right: 0px; padding-top: 2px; padding-bottom: 2px; width: 100%; bordercolor: #111111" width="100%" border="0" >
          <tr>
				                  <td valign="middle" width="160" align="left" bgcolor="#dedede" rowspan="2" nowrap>&nbsp; <b>Format:</b></td>
				                  <td valign="middle" width="90" align="left" style="vertical-align: middle" bgcolor="#dedede" nowrap><label><input type="checkbox" name="mtype" value="0" class="radio" />Book</label></td>
								  <td valign="middle" width="90" align="left" style="vertical-align: middle" bgcolor="#dedede" nowrap><label><input type="checkbox" name="mtype" value="4" class="radio" />Thesis</label></td>
								  <td valign="middle" width="90" align="left" style="vertical-align: middle" bgcolor="#dedede" nowrap><label><input type="checkbox" name="mtype" value="2" class="radio" />SP</label></td>                      
							      <td valign="middle" width="90" align="left" style="vertical-align: middle" bgcolor="#dedede" nowrap><label><input type="checkbox" name="mtype" value="3" class="radio" />Journal</label></td>
							      <td valign="middle" width="90" align="left" style="vertical-align: middle" bgcolor="#dedede" nowrap><label><input type="checkbox" name="mtype" value="8" class="radio" />CD</label></td>		
								  <td valign="middle" width="90" align="left" style="vertical-align: middle" bgcolor="#dedede" nowrap><label><input type="checkbox" name="mtype" value="8" class="radio" />Reference</label></td>	
								</tr>
</table>

<br /> 


		</td>
	</tr>
</table>
 

<div class="panel-heading"><h3 class="form-signin-heading">Search Results: </h3></div>
<br />
<br />
<table align= "center" id="result_engine" summary="Results" border="1" cellspacing="5" cellpadding="5">
            <thead>
              <tr>
                <th style="width:100px;" abbr="lmID" scope="col" title="Libary Material ID">Library Material ID</th>
                <th style="width:100px;" abbr="CourseClassification" scope="col" title="Course Classification">Course Classification</th>
                <th abbr="Type" scope="col" title="Type">Type</th>
                <th abbr="Title" scope="col" title="Title">Title</th>
                <th abbr="Author" scope="col" title="Author">Author</th>
                <th style="width:100px;" abbr="YrofPub" scope="col" title="Year of Publication">Year of Publication</th>
                <th abbr="Edition" scope="col" title="Edition">Edition</th>
                <th abbr="Accessibility" scope="col" title="status">Status</th>
		<th abbr="Accessibility" scope="col" title="status">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>L.Mat. ID 1</td>
                <td>CMSC1</td>
                <td>Type 1</td>
                <td>Title 1</td>
                <td>Author 1</td>
                <td>0001</td>
                <td>Edition 1</td>
                <td>Available</td>
			    <!-- First Reserve button as sample for books asking the user to secure some requirements -->
                <td><input type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#reserve" value="Reserve">
              </tr>
              <tr>
                <td>L.Mat. ID 2</td>
                <td>CMSC2</td>
                <td>Type 2</td>
                <td>Title 2</td>
                <td>Author 2</td>
                <td>0002</td>
                <td>Edition 2</td>
                <td>Available</td>
				<!-- Second Reserve button as sample for books that do not have requirements -->
                <td><input type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#reserve" value="Reserve">
              </tr>
              <tr>
                <td>L.Mat. ID 3</td>
                <td>CMSC3</td>
                <td>Type 3</td>
                <td>Title 3</td>
                <td>Author 3</td>
                <td>0003</td>
                <td>Edition 3</td>
                <td>Borrowed</td>
                <td><input type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#reserve" value="Reserve">
              </tr>
            </tbody>
</table>
 </div>
	    

<!-- modal for books with requirements -->

<div class="modal fade" id="reserve" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h3 class="modal-title" id="myModalLabel">REQUIREMENTS</h3>
				  </div>
				  <div class="modal-body">
				  <b>Please secure the following:&nbsp&nbsp</b>
				  <br />
						<li> Consent of the Instructor</li>
						<li> Consent of the Owner</li>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
					 </form>
				  </div>
				</div>
			  </div>
			  
</div>	

<!-- modal for books without requirements -->

<div class="modal fade" id="reserve1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h3 class="modal-title" id="myModalLabel">Hi there!</h3>
				  </div>
				  <div class="modal-body">
				  <b>You chose to reserve this book.</b>
				  <br />
				  <b>Do you wish to continue?</b>
				  </div>
				  <div class="modal-footer">
					<button class="btn btn-primary" type="submit">Cancel</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Yes</button>
					
				  </div>
				</div>
			  </div>
			  
</div>

<?php include 'footer.php'; ?>