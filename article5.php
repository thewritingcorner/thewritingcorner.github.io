<!DOCTYPE html>
<html>
<title>Writing in the Secondary School</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="images/tajaymain.jpg" type="image/x-icon">
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}

</style>
<body class="w3-light-grey">

<!-- Navigation bar with social media icons -->
<div class="w3-bar w3-black w3-hide-small">
  <a class="mylink" style="text-decoration-line: none; text-align: center;" href="#begin">
    <h6>Writing in the Secondary School</h6>
  </a>
</div>
  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b> Writing in the Secondary School: A Guide for Teachers and Pre-service Teachers</b></h1>
    <a class="mylink" style="text-decoration-line: none; text-align: center;" href="#begin">
    <h6> Philosophy and Approahes to <span class="w3-tag">Teaching Writing</span></h6></a>
  </header>

  <!-- Image header -->
  <?php include "header.php"; ?>

  <!-- Grid -->
  <div id="begin" class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">
    
      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>Philosophy and Approahes to Teaching</h3>
          <h5>Tajay Henry, <span class="w3-opacity">May 8, 2021</span></h5>
        </div>

        <div class="w3-justify">
          <div>
          <img src="images/tajay.jpg" alt="Image of Tajay Henry" style="width:10%" class="avatar-image w3-padding-16"></div>
          <h6>
            <strong>Second Draft: Philosophy and Approaches to Teaching Writing</strong>
          </h6>
          <iframe src="https://drive.google.com/file/d/1yw8Bo3tODb7HzKdKS5nO54mXmwVOPWBt/preview" width="640" height="480"></iframe>
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction('demo1')" id="myBtn"><b>Click to see First Draft</b></button></p>
          <p class="w3-clear"></p>
          <div style="display:none;" class="w3-row w3-margin-bottom w3-center w3-show" id="demo1" >
            <iframe width="100%" height="1250px" src="https://docs.google.com/document/d/e/2PACX-1vTov23d42ETIy3NSY1fc3XXsMcL1evX98giJ1aTxdbsRie6xkqH-FKZRklo6B_n8w/pub?embedded=true"></iframe>
          </div>
        </div>
      </div>
      <hr>

    <!-- END BLOG ENTRIES -->
    </div>

    <!-- Right Side Bar - About/Information menu -->
    <div class="w3-col l4">

      <!-- Posts -->
      <?php include "sidebar.php"; ?>
      <hr>

        <!-- Inspiration -->
        <div class="w3-white w3-margin">
          <div class="w3-container w3-padding w3-black">
              <h4>Inspiration</h4>
          </div>
          <div class="w3-row-padding w3-white">
              <div class="w3-container s6">
              <p>
                  "A people without the knowledge of their past history, origin and culture is like a tree without roots."
              </p>
              <p style="text-align:right">
                  by <em>Marcus Garvey</em>
              </p>
              </div>
          </div>
          </div>
          <hr>

    <!-- END About/Intro Menu -->
    </div>

  <!-- END GRID -->
  </div>

<!-- END w3-content -->
</div>


<!-- Footer -->
<?php include "footer.php"; ?>

<script>
// Toggle between hiding and showing blog replies/comments
document.getElementById("myBtn").click();
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

</script>

</body>
</html>


