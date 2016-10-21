
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Elegant Contact Form</title>
    <link rel="stylesheet" href="css/style.css">
  	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script
			  src="https://code.jquery.com/jquery-3.1.1.js"
			  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
			  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.css" media="screen" title="no title">
  </head>
  <body>
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Elegant Contact Form</h1>
          </div>
        </div>
        <form id="form" class="form-horizontal" action="control.php" method="post">
          <div class="row">
            <div class="col-md-6">

                  <input type="text" class="form-control input-lg input name" name="name" placeholder="Name">
                  <!-- <span class="text-danger pName">* Name is Empty</span> -->
                  <input type="text" class="form-control input-lg input email" name="email" placeholder="Email address">
                  <!-- <span class="text-danger pEmail">* E-mail is Empty</span> -->
                  <input type="text" class="form-control input-lg input subject" name="subject" placeholder="Subject">
                  <!-- <span class="text-danger pSubject">* Subject is Empty</span> -->


            </div>
            <div class="col-md-6">

                <textarea class="form-control textarea" name="textarea" rows="8" cols="40" placeholder="Message"></textarea>

            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
                <input class="btn btn-danger btn-lg btn-block" type="submit" name="button" value="Submit">
            </div>
          </div>
          </form>
    </div>
    <script type="text/javascript">
          $("#form").submit(function(){
            if($(".name").val() === ""){
              $(".name").css("background-color", "yellow");
              alert("Name is empty!");
              event.preventDefault();
              }
            else if($(".email").val() === ""){
              $(".email").css("background-color", "yellow");
              alert("E-mail is empty!");
            }
            else if($(".subject").val() === ""){
              $(".subject").css("background-color", "yellow");
              alert("Subject is empty!");
            }


          })
    </script>
  </body>
</html>
