<!DOCTYPE html>
<html>
<head>
	<title>PAT 2017</title>

	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link href="https://www.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/app.css">

</head>
<body>

<div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h4 class="text-white">About</h4>
                <p class="text-muted">This is a PAT, or Personal Assistance Toolkit.  It contains information about Algebra 2 that is relevant to the upcoming tests.  Simon Richard, the creator of the PAT, is in the 2021 class of iSTEM, and currently in Miss. Wright's Algebra 2 class</p>
            </div>
            <div class="col-sm-4">
                <h4 class="text-white">Links</h4>
              <ul class="list-unstyled">
              		<li><a href="/topics" class="text-white">Topics Chronologically Organized</a></li>
					<li><a href="/category" class="text-white">Topics Organized by Category</a></li>
                    <li><a href="http://www.istemghs.org/" class="text-white">iSTEM</a></li>
              </ul>
            </div>
        </div>
    </div>
</div>
<div class="navbar navbar-dark bg-dark">
    <div class="container d-flex justify-content-between">
        <a href="/" class="navbar-brand">PAT 2017</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</div>

<div class="container off-white">
	@yield('content')
</div>

<footer class="text-white">
	<h4>Site Links</h4>
	<ul class="list-unstyled">
		<li><a href="/topics">Topics Chronologically Organized</a></li>
		<li><a href="/category">Topics Organized by Category</a></li>
		<li><a href="http://www.istemghs.org/">iSTEM</a></li>
		<li><a href="#">J. Simon Richard's Personal Site (Currently down)</a></li>
	</ul>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>