<?php
        $conn = mysqli_connect($hostname, $username, $password, $database);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM patients";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>".$row["name"]."</td><td>".$row["age"]."</td><td>".$row["gender"]."</td></tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No patient records found</td></tr>";
        }

        mysqli_close($conn);
        ?>