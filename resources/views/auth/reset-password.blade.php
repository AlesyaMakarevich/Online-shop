<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href={{asset("images/favicon.png")}}>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Change password</title>
    <!-- Stylesheets & Fonts -->
    <link href={{asset("css/plugins.css")}} rel="stylesheet">
    <link href={{asset("css/style.css")}} rel="stylesheet">
</head>

<body>
<!-- Body Inner -->
<div class="body-inner">
    <!-- Section -->
    <section class="fullscreen" style="background-color: darkslateblue">
        <div class="container">
            <div>
                <div class="text-center m-b-30">
                    <a href={{route('main')}} class="logo">
                        <img src={{asset("images/logo-circle-dark.png")}} alt="Polo">
                    </a>
                </div>
                <div class="row">
                    <div class="col-lg-5 center p-50 background-white b-r-6">
                        <h3>Login to your Account</h3>
                        <form method="POST">
                            <div class="form-group">
                                <label class="sr-only">Username or Email</label>
                                <input type="text" class="form-control" placeholder="Username or Email">
                            </div>
                            <div class="form-group m-b-5">
                                <label class="sr-only">Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                                <div class="form-group m-b-5">
                                    <label class="sr-only">Password</label>
                                    <input type="password" class="form-control" placeholder="Confirm Password">
                            </div>
                            <div class="text-left form-group">
                                <button type="button" class="btn">Confirm</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Section -->
</div>
<!-- end: Body Inner -->
<!-- Scroll top -->
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
<!--Plugins-->
<script src="../../../public/js/jquery.js"></script>
<script src="../../../public/js/plugins.js"></script>
<!--Template functions-->
<script src="../../../public/js/functions.js"></script>
</body>

</html>
