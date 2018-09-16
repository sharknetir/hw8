<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="<?=URL.URL_CSS ?>/bootstrap.min.css" rel="stylesheet">
    <link href="<?=URL.URL_CSS ?>/compiled-4.5.9.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?=URL.URL_CSS ?>/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?=URL.URL_CSS ?>/style.min.css" rel="stylesheet">
    <style type="text/css">
        html,
        body,
        header,
        .carousel {
            height: 60vh;
        }

        @media (max-width: 740px) {
            html,
            body,
            header,
            .carousel {
                height: 100vh;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            header,
            .carousel {
                height: 100vh;
            }
        }
    </style>
</head>

<body>


<!-- Material form register -->
<div style="display:flex;justify-content:center;align-items:center;margin-top: 100px;">

    <!-- Material form login -->
    <div class="card" style="width: 30%;">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Sign in</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

            <!-- Form -->
            <form class="text-center" style="color: #757575;" method="post" action="../login/index">

                <!-- Email -->
                <div class="md-form">
                    <input type="email" id="materialLoginFormEmail" class="form-control" name="email">
                    <label for="materialLoginFormEmail">E-mail</label>
                </div>

                <!-- Password -->
                <div class="md-form">
                    <input type="password" id="materialLoginFormPassword" class="form-control" name="password">
                    <label for="materialLoginFormPassword">Password</label>
                </div>

                <div class="d-flex justify-content-around">
                    <div>
                        <!-- Remember me -->
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                            <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
                        </div>
                    </div>
                    <div>
                        <!-- Forgot password -->
                        <a href="">Forgot password?</a>
                    </div>
                </div>

                <!-- Sign in button -->
                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

                <!-- Register -->
                <p>Not a member?
                    <a href="">Register</a>
                </p>

                <!-- Social login -->
                <p>or sign in with:</p>
                <a type="button" class="btn-floating btn-fb btn-sm">
                    <i class="fa fa-facebook"></i>
                </a>
                <a type="button" class="btn-floating btn-tw btn-sm">
                    <i class="fa fa-twitter"></i>
                </a>
                <a type="button" class="btn-floating btn-li btn-sm">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a type="button" class="btn-floating btn-git btn-sm">
                    <i class="fa fa-github"></i>
                </a>

            </form>
            <!-- Form -->

        </div>

    </div sty>
    <!-- Material form login -->

</div>
<!-- Material form register -->


<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="<?=URL.URL_JS ?>/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?=URL.URL_JS ?>/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?=URL.URL_JS ?>/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?=URL.URL_JS ?>/mdb.min.js"></script>
<!-- Initializations -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
    // Animations initialization
    new WOW().init();
</script>
</body>

</html>