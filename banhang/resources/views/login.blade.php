<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <head><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/></head>
</head>
<body>
    <style>
         .container{
        border:2px solid blue;
        text-align:center;
        
        height:500px;
        width:400px;
    }
    body{
        padding:70px;
    }
    h1{
        margin:auto;
    }
    .row{
        height:90px;
        width:396px;
        background-color:paleturquoise;
    }
    </style>
   
<div class="container">
	<div class="row">
		 <h1><i class="fa fa-lock" aria-hidden="true"></i> Login</h1>
       
        </div><br /><br />
         
        <form action="" method="POST">
            @csrf
                	<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-user-tie"></i></span>
								</div>
								<input type="text" name="email" class="form-control" placeholder="username or email"/>
							</div><br />
         
                	<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-key icon"></i></span>
								</div>
									<input type="Password" name="password" class="form-control" placeholder="password"/>
							</div><br />
            <div class="checkbox">
              <label><input type="checkbox" value=""/ name="remember_me"> Remember me</label>
            </div><br />
              <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-off"></span> Login</button>
         
        <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-remove"></span>Login with Facebook </button><br />
               <br /> <center><div style="border:1px solid black;height:1px;width:300px;"></div></center><br />
        <div class="footer">
        </form>
                  <p>Don't have an Account! <a href="#">Sign Up Here</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
 
	</div>
</body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</html>