<?php include("db.php");
?>


<?php

// Fetch data from the database
$query = "SELECT * FROM form"; 
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="container">
        <h2>Welcome, Admin!</h2>
        <table cellspacing="10px" width="85%">
            <tr>
              
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Year of Study</th>
                <th>Course</th>
                
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    
                    echo "<td>" . $row['fname'] . "</td>";
                    echo "<td>" . $row['lname'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "<td>" . $row['dob'] . "</td>";
                    echo "<td>" . $row['adrs'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['phno'] . "</td>";
                    echo "<td>" . $row['yos'] . "</td>";
                    echo "<td>" . $row['course'] . "</td>";
                    // Add more table data for other student data
                    echo "</tr>";
                }
            } else {
                echo "No records found.";
            }
            
            ?>
        </table>
        <a href="login.php">Logout</a> <!-- Add a logout link -->
    </div>
</body>
</html>
