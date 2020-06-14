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

  <link rel="stylesheet" href="{{asset('dashboard')}}/dist/css/font-awesome/css/font-awesome.min.css">

  <link rel="stylesheet" href="{{asset('dashboard')}}/dist/css/sidebar.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
  	ul li a{
  		font-size: 14px;
  	}


  	#CalculatorLi{
		position: relative;
	}
	#CalculatorHide {
		position: absolute;
		bottom: 62px;
		right: 10px;
	}

	#NotesLi{
		position: relative;
	}
	#NotesHide {
		position: absolute;
		bottom: 62px;
		right: 10px;
	}

	#FlashCardLi{
		position: relative;
	}
	#FlashCardHide {
		position: absolute;
		bottom: 62px;
		right: 10px;
	}
  </style>
</head>
<body class="hold-transition sidebar-mini">
	<div class="row">
		@if ($color->apperance_color === "#000")
			<div class="col-md-1" id="siderDivId">
				<div class="w3-sidebar w3-bar-block w3-card" style="background-color: {{$color->apperance_color}};display: block; width: 8%;border: 1px solid white;" id="sidebar">
				<!--
				  <button class="w3-bar-item w3-button w3-large"
				  onclick="w3_close()"> <span class="float-right font-weight-bold">&times;</span></button> -->
				  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					  <table class="table table-sm table-striped text-center">
					    <tr class="">
					      <th scope="col">
					        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true" style="color: white;">1</a>
					      </th>
					    </tr>
					    <tr>
					      <th scope="col">
					        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false" style="color: white;">2</a>
					      </th>
					    </tr>
					    <tr>
					      <th scope="col">
					        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false" style="color: white;">3</a>
					      </th>
					    </tr>
					    <tr>
					      <th scope="col">
					        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="color: white;">4</a>
					      </th>
					    </tr>
					  </table>
					</div>
				</div>
			</div>
		@else
			<div class="col-md-1" id="siderDivId">
				<div class="w3-sidebar w3-bar-block w3-card" style="background-color: {{$color->apperance_color}};display: block; width: 8%;" id="sidebar"><!--
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
		@endif

		<div class="col-md-11" id="mainDivId">
			<div class="wrapper" id="mainId" style=";border: 1px solid black;">
				<nav class="navbar navbar-expand navbar-primary navbar-dark">
			    	<strong style="color: white;"></strong>
			    	<ul class="navbar-nav">
			    	  <li class="nav-item d-none d-sm-inline-block mt-2">
				        <a class="nav-link" id="show" data-widget="pushmenu" href="#" role="button" style="color: white;"><i class="fas fa-bars"></i></a>
				      </li>
				      <li class="nav-item d-none d-sm-inline-block">
				        <a href="#" class="nav-link" style="color: white;">Item 1 of 3<br> Question Id: 2499</a>
				      </li>
				     </ul>
				     <ul class="navbar-nav ml-auto">
					      <li class="nav-item d-none d-sm-inline-block">
					        <a href="#" class="nav-link mt-2" style="color: white;">
					  						<input type="checkbox">
					  						<i class="fa fa-flag ml-1 mr-1" aria-hidden="true" style="color: red;"></i>
					  						Mark
					        </a>
					      </li>
					  
					      <li class="nav-item d-none d-sm-inline-block ml-3 prevtab">
					        <a href="#" class="nav-link" style="color: white;">
					        				&nbsp;&nbsp;<i class="fa fa-arrow-left" aria-hidden="true"></i><br>
					  						Previous
					        </a>
					      </li>
					      <li class="nav-item d-none d-sm-inline-block mr-3 nexttab">
					        <a href="#" class="nav-link" style="color: white;">
					  						&nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i><br>
					  						Next
					        </a>
					      </li>
					  
					      <li class="nav-item d-none d-sm-inline-block">
					        <a href="#" class="nav-link" style="color: white;" id="toggle">
					        				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{asset('dashboard')}}/dist/img/fullscreen.png" alt="fullScreen" style="width: 10px;height: 15px;"><br>
					  						Full Screen
					        </a>
					      </li>
					      <li class="nav-item dropdown">
					        <a class="nav-link" data-toggle="dropdown" href="#" style="color: white;">
					        	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{asset('dashboard')}}/dist/img/tutorial.png" alt="tutorial" style="width: 10px;height: 15px;"><br>
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
			        				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-flask" aria-hidden="true"></i><br>
			  						Lab Values
					        </a>
					      </li>
					      <li class="nav-item d-none d-sm-inline-block" style="color: white;" id="NotesLi">
					        <a href="#" class="nav-link" style="color: white;">
					        				&nbsp;&nbsp;&nbsp;<i class="fa fa-pencil-square-o" aria-hidden="true"></i><br>
					  						Notes
					        </a>
					      </li>
					      <li class="nav-item d-none d-sm-inline-block" style="color: white;" id="CalculatorLi">
					        <a href="#" class="nav-link" style="color: white;">
					        				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-calculator" aria-hidden="true"></i><br>
					  						Calculator
					        </a>
					      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link" data-toggle="dropdown" href="#" style="color: white;">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-palette"></i><br>
			          Reverse Color
			        </a>
			        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-2" style="padding: 16px 0px 16px 0px;">
			          <h5 class="text-center">Settings</h5>
			          <div class="card card-outline card-primary">
			  			  <div class="card-header">
			  				Appearance
			        	  </div>
			        	  <div class="card-body">
  						  	 <div class="row">
  						  	 	<div class="col-md-6">
  						  	 		<strong>Theme:</strong>
  						  	 	</div>
  						  	 	<div class="col-md-2">
  						  	 		<a style="color: #fbfbfb;cursor: pointer;">
  						  	 			<span id="#fbfbfb" onClick="chose_color(this.id)" style="background-color: #fbfbfb;padding: 5px;border-radius: 100%;border: 1px solid gray;">
  											w
  										</span>
  						  	 		</a>
  						  	 	</div>
  						  	 	<div class="col-md-2">
  						  	 		<a style="color: #000;cursor: pointer;">
  						  	 			<span id="#000" onClick="chose_color(this.id)" style="background-color: #000;padding: 5px;border-radius: 100%;border: 1px solid gray;">
  											B
  										</span>
  						  	 		</a>
  						  	 	</div>
  						  	 	<div class="col-md-2">
  						  	 		<a style="color: #FBF0DA;cursor: pointer;">
  						  	 			<span id="#FBF0DA" onClick="chose_color(this.id)" style="background-color: #FBF0DA;padding: 5px;border-radius: 100%;border: 1px solid gray;">
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
			      <li class="nav-item dropdown">
			        <a class="nav-link" data-toggle="dropdown" href="#" style="color: white;">
			          &nbsp;&nbsp;&nbsp;&nbsp;<img src="{{asset('dashboard')}}/dist/img/settings.png" alt="Settings" style="width: 10px;height: 15px;"><br>
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
	  						  	 		<a style="color: #fbfbfb;cursor: pointer;">
	  						  	 			<span id="#fbfbfb" onClick="chose_color(this.id)" style="background-color: #fbfbfb;padding: 5px;border-radius: 100%;border: 1px solid gray;">
	  											w
	  										</span>
	  						  	 		</a>
	  						  	 	</div>
	  						  	 	<div class="col-md-2">
	  						  	 		<a style="color: #000;cursor: pointer;">
	  						  	 			<span id="#000" onClick="chose_color(this.id)" style="background-color: #000;padding: 5px;border-radius: 100%;border: 1px solid gray;">
	  											B
	  										</span>
	  						  	 		</a>
	  						  	 	</div>
	  						  	 	<div class="col-md-2">
	  						  	 		<a style="color: #FBF0DA;cursor: pointer;">
	  						  	 			<span id="#FBF0DA" onClick="chose_color(this.id)" style="background-color: #FBF0DA;padding: 5px;border-radius: 100%;border: 1px solid gray;">
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
			  @if ($color->apperance_color === "#000")
			  <div class="tab-content" id="v-pills-tabContent" style="background-color: {{$color->apperance_color}};">
			      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
				       <p class="p-4" style="text-align: justify;color: white">1. What is Lorem Ipsum?
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

						<div class="p-5">
					    <form>
					    	<div class="row">
					    		<div class="col-md-1"></div>
					    		<div class="col-md-10">
					    			<img src="{{asset('dashboard')}}/dist/img/test-img.jpeg" class="img-fluid rounded p-4" alt="GenerateTestImg">
					    		</div>
					    		<div class="col-md-1"></div>
					    	</div>
						    <div class="row">
						    	<div class="col-md-4">
						    		<h4 style="color: white;">What is Lichen planus?</h4>
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
			      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" style="color: white">2 no page</div>
			      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" style="color: white">3 no page</div>
			      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" style="color: white">4 no page</div>
			  </div>
			  @else
			  <div class="tab-content" id="v-pills-tabContent" style="background-color: {{$color->apperance_color}};">
			      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
				       <p class="p-4" style="text-align: justify;">1. What is Lorem Ipsum?
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

						<div class="p-5">
					    <form>
					    	<div class="row">
					    		<div class="col-md-1"></div>
					    		<div class="col-md-10">
					    			<img src="{{asset('dashboard')}}/dist/img/test-img.jpeg" class="img-fluid rounded p-4" alt="GenerateTestImg">
					    		</div>
					    		<div class="col-md-1"></div>
					    	</div>
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
			  @endif


			  <!-- Notes -->
			  <div class="row" id="NotesHide" style="display: none;">
	            <div class="card">
	              <div class="card-header" style="background-color: gray;">
	                <strong class="card-title float-left text-light">Edit Item Notes</strong>
	                <strong id="NotesClose" class="float-right text-light">&times;</strong>
	              </div>
	              <div class="card-body">
	                 <textarea name="notes" id="notes" cols="38" rows="10"></textarea>
	              </div>
	              <div class="card-footer">
          	  	  	<button class="btn btn-default btn-sm float-left">Save and Close</button>
          	  	  
          	  	  	<button class="btn btn-default btn-sm float-right">Delete Notes</button>
	              </div>
	              </div>
	          </div>
	          <!-- Notes -->
				
			  <!-- Calculator -->
	          <div class="row" id="CalculatorHide" style="display: none;">
	            <div class="card" style="width: 300px;">
	              <div class="card-header" style="background-color: gray;">
	                <strong class="card-title float-left text-light">Calculator</strong>
	                <strong id="CalculatorClose" class="float-right text-light">&times;</strong>
	              </div>
	              <div class="card-body">
	                 <p>Calculator</p>
	              </div>
	            </div>
	          </div>	
			  <!-- Calculator -->

			  <!-- Flash Card -->
	          <div class="row" id="FlashCardHide" style="display: none;">
	            <div class="card" style="width: 500px;">
	              <div class="card-header" style="background-color: gray;">
	                <strong class="card-title float-left text-light">Flash Cards</strong>
	                <strong id="FlashCardClose" class="float-right text-light">&times;</strong>
	              </div>
	              <div class="card-body">
	              	 <div class="row">
	                	<div class="col-md-12">
	                		<i class="fa fa-search" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Search" name="search" style="width: 420px;">
	                	</div>
	                 </div><br>

	                <h4>This Question</h4>
	                <div class="row">
	                	<div class="col-md-4">
	                		<div class="info-box">
					            <div class="info-box-content">
					               <br><br><br><br>
					               <i class="fa fa-plus text-center" aria-hidden="true" style="color: blue;font-size: 25px;"></i>
					               <strong class="text-center">New Card</strong>
					               <br><br><br><br>
					            </div>
				            </div>
	                	</div>
	                	<div class="col-md-4"></div>
	                	<div class="col-md-4"></div>
	                </div>
	              </div>
	            </div>
	          </div>	
			  <!-- Flash Card -->

			 	<!-- /.footer -->
			  	<nav class="navbar navbar-expand navbar-primary navbar-dark">
			    	<strong style="color: white;"></strong>
			    	<ul class="navbar-nav">
				      <li class="nav-item d-none d-sm-inline-block">
				        <a href="#" class="nav-link" style="color: white;">Block Time Remaining: 00:44:24 <br> TUTOR</a>
				      </li>
				     </ul>
				     <ul class="navbar-nav ml-auto">
					      <li class="nav-item d-none d-sm-inline-block" id="FlashCardLi">
					        <a href="#" class="nav-link" style="color: white;">
					        	<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='fab fa-facebook-messenger' style="border: 1px solid white;padding-top: 5px;"></i><sub><span class="badge badge-dark">0</span></sub><br>
					        </a>
					      </li>
					      <li class="nav-item d-none d-sm-inline-block">
					        <a href="#" class="nav-link" style="color: white;">
					        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-comments-o" aria-hidden="true"></i><br>
								Feedback
					        </a>
					      </li>
					      <li class="nav-item d-none d-sm-inline-block" data-toggle="modal" data-target="#modal-default">
					        <a href="#" class="nav-link" style="color: white;">
					        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-pause-circle-o" style="color: yellow;"></i><br>
								Suspend
					        </a>
						      <!-- /.modal -->
					         <div class="modal fade" id="modal-default">
						        <div class="modal-dialog">
						          <div class="modal-content">
						            <div class="modal-header">
						              <h4 class="modal-title">Suspend Test?</h4>
						              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						                <span aria-hidden="true">&times;</span>
						              </button>
						            </div>
						            <div class="modal-body">
						                <p>You are about to suspend this exam.</p>
										<p>Do you want to suspend this exam?</p>
						            </div>
						            <div class="modal-footer">
						            	<div class="float-right">
						            		<button type="button" class="btn btn-primary">Yes</button>
							            	<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
						            	</div>
						            </div>
						          </div>
						        </div>
						      </div>
						      <!-- /.modal -->
					      </li>
					      <li class="nav-item d-none d-sm-inline-block" data-toggle="modal" data-target="#modal-endblock">
					        <a href="#" class="nav-link" style="color: white;">
					        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-ban" aria-hidden="true"></i><br>
								End Block
					        </a>
					        <!-- /.modal -->
					         <div class="modal fade" id="modal-endblock">
						        <div class="modal-dialog">
						          <div class="modal-content">
						            <div class="modal-header">
						              <h4 class="modal-title">End Test</h4>
						              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						                <span aria-hidden="true">&times;</span>
						              </button>
						            </div>
						            <div class="modal-body">
						                <p>Do you want to end this exam?</p>
										<p>You can always resume the exam from previous tests.</p>
						            </div>
						            <div class="modal-footer">
						            	<div class="float-right">
						            		<button type="button" class="btn btn-primary">Yes</button>
							            	<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
						            	</div>
						            </div>
						          </div>
						        </div>
						      </div>
						      <!-- /.modal -->
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

    	/*Apperance color*/
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
                 location.reload();
              }
            });
		}


		//Full screen
		if (document.fullscreenEnabled) {
			
			var btn = document.getElementById("toggle");
			
			btn.addEventListener("click", function (event) {
				
				if (!document.fullscreenElement) {
					document.documentElement.requestFullscreen();
				} else {
					document.exitFullscreen();
				}
				
			}, false);
			
			document.addEventListener("fullscreenerror", function (event) {
				
				console.log(event);
				
			});
		}



		/*Tab next-prev*/

		function bootstrapTabControl(){
		  var i, items = $('.nav-link'), pane = $('.tab-pane');
		  // next
		  $('.nexttab').on('click', function(){
		      for(i = 0; i < items.length; i++){
		          if($(items[i]).hasClass('active') == true){
		              break;
		          }
		      }
		      if(i < items.length - 1){
		          // for tab
		          $(items[i]).removeClass('active');
		          $(items[i+1]).addClass('active');
		          // for pane
		          $(pane[i]).removeClass('show active');
		          $(pane[i+1]).addClass('show active');
		      }

		  });
		  // Prev
		  $('.prevtab').on('click', function(){
		      for(i = 0; i < items.length; i++){
		          if($(items[i]).hasClass('active') == true){
		              break;
		          }
		      }
		      if(i != 0){
		          // for tab
		          $(items[i]).removeClass('active');
		          $(items[i-1]).addClass('active');
		          // for pane
		          $(pane[i]).removeClass('show active');
		          $(pane[i-1]).addClass('show active');
		      }
		  });
		}
		bootstrapTabControl();
		/*Tab next-prev*/


		//Notes box and calculator
		$(document).ready(function(){
		    $("#NotesLi, #NotesClose").click(function(){
	    		$("#NotesHide").toggle();
		    });

		    $("#CalculatorLi, #CalculatorClose").click(function(){
	    		$("#CalculatorHide").toggle();
		    });

		    $("#FlashCardLi, #FlashCardClose").click(function(){
	    		$("#FlashCardHide").toggle();
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
