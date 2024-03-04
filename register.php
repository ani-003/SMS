<?php include("db.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="./login-style.css">
</head>

<body>

    <div class="container1" id="registration-container">

        <div><a href="./login.php">
                <button id="back-to-login-btn"
                    style="background-color: rgb(255, 118, 27); border: none; border-radius: 18%; padding: 8px;">&larr;</button>
        </div></a>
        <div class="heading">
            <h2>Fill The Details</h2>
        </div>
        <form method="POST" action="#" enctype="multipart/form-data">
            <div class="form">
                <div class="form-cont">
                    <div class="personal-det">

                        <div class="name" style="margin-top: 5%;">

                            <div class="finame">
                                <label> FIRST NAME: </label>
                                <input type="text" name="fname" required>
                            </div>

                            <div class="laname">
                                <label> LAST NAME: </label>
                                <input type="text" name="lname" required>
                            </div>
                        </div>



                        <div class="contact">

                            <div class="num">
                                <label> PHONE NUMBER: </label>
                                <input type="text" name="phno" required>
                            </div>

                            <div class="email">
                                <label> EMAIL: </label>
                                <input type="text" name="email" required>
                            </div>
                        </div>

                    </div>
                    <br><br>

                    <div class="personal-det1">
                        <label> DATE OF BIRTH: </label>
                        <input type="date" name="dob" id="dob" required>
                    </div>
                    <br>

                    <div class="gender">
                        <label for="">
                            GENDER:

                        </label>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male"> male</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female"> female</label>
                        <input type="radio" value="other" id="other" name="gender">
                        <label for="other"> other</label>
                    </div>
                    <br>

                    <div class="personal-det1">
                        <label> UPLOAD PHOTO: </label>
                        <input type="file" name="uploadfile" class="box" accept="image/jpg, image/jpeg, image/png">
                    </div>
                    <br>

                    <textarea name="adrs" id="" cols="40" rows="3" placeholder="Enter your address here"
                        required></textarea>

                    <br> <br>



                    <div class="personal-det1">
                        <label for="course">
                            CHOOSE A COURSE:
                        </label>
                        <select name="course" id="course">
                            <option value="course"> course</option>
                            <option value="BCA">BCA </option>
                            <option value="B.TECH"> B.TECH</option>
                            <option value="BBA">BBA </option>
                            <option value="B.PHARMA">B.PHARMA </option>
                            <option value="LLB"> LLB</option>
                        </select>




                        <label> YEAR OF STUDY: </label>
                        <select name="yos" id="year">
                            <option value="year">Select Year</option>
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                            <option value="3rd">3rd </option>
                            <option value="4th">4th</option>
                            <option value="5th"> 5th</option>
                        </select>






                        <!-- <div class="cont1"> -->
                        <label> CREATE PASSWORD: </label>
                        <input type="password" name="pass">
                        <!-- </div> -->


                        <!-- <div class="cont1"> -->
                        <label> CONFIRM PASSWORD: </label>
                        <input type="password" name="cpass">
                        <br>
                        <!-- </div> -->


                    </div>

                </div>

            </div>
            <div class="buttons">
                <input type="submit" value="REGISTER" name="register" id="register-btn-registration"></input>
            </div>
            <BR>
            <BR>
    </div>

    </div>






    </form>

    </div>

</body>

</html>


<?php



if ($_POST['register']) {

    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    if ($pass == $cpass) {


        $filename = $_FILES["uploadfile"]["name"];
        $tmpname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "images/" . $filename;

        move_uploaded_file($tmpname, $folder);

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phno = $_POST['phno'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $adrs = $_POST['adrs'];
        $course = $_POST['course'];
        $yos = $_POST['yos'];





        $query = "INSERT INTO `form` (`fname`, `lname`, `std_image`, `phno`, `email`, `dob`, `gender`, `adrs`, `course`, `yos`, `pass`) VALUES ('$fname', '$lname', '$folder', '$phno', '$email', '$dob', '$gender', '$adrs', '$course', '$yos', '$pass')";


        $data = mysqli_query($con, $query);

        if ($data) {

            echo " <script type=text/javascript> alert('Successfully Registered') </script>";

        } else {
            echo " <script type=text/javascript> alert('Please Enter Valid Information') </script>";

        }

    }

    else {
        echo " <script type=text/javascript> alert('Passwords did not match!') </script>";
    }

}


?>