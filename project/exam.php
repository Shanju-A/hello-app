<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css">
  <style type="text/css">
    body {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      background-color: white;
      font-family: "lato", sans-serif;
    }
    .signupFrm {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .form {
      background-color: white;
      width: 400px;
      border-radius: 8px;
      padding: 20px 40px;
      box-shadow: 0 10px 25px rgba(92, 99, 105, .2);
    }

    .title {
      font-size: 50px;
      margin-bottom: 50px;
    }
    .inputContainer {
      position: relative;
      height: 45px;
      width: 90%;
      margin-bottom: 17px;
    }
      /* Style the inputs */

    .input {
      position: absolute;
      top: 0px;
      left: 0px;
      height: 100%;
      width: 100%;
      border: 1px solid #DADCE0;
      border-radius: 7px;
      font-size: 16px;
      padding: 0 20px;
      outline: none;
      background: none;
      z-index: 1;
    }

    /* Hide the placeholder texts (a) */

    ::placeholder {
      color: transparent;
    }
    /* Styling text labels */

    .label {
      position: absolute;
      top: 15px;
      left: 15px;
      padding: 0 4px;
      background-color: white;
      color: #DADCE0;
      font-size: 16px;
      transition: 0.5s;
      z-index: 0;
    }
    .submitBtn {
      display: block;
      margin-left: auto;
      padding: 15px 30px;
      border: none;
      background-color: purple;
      color: white;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      margin-top: 30px;
    }

    .submitBtn:hover {
      background-color: #9867C5;
      transform: translateY(-2px);
    }
    .input:focus + .label {
      top: -7px;
      left: 3px;
      z-index: 10;
      font-size: 14px;
      font-weight: 600;
      color: purple;
    }
    .input:focus {
        border: 2px solid purple;
    }
    .input:not(:placeholder-shown)+ .label {
      top: -7px;
      left: 3px;
      z-index: 10;
      font-size: 14px;
      font-weight: 600;
    }

  </style>
</head>
<?php		
if(isset($_POST['submit']))
{
$x=$_POST['email'];		
$y=$_POST['passwd'];				
echo "Result:<input type='text' value='$y'/>";			

$con = mysqli_connect('localhost', 'root', '', 'feadback');
$sql = "INSERT into login (id,email,secret,feedback,passwd) values(1,$x,1234,kkkkkkk,$y)";
$stmt = mysqli_prepare($con, $sql);
$con->qurey($stmt);
mysqli_close($con);
}
?>
<body>
    <div class="signupFrm">
    <form action="" method="post" class="form">
      <h1 class="title">Sign up</h1>
      <p>Already have an account?<a href="C:\xampp\htdocs\New folder\project\exam1.html">Signin.</a></p>
      <div class="inputContainer">
        <input type="text" class="input" placeholder="a" name="email">
        <label for="" class="label">Email</label>
      </div>

      <div class="inputContainer">
        <input type="text" class="input" placeholder="a" name="passwd">
        <label for="" class="label">Password</label>
      </div>

      <div class="inputContainer">
        <input type="text" class="input" placeholder="a" name="secret">
        <label for="" class="label">Secret</label>
      </div>

      <input type="submit" name="submit" class="submitBtn" value="Sign up">
    </form>
  </div>
  

</body>
</html>