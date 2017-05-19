<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  @yield('stylesheets')
  <style type="text/css">
  	thead:before, thead:after,
tbody:before, tbody:after,
tfoot:before, tfoot:after {
  display: none;
}

  </style>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link href="{{asset('invoice/css/bootstrap.css')}}" media="all" rel="stylesheet">
  <link href="{{asset('invoice/css/bootstrap.min.css')}}" media="all" rel="stylesheet">
  <link href="{{asset('invoice/css/reset.css')}}" media="all" rel="stylesheet">
  <link href="{{asset('invoice/css/home.css')}}" media="all" rel="stylesheet">
  <link href="{{asset('invoice/css/responsive.css')}}" media="all" rel="stylesheet">
  <link href="{{asset('invoice/css/homecontant.css')}}" media="all" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

</head>
<body>

  @yield('content')

</body>
</html>