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

                <h1 class="form__title" style="text-align:center">Field Hospital</h1>

                <div class="form__div">
                    <input type="text" class="form__input" placeholder=" " name="id" value="<?php echo $id; ?>">

                    <label for="" class="form__label">ID</label>
                </div>

                <div class="form__div">
                    <input type="text" class="form__input" placeholder=" ">
                    <label for="" class="form__label">Name</label>
                </div>

                <div class="form__div">
                    <input type="number" class="form__input" placeholder=" ">
                    <label for="" class="form__label">Green</label>
                </div>

                <div class="form__div">
                    <input type="number" class="form__input" placeholder=" ">
                    <label for="" class="form__label">Yellow</label>
                </div>

                <div class="form__div">
                    <input type="number" class="form__input" placeholder=" ">
                    <label for="" class="form__label">Red</label>
                </div>

                <!-- <div class="form__div">
                    <select name="agency">
                        <?php foreach ($agList as $data) {
                            echo "<option value=$data->agency_id";
                            echo "> $data->agency_id</option>";
                        } ?>
                    </select>
                    <label for="" class="form__label">Agency</label>
                </div> -->
                <!-- <div class="container">

                    <div class="select-box">
                        <div class="options-container">
                            <div class="option">
                                <input type="radio" class="radio" id="automobiles" name="category" />
                                <label for="automobiles">Automobiles</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="film" name="category" />
                                <label for="film">Film & Animation</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="science" name="category" />
                                <label for="science">Science & Technology</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="art" name="category" />
                                <label for="art">Art</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="music" name="category" />
                                <label for="music">Music</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="travel" name="category" />
                                <label for="travel">Travel & Events</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="sports" name="category" />
                                <label for="sports">Sports</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="news" name="category" />
                                <label for="news">News & Politics</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="tutorials" name="category" />
                                <label for="tutorials">Tutorials</label>
                            </div>
                        </div>

                        <div class="selected">
                            Select Video Category
                        </div>
                    </div>
                </div>

                <script src="main.js"></script> -->



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


<!-- <form method="get" action="">


<div style="text-align: center">

    <label>Name : <input type="text" name="name" /> </label><br>
    <label>Green : <input type="number" name="green" /> </label><br>
    <label>Yellow : <input type="number" name="yellow" /> </label><br>
    <label>Red : <input type="number" name="red" /> </label><br>

    <label>agency : <select name="agency">
            <?php foreach ($agList as $data) {
                echo "<option value=$data->agency_id";
                echo "> $data->agency_id</option>";
            } ?>
        </select></label><br>

    <input type="hidden" name="controller" value="fieldhospital" />
    <button type="submit" name="action" value="index"> Back </button>

</div>

</form> -->




<!-- <div class="select-box">
        <div class="options-container">
          <div class="option">
            <input
              type="radio"
              class="radio"
              id="automobiles"
              name="category"
            />
            <label for="automobiles">Automobiles</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="film" name="category" />
            <label for="film">Film & Animation</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="science" name="category" />
            <label for="science">Science & Technology</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="art" name="category" />
            <label for="art">Art</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="music" name="category" />
            <label for="music">Music</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="travel" name="category" />
            <label for="travel">Travel & Events</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="sports" name="category" />
            <label for="sports">Sports</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="news" name="category" />
            <label for="news">News & Politics</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="tutorials" name="category" />
            <label for="tutorials">Tutorials</label>
          </div>
        </div>

        <div class="selected">
          Select Video Category
        </div>
</div> -->