<?php 
$title = 'Feedback average';
include "header.php";
?>

<!-- Container -->
<div class="container">
	<div class="row">
	<div class="col-md-12">
		<h2>Feedback Average</h2>
		<hr>
       <!-- Card -->
	   <div class="card">
      <div class="card-body" style="background-color: #f1f1f1">
      	<!-- Form -->
        <form method="post" enctype="multipart/form-data">
            <!-- Table -->
            <table class="table table-light table-bordered table-hover">
         	    <thead>
         	    	<th class="table-info">Select Faculty</th>
            	</thead>
            	<tbody>
            		<td>
            		   <div class="form-row">
              			<div class="form-group col-md-6">          
            				<select id="faculty" name="faculty" class="form-control">
            					<option value="1">ravi</option>
                 		  		<option value="1">ashmita</option>
            				</select>
            			</div>
            			<div class="form-group col-md-6"> 
            			<input name="sub" type="submit" value="Check Average" class="btn btn-dark"> 
            			</div>
            		</div>
       				</td>
    			</tbody>
            </table>
            <!-- /.Table -->
        </form>
        <!-- Form -->
          </div>
      </div>
       <!-- /.Card -->
   </div>
   </div>
</div>
   <!-- /.Container -->
   <!-- Container -->
<div class="container">
	<div class="row">
	<div class="col-md-12">
		<hr>
		<h4>TOTAL STUDENT ATTEMPT:</h4>
		
		<h4>AVERAGE:</h4>
		<hr>
	</div>
	</div>
</div>
   <!-- /.Container -->
</div>