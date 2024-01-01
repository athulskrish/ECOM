  <?php
      include('u_head.php');
  ?>
<!-- <div id="default_theme" class="contact_us">
  <div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="full">

  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
              <h4>Profile</h4>
               <p>Our goal is to provide the best customer service and to answer all of your questions in a timely manner.</p> -->
             <!--  <div class="form_section">
                <form class="form_contant" action="index.html">
                  <fieldset>
                    -->

                  <!-- <div class="row">
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" value="" type="text" required />
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" value="" type="text" required />
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" value="" type="email" required />
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" value="" type="text" required />
                    </div>
                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <textarea class="field_custom" value="" required ></textarea>
                    </div>
                    <div class="center"><a class="btn main_bt" href="#">SUBMIT NOW</a></div>
                  </div>
                  </fieldset>
                </form>
              </div>
            </div> 
           -->
           <html>
           <head>
            <title>u profile</title>
          </head>
          <body>
            <center>
            <table>
              

            <form>
              <?php

              include 'db_connect.php';
             // $p=1;
        //$uname=$_GET['id'];
        $uname=$_COOKIE['login']; 
              $result = mysql_query("SELECT * FROM customer where loginid='$uname'");
              while($row = mysql_fetch_array($result))
              {
              ?>
              <form method="POST">
              <tr>
                <td>NAME:</td><td>
              <input type="text" name="uname" class="form-control"  value="<?php echo $row['name'];?>"></td></tr><tr><br></tr>
              <tr><td>CONTACT:</td><td><input type="text" name="contact"  class="form-control"  value="<?php echo $row['phone'];?>"></td></tr><tr><br></tr>
              <tr><td>ADDRESS:</td><td><input type="text" name="uname"  class="form-control"  value="<?php echo $row['address'];?>"></td></tr><tr><br></tr>
              <tr><td></td><td><input type="submit" name="submit" value="update" class="btn btn-success"></td></tr>
            
            </form>
          
          </table>
          </center>
        </body>
        </html>

        <?php
}
          if(isset($_POST['submit'])){
              $login=$_COOKIE['login'];

          }

        ?>