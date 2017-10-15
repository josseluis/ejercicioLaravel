<!DOCTYPE html>
<html>
<head>
	<title>@yield ('title') </title>
	
    {!!Html::style('css\bootstrap.min.css')!!}
    {!!Html::style('css\bootstrap-theme.min.css')!!}
    
    {!!Html::script('js\jquery.min.js')!!}
    {!!Html::script('js\bootstrap.min.js')!!}
    {!!Html::script('js\docs.min.js')!!}
</head>
<body>
	@include('compartido.navbar')
	@yield('content')
</body>
</html>