<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Navbar & Tabs</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('dashboard')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dashboard')}}/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
	<div class="row">
		<div class="col-md-1" id="siderDivId">
			<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display: block; width: 8%;" id="sidebar"><!-- 
			  <button class="w3-bar-item w3-button w3-large"
			  onclick="w3_close()"> <span class="float-right font-weight-bold">&times;</span></button> -->
			  <table class="table table-sm table-striped text-center">
			    <tr class="">
			      <th scope="col">
			        <a href="#">1</a>
			      </th>
			    </tr>
			    <tr>
			      <th scope="col">
			        <a href="#">2</a>
			      </th>
			    </tr>
			    <tr>
			      <th scope="col">
			        <a href="#">3</a>
			      </th>
			    </tr>
			  </table>
			</div>
		</div>
		<div class="col-md-11" id="mainDivId">
			<div class="wrapper" id="mainId" style=";border: 1px solid black;">
			  <!-- Navbar -->
			  <nav class="navbar navbar-expand navbar-primary navbar-dark">
			    <!-- Left navbar links -->
			    <ul class="navbar-nav">
			      <li class="nav-item">
			        <a class="nav-link" id="show" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
			      </li>
			      <li class="nav-item d-none d-sm-inline-block">
			        <a href="#" class="nav-link">Item 1 of 3<br>
			Question Id: 2499</a>
			      </li>
			      <li class="nav-item d-none d-sm-inline-block">
			        <a href="#" class="nav-link">
						<input type="checkbox">
						Mark
			        </a>
			      </li>

			      <li class="nav-item d-none d-sm-inline-block">
			        <a href="#" class="nav-link">
						Previous
			        </a>
			      </li>
			      <li class="nav-item d-none d-sm-inline-block">
			        <a href="#" class="nav-link">
						Next
			        </a>
			      </li>

			      <li class="nav-item d-none d-sm-inline-block">
			        <a href="#" class="nav-link">
						Full Screen
			        </a>
			      </li>
			 	  <!--Dropdown Menu -->
			      <li class="nav-item dropdown">
			        <a class="nav-link" data-toggle="dropdown" href="#">
			          Tutorial
			        </a>
			        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="padding: 16px 0px 16px 0px;">
			          <ul>
			          	<li class="nav-item">
				          	<h5><a href="">Interface Tutorial</a></h5>
				        </li>
			          	<li class="nav-item">
				          	<h5><a href="">Keyboard Shortcuts</a></h5>
				        </li>
			          </ul>
			        </div>
			      </li>
			      <li class="nav-item d-none d-sm-inline-block">
			        <a href="#" class="nav-link">
						Lab Value
			        </a>
			      </li>
			      <li class="nav-item d-none d-sm-inline-block">
			        <a href="#" class="nav-link">
						Notes
			        </a>
			      </li>
			      <li class="nav-item d-none d-sm-inline-block">
			        <a href="#" class="nav-link">
						Calculator
			        </a>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link" data-toggle="dropdown" href="#">
			          Reverse Color
			        </a>
			        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="padding: 16px 0px 16px 0px;">
			          ddd
			        </div>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link" data-toggle="dropdown" href="#">
			          Tutorial
			        </a>
			        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="padding: 16px 0px 16px 0px;">
			          <ul>
			          	<li class="nav-item">
				          	<h5><a href="">Interface Tutorial</a></h5>
				        </li>
			          	<li class="nav-item">
				          	<h5><a href="">Keyboard Shortcuts</a></h5>
				        </li>
			          </ul>
			        </div>
			      </li>
			    </ul>

			    <!-- Right navbar links -->
			    <ul class="navbar-nav ml-auto">
			    
			     
			    </ul>
			  </nav>
			  <!-- /.navbar -->

				<div class="row">
					<div class="p-5">
						<p style="text-align: justify;">	What is Lorem Ipsum?
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					    <img class="offset-md-2" src="{{asset('dashboard')}}/dist/img/photo2.png" alt="TestImg" style="width: 500px;height: 400px;">
					    <h3>Which of the following is the most likely diagnosis?</h3>
					    <form>
						    <div class="row">
						    	<div class="col-md-4">
						    		<div class="card card-outline card-primary">
						              <div class="card-header">
						                <div class="custom-control custom-radio">
					                      <input class="custom-control-input" type="radio" id="customRadio1" name="status" value="1" checked>
					                      <label for="customRadio1" class="custom-control-label">A. Atopic dermatitis</label>
					                    </div>
					                    <div class="custom-control custom-radio">
					                      <input class="custom-control-input" type="radio" id="customRadio2" name="status" value="1" checked>
					                      <label for="customRadio2" class="custom-control-label">B. Dermatitis herpetiformis</label>
					                    </div>
					                    <div class="custom-control custom-radio">
					                      <input class="custom-control-input" type="radio" id="customRadio3" name="status" value="1" checked>
					                      <label for="customRadio3" class="custom-control-label">C. Lichen planus</label>
					                    </div>
					                    <div class="custom-control custom-radio">
					                      <input class="custom-control-input" type="radio" id="customRadio4" name="status" value="1" checked>
					                      <label for="customRadio4" class="custom-control-label">D. Pityriasis rosea</label>
					                    </div>
					                    <div class="custom-control custom-radio">
					                      <input class="custom-control-input" type="radio" id="customRadio5" name="status" value="1" checked>
					                      <label for="customRadio5" class="custom-control-label">E. Psoriasis</label>
					                    </div>
					                    <div class="custom-control custom-radio">
					                      <input class="custom-control-input" type="radio" id="customRadio6" name="status" value="1" checked>
					                      <label for="customRadio6" class="custom-control-label">F. Tinea versicolor</label>
					                    </div>
						              </div>
						            </div>
						    	</div>
						    	<div class="col-md-4"></div>
						    	<div class="col-md-4"></div>
						    </div>
						    <button type="submit" class="btn btn-primary btn-md float-left">Submit</button>
						</form>
					</div>
				</div>

			 	<!-- /.footer -->
			  	<nav class="navbar navbar-expand navbar-primary navbar-dark">
			    	<strong style="color: white;"></strong>
			    	<ul class="navbar-nav">
				      <li class="nav-item d-none d-sm-inline-block">
				        <a href="#" class="nav-link" style="color: white;"><strong>Block Time Remaining: 00:44:24 <br> TUTOR</strong></a>
				      </li>
				     </ul>
				     <ul class="navbar-nav ml-auto">
					      <li class="nav-item dropdown">
					         <div class="btn-group dropup">
							  <strong type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
							    Flash Cards
							  </strong>
							  <div class="dropdown-menu">
							    Flash Cards

							  </div>
							</div>
					      </li>&nbsp;&nbsp;&nbsp;&nbsp;
					      <li class="nav-item dropdown">
					         <div class="btn-group dropup">
							  <strong type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
							    Feedback
							  </strong>
							  <div class="dropdown-menu">
							    Feedback

							  </div>
							</div>
					      </li>&nbsp;&nbsp;&nbsp;&nbsp;
					      <li class="nav-item dropdown">
					         <div class="btn-group dropup">
							  <strong type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
							    Suspend
							  </strong>
							  <div class="dropdown-menu">
							    Suspend

							  </div>
							</div>
					      </li>&nbsp;&nbsp;&nbsp;&nbsp;
					      <li class="nav-item dropdown">
					         <div class="btn-group dropup">
							  <strong type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
							    End Block
							  </strong>
							  <div class="dropdown-menu">
							    End Block

							  </div>
							</div>
					      </li>
				     </ul> 
			    </nav>
			     <!-- /.footer -->
			</div>
			<!-- ./wrapper -->
		</div>
	</div>

 	<!-- jQuery -->
    <script src="{{asset('dashboard')}}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('dashboard')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('dashboard')}}/dist/js/adminlte.min.js"></script>

    <script>
    	$(document).ready(function(){
		    $("#show").click(function(){ 
	    		$("#mainDivId").addClass("col-md-12");
	    		$("#mainDivId").removeClass("col-md-11");
	    		$("#siderDivId").hide();
		    });
		});
		

		/*$(document).ready(function(){
		    $("#show").toggle(function(){ 
	    		// $("#mainDivId").addClass("col-md-12");
	    		// $("#mainDivId").removeClass("col-md-11");
	    		$("#siderDivId").hide();
		    }, function(){
		    	// $("#mainDivId").addClass("col-md-11");
	    		// $("#mainDivId").removeClass("col-md-12");
	    		$("#siderDivId").show();
		    });
		});*/


		/*$(document).ready(function(){
		    $("#show").click(function(){ 
	    		$("#mainDivId").addClass("col-md-12");
	    		$("#mainDivId").removeClass("col-md-11");
	    		$("#siderDivId").hide();
		    });
		});*/
	</script>
</body>
</html>