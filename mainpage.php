<?php require 'db.php'; 
session_start();
$query = "SELECT `diary` FROM `users_signup` WHERE `id`='".$_SESSION['id']."'LIMIT 1";
$query_run = mysqli_query($connection, $query);
$row = mysqli_fetch_array($query_run);
$diary = $row['diary'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Secret Diary</title>
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
  <a class="btn logout pull-right btn-default" href="logout.php">Log Out</a>
   <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
      
              <textarea class="form-control" name="content" id="content" cols="60" rows="22"><?php echo $diary; ?></textarea>         
              
            </div>
        </div>
    </div>
    <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>      
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script>
      $('#content').keyup(function(){
        $.post('updatediary.php', {diary:$('textarea').val()})
      })
    </script>
</body>
</html>