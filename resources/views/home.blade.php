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
        <div style="margin-bottom: 20px; margin-left:10px;">
            <a class="btn btn-primary" href="{{ route('import-view') }}">Import user data</a>

            <a class="btn btn-warning"href="{{ route('export') }}"> Export user data</a>
        </div>
		<div class="card bg-light mt-3">
			<div class="card-header">
				<h3 class="card-title">User Data</h3>
			</div>
			<div class="card-body">
                <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%; text-align:center">
                            #
                        </th>
                        <th style="width: 30%; text-align:center">
                            name
                        </th>
                        <th style="width: 30%; text-align:center">
                            email
                        </th>
                        <th style="width: 30%; text-align:center">
                            password
                        </th>
                    </tr>
                </thead>
                @if($data->isEmpty())
                <tbody>
                    <tr>
                        <td valign="top" colspan="8" style="text-align: center">There is no user yet</td>
                    </tr>
                </tbody>
                @else
                <tbody>
                    @foreach($data as $object)
                    <tr>
                        <td style="vertical-align: middle; text-align:center">
                            <h6 style="font-size:14px;">{{ $object->id }}</h6>
                        </td>
                        <td style="vertical-align: middle; text-align:center">
                            <h6 style="font-size:14px;">{{ $object->name }}</h6>
                        </td>
                        <td style="vertical-align: middle; text-align:center">
                            <h6 style="font-size:14px;">{{ $object->email }}</h6>
                        </td>
                        <td style="vertical-align: middle; text-align:center">
                            <h6 style="font-size:14px;">{{ $object->password }}</h6>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

                @endif
            </table>
        </div>
        <!-- /.card-body -->
    <!-- /.card -->
	</div>

</body>

</html>
