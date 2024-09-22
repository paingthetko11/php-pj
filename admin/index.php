<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="login.css" />
    <title>Interative Panda Login</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:500" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>

    <div class="login">
        <?php
        error_reporting(1);
        if (isset($_GET['sub'])) {
            $eid = $_GET['n'];
            $pass = $_GET['p'];

            if ($eid == '' || $pass == '') {
                echo "<p style=\"color: red; text-align: center; margin-left:-15px\"
         >Please fill username or password</p>";
            } else {
                if ($eid == "admin" && $pass == "superuser") {
                    header('location:home.html');
                } else {
                    echo "<p style=\"color: red; text-align: center;margin-left:-15px\"
        >username or password Wrong!</p>";
                }
            }
        }
        ?>
        <form>
            <i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;</i><input type="text" name="n"><br><br>
            <i class="fa fa-unlock-alt" aria-hidden="true">&nbsp;&nbsp;</i><input type="password" name="p"><br><br>
            <button type="submit" name="sub">Login</button>
        </form>
    </div>
    <div class="backg">
        <div class="panda">
            <div class="earl"></div>
            <div class="earr"></div>
            <div class="face">
                <div class="blshl"></div>
                <div class="blshr"></div>
                <div class="eyel">
                    <div class="eyeball1"></div>
                </div>
                <div class="eyer">
                    <div class="eyeball2"></div>
                </div>
                <div class="nose">
                    <div class="line"></div>
                </div>
                <div class="mouth">
                    <div class="m">
                        <div class="m1"></div>
                    </div>
                    <div class="mm">
                        <div class="m1"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="pawl">
        <div class="p1">
            <div class="p2"></div>
            <div class="p3"></div>
            <div class="p4"></div>
        </div>
    </div>
    <div class="pawr">
        <div class="p1">
            <div class="p2"></div>
            <div class="p3"></div>
            <div class="p4"></div>
        </div>
    </div>
    <div class="handl"></div>
    <div class="handr"></div>



</body>

</html>
<script>
    $(document).ready(function () {
        $(":text").focus(function () {
            $(".handl").css({
                transform: 'rotate(0deg)',
                bottom: '140px',
                left: '50px',
                height: '45px',
                width: '35px'
            });
            $(".handr").css({
                transform: 'rotate(0deg)',
                bottom: '185px',
                left: '250px',
                height: '45px',
                width: '35px'
            });
            $(".eyeball1").css({
                top: '20px',
                left: '13px'
            });
            $(".eyeball2").css({
                top: '20px',
                left: '8px'
            });
        });
        $(":password").focus(function () {
            $(".eyeball1").css({
                top: '10px',
                left: '10px'
            });
            $(".eyeball2").css({
                top: '10px',
                left: '10px'
            });
            $(".handl").css({
                transform: 'rotate(-150deg)',
                bottom: '215px',
                left: '105px',
                height: '90px',
                width: '40px'
            });
            $(".handr").css({
                transform: 'rotate(150deg)',
                bottom: '308px',
                left: '192px',
                height: '90px',
                width: '40px'
            });
        });
    });
</script>