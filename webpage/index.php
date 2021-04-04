<?php
$name=$address = $website = $city = $postal = $number = $expirydate = $password = $username=$confirm=
    $birth =$salary= $nameErr = $emailErr = $genderErr = $websiteErr=$homephone=$mobilephone=$gpa="";
$cityerr=$mobilephoneerr=$homephoneerr=$gpaerr=$postalerr=$addresserr=$salaryerr=$expirydateerr=$numbererr=
    $usernameerr=$birtherr=$passworderr=$confirmerr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }else {
               $name = test_input($_POST["name"]);
            }
    if (empty($_POST["city"])) {
        $cityerr = "City is required";
    }else {
        $city = test_input($_POST["city"]);
    }
    if (empty($_POST["mobilephone"])) {
        $mobilephoneerr = "Mobile phone is required";
    }else {
        $mobilephone = test_input($_POST["mobilephone"]);
    }
    if (empty($_POST["homephone"])) {
        $homephoneerr = "Home Phone is required";
    }else {
        $homephone = test_input($_POST["homephone"]);
    }
    if (empty($_POST["postal"])) {
        $postalerr = "Postal code is required";
    }else {
        $postal = test_input($_POST["postal"]);
    }
    if (empty($_POST["gpa"])) {
        $gpaerr = "GPA is required";
    }else {
        $gpa = test_input($_POST["gpa"]);
    }
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }else {
               $email = test_input($_POST["email"]);

               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format";
               }
            }

            if (empty($_POST["website"])) {
               $websiteErr = "Website URL is required";
            }else {
               $website = test_input($_POST["website"]);
            }

            if (empty($_POST["address"])) {
               $addresserr = "Address is required";
            }else {
               $address = test_input($_POST["address"]);
            }

            if (empty($_POST["gender"])) {
               $genderErr = "Gender is required";
            }else {
               $gender = test_input($_POST["gender"]);
            }
    if (empty($_POST["salary"])) {
        $salaryerr = "Salary is required";
    }else {
        $salary = test_input($_POST["salary"]);
    }
    if (empty($_POST["number"])) {
        $numbererr = "Card number is required";
    }else {
        $number = test_input($_POST["number"]);
    }
    if (empty($_POST["password"])) {
        $passworderr = "Salary is required";
    }else {
        $password = test_input($_POST["password"]);
    }
    if (empty($_POST["expirydate"])) {
        $expirydateerr = "Card expiry date is required";
    }else {
        $expirydate = test_input($_POST["expirydate"]);
    }
    if (empty($_POST["confirm"])) {
        $confirmerr = "Confirm password is required";
    }else {
        $confirm = test_input($_POST["confirm"]);
    }
    if (empty($_POST["password"])) {
        $passworderr = "Password is required";
    }else {
        $password = test_input($_POST["password"]);
    }
    if (empty($_POST["status"])) {
        $statuserr = "Marital status is required";
    }else {
        $status = test_input($_POST["status"]);
    }
    if (empty($_POST["username"])) {
        $usernameerr = "Username is required";
    }else {
        $username = test_input($_POST["username"]);
    }
    if (empty($_POST["birth"])) {
        $birtherr = "Date of birth is required";
    }else {
        $birth = test_input($_POST["birth"]);
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Validating Forms</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
<style>
    html {
        background-color: #39275B;
    }
    .error {color: #FF0000;}
    body {
        width: 600px;
        margin: 1em auto;
        background-color: white;
        border: 10px #D8C858 solid;
        padding: 0.5em;
    }

    hr {
        width: 90%;
        border: 1px solid #D8C858;
    }

    h1, h2 {
        font-family: sans-serif;
        text-align: center;
    }

    input[type="submit"] {
        font-size: 2em;
        width: 100%;
    }
</style>

<h1>Registration Form</h1>

<p>
    This form validates user input and then displays "Thank You" page.
</p>
<p><span class = "error">* required field.</span></p>
<hr />
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2>Please, fill below fields correctly</h2>
<dl>
    <dt>Name</dt>
    <dd>
        <input type="text" name="name">
        <span class = "error">* <?php echo $nameErr;?></span>
    </dd>

<dt>E-mail</dt>
    <dd><input type="text" name="email">
        <span class = "error">* <?php echo $emailErr;?></span></dd>
    <dt>Username</dt>
    <dd><input type="text" name="username">
        <span class = "error">* <?php echo $usernameerr;?></span></dd>
    <dt>Password</dt>
    <dd><input type="text" name="password">
        <span class = "error">* <?php echo $passworderr;?></span></dd>
    <dt>Confirm password</dt>
<dd><input type="text" name="confirm">
    <span class = "error">* <?php echo $confirmerr;?></span></dd></dd>
    <dt>Date of Birth</dt>
    <dd><input type="text" name="birth">
        <span class = "error">* <?php echo $birtherr;?></span></dd>
    <dt>Gender</dt>
    <dd>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        </dd>
    <dt>Marital status</dt>
    <dd><input type="radio" name="status" value="single">Single
        <input type="radio" name="status" value="married">Married
        <input type="radio" name="status" value="divorced">Divorced
        <input type="radio" name="status" value="widowed">Widowed
        </dd>
    <dt>Address</dt>
    <dd><input type="text" name="address">
        <span class = "error">* <?php echo $addresserr;?></span></dd>
<dt>City</dt>
    <dd><input type="text" name="city">
        <span class = "error">* <?php echo $cityerr;?></span></dd>
    <dt>Postal Code</dt>
    <dd><input type="text" name="postal">
        <span class = "error">* <?php echo $postalerr;?></span></dd>
    <dt>Home Phone</dt>
   <dd> <input type="text" name="homephone">
       <span class = "error">* <?php echo $homephoneerr;?></span></dd>
    <dt>Mobile Phone</dt>
    <dd><input type="text" name="mobilephone">
        <span class = "error">* <?php echo $mobilephoneerr;?></span></dd>
    <dt>Credit Card Number</dt>
    <dd><input type="text" name="number">
        <span class = "error">* <?php echo $numbererr;?></span></dd>
    <dt>Credit Card Expiry Date</dt>
    <dd><input type="text" name="expirydate">
        <span class = "error">* <?php echo $expirydateerr;?></span></dd>
    <dt>Monthly Salary</dt>
    <dd><input type="text" name="salary">
        <span class = "error">* <?php echo $salaryerr;?></span></dd></dd>
    <dt>Web site URL</dt>
    <dd><input type="text" name="website">
        <span class = "error">* <?php echo $websiteErr;?></span></dd>
    <dt>Overall GPA</dt>
    <dd><input type="text" name="gpa">
        <span class = "error">* <?php echo $gpaerr;?></span></dd>

    <!-- Write other fiels similar to Name as specified in lab6.pdf -->
</dl>

<div>
    <input type="submit" name="register" value="Register">
</div>
</body>
</html>