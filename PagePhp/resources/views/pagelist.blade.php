
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page List</title>

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

		.pagelist-form {
			padding: 50px;
		}

		.padding-0 {
			padding-right: 0px;
			padding-left:  0px;	
			padding-top: 5px;
			padding-bottom: 5px;
		}

		.pagelist-form button {
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

		.pagelist-form hr { 
			background-color: #337ab7; 
			height: 5px; 
			border: 0; 
		}
		
		.pagelist-form h2 { 
			padding-top: 20px; 
		}

		.pagelist-form table td{ 
			border: 1px solid black; 
			padding: 5px;
			width: 500px;
		}

		.header{ 
			background-color: #337ab7; 
			color: white;
			font-size: 1.8rem;
		}	

		.button {
		    background-color: #337ab7;
		    border: none;
		    color: white;
		    padding: 15px 32px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    margin: 4px 2px;
		    cursor: pointer;
}	

	</style>
</head>
<body>
<section >
	<div class="title">
	<center><h1>Page List</h1></center>
	</div>

	<div class="pagelist-form">
		<form action="">
			<a href="/newpage" class="button" target="_blank">Create</a>
			<hr>

			<h2><u>Page Maintenance</u></h2>
			<div class="col-md-12 col-lg-12 padding-0 ">
				<table>
					<tr class="header">
						<td>Page ID</td>
						<td>Page Name</td>
						<td>Action</td>
					</tr>
					@foreach($pagelist as $page)
					<tr>
						<td>{{ $page->id}}</td>
						<td>{{ $page->pageName}}</td>
						<td> <a href="">View</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/page/{{$page->id}}">Edit</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="">Delete</a></td>
					</tr>	
				@endforeach
				</table>
			</div>
		</form>

	</div>
	</section>

</body>
</html>
