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

	#FeedbackLi{
		position: relative;
	}
	#FeedbackHide {
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
	
	input[type="button"] 
         { 
         width:100% 
         } 
    @if ($color->apperance_color === "#000")
	   	.nav-pills .nav-link.active{
	   		background-color: #FBF0DA;
	   	}
	@else
		.nav-pills .nav-link.active{
	   		background-color: black;
	   	}
   	@endif   	
  </style>
</head>
<body class="hold-transition sidebar-mini" onload="startTime()">
	<div class="row">
		@if ($color->apperance_color === "#000")
			<div class="col-md-1" id="siderDivId">
				<div class="w3-sidebar w3-bar-block w3-card" style="background-color: {{$color->apperance_color}};display: block; width: 8%;border: 1px solid white;" id="sidebar">
				<!--
				  <button class="w3-bar-item w3-button w3-large"
				  onclick="w3_close()"> <span class="float-right font-weight-bold">&times;</span></button> -->
				  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					  <table class="table table-sm table-striped text-center markQ">
					    <tr class="">
					      <th scope="col">
					        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true" style="color: white;">1 <i class="fa fa-flag ml-1 mr-1 selectQ" aria-hidden="true" style="color: red;display: none;"></i></a>
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
					  <table class="table table-sm table-striped text-center markQ">
					    <tr class="">
					      <th scope="col">
					        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">1 <i class="fa fa-flag ml-1 mr-1 selectQ" aria-hidden="true" style="color: red;display: none;"></i></a>
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
				@if ($color->apperance_color === "#000")
					<nav class="navbar navbar-expand" style="background-color: #FBF0DA;">
				@else
					<nav class="navbar navbar-expand" style="background-color: black;">
				@endif
			    	<strong style="color: white;"></strong>
			    	<ul class="navbar-nav">
			    	  <li class="nav-item d-none d-sm-inline-block mt-2">
			    	  	@if ($color->apperance_color === "#000")
				        	<a class="nav-link" id="show" data-widget="pushmenu" href="#" role="button" style="color: #212529;"><i class="fas fa-bars"></i></a>
				        @else
				       		<a class="nav-link" id="show" data-widget="pushmenu" href="#" role="button" style="color: white;"><i class="fas fa-bars"></i></a>	
				       	@endif	
				      </li>
				      <li class="nav-item d-none d-sm-inline-block">
				      	@if ($color->apperance_color === "#000")
				        	<a href="#" class="nav-link" style="color: #212529;">Item 1 of 3<br> Question Id: 2499</a>
				        @else
				        	<a href="#" class="nav-link" style="color: white;">Item 1 of 3<br> Question Id: 2499</a>
				        @endif
				      </li>
				     </ul>
				     <ul class="navbar-nav ml-auto">
					      <li class="nav-item d-none d-sm-inline-block">
					      	@if ($color->apperance_color === "#000")
					       		<a href="#" class="nav-link mt-2" style="color: #212529;">
					  						<input type="checkbox"  id="MarkCheckbox">
					  						<i class="fa fa-flag ml-1 mr-1" aria-hidden="true" style="color: red;"></i>
					  						Mark</a>
							@else
					  			<a href="#" class="nav-link mt-2" style="color: white;">
					  						<input type="checkbox"  id="MarkCheckbox">
					  						<i class="fa fa-flag ml-1 mr-1" aria-hidden="true" style="color: red;"></i>
					  						Mark</a>
					  		@endif	
					      </li>
					  
					      <li class="nav-item d-none d-sm-inline-block ml-3 prevtab">
					      	@if ($color->apperance_color === "#000")
					       		<a href="#" class="nav-link" style="color: #212529;">
					        				&nbsp;&nbsp;<i class="fa fa-arrow-left" aria-hidden="true"></i><br>
					  						Previous </a>
					  		@else
					  			<a href="#" class="nav-link" style="color: white;">
					        				&nbsp;&nbsp;<i class="fa fa-arrow-left" aria-hidden="true"></i><br>
					  						Previous</a>
					        @endif	
					      </li>
					      <li class="nav-item d-none d-sm-inline-block mr-3 nexttab">
					      	@if ($color->apperance_color === "#000")
					        	<a href="#" class="nav-link" style="color: #212529;">
					  						&nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i><br>
					  						Next</a>
					  		@else
					  			<a href="#" class="nav-link" style="color: white;">
					  						&nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i><br>
					  						Next</a>
					  		@endif									
					      </li>
					  
					      <li class="nav-item d-none d-sm-inline-block">
					      	@if ($color->apperance_color === "#000")
					        <a href="#" class="nav-link" style="color: #212529;" id="toggle">
					        				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					        				<i class="fa fa-expand" aria-hidden="true"></i>
					        				<br>
					  						Full Screen</a>
							@else
					  		<a href="#" class="nav-link" style="color: white;" id="toggle">
					        				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					        				<i class="fa fa-expand" aria-hidden="true"></i>
					        				<br>
					  						Full Screen</a>
							@endif
					      </li>
					      <li class="nav-item dropdown">
					      	@if ($color->apperance_color === "#000")
						        <a class="nav-link" data-toggle="dropdown" href="#" style="color: #212529;">
									&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-question-circle" aria-hidden="true"></i>
						        	<br>
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
					        @else
						        <a class="nav-link" data-toggle="dropdown" href="#" style="color: white;">
									&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-question-circle" aria-hidden="true"></i>
						        	<br>
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
					        @endif
					      </li>
					      <li class="nav-item d-none d-sm-inline-block" id="labValueLi">
					      	@if ($color->apperance_color === "#000")
			        			<a href="#" class="nav-link" style="color: #212529;">
			        				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-flask" aria-hidden="true"></i><br>
			  						Lab Values</a>
			  				@else
			  					<a href="#" class="nav-link" style="color: white;">
			        				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-flask" aria-hidden="true"></i><br>
			  						Lab Values</a>
			  				@endif
					      </li>
					      <li class="nav-item d-none d-sm-inline-block" style="color: white;" id="NotesLi">
					      	@if ($color->apperance_color === "#000")
					        	<a href="#" class="nav-link" style="color: #212529;">
					        				&nbsp;&nbsp;&nbsp;<i class="fa fa-pencil-square-o" aria-hidden="true"></i><br>
					  						Notes</a>
					  		@else
					  			<a href="#" class="nav-link" style="color: white;">
					        				&nbsp;&nbsp;&nbsp;<i class="fa fa-pencil-square-o" aria-hidden="true"></i><br>
					  						Notes</a>
					  		@endif
					      </li>
					      <li class="nav-item d-none d-sm-inline-block" style="color: white;" id="CalculatorLi">
					      	@if ($color->apperance_color === "#000")
					        	<a href="#" class="nav-link" style="color: #212529;">
					        				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-calculator" aria-hidden="true"></i><br>
					  						Calculator</a>
					  		@else
					  			 <a href="#" class="nav-link" style="color: white;">
					        				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-calculator" aria-hidden="true"></i><br>
					  						Calculator</a>
					  		@endif
					      </li>
			      <li class="nav-item dropdown">
			      	@if ($color->apperance_color === "#000")
			        <a class="nav-link" data-toggle="dropdown" href="#" style="color: #212529;">
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
			        @else
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
			        @endif
			      </li>
			      <li class="nav-item dropdown">
			      	@if ($color->apperance_color === "#000")
				        <a class="nav-link" data-toggle="dropdown" href="#" style="color: #212529;">
				          &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-cog fa-fw" aria-hidden="true"></i><br>
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
					    @else
					    	<a class="nav-link" data-toggle="dropdown" href="#" style="color: white;">
					          &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-cog fa-fw" aria-hidden="true"></i><br>
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
				        	@endif
				      </li>
				     </ul>
			    </nav>
			  <!-- /.navbar -->

			  <div class="row">
			  	 <div class="col-md-12" id="labValue7">
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
								    	<div class="col-md-4" id="QWith4to6">
								    		<h4 style="color: white;">What is Lichen planus?</h4>
								    		<div class="card card-outline card-secondary">
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
								    	<div class="col-md-4" id="QWith4to2"></div>
								    	<div class="col-md-4"></div>
								    </div>
								    <button type="submit" class="btn btn-secondary btn-md float-left">Submit</button>
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
								    		<div class="card card-outline card-secondary">
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
								    <button type="submit" class="btn btn-secondary btn-md float-left">Submit</button>
								</form>
							</div>
						  </div>
					      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">2 no page</div>
					      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">3 no page</div>
					      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">4 no page</div>
					  </div>
					  @endif
				  </div>

				  <div id="labValue5" style="display: none;">
				  	 <!-- Lab value -->
	                 <div class="card card-primary card-outline card-outline-tabs" style="border-radius: 0px;">
			              <div class="card-header p-0 border-bottom-0 p-2">
			              	<br>
			              	<div class="row">
			                	<div class="col-md-6">
			                		<input type="text" placeholder="Search" name="search">
			                	</div>
			                	<div class="col-md-6">
			                		<label class="float-left"><input type="checkbox"> SI Reference Intervals</label>
			                	</div>
			                </div><br>

			                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
			                  <li class="nav-item">
			                    <a class="nav-link active" id="custom-tabs-four-blood-tab" data-toggle="pill" href="#custom-tabs-four-blood" role="tab" aria-controls="custom-tabs-four-blood" aria-selected="true">Blood</a>
			                  </li>
			                  <li class="nav-item">
			                    <a class="nav-link" id="custom-tabs-four-hematologic-tab" data-toggle="pill" href="#custom-tabs-four-hematologic" role="tab" aria-controls="custom-tabs-four-hematologic" aria-selected="false">Hematologic</a>
			                  </li>
			                  <li class="nav-item">
			                    <a class="nav-link" id="custom-tabs-four-cerebrospinal-tab" data-toggle="pill" href="#custom-tabs-four-cerebrospinal" role="tab" aria-controls="custom-tabs-four-cerebrospinal" aria-selected="false">Cerebrospinal</a>
			                  </li>
			                  <li class="nav-item">
			                    <a class="nav-link" id="custom-tabs-four-SweatUrineBMI-tab" data-toggle="pill" href="#custom-tabs-four-SweatUrineBMI" role="tab" aria-controls="custom-tabs-four-SweatUrineBMI" aria-selected="false">Sweat,Urine,BMI</a>
			                  </li>
			                </ul>
			              </div>
			              <div class="card-body" id="tblScroll">
			                <div class="tab-content" id="custom-tabs-four-tabContent">
			                  <div class="tab-pane fade show active" id="custom-tabs-four-blood" role="tabpanel" aria-labelledby="custom-tabs-four-blood-tab">
			                     <table class="table table-hover text-nowrap">
			                     	<thead>
			                     		<tr>
					                      <th>Blood, Plasma, Serum</th>
					                      <th>Reference Range</th>
					                    </tr>
			                     	</thead>
				                  <tbody>
				                    <tr>
				                      <td>
				                      	Alanine aminotransferase
				                      	<br>
				                      	(ALT), serum
				                      </td>
				                      <td>8-40 U/L</td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Alkaline phosphatase, serum
				                      	<br>
				                      	Male
				                      	<br>
				                      	Female
				                      </td>
				                      <td>
										<br>
										30-100 U/L
										<br>
										45-115 U/L
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>Amylase, serum</td>
				                      <td>
										25-125 U/L
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Aspartate aminotransferase
										<br>
										(AST), serum
				                      </td>
				                      <td>
										8-40 U/L
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Bilirubin, serum (adult)
				                      	<br>
				                      	Total
				                      	<br>
				                      	Direct
				                      </td>
				                      <td>
										0.1-1.0 mg/dL
										<br>
										0.0-0.3 mg/dL
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>Calcium, serum (total)</td>
				                      <td>
										8.4-10.2 mg/dL
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
										Cholesterol, serum
										<br>
										Total
										<br>
										HDL
										<br>
										LDL
				                      </td>
				                      <td>
										150-240 mg/dL
										<br>
										30-70 mg/dL
										<br>
										<160 mg/dL
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
										Cortisol, serum
										<br>
										0800 h
										<br>
										1600 h
										<br>
										2000 h
				                      </td>
				                      <td>
										<br>
										5-23 μg/dL
										<br>
										3-15 μg/dL
										<br>
										50% of 0800 h
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
										Creatine kinase, serum
										<br>
										Male
										<br>
										Female
				                      </td>
				                      <td>
										25-90 U/L
										<br>
										10-70 U/L
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
										Creatinine, serum
				                      </td>
				                      <td>
										0.6-1.2 mg/dL
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Electrolytes, serum
				                      	<br>
				                      	Sodium (Na+)
				                      	<br>
				                      	Potassium (K+)
				                      	<br>
				                      	Chloride (Cl-)
				                      	<br>
				                      	Bicarbonate (HCO3-)
				                      	<br>
				                      	Magnesium (Mg2+)
				                      </td>
				                      <td>
										<br>
										136-145 mEq/L
										<br>
										3.5-5.0 mEq/L
										<br>
										95-105 mEq/L
										<br>
										22-28 mEq/L
										<br>
										1.5-2.0 mEq/L
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Estriol, total, serum (in pregnancy)
				                      	<br>
				                      	24-28 wks
				                      	<br>
				                      	28-32 wks
				                      	<br>
				                      	32-36 wks
				                      	<br>
				                      	36-40 wks
				                      </td>
				                      <td>
										<br>
										30-170 ng/mL
										<br>
										40-220 ng/mL
										<br>
										60-280 ng/mL
										<br>
										80-350 ng/mL
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Ferritin, serum
				                      	<br>
				                      	Male
				                      	<br>
				                      	Female
				                      </td>
				                      <td>
										<br>
										15-200 ng/mL
										<br>
										12-150 ng/mL
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Follicle-stimulating hormone,<br> serum/plasma
				                      	<br>
				                      	Male
				                      	<br>
				                      	Female
				                      	<br>
				                      	&nbsp;&nbsp;premenopause
				                      	<br>
				                      	&nbsp;&nbsp;midcycle peak
				                      	<br>
				                      	&nbsp;&nbsp;postmenopause
				                      </td>
				                      <td>
										<br>
										4-25 mIU/mL
										<br>
										<br>
										4-30 mIU/mL
										<br>
										10-90 mIU/mL
										<br>
										40-250 mIU/mL
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Gases, arterial blood (room air)
				                      	<br>
				                      	pH
				                      	<br>
				                      	Pco2
				                      	<br>
				                      	Po2
				                      </td>
				                      <td>
										<br>
										7.35-7.45
										<br>
										33-45 mm Hg
										<br>
										75-105 mm Hg
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Glucose, serum
				                      	<br>
				                      	Fasting
				                      	<br>
				                      	2-h postprandial
				                      </td>
				                      <td>
				                      	<br>
										70-110 mg/dL
										<br>
										<120 mg/dL
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
										Growth hormone- arginine stimulation
										<br>
										Fasting
										<br>
										Provocative stimuli
				                      </td>
				                      <td>
										<br>
										<5 ng/mL
										<br>
										>7 ng/mL
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Immunoglobulins, serum
				                      	<br>
				                      	IgA
				                      	<br>
				                      	IgE
				                      	<br>
				                      	IgG
				                      	<br>
				                      	IgM 
				                      </td>
				                      <td>
										<br>
										76-390 mg/dL
										<br>
										0-380 IU/mL
										<br>
										650-1,500 mg/dL
										<br>
										40-345 mg/dL
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Iron
				                      </td>
				                      <td>
										50-170 μg/dL
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Lactate dehydrogenase,
				                      	<br>
				                      	serum
				                      </td>
				                      <td>
										<br>
										45-90 U/L (100-250 IU/L)
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Luteinizing hormone, serum/plasma
				                      	<br>
				                      	Male
				                      	<br>
				                      	Female
				                      	<br>
				                      	&nbsp;&nbsp;follicular phase
				                      	<br>
				                      	&nbsp;&nbsp;midcycle
				                      	<br>
				                      	&nbsp;&nbsp;postmenopause
				                      </td>
				                      <td>
										<br>
										6-23 mIU/mL
										<br><br>
										5-30 mIU/mL
										<br>
										75-150 mIU/mL
										<br>
										30-200 mIU/mL
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>Osmolality, serum</td>
				                      <td>
										275-295 mOsmol/kg H2O
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Parathyroid hormone, serum,
				                      	<br>
				                      	N-terminal
				                      </td>
				                      <td>
										10-65 pg/mL
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Phosphate (alkaline), serum
				                      	<br>
				                      	(p-NPP at 30° C)
				                      </td>
				                      <td>
										20-70 U/L
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Phosphorus (inorganic),
				                      	<br>
				                      	serum
				                      </td>
				                      <td>
										3.0-4.5 mg/dL
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>Prolactin, serum (hPRL)</td>
				                      <td>
										<20 ng/mL
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Proteins, serum
				                      	<br>	
				                      	&nbsp;&nbsp;Total (recumbent)
				                      	<br>
				                      	&nbsp;&nbsp;Albumin
				                      	<br>
				                      	&nbsp;&nbsp;Globulin
				                      </td>
				                      <td>
										<br>
										6.0-7.8 g/dL
										<br>
										3.5-5.5 g/dL
										<br>
										2.3-3.5 g/dL
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Thyroid-stimulating hormone
				                      	<br>
				                      	(TSH), serum
				                      </td>
				                      <td>
										0.5-5.0 μU/mL
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>Thyroidal iodine (123I) uptake</td>
				                      <td>
										8%-30% of administered
										<br>
										dose/24 h
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>Thyroxine (T4), serum</td>
				                      <td>
										5-12 μg/dL
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>Triglycerides, serum</td>
				                      <td>
										35-160 mg/dL
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Triiodothyronine (T3), serum
				                      	<br>
				                      	(RIA)
				                      </td>
				                      <td>
										115-190 ng/dL
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
										Triiodothyronine (T3) resin
										<br>
										uptake
									  </td>
				                      <td>
										25%-35%
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
										Urea nitrogen, serum (BUN)	
									  </td>
				                      <td>
										7-18 mg/dL
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
										Uric acid, serum
									  </td>
				                      <td>
										3.0-8.2 mg/dL
				                      </td>
				                    </tr>
				                  </tbody>
				                </table>
			                  </div>
			                  <div class="tab-pane fade" id="custom-tabs-four-hematologic" role="tabpanel" aria-labelledby="custom-tabs-four-hematologic-tab">
			                     <table class="table table-hover text-nowrap">
			                      <thead>
			                      	<tr>
			                      		<th>Hematologic</th>
			                      		<th>Reference Range</th>
			                      	</tr>
			                      </thead>
				                  <tbody>
				                    <tr>
				                      <td>
				                      	Bleeding time (template)
				                      </td>
				                      <td>
				                      	2-7 minutes
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	CD4+ T-lymphocyte count
				                      </td>
				                      <td>
				                      	>500 mm3
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Erythrocyte count
				                      	<br>
				                      	Male
				                      	<br>
				                      	Female
				                      </td>
				                      <td>
				                      	<br>
				                      	4.3-5.9 million/mm3
				                      	<br>
				                      	3.5-5.5 million/mm3
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Erythrocyte sedimentation rate (Westergren)
				                      	<br>
				                      	Male
				                      	<br>
				                      	Female
				                      </td>
				                      <td>
				                      	<br>
				                      	0-15 mm/h
				                      	<br>
				                      	0-20 mm/h
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Hematocrit
				                      	<br>
				                      	Male
				                      	<br>
				                      	Female
				                      </td>
				                      <td>
				                      	<br>
				                      	41%-53%
				                      	<br>
				                      	36%-46%
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Hemoglobin A1c
				                      </td>
				                      <td>
				                      	≤6%
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Hemoglobin, blood
				                      	<br>
				                      	Male
				                      	<br>
				                      	Female
				                      </td>
				                      <td>
				                      	<br>
				                      	13.5-17.5 g/dL
				                      	<br>
				                      	12.0-16.0 g/dL
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Leukocyte count and differential
				                      	<br>
				                      	Leukocyte count
				                      	<br>
				                      	Neutrophils, segmented
				                      	<br>
				                      	Neutrophils, banded
				                      	<br>
				                      	Eosinophils
				                      	<br>
				                      	Basophils
				                      	<br>
				                      	Lymphocytes
				                      	<br>
				                      	Monocytes
				                      </td>
				                      <td>
				                      	<br>
				                      	4,500-11,000/mm3
				                      	<br>
				                      	54%-62%
				                      	<br>
				                      	3%-5%
				                      	<br>
				                      	1%-3%
				                      	<br>
				                      	0%-0.75%
				                      	<br>
				                      	25%-33%
				                      	<br>
				                      	3%-7%
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Mean corpuscular
				                      	<br>
				                      	hemoglobin (MCH)
				                      </td>
				                      <td>
				                      	25.4-34.6 pg/cell
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Mean corpuscular
				                      	<br>
				                      	hemoglobin concentration
				                      	<br>
				                      	(MCHC)
				                      </td>
				                      <td>
				                      	<br>
				                      	31%-36% Hb/cell
				                      	<br>
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Mean corpuscular volume
				                      	<br>
				                      	(MCV)
				                      </td>
				                      <td>
				                      	80-100 μm3
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Partial thromboplastin time (activated)	
				                      </td>
				                      <td>
				                      	25-40 seconds
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Platelet count
				                      </td>
				                      <td>
				                      	150,000-400,000/mm3
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Prothrombin time
				                      </td>
				                      <td>
				                      	11-15 seconds
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Reticulocyte count
				                      </td>
				                      <td>
				                      	0.5%-1.5% of red cells
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Thrombin time
				                      </td>
				                      <td>
				                      	<2 seconds deviation from
				                      	<br>
				                      	control
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Volume
				                      	<br>
				                      	Plasma
				                      	<br>
				                      	&nbsp;&nbsp;Male
				                      	<br>
				                      	&nbsp;&nbsp;Female
				                      	<br>
				                      	Red cell
				                      	<br>
				                      	&nbsp;&nbsp;Male
				                      	<br>
				                      	&nbsp;&nbsp;Female
				                      </td>
				                      <td>
				                      	<br>
				                      	<br>
				                      	25-43 mL/kg
				                      	<br>
				                      	28-45 mL/kg
				                      	<br>
				                      	<br>
				                      	20-36 mL/kg
				                      	<br>
				                      	19-31 mL/kg
				                      </td>
				                    </tr>
				                  </tbody>
				                </table>
			                  </div>
			                  <div class="tab-pane fade" id="custom-tabs-four-cerebrospinal" role="tabpanel" aria-labelledby="custom-tabs-four-cerebrospinal-tab">
			                     <table class="table table-hover text-nowrap">
			                      <thead>
			                      	<tr>
			                      		<th>Cerebrospinal Fluid</th>
			                      		<th>Reference Range</th>
			                      	</tr>
			                      </thead>
				                  <tbody>
				                    <tr>
				                      <td>Cell count</td>
				                      <td>0-5/mm3</td>
				                    </tr>
				                    <tr>
				                      <td>Chloride</td>
				                      <td>118-132 mEq/L</td>
				                    </tr>
				                    <tr>
				                      <td>Gamma globulin</td>
				                      <td>3%-12% of total proteins</td>
				                    </tr>
				                    <tr>
				                      <td>Glucose</td>
				                      <td>40-70 mg/dL</td>
				                    </tr>
				                    <tr>
				                      <td>Pressure</td>
				                      <td>70-180 mm H2O</td>
				                    </tr>
				                    <tr>
				                      <td>Proteins, total</td>
				                      <td><40 mg/dL</td>
				                    </tr>
				                  </tbody>
				                </table> 
			                  </div>
			                  <div class="tab-pane fade" id="custom-tabs-four-SweatUrineBMI" role="tabpanel" aria-labelledby="custom-tabs-four-SweatUrineBMI-tab">
			                     <table class="table table-hover text-nowrap">
			                      <thead>
			                      	<tr>
			                      		<th>Sweat</th>
			                      		<th>Reference Range</th>
			                      	</tr>
			                      </thead>	
				                  <tbody>
				                    <tr>
				                      <td>Chloride</td>
				                      <td>0-35 mmol/L</td>
				                    </tr>
				                    <tr>
				                      <th>Urine</th>
				                      <th>Reference Range</th>
				                    </tr>
				                    <tr>
				                      <td>Calcium</td>
				                      <td>100-300 mg/24 h</td>
				                    </tr>
				                    <tr>
				                      <td>Chloride</td>
				                      <td>Varies with intake</td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Creatine clearance
				                      	<br>
				                      	Male
				                      	<br>
				                      	Female
				                      </td>
				                      <td>
				                      	<br>
				                      	97-137 mL/min
				                      	<br>
				                      	88-128 mL/min
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	Estriol, total (in pregnancy)
				                      	<br>
				                      	30 wks
				                      	<br>
				                      	35 wks
				                      	<br>
				                      	40 wks
				                      </td>
				                      <td>
										<br>
										6-18 mg/24 h
										<br>
										9-28 mg/24 h
										<br>
										13-42 mg/24 h
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	17-hydroxycorticosteroids
				                      	<br>
				                      	Male
				                      	<br>
				                      	Female
				                      </td>
				                      <td>
				                      	<br>
										3.0-10.0 mg/24 h
										<br>
										2.0-8.0 mg/24 h
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                      	17-ketosteroids, total
				                      	<br>
				                      	Male
				                      	<br>
				                      	Female
				                      </td>
				                      <td>
				                      	<br>
				                      	8-20 mg/24 h
				                      	<br>
				                      	6-15 mg/24 h
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>Osmolality</td>
				                      <td>50-1,400 mOsmol/kg H2O</td>
				                    </tr>
				                    <tr>
				                      <td>Oxalate</td>
				                      <td>8-40 μg/mL</td>
				                    </tr>
				                    <tr>
				                      <td>Proteins, total</td>
				                      <td><150 mg/24 h</td>
				                    </tr>
				                    <tr>
				                      <td>Sodium, total</td>
				                      <td>varies with diet</td>
				                    </tr>
				                    <tr>
				                      <td>Uric acid</td>
				                      <td>varies with diet</td>
				                    </tr>
				                    <tr>
				                      <th>Body Mass Index (Adult)</th>
				                      <td>19-25 kg/m2</td>
				                    </tr>
				                  </tbody>
				                </table> 
			                  </div>
			                </div>
			              </div>
			         </div>
			         <!-- Lab Value -->
				  </div>
			  </div>

			  <!-- Notes -->
			  <div class="row" id="NotesHide" style="display: none;">
	            <div class="card">
	              <div class="card-header" style="background-color: gray;">
	                <strong class="card-title float-left text-light">Edit Item Notes</strong>
	                <strong id="NotesClose" class="float-right text-light">
						<a href="#" style="color: white;">&times;</a>
	                </strong>
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
	            <div class="card" style="width: 280px;">
	              <div class="card-header" style="background-color: gray;">
	                <strong class="card-title float-left text-light">Calculator</strong>
	                <strong id="CalculatorClose" class="float-right text-light">
						<a href="#" style="color: white;">&times;</a>
	                </strong>
	              </div>
	              <div class="card-body">
	                 <table border="1"> 
				         <tr> 
				            <td colspan="3"><input type="text" id="result"/></td> 
				            <td><input type="button" value="c" onclick="clr()"/> </td> 
				         </tr> 
				         <tr> 
				            <td><input type="button" value="1" onclick="dis('1')"/> </td> 
				            <td><input type="button" value="2" onclick="dis('2')"/> </td> 
				            <td><input type="button" value="3" onclick="dis('3')"/> </td> 
				            <td><input type="button" value="/" onclick="dis('/')"/> </td> 
				         </tr> 
				         <tr> 
				            <td><input type="button" value="4" onclick="dis('4')"/> </td> 
				            <td><input type="button" value="5" onclick="dis('5')"/> </td> 
				            <td><input type="button" value="6" onclick="dis('6')"/> </td> 
				            <td><input type="button" value="-" onclick="dis('-')"/> </td> 
				         </tr> 
				         <tr> 
				            <td><input type="button" value="7" onclick="dis('7')"/> </td> 
				            <td><input type="button" value="8" onclick="dis('8')"/> </td> 
				            <td><input type="button" value="9" onclick="dis('9')"/> </td> 
				            <td><input type="button" value="+" onclick="dis('+')"/> </td> 
				         </tr> 
				         <tr> 
				            <td><input type="button" value="." onclick="dis('.')"/> </td> 
				            <td><input type="button" value="0" onclick="dis('0')"/> </td> 
				            <td><input type="button" value="=" onclick="solve()"/> </td> 
				            <td><input type="button" value="*" onclick="dis('*')"/> </td> 
				         </tr> 
				      </table> 
	              </div>
	            </div>
	          </div>	
			  <!-- Calculator -->

			  <!-- Notes -->
			  <div class="row" id="FeedbackHide" style="display: none;">
	            <div class="card" style="width: 600px;">
	              <div class="card-header" style="background-color: gray;">
	                <strong class="card-title float-left text-light"><i class='fab fa-facebook-messenger'></i> &nbsp;Feedback</strong>
	                <strong id="FeedbackClose" class="float-right text-light">
	                	<a href="#" style="color: white;">&times;</a>
	                </strong>
	              </div>
	              <div class="card-body">
	                 <textarea name="notes" id="notes" cols="60" rows="10" placeholder='We appreciate your feedback. However, please provide as much detail as possible in the permitted space avoiding simplistic feedback like "Good question", "hard question" etc.'></textarea>
	              </div>
	              <div class="card-footer">
          	  	  	<label class="float-left"><input type="checkbox"> Check here if concern is for software/ technical issue.</label>

          	  	  
          	  	  	<button class="btn btn-default btn-sm float-right">Submit</button>
	              </div>
	              </div>
	          </div>
	          <!-- Notes -->

			  <!-- Flash Card -->
	          <div class="row" id="FlashCardHide" style="display: none;">
	            <div class="card" style="width: 500px;">
	              <div class="card-header" style="background-color: gray;">
	                <strong class="card-title float-left text-light">Flash Cards</strong>
	                <strong id="FlashCardClose" class="float-right text-light">
	                	<a href="#" style="color: white;">&times;</a>
	                </strong>
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
			 	@if ($color->apperance_color === "#000")
			  		<nav class="navbar navbar-expand" style="background-color: #FBF0DA;">
			  	@else
			  		<nav class="navbar navbar-expand" style="background-color: black;">
				@endif
			    	<strong style="color: white;"></strong>
			    	<ul class="navbar-nav">
				      <li class="nav-item d-none d-sm-inline-block">
				      	@if ($color->apperance_color === "#000")
				        	<a href="#" class="nav-link" style="color: #212529;">Block Time Remaining: <span id="txt"></span> <br> TUTOR</a>
				        @else
				        	<a href="#" class="nav-link" style="color: white;">Block Time Remaining: <span id="txt"></span> <br> TUTOR</a>
				        @endif
				      </li>
				     </ul>
				     <ul class="navbar-nav ml-auto">
					      <li class="nav-item d-none d-sm-inline-block" id="FlashCardLi">
					      	@if ($color->apperance_color === "#000")
						        <a href="#" class="nav-link" style="color: #212529;">
						        	<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='fab fa-facebook-messenger' style="border: 1px solid #212529;padding-top: 5px;"></i><sub><span class="badge badge-dark">0</span></sub><br>
						        </a>
						    @else
						    	<a href="#" class="nav-link" style="color: white;">
						        	<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='fab fa-facebook-messenger' style="border: 1px solid white;padding-top: 5px;"></i><sub><span class="badge badge-dark">0</span></sub><br>
						        </a>
					        @endif
					      </li>
					      <li class="nav-item d-none d-sm-inline-block" id="FeedbackLi">
					      	@if ($color->apperance_color === "#000")
						        <a href="#" class="nav-link" style="color: #212529;">
						        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-comments-o" aria-hidden="true"></i><br>
									Feedback
						        </a>
						    @else
						    	<a href="#" class="nav-link" style="color: white;">
						        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-comments-o" aria-hidden="true"></i><br>
									Feedback
						        </a>
					        @endif
					      </li>
					      <li class="nav-item d-none d-sm-inline-block" data-toggle="modal" data-target="#modal-default">
					      	@if ($color->apperance_color === "#000")
						        <a href="#" class="nav-link" style="color: #212529;">
						        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-pause-circle-o" style="color: black;"></i><br>
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
							            		<button type="button" class="btn btn-secondary">Yes</button>
								            	<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
							            	</div>
							            </div>
							          </div>
							        </div>
							      </div>
							    @else
							    	<a href="#" class="nav-link" style="color: white;">
						        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-pause-circle-o" style="color: white;"></i><br>
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
								            		<button type="button" class="btn btn-secondary">Yes</button>
									            	<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
								            	</div>
								            </div>
								          </div>
								        </div>
								      </div>
								   @endif
						      <!-- /.modal -->
					      </li>
					      <li class="nav-item d-none d-sm-inline-block" data-toggle="modal" data-target="#modal-endblock">
					      	@if ($color->apperance_color === "#000")
					        <a href="#" class="nav-link" style="color: #212529;">
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
						            		<button type="button" class="btn btn-secondary">Yes</button>
							            	<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
						            	</div>
						            </div>
						          </div>
						        </div>
						      </div>
						      <!-- /.modal -->
						      @else
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
							            		<button type="button" class="btn btn-secondary">Yes</button>
								            	<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
							            	</div>
							            </div>
							          </div>
							        </div>
							      </div>
 								<!-- /.modal -->
 							   @endif
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
    		 $("#MarkCheckbox").click(function(){
    		 	if ($('#MarkCheckbox').is(":checked")) {
	    		 	var flag = '<i class="fa fa-flag ml-1 mr-1" aria-hidden="true" style="color: red;"></i>';
	    		 	$(".markQ tr th a.active").append(flag);
	    		}
 			 });	

 			/*$('#MarkCheckbox').change(socmedCh);
			function socmedCh() {
			  if ($('#MarkCheckbox').is(":checked")) {
			    $(".selectQ").show();
			  } else {
			    $(".selectQ").hide();	
			  }
			}*/	

			/*$("#MarkCheckbox").click(function(){
    		 	if ($('#MarkCheckbox').is(":checked")) {
	    		 	var flag = '<i class="fa fa-flag ml-1 mr-1" id="selectQ" aria-hidden="true" style="color: red;"></i>';
	    		 	$(".markQ tr th a.active").append(flag);
    		 	} else {
					$('#selectQ').remove();
    		 	}
 			 });*/ 
		});

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
		  var i, items = $('.markQ .nav-link'), pane = $('.tab-pane');
		  // next
		  $('.nexttab').on('click', function(){
		  	$( "#MarkCheckbox" ).prop( "checked", false );
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
		  	$( "#MarkCheckbox" ).prop( "checked", false );
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


		//Notes, calculator, feedback, flash card
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

		    $("#FeedbackLi, #FeedbackClose").click(function(){
	    		$("#FeedbackHide").toggle();
		    });
		});


		//calculator
		//function that display value 
         function dis(val) 
         { 
             document.getElementById("result").value+=val 
         } 
           
         //function that evaluates the digit and return result 
         function solve() 
         { 
             let x = document.getElementById("result").value 
             let y = eval(x) 
             document.getElementById("result").value = y 
         } 
           
         //function that clear the display 
         function clr() 
         { 
             document.getElementById("result").value = "" 
         } 
		//calculator end


		//Lab value
		$(document).ready(function(){
		 	$("#labValueLi").click(function(){
				$("#labValue7").addClass("col-md-7");
	    		$("#labValue7").removeClass("col-md-12");
	    		$("#labValue5").addClass("col-md-5");
	    		$("#labValue5").show();
	    		document.getElementById("labValue7").style.cssText = "height: 570px;overflow: scroll";
	    		document.getElementById("tblScroll").style.cssText = "height: 570px;overflow: scroll";
		    });
		});
		//Lab value end



		// Timer
		function startTime()
		{
		var today=new Date();
		var h=today.getHours();
		var m=today.getMinutes();
		var s=today.getSeconds();
		// add a zero in front of numbers<10
		m=checkTime(m);
		s=checkTime(s);
		document.getElementById('txt').innerHTML=h+":"+m+":"+s;
		t=setTimeout(function(){startTime()},500);
		}

		function checkTime(i)
		{
		if (i<10)
		  {
		  i="0" + i;
		  }
		return i;
		}




		$(function() {
		  $('.my_features').on("change",function() { 
		    $('#'+$(this).attr('data-name')).toggle(this.checked); // toggle instead
		  }).change(); // trigger the change
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
