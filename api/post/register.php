<?php

var_dump($_POST);

if (isset($_POST['submit'])) {
    include_once '../../Includes/DbConnection.php';
}
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $sql = "SELECT * FROM user WHERE username = '$username' AND user_password = '$password'";

// insert into user table
$sql = "INSERT INTO user(username,user_password,user_realname,user_birthdate,user_gender,user_email,user_state) VALUES(?,?,?,?,?,?,?)";
$result = mysqli_execute_query($conn, $sql, [$_POST['username'], $_POST['password'], $_POST['name'], $_POST['birthdate'], $_POST['gender'], $_POST['email'], $_POST['state']]);


//     $result = mysqli_query($conn, $sql);
//     $account = mysqli_fetch_assoc($result);
//     $resultCheck = mysqli_num_rows($result);
//     if ($resultCheck) {
//         // login success
//         $userinfo_arr = array(
//             'userid' => $account['userid'],
//             'username' => $account['username'],
//             'fullname' => $account['user_realname'],
//             'pic_link' => $account['pic_link'],
//             'gender' => $account['user_gender'],
//             'email' => $account['user_email'],
//             'country' => $account['user_country'],
//             'state' => $account['user_state'],
//             'birthday' => $account['user_birthdate'],
//             'points' => $account['user_points'],
//         );
//         setcookie("user", json_encode($userinfo_arr), time() + 3600, '/');
//         header("Location: ../../index.php?page=user/profile");
//     } else {
//         // login fail
//         echo "bad";
//         header("Location: ../../index.php?page=login&fail=true");
//     }
// } else {
//     // Redirect back to the comment page with an error message
//     header("Location: ../../index.php?page=login&fail=true");
// }
