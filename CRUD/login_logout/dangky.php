<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registration</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }
</style>  
<body>  
  
<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->  
    <div class="row"><!-- row class is used for grid system in Bootstrap-->  
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Registration</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="dangky.php">  
                        <fieldset>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Username" name="name" type="text" autofocus>  
                            </div>  
  
                            <div class="form-group">  
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                            </div>
                            <div class="form-group">
                            <select name="role" id="" >
                                <option value="">----Chọn role---</option>
                                <option value="Admin">Admin</option>
                                <option value="customer">customer</option>
                            </select>   
  
                            </div>
                            
  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >  
  
                        </fieldset>  
                    </form>  
                    <center><b>Already registered ?</b> <br></b><a href="login.php">Login here</a></center><!--for centered text-->  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  
</body>  
  
</html>  
  
<?php  
  
include("connect.php");//make connection here  
if(isset($_POST['register']))  
{  
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.  
    $user_pass=$_POST['pass'];//same  
    $user_email=$_POST['email'];//same  
    $user_role=$_POST['role'];
  
    if($user_name=='')  
    {  
        //sử dụng javascript để kiểm tra đầu vào  
        echo"<script>alert('Please enter the name')</script>";  
        exit();//việc sử dụng này nếu lần đầu tiên không hoạt động thì cái khác sẽ không hiển thị 
    }  
  
    if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
        exit();  
    }  
  
    if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
        exit();  
    }  
// ở đây truy vấn kiểm tra xem nếu người dùng đã đăng ký sẽ không thể đăng ký lại.  
    $check_email_query="select * from user WHERE email='$user_email'";  
    $run_query=mysqli_query($mysqli,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
        echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
        exit();  
    }  
//insert the user into the database.  
    $insert_user="Insert into user (name,email,password,role) VALUE ('$user_name','$user_pass','$user_email','$user_role')";  
    if(mysqli_query($mysqli,$insert_user))  
    {  
        echo"<script>window.open('welcome.php','_self')</script>";  
    }  
} 
?>  