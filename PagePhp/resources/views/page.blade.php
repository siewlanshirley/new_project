
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <style type="text/css">

  		.h1 {
  			text-align: center;
  		}

  		.title {
  			background-color: #337ab7;
  			padding-top: 10px;
  			padding-bottom: 10px;
  			color: white;
  		}

		.page-form {
			padding: 50px;
		}

		.padding-0 {
			padding-right: 0px;
			padding-left:  0px;	
			padding-top: 5px;
			padding-bottom: 5px;
		}

		.form-group input {
			width: 200px;
		}

		.page-form label {
			font-size: 1.8rem;
		}

		.button {
		    background-color: #337ab7;
		    color: white;
		    padding-top: 5px;
		    padding-bottom: 5px;
		    padding-right: 20px;
		    padding-left: 20px;
		    text-align: center;
		    display: inline-block;
		    font-size: 16px;
		    cursor: pointer;
		}
		

	</style>
</head>
<body>
<section >
	<div class="title">
	<center><h1>Page</h1></center>
	</div> 

	<div class="page-form">
		<form action=""  class="" method="post">
			<div class="col-md-12 col-lg-12 padding-0">
				<div class="col-md-2 col-lg-2 padding-0">
					<label for="pagename">{{  Auth::user()->name}} Page Name : </label>
				</div>

				<div class="col-md-10 col-lg-10 padding-0">
					<input type="text" id="pagename" name="pagename" placeholder="Page name.." style="width: 512px;">
				</div>
    		</div>
			<div class="col-md-12 col-lg-12 padding-0">
				<div class="col-md-2 col-lg-2 padding-0">
    				<label for="pagecontent">Page Content : </label>
    			</div>
    			<div class="col-md-10 col-lg-10 padding-0">
    				<textarea rows="10" cols="70" id="pagecontent" placeholder="Page Content.."></textarea>
    			</div>    		
			</div>
			<div class="col-md-12 col-lg-12 padding-0">
				<div class="col-md-2 col-lg-2 padding-0"></div>
				<div class="col-md-10 col-lg-10 padding-0">
				<div class="form-group">
    				<input type="file" class="form-control-file" id="">
  				</div>
  				<div class="form-group">
    				<input type="file" class="form-control-file" id="">
  				</div>
  				<div class="form-group">
    				<input type="file" class="form-control-file" id="">
  				</div>
  				<div class="form-group">
    				<input type="file" class="form-control-file" id="">
  				</div>

  				<input class="button" type="submit" value="Submit">
				</div>
			</div>

		</form>

	</div>
	</section>

</body>
</html>
