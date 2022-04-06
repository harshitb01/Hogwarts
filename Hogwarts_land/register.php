<?php
if (isset($_POST['submit'])) {
    if (
        isset($_POST['username']) && isset($_POST['password1']) &&
        isset($_POST['gender']) && isset($_POST['email']) && isset($_POST['phone'])
    ) {

        $username = $_POST['username'];
        $password = $_POST['password1'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "harry";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        } else {
            $Select = "SELECT email FROM register WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO register(username, password, gender, email, phone) values(?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssi", $username, $password, $gender, $email, $phone);
                if ($stmt->execute()) {
                    echo ("<script LANGUAGE='JavaScript'>
                            window.alert('You Have been Registered Successfully! Please return to the login page.');
                            window.location.href='index.php';
                            </script>");
                } else {
                    echo $stmt->error;
                }
            } else {
                echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Someone already registers using this email.');
                        window.location.href='index.php';
                        </script>");
            }
            $stmt->close();
            $conn->close();
        }
    } else {
        echo "All field are required.";
        die();
    }
} else {
    echo "Submit button is not set";
}
