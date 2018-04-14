<!DOCTYPE html>
<html>

  <?php
    $pageTitle = "Access Denied";
    $pageName = "error";
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/header.php";
    require_once($path);
  ?>  


  <body>
    <!--NAVIGATION-->
    <?php 
      $path = $_SERVER['DOCUMENT_ROOT'];
      $path .= "/inc/navbar.html";
      require_once($path);
    ?>

    <!--TITLE SECTION-->
    <div class="section light" id="error">
      <div class="content">
        <div class="center dark">
          <div id="code">403</div>
          <div class="text" id="response">
            <div id="reponse"> Sorry! You don't have permssion to access that.</div>
            <a href="https://leander.xyz/index.html" class="round"><i class="fas fa-arrow-left"></i> Home</a>
          </div>
        </div>
      </div>
    </div>

    <!--FOOTER SECTION-->
    <?php 
      $path = $_SERVER['DOCUMENT_ROOT'];
      $path .= "/inc/footer.php";
      require_once($path);
    ?>

  </body>

</html>
