<html>
<head>
	<title></title>

	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!--Script-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>

    
</head>
<body>
	<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="home.php"></a>
            </div>
            <div class="navbar-header">
                <a class="navbar-brand" href="#">PRE FORUM</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            	<!--
                <ul class="nav navbar-nav navbar-left">
                    <li><a href=""><span class="glyphicon glyphicon-list"></span> Topics</a></li>
                </ul>
            -->
                <div>
					<form class="navbar-form navbar-right" method="POST" role="search" action="pages/login.php">
					<div class="form-group">
					<input id="text" type="text" class="form-control" name="username" placeholder="Username">
					<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-success">Login</button>
					</form>
				</div>
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
			<div class="container" style="margin:8% auto;">
				<div class="col-sm-4 col-md-3">
					<h2>Discussion Forum</h2>
					<p>A forum, or message board, is a discussion where people can hold conversations in the form of posted messages. They differ from chat rooms in that messages are often longer than one line of text, and are at least temporarily archived. Also, depending on the access level of a user or the forum set-up, a posted message might need to be approved by the admin before it becomes visible.</p>
				</div>
				 <div class="col-sm-5 col-md-4 pull-right">
                   <div class="row">
                   
						<form method="POST" class="form-signin" action="functions/register.php">
								<h3 class="text-center">Signup Here!</h3>
							<input id="text" type="text" name="fname" placeholder="First Name"class="form-control" required>
							<input id="text" type="text" name="lname" placeholder="Last Name"class="form-control" required>
							<select class="form-control" name="gender" required>
								<option>Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
							<input id="text" type="text" placeholder="Username" name="username"class="form-control" required>
							<input type="password" placeholder="Password" name="password" class="form-control" required>
							<input type="submit" value="Signup" class="btn btn-success" style="width:100%;">
						</form>
						
				</div>
			</div>
		</div>
<hr>
    <div class="footer">
		<nav align="center">
			<ul class="nav navbar-nav">
				<li><a href="admin/index.php">Admin</a></li>
				<li><a href="teacher/index.php">Teacher</a></li>
				
			</ul>
		</nav>
	</div>

</body>

                   <script type="text/javascript">
                    var restrict = ['teacher','TEACHER','admin','ADMIN','author','AUTHOR','verified','VERIFIED','CERTIFIED','certified'];
document.getElementById('text').addEventListener('keyup', function(e) {
    var text = document.getElementById('text').value;
    for (var x=0;x<restrict.length;x++) {
        if (text.search(restrict[x]) !== -1) {
            alert(restrict[x]+' is not allowed Here!');
        }
        var regExp = new RegExp(restrict[x]);
        text = text.replace(regExp,'');
    }
    document.getElementById('text').value = text;
},false);
                   </script>
</html>