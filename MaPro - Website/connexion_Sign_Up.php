<html lang="en">
  <link rel="icon" type="image/png" href="pictures/logo.png"/>

  <link rel="stylesheet" href="css/homepage.css"/>
  <link rel="stylesheet" href="css/general.css"/>
  <link rel="stylesheet" href="css/inputField.css"/>
  <link rel="stylesheet" href="css/fontComfortaa.css"/>

  <style>
      #page
      {
          margin:0px;
      }
  </style>


  <title>MaPro - Sign Up</title>


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
        <!--Import Google Icon Font-->
        <link  rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>


    <body>

    <!-- adding the header -->
        <?php require_once 'header.php'; ?>
        <main>

            <br>

                <div class="container row" style="background-color: #ebebeb">
                    <form class="col s12">

                        <br>

                        <!-- Username -->
                        <div class="row">
                            <div class="col s3"></div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix blueDeep">account_circle</i>
                                <input id="username_prefix" type="text" class="validate" required>
                                <label for="username_prefix">Username</label>
                            </div>
                            <div class="col s3"></div>
                        </div>

                                
                        <br><br>
                        
                        <h4 class="center">Please enter at least 8 characters for your password :)</h4>

                        <!-- Password -->
                        <div class="row">
                            <div class="col s3"></div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix blueDeep">security</i>
                                <input id="password_prefix" type="password" class="validate" pattern=".{8,}" required>
                                <label for="password_prefix">Password</label>
                            </div>
                            <div class="col s3"></div>
                        </div>

                        <!-- Password Verification -->
                        <div class="row">
                            <div class="col s3"></div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix blueDeep">security</i>
                                <input id="passwordVerif_prefix" type="password" class="validate" pattern=".{8,}" required>
                                <label for="passwordVerif_prefix">Password Verification</label>
                            </div>
                            <div class="col s3"></div>
                        </div>


                        <br><br>


                        <!-- Email  -->
                        <div class="row">
                            <div class="col s3"></div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix blueDeep">alternate_email</i>
                                <input id="email_prefix" type="email" class="validate" required>
                                <label for="email_prefix">Email (in case you forget your IDs !)</label>
                            </div>
                            <div class="col s3"></div>
                        </div>
                        

                        <br><br>


                        <!-- Sign up Token  -->
                        <div class="row">
                            <div class="col s3"></div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix blueDeep">verified_user</i>
                                <input id="token_prefix" type="email" class="validate" required>
                                <label for="token_prefix">Sign-up Token</label>
                            </div>
                            <div class="col s3"></div>
                        </div>
                        
                        <br><br>

                        <!-- Submit button -->
                        <div class="row">
                            <div class="col s5"></div>
                            <div class="input-field col s2">
                                <button class="btn waves-effect waves-light zoom center" style="height:10%" type="submit" name="action">
                                <i class="material-icons center">get_app</i> Sign-up !
                                </button>
                            </div>
                            <div class="col s5"></div>
                        </div>

                    </form>
                </div>


            </main>
    <!-- adding the footer -->
        <?php require_once 'footer.php'; ?>

    </body>

</html>