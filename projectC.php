<?php 
$email = "timzschage@gmail.com";
$subject = "Test";
$message = $_POST['text-input'];

$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(isset($_POST['submit-btn'])){
 mail($email,$subject,$message,$headers);   
}
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Project C</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon.ico?" type="image/x-icon">
    <link rel="icon" href="favicon.ico?" type="image/x-icon">
    <!-- Place favicon.ico in the root directory -->
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
    <link media="all" type="text/css" rel="stylesheet" href="css/application.css" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <!--<script src="js/behavior.js"></script>-->
    <script src="js/main.js"></script>
    <script src="js/ripple.js"></script>
    <!--<script src="js/file.js"></script>-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="maintable container-fluid">
        <nav class="row center-block">
           
            <button class="back-btn col-lg-4"><a href="index.html">&laquo; Back to main page</a></button>
            <form class="" action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post">
                <h4 class="col-lg-4">Contribute to the topic!</h4>
                <label for="text-input">What what?</label>
                <input type="text" class="col-lg-4 text-input" name="text-input" id="topics" placeholder="contribute">
                <button type="submit" class="submit-btn" >Submit</button>
            </form>
        </nav>
        <section class="container">
            <div class="row headline">
                <h3 class="col-lg-12">Hier können wir über bestimmte Dinge abstimmen:</h3>
            </div>
            <div class="row vote-content">
                <h4>Keine Abstimmung zurzeit</h4>
                <form action="" class="hidden">
                    <ul>
                        <li></li>
                        <li></li>
                    </ul>

                </form>
            </div>

        </section>
    </div>
</body>

</html>