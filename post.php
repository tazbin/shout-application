<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shout | Post a shout</title>
  </head>
  <link rel="stylesheet" href="css\bootstrap.min.css">
  <link rel="stylesheet" href="css\style.css">
  <body class="text-center home-bg">

    <div class="back text-right">
      <a href="home.php">
        <img src="img/back.png" alt="" style="padding-top: 50px;">
      </a>
    </div>

    <img src="img/post-header.png" alt="" class="post-header">

    <select class="post-select" name="">
      <option value="">Select catagory</option>
      <option value="">Tazbinur</option>
      <option value="">Tazbinur</option>
      <option value="">Tazbinur</option>
    </select>

    <textarea class="post-textarea" placeholder="Description of complain" name="name" rows="4" cols="40"></textarea>

    <br>
    <div class="post-upload-title">
      <i class=""> Upload video </i>
    </div>
    <br>
    <input class="post-video" type="file" name="" value="">

    <br>
    <div class="post-upload-title">
      <i class=""> Upload images </i>
    </div>
    <br>
    <input class="post-video" type="file" name="" value="">

    <div class="anonymously">
      <label>
        <input type="checkbox" name="" value="psn">
        <i>Post anonymously</i>
      </label>
    </div>

    <button class="post-btn">Post this shout</button>

    <br>
    <div class="text-center">
      <i class="post-caution">
        Your data & personal information will be secret.
      </i>
    </div>

  </body>
  <script type="text/javascript" src="js\bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="js\bootstrap.min.js"></script>
</html>
