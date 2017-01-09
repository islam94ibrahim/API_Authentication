<!DOCTYPE html>
<html>
<head>
    <title>Validation</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="col-md-6 col-md-offset-3" style="margin-top: 100px">
            <h2>To Access this page, you need to add this token"{{$user->api_token}}" to the URL</h2>

			<h3>like this:</h3><a href="{{ url('/organizations') }}?api_token={{$user->api_token}}">
			{{url('/organizations')}}?api_token={{$user->api_token}}</a>
        </div>
        
    </div>
</body>
</html>