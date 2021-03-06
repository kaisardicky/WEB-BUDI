<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Simple Login Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
    .coba{
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
}
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
    /* The Close Button */
    .close {
        margin-right: 10px;
        margin-top: 10px;
        color: black;
        float: right;
        font-size: 30px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>
</head>
<body class="coba">
<div class="login-form">
    <span class="close">&times;</span>
    <form action="register.php" method="post">
        <h2 class="text-center">Register</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required="required" name="username">
        </div>
        <div class="form-group">
            <span class="error">* <?php echo $nameErr;?> </span>
            <input type="text" class="form-control" placeholder="Password" required="required" name="password">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Re-enter Password" required="required" name="repassword">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Email Address" required="required" name="email">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="submit" value="submit">Register</button>
        </div>        
    </form>
    <p class="text-center"><a href="#" style="text-decoration: none; color: white;">Have an account ?</a></p>
</div>
</body>
</html>                                		                            