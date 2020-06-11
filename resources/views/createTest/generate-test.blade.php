<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Generate Test</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <meta name="csrf-token" content="{{ csrf_token() }}" />
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
			<div class="w3-sidebar w3-bar-block w3-card" style="background-color: #FBF0DA;display: block; width: 8%;" id="sidebar"><!-- 
			  <button class="w3-bar-item w3-button w3-large"
			  onclick="w3_close()"> <span class="float-right font-weight-bold">&times;</span></button> -->
			  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				  <table class="table table-sm table-striped text-center">
				    <tr class="">
				      <th scope="col">
				        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">1</a>
				      </th>
				    </tr>
				    <tr>
				      <th scope="col">
				        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">2</a>
				      </th>
				    </tr>
				    <tr>
				      <th scope="col">
				        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">3</a>
				      </th>
				    </tr>  
				    <tr>
				      <th scope="col">
				        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">4</a>
				      </th>
				    </tr>
				  </table>
				</div>
			</div>
		</div>
		<div class="col-md-11" id="mainDivId">
			<div class="wrapper" id="mainId" style=";border: 1px solid black;">
			  <nav class="navbar navbar-expand navbar-primary navbar-dark">
			    <ul class="navbar-nav">
			      <li class="nav-item">
			        <a class="nav-link" id="show" data-widget="pushmenu" href="#" role="button" style="color: white;"><i class="fas fa-bars"></i></a>
			      </li>
			      <li class="nav-item d-none d-sm-inline-block">
			        <a href="#" class="nav-link" style="color: white;">Item 1 of 3<br>
			Question Id: 2499</a>
			      </li>
			      <li class="nav-item d-none d-sm-inline-block">
			        <a href="#" class="nav-link" style="color: white;">
						<input type="checkbox">
						Mark
			        </a>
			      </li>

			      <li class="nav-item d-none d-sm-inline-block">
			        <a href="#" class="nav-link" style="color: white;">
						Previous
			        </a>
			      </li>
			      <li class="nav-item d-none d-sm-inline-block">
			        <a href="#" class="nav-link" style="color: white;">
						Next
			        </a>
			      </li>

			      <li class="nav-item d-none d-sm-inline-block">
			        <a href="#" class="nav-link" style="color: white;">
						Full Screen
			        </a>
			      </li>
			 	  <!--Dropdown Menu -->
			      <li class="nav-item dropdown">
			        <a class="nav-link" data-toggle="dropdown" href="#" style="color: white;">
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
			        <a href="#" class="nav-link" style="color: white;">
						Lab Values
			        </a>
			      </li>
			      <li class="nav-item d-none d-sm-inline-block" style="color: white;">
			        <a href="#" class="nav-link" style="color: white;">
						Notes
			        </a>
			      </li>
			      <li class="nav-item d-none d-sm-inline-block" style="color: white;">
			        <a href="#" class="nav-link" style="color: white;">
						Calculator
			        </a>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link" data-toggle="dropdown" href="#" style="color: white;">
			          Reverse Color
			        </a>
			        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-2" style="padding: 16px 0px 16px 0px;">
			          <h5 class="text-center">Settings</h5>
			          <span>Apperance</span>
			          <div class="card card-outline card-primary">
						  <div class="card-header">
						  	 <div class="row">
						  	 	<div class="col-md-6">Color Theme</div>
						  	 	<div class="col-md-2">
									<a href=""><i class="fas fa-2x fa-circle" style="color: #fbfbfb;margin-left:10px;border: 1px solid gray;border-radius: 100%"></i></a>
						  	 	</div>
						  	 	<div class="col-md-2">
									<a href=""><i class="fas fa-2x fa-circle" style="color: #000;margin-left:10px;"></i></a>
						  	 	</div>
						  	 	<div class="col-md-2">
									<a href=""><i class="fas fa-2x fa-circle" style="color: #FBF0DA;margin-left:10px;"></i></a>
						  	 	</div>
						  	 </div>
			        	  </div>
			       	  </div>
			        </div>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link" data-toggle="dropdown" href="#" style="color: white;">
			          Settings
			        </a>
			        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-2" style="padding: 16px 0px 16px 0px;">
			          <h5 class="text-center">Settings</h5>
			          <div class="card card-outline card-primary">
						  <div class="card-header">
						  	Apperance
						  </div>
						  <div class="card-body">
						  	 <div class="row">
						  	 	<div class="col-md-6">
						  	 		<strong>Theme:</strong>
						  	 	</div>
						  	 	<div class="col-md-2">
						  	 		<a>
						  	 			<span id="#fbfbfb" onClick="chose_color(this.id)" style="background-color: #fbfbfb;padding: 5px;border-radius: 100%;cursor: pointer;border: 1px solid gray;"> 
											w 
										</span>
						  	 		</a>
						  	 	</div>
						  	 	<div class="col-md-2">
						  	 		<a>
						  	 			<span id="#000" onClick="chose_color(this.id)" style="background-color: #000;padding: 5px;border-radius: 100%;cursor: pointer;border: 1px solid gray;"> 
											B
										</span>
						  	 		</a>
						  	 	</div>
						  	 	<div class="col-md-2">
						  	 		<a>
						  	 			<span id="#FBF0DA" onClick="chose_color(this.id)" style="background-color: #FBF0DA;padding: 5px;border-radius: 100%;cursor: pointer;border: 1px solid gray;"> 
											G
										</span>
						  	 		</a>
						  	 	</div>
						  	 	<p id = "getColor" name="apperance_color" style="display: none;"></p>
								<input type="text" class="form-control" id="apperance_color" name="apperance_color" style="display: none;">
						  	 </div>
						  </div>
					  </div>
			        </div>
			      </li>
			    </ul>
			  </nav>
			  <!-- /.navbar -->

			  <div class="tab-content" id="v-pills-tabContent" style="background-color: #FBF0DA;">
			      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
				       <p class="p-4" style="text-align: justify;">1	What is Lorem Ipsum?
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						<img src="{{asset('dashboard')}}/dist/img/test-img.jpeg" class="p-4" alt="GenerateTestImg">

						<div class="p-5">    
					    <form>
						    <div class="row">
						    	<div class="col-md-4">
						    		<h4>What is Lichen planus?</h4>
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
			      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">2 no page</div>
			      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">3 no page</div>
			      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">4 no page</div>
			  </div>

			 	<!-- /.footer -->
			  	<nav class="navbar navbar-expand navbar-primary navbar-dark">
			    	<strong style="color: white;"></strong>
			    	<ul class="navbar-nav">
				      <li class="nav-item d-none d-sm-inline-block">
				        <a href="#" class="nav-link" style="color: white;">Block Time Remaining: 00:44:24 <br> TUTOR</a>
				      </li>
				     </ul>
				     <ul class="navbar-nav ml-auto">
					      <li class="nav-item d-none d-sm-inline-block">
					        <a href="#" class="nav-link" style="color: white;">
								Flash Cards
					        </a>
					      </li>
					      <li class="nav-item d-none d-sm-inline-block">
					        <a href="#" class="nav-link" style="color: white;">
								Feedback
					        </a>
					      </li>
					      <li class="nav-item d-none d-sm-inline-block">
					        <a href="#" class="nav-link" style="color: white;">
								Suspend
					        </a>
					      </li>
					      <li class="nav-item d-none d-sm-inline-block">
					        <a href="#" class="nav-link" style="color: white;">
								End Block
					        </a>
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
		

		var el_select = document.getElementById("getColor"); 
		
		function chose_color(clicked) { 
			var apperance_color = el_select.innerHTML = clicked; 
			console.log(apperance_color);
			// var apperance_color = jQuery("#apperance_color").val(apperance_color_name);
			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
	      	
            jQuery.ajax({
              url: "{{ url('/apperance-color-store') }}",
              method: 'post',
              data: {
                 apperance_color: apperance_color
              },
              success: function(result){
                 console.log(result);
              }
            });
		}	

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