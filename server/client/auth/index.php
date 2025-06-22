<?php


$redirect = $domain . 'login/';


if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != '') {
    $id = $_SESSION['user_id'];

    $select = mysqli_query($connection, "SELECT * FROM `users`");

    if (mysqli_num_rows($select) > 0) {

        $userDetails = mysqli_fetch_array($select);
    } else {
        echo "<script>window.location.href='$redirect'</script>";
    }
} else {

    echo "<script>window.location.href='$redirect'</script>";
}
