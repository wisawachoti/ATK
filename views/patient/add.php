<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Field Hospital</title>
    <!-- Favicon -->
    <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Page plugins -->
    <!--===== CSS =====-->
    <link rel="stylesheet" href="assets_add/css/styles.css">

    <style>
        h1 {
            display: block;
            font-size: 2em;
            margin-top: 0.67em;
            margin-bottom: 0.67em;
            margin-left: 0;
            margin-right: 0;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <!-- Main content -->
    <div class="main-content" id="panel">



        <!-- Header -->
        <div class="header bg-primary pb-5">
            <div class="container-fluid ">
                <div class="header-body ">
                </div>
            </div>
        </div>

        <div class="l-form">
            <form action="" class="form">

           
            
                <div style="float:left">
                    <img src="assets/img/brand/hospital-building-2.png" class="navbar-brand-img" alt="...">
                </div>

                <h1 class="form__title" style="text-align:center">New Hospital</h1>
                <div class="form__div">
                    <input type="text" class="form__input" placeholder=" " name="id" value="<?php echo $id; ?>">
                    <label for="" class="form__label">ID</label>
                </div>

                <div class="form__div">
                    <input type="text" class="form__input" placeholder=" " name="fh_name" >
                    <label for="" class="form__label">Name</label>
                </div>

                <div class="form__div">
                    <input type="number" class="form__input" placeholder=" " name="green">
                    <label for="" class="form__label">Green</label>
                </div>

                <div class="form__div">
                    <input type="number" class="form__input" placeholder=" " name="yellow">
                    <label for="" class="form__label">Yellow</label>
                </div>

                <div class="form__div">
                    <input type="number" class="form__input" placeholder=" " name="red">
                    <label for="" class="form__label">Red</label>
                </div>

                <div class="form__div">
                <label for="" class="">Agency</label>
                    <select name="agency">
                        <?php foreach ($agList as $data) {
                            echo "<option value=$data->agency_id";
                            echo "> $data->agency_name</option>";
                        } ?>
                    </select>
                    
                </div>





                <input type="hidden" name="controller" value="fieldhospital" />
                <div style="float:left">
                    <input type="submit" class="form__button2" name="action" value="BACK">
                </div>


                <input type="submit" class="form__button" name="action" value="NEW">







            </form>
        </div>






    </div>
    </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Core -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="assets/js/argon.js?v=1.2.0"></script>

</body>

</html>

