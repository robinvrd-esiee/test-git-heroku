<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Test Heroku Deployment</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="dist/bootstrap-theme.min.css">
    </head>
    <body>
        <div class="container text-center">
            <?php 
            $a = 5;
            echo '<br/><br/>Ceci est UN test de déploiement inter-services. <br/> <h1>Ceci est une variable $a = '.$a.'.</h1>'; 
            ?>
        </div>
    </body>
</html>


