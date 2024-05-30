<!DOCTYPE html>
<html>
    <head>
        <title>Registration Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <style>
        body{
    margin-top:20px;
    background-color: white;
}
.card {
    margin-bottom: 1.5rem;
    box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);
}


.button {
    position: relative;
    left: 40%;
    
  background-color: #3399ff; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
    </style>
    <body>
    <div style="text-align: center; background-color: #f0f0f0; padding: 20px;">
    <img src="images/header.png" alt="AIUB" width="150">
    <h1>Welcome to our Library Management System</h1>
    <p>Experience secure and efficient access to our library resources.</p>
    </div>
    <div class="container h-100">
    		<div class="row h-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Get started</h1>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form action="registration.php" method="post">
										<div class="form-group">
											<label>Name</label>
											<input class="form-control form-control-lg" type="text" name="addname" placeholder="Enter your name">
										</div>

										<div class="form-group">
											<label>Email</label>
											<input class="form-control form-control-lg" type="email" name="addemail" placeholder="Enter your email">
										</div>

										<div class="form-group">
											<label>Password</label>
											<input class="form-control form-control-lg" type="password" name="addpass" placeholder="Enter password">
										</div>
										<div class="form-group">
											<label>Confirm Password</label>
											<input class="form-control form-control-lg" type="password" name="addpass1" placeholder="Enter confirm password">
										</div>
                                        <div class = "form-group">
                                            <lebel for ="type">Choose type </lebel>
                                            
                                            <lebel for ="student" class="radio-inline"><input type="radio" name="type" id="student"> Student</lebel>
                                            <lebel for ="teacher" class="radio-inline"><input type="radio" name="type" id="teacher"> Teacher</lebel>
                                            
                                        </div>
										<div class = "form-group">
                                            <input type = "submit" name = "signup" class = "button" value = "Signup">
                                        </div>
									</form>
                                    
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
        <?php
        if(isset($_POST['signup'])){
            session_start();
            $name = $_POST ['addname'];
            $email = $_POST['addemail'];
            $pass = $_POST['addpass'];
            $pass1 = $_POST['addpass1'];
            $type = $_POST['type'];

            if($pass == $pass1){
                $db = mysqli_connect("localhost","root","","library_managment");
                $sql = "INSERT INTO userdata(name, email, pass, type) VALUES ('$name', '$email', '$pass','$type')";
                mysqli_query($db,$sql);
                header("location:index.php");
            }
            else
            {
                echo "<i>Password doesn't match</i>";
            }
        }
        ?>
        <div style="text-align: center; background-color: #f0f0f0; padding: 20px;">
        <p>&copy; 2023 Library Management System. All rights reserved.</p>
        <p>Powered by AIUB</p>
        </div>

    </body>

</html>