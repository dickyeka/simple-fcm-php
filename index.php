<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FCM</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="push.php" method="GET" role="form">
                  <legend>Single User</legend>

                  <input type="hidden" name="type" value="single" >

                  <div class="form-group">
                      <label for="">Firebase Reg Id</label>
                      <input type="text" class="form-control" name="reg_id" required>
                  </div>

                  <div class="form-group">
                      <label for="">Title</label>
                      <input type="text" class="form-control" name="title" required>
                  </div>
                  <div class="form-group">
                      <label for="">FCM Code</label>
                      <input type="text" class="form-control" name="fcm_code" required>
                  </div>
                   <div class="form-group">
                      <label for="">Message</label>
                      <textarea name="message" class="form-control" required></textarea>
                  </div>

                  <button type="submit" class="btn btn-primary">Push</button>
                </form>
                <br>
                <form action="push.php" method="GET" role="form">
                  <legend>Multi User</legend>
                  <input type="hidden" name="type" value="multi" >

                  <div class="form-group">
                      <label for="">Firebase Reg Ids</label>
                      <input type="text" class="form-control" name="reg_id" placeholder="pakai , sebagai pemisah" required>
                  </div>
                  <div class="form-group">
                      <label for="">Title</label>
                      <input type="text" class="form-control" name="title" required>
                  </div>
                  <div class="form-group">
                      <label for="">FCM Code</label>
                      <input type="text" class="form-control" name="fcm_code" required>
                  </div>
                   <div class="form-group">
                      <label for="">Message</label>
                      <textarea name="message" class="form-control" required></textarea>
                  </div>

                  <button type="submit" class="btn btn-primary">Push</button>
                </form>
            </div>

        </div>

    </div>
</body>
</html>
