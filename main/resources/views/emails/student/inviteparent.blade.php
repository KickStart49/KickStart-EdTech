<!DOCTYPE html>
<html>
<head>
	<title>Track Your Child's Progress Now</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
	<div>
	<h1>Dear Parents,</h1>

	<h3>Welcome to the <b>KickStart</b> : <i>A next generation in Education.</i></h3>

	<p>Your child {{ $childname }} wants you to monitor his/her progress at <a>KickStart.</a></p>

	<p>For that we have to verify a single code verification between child and parent.</p>
	<p>Follow the steps given bellow</p>

	<ul>
		<li>Login into our Appilication</li>
		<li>In your Dashboard, Put this code given by {{ $childname }} : {{ $childcode }}</li>
		<li>That's it. You can now track your child's progress.</li>
	</ul>
	
	<h2>You can monitor the following things :</h2>
	<ul>
		<li>Your child's score in every chapter evaluated by our best teachers community.</li>
		<li>Your child's grade given by teachers.</li>
		<li>Daily,Monthly,Yearly progress of your child(Allows you to identify in which subject your child has more interest and also his/her weakness)</li>
		<li>And many more.........</li>
	</ul>

	<a href="" class="btn btn-primary"><button>Join KickStart Now</button></a>

</div>
</body>
</html>