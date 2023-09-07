<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href={{asset("images/favicon.png")}}>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Register page</title>
    <!-- Stylesheets & Fonts -->
    <link href={{asset("css/plugins.css")}} rel="stylesheet">
    <link href={{asset("css/style.css")}} rel="stylesheet">
</head>

<body>
<!-- Body Inner -->
<div class="body-inner">
    <!-- Section -->
    <section class="fullscreen" style="background-color: darkslateblue">
        <div class="container container-fullscreen">
            <div class="text-middle">
                <div class="text-center m-b-30">
                    <a href={{route('main')}} class="logo">
                        <img src={{asset("images/logo-circle-dark.png")}} alt="Polo">
                    </a>
                </div>
                <div class="row">
                    <div class="col-lg-6 center p-40 background-white b-r-6">
                        <form class="form-transparent-grey" method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Register New Account</h3>
                                    <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">First Name</label>
                                    <input type="text" value="" placeholder="First Name" class="form-control">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Last Name</label>
                                    <input type="text" value="" placeholder="Last Name" class="form-control">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Username</label>
                                    <input type="text" value="" placeholder="Username" class="form-control">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Password</label>
                                    <input type="password" value="" placeholder="Password" class="form-control">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Email</label>
                                    <input type="text" value="" placeholder="Email" class="form-control">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Phone</label>
                                    <input type="text" value="" placeholder="Phone" class="form-control">
                                </div>
                                <div class="col-lg-12 form-group">
                                    <button class="btn" type="button">Register New Account </button>
                                    <button type="button" class="btn btn-danger m-l-10">Cancel</button>
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
