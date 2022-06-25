<?php 
$title = 'Give Feedback';
include "header.php";
?>
   <!-- Container -->
<div class="container">
	<div class="row">
	<div class="col-md-12">
		<h1>Feedback:</h1>
		 <hr>
		 <h2 align="center">
		 <button type="button" style="font-size:7pt;color:black;background-color:#b2e9ed;padding:3px">Strongly Agree 5</button>
		<button type="button" style="font-size:7pt;color:black;background-color:#d5f3f5;padding:3px">Agree 4</button>
		<button type="button" style="font-size:7pt;color:black;background-color:#edf9fa;padding:3px">Neutral 3</button>
		<button type="button" style="font-size:7pt;color:black;background-color:#f1f1f1;padding:3px"> Disagree 2</button>
		<button type="button" style="font-size:7pt;color:white;background-color:#555;padding:3px">Strongly Disagree 1</button><br>
		</h2>
		
       <!-- Card -->
       <form method="post">
	   <div class="card">
      <div class="card-body" >
      	<div class="container">
            <!-- Table -->
            <table class="table table-light table-bordered table-hover">
         	    <tr class="float-right">
               	<h3>1-Course Material</h3>
                </tr>
                <tr>
                  <th class="table-info"><b>1:</b> Teacher provided the course outline having weekly content plan with list of  required text book:</th>
                  <td><input type="radio" name="quest1" value="5" required> 5
  				  <input type="radio" name="quest1" value="4">4
				  <input type="radio" name="quest1" value="3"> 3
				  <input type="radio" name=" quest1" value="2">2
				  <input type="radio" name="quest1" value="1">1</td>
                </tr>
                 <tr>
                  <th class="table-info"><b>2:</b>Course objectives,learning outcomes and grading criteria are clear to me:</th>
                  <td><input type="radio" name="quest2" value="5" required>5
				  <input type="radio" name="quest2" value="4">4
				  <input type="radio" name="quest2" value="3">3
				  <input type="radio" name=" quest2" value="2">2
				  <input type="radio" name="quest2" value="1">1</td>
                </tr>
                <tr>
                  <th class="table-info"><b>3:</b>Course integrates throretical course concepts with the real world examples::</th>
                  <td><input type="radio" name="quest3" value="5" required>5
  				  <input type="radio" name="quest3" value="4">4
				  <input type="radio" name="quest3" value="3">3
				  <input type="radio" name=" quest3" value="2">2
				  <input type="radio" name="quest3" value="1">1</td>
                </tr>
             </table>
            <!-- /.Table -->
          </div>
      </div>
      </div>
       <!-- /.Card -->
       <hr>
              <!-- Card -->
	   <div class="card">
      <div class="card-body" >
      	<div class="container">
            <!-- Table -->
            <table class="table table-light table-bordered table-hover">
         	    <tr class="float-right">
				<h3>2-Class Teaching</h3>
                </tr>
                <tr>
                  <th class="table-info"><b>4:</b> Teacher is punctual,arrives on time and leaves on time:</th>
                  <td><input type="radio" name="quest4" value="5" required> 5
  				  <input type="radio" name="quest4" value="4">4
				  <input type="radio" name="quest4" value="3"> 3
				  <input type="radio" name=" ques41" value="2">2
				  <input type="radio" name="quest4" value="1">1</td>
                </tr>
                 <tr>
                  <th class="table-info"><b>5:</b> Teacher is good at stimulating the interest in the course content:</th>
                  <td><input type="radio" name="quest5" value="5" required>5
				  <input type="radio" name="quest5" value="4">4
				  <input type="radio" name="quest5" value="3">3
				  <input type="radio" name=" quest5" value="2">2
				  <input type="radio" name="quest5" value="1">1</td>
                </tr>
                <tr>
                  <th class="table-info"><b>6:</b> Teacher is good at explaining the subject matter:</th>
                  <td><input type="radio" name="quest6" value="5" required>5
  				  <input type="radio" name="quest6" value="4">4
				  <input type="radio" name="quest6" value="3">3
				  <input type="radio" name=" quest6" value="2">2
				  <input type="radio" name="quest6" value="1">1</td>
                </tr>
                <tr>
                  <th class="table-info"><b>7:</b> Teacher's presentation was clear,loud ad easy to understand:</th>
                  <td><input type="radio" name="quest6" value="5" required>5
  				  <input type="radio" name="quest7" value="4">4
				  <input type="radio" name="quest7" value="3">3
				  <input type="radio" name=" quest7" value="2">2
				  <input type="radio" name="quest7" value="1">1</td>
                </tr>
                <tr>
                  <th class="table-info"><b>8:</b> Teacher is good at using innovative teaching methods/ways:</th>
                  <td><input type="radio" name="quest6" value="5" required>5
  				  <input type="radio" name="quest8" value="4">4
				  <input type="radio" name="quest8" value="3">3
				  <input type="radio" name=" quest8" value="2">2
				  <input type="radio" name="quest8" value="1">1</td>
                </tr>
                <tr>
                  <th class="table-info"><b>9:</b> Teacher is available and helpful during counseling hours:</th>
                  <td><input type="radio" name="quest6" value="5" required>5
  				  <input type="radio" name="quest9" value="4">4
				  <input type="radio" name="quest9" value="3">3
				  <input type="radio" name=" quest9" value="2">2
				  <input type="radio" name="quest9" value="1">1</td>
                </tr>
                 <tr>
                  <th class="table-info"><b>10:</b> Teacher has competed the whole course as per course outline::</th>
                  <td><input type="radio" name="quest10" value="5" required>5
  				  <input type="radio" name="quest10" value="4">4
				  <input type="radio" name="quest10" value="3">3
				  <input type="radio" name=" quest10" value="2">2
				  <input type="radio" name="quest10" value="1">1</td>
                </tr>
             </table>
            <!-- /.Table -->
          </div>
      </div>
      </div>
       <!-- /.Card -->
       <hr>
        <!-- Card -->
	   <div class="card">
      <div class="card-body" >
      	<div class="container">
            <!-- Table -->
            <table class="table table-light table-bordered table-hover">
         	    <tr class="float-right">
               	<h3>3-Class Assessment</h3>
                </tr>
                <tr>
                  <th class="table-info"><b>11:</b>Teacher was always fair and impartial:</th>
                  <td><input type="radio" name="quest1" value="5" required> 5
  				  <input type="radio" name="quest11" value="4">4
				  <input type="radio" name="quest11" value="3"> 3
				  <input type="radio" name=" quest11" value="2">2
				  <input type="radio" name="quest11" value="1">1</td>
                </tr>
                 <tr>
                  <th class="table-info"><b>12:</b>Assessments conducted are clearly connected to maximize learining objectives:</th>
                  <td><input type="radio" name="quest12" value="5" required>5
				  <input type="radio" name="quest12" value="4">4
				  <input type="radio" name="quest12" value="3">3
				  <input type="radio" name=" quest12" value="2">2
				  <input type="radio" name="quest12" value="1">1</td>
                </tr>
                <tr>
                  <th class="table-info"><b>3:</b>Course integrates throretical course concepts with the real world examples::</th>
                  <td><input type="radio" name="quest3" value="5" required>5
  				  <input type="radio" name="quest3" value="4">4
				  <input type="radio" name="quest3" value="3">3
				  <input type="radio" name=" quest3" value="2">2
				  <input type="radio" name="quest3" value="1">1</td>
                </tr>
             </table>
            <!-- /.Table -->
          </div>
      </div>
      </div>
       <!-- /.Card -->
       <hr>
       <!-- Card -->
      <div class="card">
      <div class="card-body" >
      	<div class="container">
            <!-- Table -->
            <table class="table table-light table-bordered table-hover">
         	    <tr>
                <div class="form-group">
					<label for="Message"><b>13:</b>What I liked about the course:</label>
					<textarea  style="height:1%"class="form-control" rows="15" name="quest13" id="quest13" aria-describedby="helpId" placeholder="Enter here"></textarea>
				</div>
				</tr>
			</table>
		</div>
	</div>
   </div><!-- /.Card -->
   <hr>
    <!-- Card -->
      <div class="card">
      <div class="card-body" >
      	<div class="container">
            <!-- Table -->
            <table class="table table-light table-bordered table-hover">
         	    <tr>
                <div class="form-group">
					<label for="Message"><b>13:</b>What I disliked about the course:</label>
					<textarea  style="height:1%" class="form-control" rows="15" name="quest14" id="quest14" aria-describedby="helpId" placeholder="Enter here"></textarea>
				</div>
				</tr>
			</table>
		</div>
	</div>
   </div><!-- /.Card -->
   <hr>
     <!-- Card -->
      <div class="card">
      <div class="card-body" >
      	<div class="container">
            <!-- Table -->
            <table class="table table-light table-bordered table-hover">
         	    <tr>
                <div class="form-group">
						<h4 align="center"><input type="submit" class="btn table-info text-dark" value="Submit Feedback" name="Submit Feedback" id="Submit Feedback"></h4>
					</div>      
				</tr>
			</table>
		</div>
	</div>
   </div><!-- /.Card -->
   <hr>
</form>
 </div>
</div>
</div>
   <!-- /.Container -->

