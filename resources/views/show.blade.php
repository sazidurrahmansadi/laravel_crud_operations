<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <style>
        
        .single, .card{
            width:700px;
        }
    </style>
</head>
<body>
	
	

	<div class="wrap-table ">
	
	<a class="btn btn-mid btn-primary" href="{{url('/register')}}">Registration</a>
		<div class="card shadow">
			<div class="card-body single">
				<h2>{{$single -> name}}</h2>
				<table class="table">
                    <tr>
                        <td>Name</td>
                        <td>{{$single -> name}}</td>
                    </tr>

                    <tr>
                        <td>Cell</td>
                        <td>{{$single -> cell}}</td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>{{$single -> email}}</td>
                    </tr>
					



				</table>
			</div>
		</div>
	</div>
	

	<!-- JS FILES  -->
	<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>