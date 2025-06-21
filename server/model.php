<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/vendors/bootstrap.css">
</head>

<body>


    <?php

    function Model($message): string
    {

        return "
    <div class=\"toast-container position-fixed top-0 end-0 p-3 toast-index toast-rtl\">
        <div class=\"toast show toast fade\" id=\"liveToast\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
            <div class=\"toast-header toast-img\">
                <img class=\"rounded me-2\" src=\"../assets/images/dashboard-8/profile.png\" alt=\"profile\">
                <strong class=\"me-auto\">Zono Theme</strong>
                <small>5 min ago</small>
                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
            </div>
            <div class=\"toast-body toast-dark\">$message</div>
        </div>
    </div>
    ";
    }

    ?>
    <script src="<?php echo $domain ?>assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/notify/custom-notify.js"></script>

</body>

</html>