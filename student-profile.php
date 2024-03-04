<?php
session_start();

// Check if the user is logged in (you might already have this check in place)
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit();
}

// Access user data or query results from the session variable
if (isset($_SESSION["email"])) {
    $user_data = $_SESSION["email"];
}
?>

<?php include("db.php");
?>


<?php
$email = $_SESSION["email"];

$query = "SELECT * FROM form where email='$email'";
$result = mysqli_query($con, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $fname = $row['fname'];
    $lname = $row['lname'];
    $std_image = $row['std_image'];
    $gender = $row['gender'];
    $dob = $row['dob'];
    $adrs = $row['adrs'];
    $email = $row['email'];
    $phone = $row['phno'];
    $yos = $row['yos'];
    $course = $row['course'];


    mysqli_free_result($result);
} else {
    $fname = "Error fetching data";
    $lname = " ";
    $std_image = " ";
    $gender = " ";
    $dob = " ";
    $adrs = " ";
    $email = " ";
    $phone = " ";
    $yos = " ";
    $course = " ";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: rgb(247, 239, 223);
        }

        .container {
            width: 700px;
            height: 100%;
            border: 2px solid black;
            margin-left: 25%;
            margin-top: 70px;


        }

        .img img {
            width: 10%;
            height: 7S0px;
            position: absolute;
            border-radius: 90%;
            margin-left: 10px;
            margin-bottom: 10px;
        }

        .img h3 {
            margin-left: 0%;
            /* margin-top: 100px; */
            /* margin-top: 100px; */
        }

        .heading h1 {
            text-align: center;
            padding: 10px;
            background-color: aqua;
        }

        .personal-details {
            width: 800px;
            height: 320px;
            /* border: 2px solid black; */
            /* position: absolute; */
            margin-left: 20PX;
            margin-top: 10PX;
            padding-left: 10PX;
            /* overflow: auto; */

        }

        .details-container {
            display: flex;
            justify-content: space-evenly;
        }

        .personal-details p {
            margin-left: 5px;
            /* text-transform: lowercase; */
            margin-bottom: 10PX;
        }

        .class-details p {
            margin-left: 5px;
            text-transform: uppercase;

        }

        .button button {
            padding: 10px;
            background-color: rgb(58, 58, 247);
            /* text-align: center; */
            float: right;
            color: white;
            text-transform: uppercase;
            font-size: 20px;
            margin-right: 10px;

        }

        .container a {
            text-decoration: none;
        }

        .button button {
            transition: 0.3s;
            /* margin-bottom: 10px; */
        }

        .button button:hover {
            transform: scale(1.1);
        }

        .img p {
            margin-left: 50%;
        }

        .number {
            margin-right: 20%;
        }
    </style>
</head>

<body>

    <div class="container"><a href="./register.html"></a>
        <div class="heading">
            <h1>
                STUDENT PROFILE
            </h1>
        </div>
        <div class="img">
            <img id="std_image" src="" alt="">
            <br>
            <h2>
                <p id="name"> _ </p>
                
            </h2>
            
                <h3>
                
                <p id="academics"><b> _</b></p>
                
            </h3>
            

        </div>
        <br>
        <br>
        <hr>
        <div class="details-container">


            <div class="personal-details">
                <!-- <P> PERSONAL DETAILS:</P> -->
                <h3><b> GENDER:</b></h3>
                <P id="gender"> _</P>
                <h3><b> BIRTH DATE:</b></h3>
                <P id="dob"> _</P>
                <h3><b> ADDRESS:</b></h3>

                <label for="" id="address"> _</label>
            </div>
            <div class="number">
                <h3><b> PHONE:</b></h3>
                <P id="phone">_</P>
                <h3><b> EMAIL:</b></h3>
                <P id="email"> _</P>
            </div>
        </div>







    </div>


    <script>
        // Retrieve the PHP variable and assign it to a JavaScript variable
        var fname = "<?php echo $fname; ?>";
        var lname = "<?php echo $lname; ?>";
        var std_image = "<?php echo $std_image; ?>";

        var course = "<?php echo $course; ?>";
        var yos = "<?php echo $yos; ?>";
        var gender = "<?php echo $gender; ?>";
        var dob = "<?php echo $dob; ?>";
        var adrs = "<?php echo $adrs; ?>";
        var phone = "<?php echo $phone; ?>";
        var email = "<?php echo $email; ?>";


        // Update the content of the label using JavaScript
        var labelname = document.getElementById("name");
        
        var image = document.getElementById("std_image");
        var labelacademics = document.getElementById("academics");
        var labelgender = document.getElementById("gender");
        var labeldob = document.getElementById("dob");
        var labeladrs = document.getElementById("address");
        var labelphone = document.getElementById("phone");
        var labelemail = document.getElementById("email");


        labelname.textContent = fname+" "+lname;
        
        image.src = std_image;
        labelacademics.textContent = course+"   "+yos+" year";
        labelgender.textContent = gender;
        labeldob.textContent = dob;
        labeladrs.textContent = adrs;
        labelphone.textContent = phone;
        labelemail.textContent = email;

    </script>


</body>

</html>