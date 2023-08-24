<!DOCTYPE html>
<html>

<head>
	<title> Import and Export Excel </title>
	<link rel="stylesheet"
		href=
"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>

<body>
	
	<div class="container">
        <h6 style="margin-top: 20px;"> Import and Export Excel data to database
        </h6>
        @if( !(empty($errors->get('file'))) )
                <div class="alert alert-danger" style="margin-bottom:5px; height:fit-content; padding: 5px; padding-top: 10px; padding-left: 20px; margin-top:10px;">
                  @foreach ($errors->get('file') as $error)
                  <h6>!    {{ $error }}</h6>
                  @endforeach
                </div>
                @endif
		<div class="card bg-light mt-3">
			<div class="card-header">
                <h3 class="card-title">Import Excel data to database</h3>
			</div>
			<div class="card-body">
                <h4>Upload excel file with this pattern</h4>
                <img alt="Avatar" class="table-avatar" src="{{asset('pattern.png')}}"  style="margin-bottom: 20px; margin-top:10px;">    
				<form action="{{ route('import') }}"
					method="POST"
					enctype="multipart/form-data">
					@csrf
					<input type="file" name="file"
						class="form-control">
					<br>
					<button class="btn btn-success">
						Import User Data
					</button>
				</form>
			</div>
		</div>
	</div>

</body>

</html>
