<!DOCTYPE html>
<html>
      <head>
            <title></title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="style2.css">
            <link href="https://fonts.googleapis.com/css2?family=Notable&display=swap" rel="stylesheet">
      </head>
      <body style="background-color: #F8EFBA;">
            <div class="container-fluid jumbotron jumbotron-fluid text-center col-12 col-sm-12 col-md-12 col-lg-12" id="jumbo" style="padding: 20px;" style="background-color: #2bcbba;">
                  <h1>Data Input</h1>
                  <p>Enter your data to check the info</p>
            </div>
            <section class="container text-center">
                  <h1 class="text-center">Edit Birth Kundali info</h1>
                  <hr class="container w-25 mx-auto">
                  <form action="index2.php" method="post">
                        <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </section>
            <section>
                  <div class="container text-left">
                        <div class="row">
                              <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <h1 class="text-center">Birth Kundali</h1>
                                    <hr class="w-50 mx-auto" ><br>
                                    <div class="container">
                                          <img src="bg.jpg" alt="Snow" style="width:100%;">
                                          <div class="text1">1</div>
                                          <div>
                                                <?php
                                                      $mysqli = new mysqli("localhost","root","","yearly kundali");
                                                      if ($mysqli -> connect_errno) {
                                                            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                                            exit();
                                                      }
                                                      $Sun1 = "SELECT House,Sun FROM `yearly kundali`.`birth kundali` WHERE House=1"; if ($result = $mysqli -> query($Sun1)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Su1">Su</div>'; } } $result -> free_result(); }
                                                      $Moon1 = "SELECT House,Moon FROM `yearly kundali`.`birth kundali` WHERE House=1"; if ($result = $mysqli -> query($Moon1)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Mo1">Mo</div>'; } } $result -> free_result(); }
                                                      $Venus1 = "SELECT House,Venus FROM `yearly kundali`.`birth kundali` WHERE House=1"; if ($result = $mysqli -> query($Venus1)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ve1">Ve</div>'; } } $result -> free_result(); }
                                                      $Mars1 = "SELECT House,Mars FROM `yearly kundali`.`birth kundali` WHERE House=1"; if ($result = $mysqli -> query($Mars1)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ma1">Ma</div>'; } } $result -> free_result(); }
                                                      $Mercury1 = "SELECT House,Mercury FROM `yearly kundali`.`birth kundali` WHERE House=1"; if ($result = $mysqli -> query($Mercury1)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Me1">Me</div>'; } } $result -> free_result(); }
                                                      $Jupiter1 = "SELECT House,Jupiter FROM `yearly kundali`.`birth kundali` WHERE House=1"; if ($result = $mysqli -> query($Jupiter1)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ju1">Ju</div>'; } } $result -> free_result(); }
                                                      $Saturn1 = "SELECT House,Saturn FROM `yearly kundali`.`birth kundali` WHERE House=1"; if ($result = $mysqli -> query($Saturn1)) { while ($row = $result -> fetch_row()) { if($row[1]==1) {echo '<div class="Sa1">Sa</div>'; } } $result -> free_result(); }
                                                      $Rahu1 = "SELECT House,Rahu FROM `yearly kundali`.`birth kundali` WHERE House=1"; if ($result = $mysqli -> query($Rahu1)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ra1">Ra</div>'; } } $result -> free_result(); }
                                                      $Ketu1 = "SELECT House,ketu FROM `yearly kundali`.`birth kundali` WHERE House=1"; if ($result = $mysqli -> query($Ketu1)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ke1">Ke</div>'; } } $result -> free_result(); } 
                                                ?>
                                          </div>
                                          <div class="text2">2</div>
                                          <div>
                                                <?php
                                                      $mysqli = new mysqli("localhost","root","","yearly kundali");
                                                      if ($mysqli -> connect_errno) {
                                                            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                                            exit();
                                                      }
                                                      $Sun2 = "SELECT House,Sun FROM `yearly kundali`.`birth kundali` WHERE House=2"; if ($result = $mysqli -> query($Sun2)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Su2">Su</div>'; } } $result -> free_result(); }
                                                      $Moon2 = "SELECT House,Moon FROM `yearly kundali`.`birth kundali` WHERE House=2"; if ($result = $mysqli -> query($Moon2)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Mo2">Mo</div>'; } } $result -> free_result(); }
                                                      $Venus2 = "SELECT House,Venus FROM `yearly kundali`.`birth kundali` WHERE House=2"; if ($result = $mysqli -> query($Venus2)) {while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ve2">Ve</div>';} } $result -> free_result(); }
                                                      $Mars2 = "SELECT House,Mars FROM `yearly kundali`.`birth kundali` WHERE House=2"; if ($result = $mysqli -> query($Mars2)) {while ($row = $result -> fetch_row()) {if($row[1]==1){ echo '<div class="Ma2">Ma</div>'; } } $result -> free_result(); }
                                                      $Mercury2 = "SELECT House,Mercury FROM `yearly kundali`.`birth kundali` WHERE House=2"; if ($result = $mysqli -> query($Mercury2)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Me2">Me</div>'; } } $result -> free_result(); }
                                                      $Jupiter2 = "SELECT House,Jupiter FROM `yearly kundali`.`birth kundali` WHERE House=2"; if ($result = $mysqli -> query($Jupiter2)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ju2">Ju</div>'; } } $result -> free_result(); }
                                                      $Saturn2 = "SELECT House,Saturn FROM `yearly kundali`.`birth kundali` WHERE House=2"; if ($result = $mysqli -> query($Saturn2)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Sa2">Sa</div>'; } } $result -> free_result(); }
                                                      $Rahu2 = "SELECT House,Rahu FROM `yearly kundali`.`birth kundali` WHERE House=2";if ($result = $mysqli -> query($Rahu2)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ra2">Ra</div>'; } } $result -> free_result(); }
                                                      $Ketu2 = "SELECT House,ketu FROM `yearly kundali`.`birth kundali` WHERE House=2"; if ($result = $mysqli -> query($Ketu2)) {while ($row = $result -> fetch_row()) { if($row[1]==1) {echo '<div class="Ke2">Ke</div>'; } } $result -> free_result(); }
                                                ?>
                                          </div>
                                          <div class="text3">3</div>
                                          <div>
                                                <?php
                                                      $mysqli = new mysqli("localhost","root","","yearly kundali");
                                                      if ($mysqli -> connect_errno) { 
                                                            echo "Failed to connect to MySQL: " . $mysqli -> connect_error; 
                                                            exit(); 
                                                      }
                                                      $Sun3 = "SELECT House,Sun FROM `yearly kundali`.`birth kundali` WHERE House=3"; if ($result = $mysqli -> query($Sun3)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Su3">Su</div>'; } } $result -> free_result(); }
                                                      $Moon3 = "SELECT House,Moon FROM `yearly kundali`.`birth kundali` WHERE House=3"; if ($result = $mysqli -> query($Moon3)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Mo3">Mo</div>'; } } $result -> free_result(); }
                                                      $Venus3 = "SELECT House,Venus FROM `yearly kundali`.`birth kundali` WHERE House=3"; if ($result = $mysqli -> query($Venus3)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ve3">Ve</div>'; } } $result -> free_result(); }
                                                      $Mars3 = "SELECT House,Mars FROM `yearly kundali`.`birth kundali` WHERE House=3"; if ($result = $mysqli -> query($Mars3)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ma3">Ma</div>'; } } $result -> free_result(); }
                                                      $Mercury3 = "SELECT House,Mercury FROM `yearly kundali`.`birth kundali` WHERE House=3"; if ($result = $mysqli -> query($Mercury3)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Me3">Me</div>';} } $result -> free_result(); }
                                                      $Jupiter3 = "SELECT House,Jupiter FROM `yearly kundali`.`birth kundali` WHERE House=3"; if ($result = $mysqli -> query($Jupiter3)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ju3">Ju</div>'; } } $result -> free_result(); }
                                                      $Saturn3 = "SELECT House,Saturn FROM `yearly kundali`.`birth kundali` WHERE House=3"; if ($result = $mysqli -> query($Saturn3)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Sa3">Sa</div>'; } } $result -> free_result(); }
                                                      $Rahu3 = "SELECT House,Rahu FROM `yearly kundali`.`birth kundali` WHERE House=3"; if ($result = $mysqli -> query($Rahu3)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ra3">Ra</div>'; } } $result -> free_result(); }
                                                      $Ketu3 = "SELECT House,ketu FROM `yearly kundali`.`birth kundali` WHERE House=3"; if ($result = $mysqli -> query($Ketu3)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ke3">Ke</div>'; } } $result -> free_result(); }
                                                ?>
                                          </div>
                                          <div class="text4">4</div>
                                          <div>
                                                <?php
                                                      $mysqli = new mysqli("localhost","root","","yearly kundali");
                                                      if ($mysqli -> connect_errno) {
                                                            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                                            exit();
                                                      }
                                                      $Sun4 = "SELECT House,Sun FROM `yearly kundali`.`birth kundali` WHERE House=4"; if ($result = $mysqli -> query($Sun4)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Su4">Su</div>'; } } $result -> free_result(); } 
                                                      $Moon4 = "SELECT House,Moon FROM `yearly kundali`.`birth kundali` WHERE House=4"; if ($result = $mysqli -> query($Moon4)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Mo4">Mo</div>'; } } $result -> free_result(); } 
                                                      $Venus4 = "SELECT House,Venus FROM `yearly kundali`.`birth kundali` WHERE House=4"; if ($result = $mysqli -> query($Venus4)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ve4">Ve</div>'; } } $result -> free_result(); }
                                                      $Mars4 = "SELECT House,Mars FROM `yearly kundali`.`birth kundali` WHERE House=4"; if ($result = $mysqli -> query($Mars4)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ma4">Ma</div>'; } } $result -> free_result(); }
                                                      $Mercury4 = "SELECT House,Mercury FROM `yearly kundali`.`birth kundali` WHERE House=4"; if ($result = $mysqli -> query($Mercury4)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Me4">Me</div>'; } } $result -> free_result(); } 
                                                      $Jupiter4 = "SELECT House,Jupiter FROM `yearly kundali`.`birth kundali` WHERE House=4"; if ($result = $mysqli -> query($Jupiter4)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ju4">Ju</div>'; } } $result -> free_result(); }
                                                      $Saturn4 = "SELECT House,Saturn FROM `yearly kundali`.`birth kundali` WHERE House=4"; if ($result = $mysqli -> query($Saturn4)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Sa4">Sa</div>'; } } $result -> free_result(); }
                                                      $Rahu4 = "SELECT House,Rahu FROM `yearly kundali`.`birth kundali` WHERE House=4"; if ($result = $mysqli -> query($Rahu4)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ra4">Ra</div>'; } } $result -> free_result(); }
                                                      $Ketu4 = "SELECT House,ketu FROM `yearly kundali`.`birth kundali` WHERE House=4"; if ($result = $mysqli -> query($Ketu4)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ke4">Ke</div>'; } } $result -> free_result(); }
                                                ?>
                                          </div>
                                          <div class="text5">5</div>
                                          <div>
                                                <?php
                                                      $mysqli = new mysqli("localhost","root","","yearly kundali");
                                                      if ($mysqli -> connect_errno) {
                                                            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                                            exit();
                                                      }
                                                      $Sun5 = "SELECT House,Sun FROM `yearly kundali`.`birth kundali` WHERE House=5"; if ($result = $mysqli -> query($Sun5)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Su5">Su</div>'; } } $result -> free_result(); }
                                                      $Moon5 = "SELECT House,Moon FROM `yearly kundali`.`birth kundali` WHERE House=5"; if ($result = $mysqli -> query($Moon5)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Mo5">Mo</div>'; } } $result -> free_result(); }
                                                      $Venus5 = "SELECT House,Venus FROM `yearly kundali`.`birth kundali` WHERE House=5"; if ($result = $mysqli -> query($Venus5)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ve5">Ve</div>'; } } $result -> free_result(); }
                                                      $Mars5 = "SELECT House,Mars FROM `yearly kundali`.`birth kundali` WHERE House=5"; if ($result = $mysqli -> query($Mars5)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ma5">Ma</div>'; } } $result -> free_result(); }
                                                      $Mercury5 = "SELECT House,Mercury FROM `yearly kundali`.`birth kundali` WHERE House=5"; if ($result = $mysqli -> query($Mercury5)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Me5">Me</div>'; } } $result -> free_result(); }
                                                      $Jupiter5 = "SELECT House,Jupiter FROM `yearly kundali`.`birth kundali` WHERE House=5"; if ($result = $mysqli -> query($Jupiter5)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ju5">Ju</div>'; } } $result -> free_result(); }
                                                      $Saturn5 = "SELECT House,Saturn FROM `yearly kundali`.`birth kundali` WHERE House=5"; if ($result = $mysqli -> query($Saturn5)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Sa5">Sa</div>'; } } $result -> free_result(); }
                                                      $Rahu5 = "SELECT House,Rahu FROM `yearly kundali`.`birth kundali` WHERE House=5"; if ($result = $mysqli -> query($Rahu5)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ra5">Ra</div>'; } } $result -> free_result(); }
                                                      $Ketu5 = "SELECT House,ketu FROM `yearly kundali`.`birth kundali` WHERE House=5"; if ($result = $mysqli -> query($Ketu5)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ke5">Ke</div>'; } } $result -> free_result(); }
                                                ?>
                                          </div>
                                          <div class="text6">6</div>
                                          <div>
                                                <?php
                                                      $mysqli = new mysqli("localhost","root","","yearly kundali");
                                                      if ($mysqli -> connect_errno) {
                                                            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                                            exit();
                                                      }
                                                      $Sun6 = "SELECT House,Sun FROM `yearly kundali`.`birth kundali` WHERE House=6"; if ($result = $mysqli -> query($Sun6)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Su6">Su</div>'; } } $result -> free_result(); }
                                                      $Moon6 = "SELECT House,Moon FROM `yearly kundali`.`birth kundali` WHERE House=6"; if ($result = $mysqli -> query($Moon6)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Mo6">Mo</div>'; } } $result -> free_result(); }
                                                      $Venus6 = "SELECT House,Venus FROM `yearly kundali`.`birth kundali` WHERE House=6"; if ($result = $mysqli -> query($Venus6)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ve6">Ve</div>'; } } $result -> free_result(); }
                                                      $Mars6 = "SELECT House,Mars FROM `yearly kundali`.`birth kundali` WHERE House=6"; if ($result = $mysqli -> query($Mars6)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ma6">Ma</div>'; } } $result -> free_result(); }
                                                      $Mercury6 = "SELECT House,Mercury FROM `yearly kundali`.`birth kundali` WHERE House=6"; if ($result = $mysqli -> query($Mercury6)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Me6">Me</div>'; } } $result -> free_result(); }
                                                      $Jupiter6 = "SELECT House,Jupiter FROM `yearly kundali`.`birth kundali` WHERE House=6"; if ($result = $mysqli -> query($Jupiter6)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ju6">Ju</div>'; } } $result -> free_result(); }
                                                      $Saturn6 = "SELECT House,Saturn FROM `yearly kundali`.`birth kundali` WHERE House=6"; if ($result = $mysqli -> query($Saturn6)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Sa6">Sa</div>'; } } $result -> free_result(); } 
                                                      $Rahu6 = "SELECT House,Rahu FROM `yearly kundali`.`birth kundali` WHERE House=6"; if ($result = $mysqli -> query($Rahu6)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ra6">Ra</div>'; } } $result -> free_result(); }
                                                      $Ketu6 = "SELECT House,ketu FROM `yearly kundali`.`birth kundali` WHERE House=6"; if ($result = $mysqli -> query($Ketu6)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ke6">Ke</div>'; } } $result -> free_result(); }
                                                ?>
                                          </div>
                                          <div class="text7">7</div>
                                          <div>
                                                <?php
                                                      $mysqli = new mysqli("localhost","root","","yearly kundali");
                                                      if ($mysqli -> connect_errno) {
                                                            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                                            exit();
                                                      }
                                                      $Sun7 = "SELECT House,Sun FROM `yearly kundali`.`birth kundali`WHERE House=7"; if ($result = $mysqli -> query($Sun7)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Su7">Su</div>'; } } $result -> free_result(); } 
                                                      $Moon7 = "SELECT House,Moon FROM `yearly kundali`.`birth kundali` WHERE House=7"; if ($result = $mysqli -> query($Moon7)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Mo7">Mo</div>'; } } $result -> free_result(); }
                                                      $Venus7 = "SELECT House,Venus FROM `yearly kundali`.`birth kundali` WHERE House=7"; if ($result = $mysqli -> query($Venus7)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ve7">Ve</div>'; } } $result -> free_result(); }
                                                      $Mars7 = "SELECT House,Mars FROM `yearly kundali`.`birth kundali` WHERE House=7"; if ($result = $mysqli -> query($Mars7)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ma7">Ma</div>'; } } $result -> free_result(); }
                                                      $Mercury7 = "SELECT House,Mercury FROM `yearly kundali`.`birth kundali` WHERE House=7"; if ($result = $mysqli -> query($Mercury7)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Me7">Me</div>'; } } $result -> free_result(); }
                                                      $Jupiter7 = "SELECT House,Jupiter FROM `yearly kundali`.`birth kundali` WHERE House=7"; if ($result = $mysqli -> query($Jupiter7)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ju7">Ju</div>'; } } $result -> free_result(); } 
                                                      $Saturn7 = "SELECT House,Saturn FROM `yearly kundali`.`birth kundali` WHERE House=7"; if ($result = $mysqli -> query($Saturn7)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Sa7">Sa</div>'; } } $result -> free_result(); }
                                                      $Rahu7 = "SELECT House,Rahu FROM `yearly kundali`.`birth kundali` WHERE House=7"; if ($result = $mysqli -> query($Rahu7)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ra7">Ra</div>'; } } $result -> free_result(); }
                                                      $Ketu7 = "SELECT House,ketu FROM `yearly kundali`.`birth kundali` WHERE House=7"; if ($result = $mysqli -> query($Ketu7)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ke7">Ke</div>'; } } $result -> free_result(); }
                                                ?>
                                          </div>
                                          <div class="text8">8</div>
                                          <div>
                                                <?php
                                                      $mysqli = new mysqli("localhost","root","","yearly kundali");
                                                      if ($mysqli -> connect_errno) {
                                                            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                                            exit();
                                                      }
                                                      $Sun8 = "SELECT House,Sun FROM `yearly kundali`.`birth kundali` WHERE House=8"; if ($result = $mysqli -> query($Sun8)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Su8">Su</div>'; } } $result -> free_result(); }
                                                      $Moon8 = "SELECT House,Moon FROM `yearly kundali`.`birth kundali` WHERE House=8"; if ($result = $mysqli -> query($Moon8)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Mo8">Mo</div>'; } } $result -> free_result(); } 
                                                      $Venus8 = "SELECT House,Venus FROM `yearly kundali`.`birth kundali` WHERE House=8"; if ($result = $mysqli -> query($Venus8)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ve8">Ve</div>'; } } $result -> free_result(); } 
                                                      $Mars8 = "SELECT House,Mars FROM `yearly kundali`.`birth kundali` WHERE House=8"; if ($result = $mysqli -> query($Mars8)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ma8">Ma</div>'; } } $result -> free_result(); }
                                                      $Mercury8 = "SELECT House,Mercury FROM `yearly kundali`.`birth kundali` WHERE House=8"; if ($result = $mysqli -> query($Mercury8)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Me8">Me</div>'; } } $result -> free_result(); }
                                                      $Jupiter8 = "SELECT House,Jupiter FROM `yearly kundali`.`birth kundali` WHERE House=8"; if ($result = $mysqli -> query($Jupiter8)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ju8">Ju</div>'; } } $result -> free_result(); }
                                                      $Saturn8 = "SELECT House,Saturn FROM `yearly kundali`.`birth kundali` WHERE House=8"; if ($result = $mysqli -> query($Saturn8)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Sa8">Sa</div>'; } } $result -> free_result(); }
                                                      $Rahu8 = "SELECT House,Rahu FROM `yearly kundali`.`birth kundali` WHERE House=8"; if ($result = $mysqli -> query($Rahu8)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ra8">Ra</div>'; } } $result -> free_result(); }
                                                      $Ketu8 = "SELECT House,ketu FROM `yearly kundali`.`birth kundali` WHERE House=8"; if ($result = $mysqli -> query($Ketu8)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ke8">Ke</div>'; } } $result -> free_result(); }
                                                ?>
                                          </div>
                                          <div class="text9">9</div>
                                          <div>
                                                <?php
                                                      $mysqli = new mysqli("localhost","root","","yearly kundali");
                                                      if ($mysqli -> connect_errno) {
                                                            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                                            exit();
                                                      }
                                                      $Sun9 = "SELECT House,Sun FROM `yearly kundali`.`birth kundali` WHERE House=9"; if ($result = $mysqli -> query($Sun9)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Su9">Su</div>'; } } $result -> free_result(); } 
                                                      $Moon9 = "SELECT House,Moon FROM `yearly kundali`.`birth kundali` WHERE House=9"; if ($result = $mysqli -> query($Moon9)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Mo9">Mo</div>'; } } $result -> free_result(); }
                                                      $Venus9 = "SELECT House,Venus FROM `yearly kundali`.`birth kundali` WHERE House=9"; if ($result = $mysqli -> query($Venus9)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ve9">Ve</div>'; } } $result -> free_result(); } 
                                                      $Mars9 = "SELECT House,Mars FROM `yearly kundali`.`birth kundali` WHERE House=9"; if ($result = $mysqli -> query($Mars9)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ma9">Ma</div>'; } } $result -> free_result(); }
                                                      $Mercury9 = "SELECT House,Mercury FROM `yearly kundali`.`birth kundali` WHERE House=9"; if ($result = $mysqli -> query($Mercury9)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Me9">Me</div>'; } } $result -> free_result(); }
                                                      $Jupiter9 = "SELECT House,Jupiter FROM `yearly kundali`.`birth kundali` WHERE House=9"; if ($result = $mysqli -> query($Jupiter9)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ju9">Ju</div>'; } } $result -> free_result(); } 
                                                      $Saturn9 = "SELECT House,Saturn FROM `yearly kundali`.`birth kundali` WHERE House=9"; if ($result = $mysqli -> query($Saturn9)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Sa9">Sa</div>'; } } $result -> free_result(); }
                                                      $Rahu9 = "SELECT House,Rahu FROM `yearly kundali`.`birth kundali` WHERE House=9"; if ($result = $mysqli -> query($Rahu9)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ra9">Ra</div>'; } } $result -> free_result(); }
                                                      $Ketu9 = "SELECT House,ketu FROM `yearly kundali`.`birth kundali` WHERE House=9"; if ($result = $mysqli -> query($Ketu9)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ke9">Ke</div>'; } } $result -> free_result(); }
                                                ?>
                                          </div>
                                          <div class="text10">10</div>
                                          <div>
                                                <?php
                                                      $mysqli = new mysqli("localhost","root","","yearly kundali");
                                                      if ($mysqli -> connect_errno) {
                                                            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                                            exit();
                                                      }
                                                      $Sun10 = "SELECT House,Sun FROM `yearly kundali`.`birth kundali` WHERE House=10"; if ($result = $mysqli -> query($Sun10)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Su10">Su</div>'; } } $result -> free_result(); }
                                                      $Moon10 = "SELECT House,Moon FROM `yearly kundali`.`birth kundali` WHERE House=10"; if ($result = $mysqli -> query($Moon10)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Mo10">Mo</div>'; } } $result -> free_result(); }
                                                      $Venus10 = "SELECT House,Venus FROM `yearly kundali`.`birth kundali` WHERE House=10"; if ($result = $mysqli -> query($Venus10)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ve10">Ve</div>'; } } $result -> free_result(); }
                                                      $Mars10 = "SELECT House,Mars FROM `yearly kundali`.`birth kundali` WHERE House=10"; if ($result = $mysqli -> query($Mars10)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ma10">Ma</div>'; } } $result -> free_result(); } 
                                                      $Mercury10 = "SELECT House,Mercury FROM `yearly kundali`.`birth kundali` WHERE House=10"; if ($result = $mysqli -> query($Mercury10)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Me10">Me</div>'; } } $result -> free_result(); }
                                                      $Jupiter10 = "SELECT House,Jupiter FROM `yearly kundali`.`birth kundali` WHERE House=10"; if ($result = $mysqli -> query($Jupiter10)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ju10">Ju</div>'; } } $result -> free_result(); }
                                                      $Saturn10 = "SELECT House,Saturn FROM `yearly kundali`.`birth kundali` WHERE House=10"; if ($result = $mysqli -> query($Saturn10)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Sa10">Sa</div>'; } } $result -> free_result(); }
                                                      $Rahu10 = "SELECT House,Rahu FROM `yearly kundali`.`birth kundali` WHERE House=10"; if ($result = $mysqli -> query($Rahu10)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ra10">Ra</div>'; } } $result -> free_result(); }
                                                      $Ketu10 = "SELECT House,ketu FROM `yearly kundali`.`birth kundali` WHERE House=10"; if ($result = $mysqli -> query($Ketu10)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ke10">Ke</div>'; } } $result -> free_result(); }
                                                ?>
                                          </div>
                                          <div class="text11">11</div>
                                          <div>
                                                <?php
                                                      $mysqli = new mysqli("localhost","root","","yearly kundali");
                                                      if ($mysqli -> connect_errno) {
                                                            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                                            exit();
                                                      }
                                                      $Sun11 = "SELECT House,Sun FROM `yearly kundali`.`birth kundali` WHERE House=11"; if ($result = $mysqli -> query($Sun11)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Su11">Su</div>'; } } $result -> free_result(); }
                                                      $Moon11 = "SELECT House,Moon FROM `yearly kundali`.`birth kundali` WHERE House=11"; if ($result = $mysqli -> query($Moon11)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Mo11">Mo</div>'; } } $result -> free_result(); }
                                                      $Venus11 = "SELECT House,Venus FROM `yearly kundali`.`birth kundali` WHERE House=11"; if ($result = $mysqli -> query($Venus11)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ve11">Ve</div>'; } } $result -> free_result(); }
                                                      $Mars11 = "SELECT House,Mars FROM `yearly kundali`.`birth kundali` WHERE House=11"; if ($result = $mysqli -> query($Mars11)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ma11">Ma</div>'; } } $result -> free_result(); }
                                                      $Mercury11 = "SELECT House,Mercury FROM `yearly kundali`.`birth kundali` WHERE House=11"; if ($result = $mysqli -> query($Mercury11)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Me11">Me</div>'; } } $result -> free_result(); }
                                                      $Jupiter11 = "SELECT House,Jupiter FROM `yearly kundali`.`birth kundali` WHERE House=11"; if ($result = $mysqli -> query($Jupiter11)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ju11">Ju</div>'; } } $result -> free_result(); }
                                                      $Saturn11 = "SELECT House,Saturn FROM `yearly kundali`.`birth kundali` WHERE House=11"; if ($result = $mysqli -> query($Saturn11)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Sa11">Sa</div>'; } } $result -> free_result(); }
                                                      $Rahu11 = "SELECT House,Rahu FROM `yearly kundali`.`birth kundali` WHERE House=11"; if ($result = $mysqli -> query($Rahu11)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ra11">Ra</div>'; } } $result -> free_result(); }
                                                      $Ketu11 = "SELECT House,ketu FROM `yearly kundali`.`birth kundali` WHERE House=11"; if ($result = $mysqli -> query($Ketu11)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ke11">Ke</div>'; } } $result -> free_result(); }
                                                ?>
                                          </div>
                                          <div class="text12">12</div>
                                          <div>
                                                <?php
                                                      $mysqli = new mysqli("localhost","root","","yearly kundali");
                                                      if ($mysqli -> connect_errno) {
                                                            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                                            exit();
                                                      }
                                                      $Sun12 = "SELECT House,Sun FROM `yearly kundali`.`birth kundali` WHERE House=12"; if ($result = $mysqli -> query($Sun12)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Su12">Su</div>'; } } $result -> free_result(); }
                                                      $Moon12 = "SELECT House,Moon FROM `yearly kundali`.`birth kundali` WHERE House=12"; if ($result = $mysqli -> query($Moon12)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Mo12">Mo</div>'; } } $result -> free_result(); }
                                                      $Venus12 = "SELECT House,Venus FROM `yearly kundali`.`birth kundali` WHERE House=12"; if ($result = $mysqli -> query($Venus12)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ve12">Ve</div>'; } } $result -> free_result(); }
                                                      $Mars12 = "SELECT House,Mars FROM `yearly kundali`.`birth kundali` WHERE House=12"; if ($result = $mysqli -> query($Mars12)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ma12">Ma</div>'; } } $result -> free_result(); }
                                                      $Mercury12 = "SELECT House,Mercury FROM `yearly kundali`.`birth kundali` WHERE House=12"; if ($result = $mysqli -> query($Mercury12)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Me12">Me</div>'; } } $result -> free_result(); }
                                                      $Jupiter12 = "SELECT House,Jupiter FROM `yearly kundali`.`birth kundali` WHERE House=12"; if ($result = $mysqli -> query($Jupiter12)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ju12">Ju</div>'; } } $result -> free_result(); }
                                                      $Saturn12 = "SELECT House,Saturn FROM `yearly kundali`.`birth kundali` WHERE House=12"; if ($result = $mysqli -> query($Saturn12)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Sa12">Sa</div>'; } } $result -> free_result(); } 
                                                      $Rahu12 = "SELECT House,Rahu FROM `yearly kundali`.`birth kundali` WHERE House=12"; if ($result = $mysqli -> query($Rahu12)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ra12">Ra</div>'; } } $result -> free_result(); }
                                                      $Ketu12 = "SELECT House,ketu FROM `yearly kundali`.`birth kundali` WHERE House=12"; if ($result = $mysqli -> query($Ketu12)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ke12">Ke</div>'; } } $result -> free_result(); }
                                                ?>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <h1 class="text-center">Current Year Kundali</h1>
                                    <hr class="w-50 mx-auto" ><br>
                                    <div class="container">
                                          <img src="bg.jpg" alt="Snow" style="width:100%;">
                                          <div class="text1">1</div>
                                          <div>
                                                <?php
                                                      $mysqli = new mysqli("localhost","root","","yearly kundali");
                                                      if ($mysqli -> connect_errno) {
                                                            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                                            exit();
                                                      }
                                                      $in11 = " SELECT * FROM `personalinfo` R WHERE R.Age = S.Age ";
                                                      $in21 = "SELECT S.1 FROM `120 years` S WHERE EXISTS ($in11)";
                                                      $sql11 = "INSERT INTO `year kundali1` SELECT * FROM `birth kundali` WHERE `birth kundali`.`House` IN ($in21)";
                                                      $sql21 = "UPDATE `year kundali1` SET `House`=1 WHERE `year kundali1`.`House` IN ($in21)";
                                                      if ($mysqli->query($sql11) == true){ // echo "success";
                                                      } else{ echo "ERROR: $sql11 <br> $mysqli->error"; }
                                                      if ($mysqli->query($sql21) == true){ // echo "success";
                                                      } else{ echo "ERROR: $sql21 <br> $mysqli->error"; }
                                                      $Sun1 = "SELECT House,Sun FROM `yearly kundali`.`year kundali1` WHERE House=1"; if ($result = $mysqli -> query($Sun1)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Su1">Su</div>'; } } $result -> free_result(); }
                                                      $Moon1 = "SELECT House,Moon FROM `yearly kundali`.`year kundali1` WHERE House=1"; if ($result = $mysqli -> query($Moon1)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Mo1">Mo</div>'; } } $result -> free_result(); } 
                                                      $Venus1 = "SELECT House,Venus FROM `yearly kundali`.`year kundali1` WHERE House=1"; if ($result = $mysqli -> query($Venus1)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ve1">Ve</div>'; } } $result -> free_result(); }
                                                      $Mars1 = "SELECT House,Mars FROM `yearly kundali`.`year kundali1` WHERE House=1"; if ($result = $mysqli -> query($Mars1)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ma1">Ma</div>'; } } $result -> free_result(); }
                                                      $Mercury1 = "SELECT House,Mercury FROM `yearly kundali`.`year kundali1` WHERE House=1"; if ($result = $mysqli -> query($Mercury1)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Me1">Me</div>'; } } $result -> free_result(); }
                                                      $Jupiter1 = "SELECT House,Jupiter FROM `yearly kundali`.`year kundali1` WHERE House=1"; if ($result = $mysqli -> query($Jupiter1)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ju1">Ju</div>'; } } $result -> free_result(); }
                                                      $Saturn1 = "SELECT House,Saturn FROM `yearly kundali`.`year kundali1` WHERE House=1"; if ($result = $mysqli -> query($Saturn1)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Sa1">Sa</div>'; } } $result -> free_result(); } 
                                                      $Rahu1 = "SELECT House,Rahu FROM `yearly kundali`.`year kundali1` WHERE House=1"; if ($result = $mysqli -> query($Rahu1)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ra1">Ra</div>'; } } $result -> free_result(); }
                                                      $Ketu1 = "SELECT House,ketu FROM `yearly kundali`.`year kundali1` WHERE House=1"; if ($result = $mysqli -> query($Ketu1)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ke1">Ke</div>'; } } $result -> free_result(); } 
                                                ?>
                                          </div>
                                          <div class="text2">2</div>
                                          <div>
                                                <?php
                                                      $mysqli = new mysqli("localhost","root","","yearly kundali");
                                                      if ($mysqli -> connect_errno) {
                                                            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                                            exit();
                                                      }
                                                      $in12 = " SELECT * FROM `personalinfo` R WHERE R.Age = S.Age ";
                                                      $in22 ="SELECT S.2 FROM `120 years` S WHERE EXISTS ($in12)";
                                                      $sql12 = "INSERT INTO `year kundali2` SELECT * FROM `birth kundali` WHERE `birth kundali`.`House` IN ($in22)";
                                                      $sql22 = "UPDATE `year kundali2` SET `House`=2 WHERE `year kundali2`.`House` IN ($in22)";
                                                      if ($mysqli->query($sql12) == true){// echo "success";
                                                      } else{ echo "ERROR: $sql12 <br> $mysqli->error"; }
                                                      if ($mysqli->query($sql22) == true){ // echo "success";
                                                      } else{ echo "ERROR: $sql22 <br> $mysqli->error"; }
                                                      $Sun2 = "SELECT House,Sun FROM `yearly kundali`.`year kundali2` WHERE House=2"; if ($result = $mysqli -> query($Sun2)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Su2">Su</div>'; } } $result -> free_result(); }
                                                      $Moon2 = "SELECT House,Moon FROM `yearly kundali`.`year kundali2` WHERE House=2"; if ($result = $mysqli -> query($Moon2)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Mo2">Mo</div>'; } } $result -> free_result(); }
                                                      $Venus2 = "SELECT House,Venus FROM `yearly kundali`.`year kundali2` WHERE House=2"; if ($result = $mysqli -> query($Venus2)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ve2">Ve</div>'; } } $result -> free_result(); }
                                                      $Mars2 = "SELECT House,Mars FROM `yearly kundali`.`year kundali2` WHERE House=2"; if ($result = $mysqli -> query($Mars2)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ma2">Ma</div>'; } } $result -> free_result(); }
                                                      $Mercury2 = "SELECT House,Mercury FROM `yearly kundali`.`year kundali2` WHERE House=2"; if ($result = $mysqli -> query($Mercury2)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Me2">Me</div>'; } } $result -> free_result(); }
                                                      $Jupiter2 = "SELECT House,Jupiter FROM `yearly kundali`.`year kundali2` WHERE House=2"; if ($result = $mysqli -> query($Jupiter2)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ju2">Ju</div>'; } } $result -> free_result(); }
                                                      $Saturn2 = "SELECT House,Saturn FROM `yearly kundali`.`year kundali2` WHERE House=2"; if ($result = $mysqli -> query($Saturn2)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Sa2">Sa</div>'; } } $result -> free_result(); }
                                                      $Rahu2 = "SELECT House,Rahu FROM `yearly kundali`.`year kundali2` WHERE House=2"; if ($result = $mysqli -> query($Rahu2)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ra2">Ra</div>'; } } $result -> free_result(); } 
                                                      $Ketu2 = "SELECT House,ketu FROM `yearly kundali`.`year kundali2` WHERE House=2"; if ($result = $mysqli -> query($Ketu2)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ke2">Ke</div>'; } } $result -> free_result(); }
                                                ?>
                                          </div>
                                          <div class="text3">3</div>
                                          <div>
                                                <?php
                                                      $mysqli = new mysqli("localhost","root","","yearly kundali");
                                                      if ($mysqli -> connect_errno) {
                                                            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                                            exit();
                                                      }
                                                      $in13 = " SELECT * FROM `personalinfo` R WHERE R.Age = S.Age ";
                                                      $in23 ="SELECT S.3 FROM `120 years` S WHERE EXISTS ($in13)";
                                                      $sql13 = "INSERT INTO `year kundali3` SELECT * FROM `birth kundali` WHERE `birth kundali`.`House` IN ($in23)";
                                                      $sql23 = "UPDATE `year kundali3` SET `House`=3 WHERE `year kundali3`.`House` IN ($in23)";
                                                      if ($mysqli->query($sql13) == true){// echo "success";
                                                      } else{ echo "ERROR: $sql13 <br> $mysqli->error"; }
                                                      if ($mysqli->query($sql23) == true){ // echo "success";
                                                      } else{ echo "ERROR: $sql23 <br> $mysqli->error"; }
                                                      $Sun3 = "SELECT House,Sun FROM `yearly kundali`.`year kundali3` WHERE House=3"; if ($result = $mysqli -> query($Sun3)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Su3">Su</div>'; } } $result -> free_result(); }
                                                      $Moon3 = "SELECT House,Moon FROM `yearly kundali`.`year kundali3` WHERE House=3"; if ($result = $mysqli -> query($Moon3)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Mo3">Mo</div>'; } } $result -> free_result(); } 
                                                      $Venus3 = "SELECT House,Venus FROM `yearly kundali`.`year kundali3` WHERE House=3"; if ($result = $mysqli -> query($Venus3)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ve3">Ve</div>'; } } $result -> free_result(); }
                                                      $Mars3 = "SELECT House,Mars FROM `yearly kundali`.`year kundali3` WHERE House=3"; if ($result = $mysqli -> query($Mars3)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ma3">Ma</div>'; } } $result -> free_result(); }
                                                      $Mercury3 = "SELECT House,Mercury FROM `yearly kundali`.`year kundali3` WHERE House=3"; if ($result = $mysqli -> query($Mercury3)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Me3">Me</div>'; } } $result -> free_result(); }
                                                      $Jupiter3 = "SELECT House,Jupiter FROM `yearly kundali`.`year kundali3` WHERE House=3"; if ($result = $mysqli -> query($Jupiter3)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ju3">Ju</div>'; } } $result -> free_result(); }
                                                      $Saturn3 = "SELECT House,Saturn FROM `yearly kundali`.`year kundali3` WHERE House=3"; if ($result = $mysqli -> query($Saturn3)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Sa3">Sa</div>'; } } $result -> free_result(); } 
                                                      $Rahu3 = "SELECT House,Rahu FROM `yearly kundali`.`year kundali3` WHERE House=3"; if ($result = $mysqli -> query($Rahu3)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ra3">Ra</div>'; } } $result -> free_result(); } 
                                                      $Ketu3 = "SELECT House,ketu FROM `yearly kundali`.`year kundali3` WHERE House=3"; if ($result = $mysqli -> query($Ketu3)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ke3">Ke</div>'; } } $result -> free_result(); }
                                                ?>
                                          </div>
                                          <div class="text4">4</div>
                                          <div>
                                                <?php
                                                      $mysqli = new mysqli("localhost","root","","yearly kundali");
                                                      if ($mysqli -> connect_errno) {
                                                            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                                            exit();
                                                      }
                                                      $in14 = " SELECT * FROM `personalinfo` R WHERE R.Age = S.Age ";
                                                      $in24 ="SELECT S.4 FROM `120 years` S WHERE EXISTS ($in14)";
                                                      $sql14 = "INSERT INTO `year kundali4` SELECT * FROM `birth kundali` WHERE `birth kundali`.`House` IN ($in24)";
                                                      $sql24 = "UPDATE `year kundali4` SET `House`=4 WHERE `year kundali4`.`House` IN ($in24)";
                                                      if ($mysqli->query($sql14) == true){ // echo "success";
                                                      } else{ echo "ERROR: $sql14 <br> $mysqli->error"; }
                                                      if ($mysqli->query($sql24) == true){ // echo "success";
                                                      } else{ echo "ERROR: $sql24 <br> $mysqli->error"; }
                                                      $Sun4 = "SELECT House,Sun FROM `yearly kundali`.`year kundali4` WHERE House=4"; if ($result = $mysqli -> query($Sun4)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Su4">Su</div>'; } } $result -> free_result(); } 
                                                      $Moon4 = "SELECT House,Moon FROM `yearly kundali`.`year kundali4` WHERE House=4"; if ($result = $mysqli -> query($Moon4)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Mo4">Mo</div>'; } } $result -> free_result(); }
                                                      $Venus4 = "SELECT House,Venus FROM `yearly kundali`.`year kundali4` WHERE House=4"; if ($result = $mysqli -> query($Venus4)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ve4">Ve</div>'; } } $result -> free_result(); } 
                                                      $Mars4 = "SELECT House,Mars FROM `yearly kundali`.`year kundali4` WHERE House=4"; if ($result = $mysqli -> query($Mars4)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ma4">Ma</div>'; } } $result -> free_result(); }
                                                      $Mercury4 = "SELECT House,Mercury FROM `yearly kundali`.`year kundali4` WHERE House=4"; if ($result = $mysqli -> query($Mercury4)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Me4">Me</div>'; } } $result -> free_result(); }
                                                      $Jupiter4 = "SELECT House,Jupiter FROM `yearly kundali`.`year kundali4` WHERE House=4"; if ($result = $mysqli -> query($Jupiter4)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ju4">Ju</div>'; } } $result -> free_result(); }
                                                      $Saturn4 = "SELECT House,Saturn FROM `yearly kundali`.`year kundali4` WHERE House=4"; if ($result = $mysqli -> query($Saturn4)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Sa4">Sa</div>'; } } $result -> free_result(); }
                                                      $Rahu4 = "SELECT House,Rahu FROM `yearly kundali`.`year kundali4` WHERE House=4"; if ($result = $mysqli -> query($Rahu4)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ra4">Ra</div>'; } } $result -> free_result(); } 
                                                      $Ketu4 = "SELECT House,ketu FROM `yearly kundali`.`year kundali4` WHERE House=4"; if ($result = $mysqli -> query($Ketu4)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ke4">Ke</div>'; } } $result -> free_result(); }
                                                ?>
                                          </div>
                                          <div class="text5">5</div>
                                          <div>
                                                <?php
                                                      $mysqli = new mysqli("localhost","root","","yearly kundali");
                                                      if ($mysqli -> connect_errno) {
                                                            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                                            exit();
                                                      }
                                                      $in15 = " SELECT * FROM `personalinfo` R WHERE R.Age = S.Age ";
                                                      $in25 ="SELECT S.5 FROM `120 years` S WHERE EXISTS ($in15)";
                                                      $sql15 = "INSERT INTO `year kundali5` SELECT * FROM `birth kundali` WHERE `birth kundali`.`House` IN ($in25)";
                                                      $sql25 = "UPDATE `year kundali5` SET `House`=5 WHERE `year kundali5`.`House` IN ($in25)";
                                                      if ($mysqli->query($sql15) == true){ // echo "success";
                                                      } else{ echo "ERROR: $sql15 <br> $mysqli->error"; }
                                                      if ($mysqli->query($sql25) == true){ // echo "success";
                                                      } else{ echo "ERROR: $sql25 <br> $mysqli->error"; }
                                                      $Sun5 = "SELECT House,Sun FROM `yearly kundali`.`year kundali5` WHERE House=5"; if ($result = $mysqli -> query($Sun5)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Su5">Su</div>'; } } $result -> free_result(); }
                                                      $Moon5 = "SELECT House,Moon FROM `yearly kundali`.`year kundali5` WHERE House=5"; if ($result = $mysqli -> query($Moon5)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Mo5">Mo</div>'; } } $result -> free_result(); }
                                                      $Venus5 = "SELECT House,Venus FROM `yearly kundali`.`year kundali5` WHERE House=5"; if ($result = $mysqli -> query($Venus5)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ve5">Ve</div>'; } } $result -> free_result(); }
                                                      $Mars5 = "SELECT House,Mars FROM `yearly kundali`.`year kundali5` WHERE House=5"; if ($result = $mysqli -> query($Mars5)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ma5">Ma</div>'; } } $result -> free_result(); }
                                                      $Mercury5 = "SELECT House,Mercury FROM `yearly kundali`.`year kundali5` WHERE House=5"; if ($result = $mysqli -> query($Mercury5)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Me5">Me</div>'; } } $result -> free_result(); }
                                                      $Jupiter5 = "SELECT House,Jupiter FROM `yearly kundali`.`year kundali5` WHERE House=5"; if ($result = $mysqli -> query($Jupiter5)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ju5">Ju</div>'; } } $result -> free_result(); }
                                                      $Saturn5 = "SELECT House,Saturn FROM `yearly kundali`.`year kundali5` WHERE House=5"; if ($result = $mysqli -> query($Saturn5)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Sa5">Sa</div>'; } } $result -> free_result(); }
                                                      $Rahu5 = "SELECT House,Rahu FROM `yearly kundali`.`year kundali5` WHERE House=5"; if ($result = $mysqli -> query($Rahu5)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ra5">Ra</div>'; } } $result -> free_result(); }
                                                      $Ketu5 = "SELECT House,ketu FROM `yearly kundali`.`year kundali5` WHERE House=5"; if ($result = $mysqli -> query($Ketu5)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ke5">Ke</div>'; } } $result -> free_result(); }
                                                ?>
                                          </div>
                                          <div class="text6">6</div>
                                          <div>
                                                <?php
                                                      $mysqli = new mysqli("localhost","root","","yearly kundali");
                                                      if ($mysqli -> connect_errno) {
                                                            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                                            exit();
                                                      }
                                                      $in16 = " SELECT * FROM `personalinfo` R WHERE R.Age = S.Age ";
                                                      $in26 ="SELECT S.6 FROM `120 years` S WHERE EXISTS ($in16)";
                                                      $sql16 = "INSERT INTO `year kundali6` SELECT * FROM `birth kundali` WHERE `birth kundali`.`House` IN ($in26)";
                                                      $sql26 = "UPDATE `year kundali6` SET `House`=6 WHERE `year kundali6`.`House` IN ($in26)";
                                                      if ($mysqli->query($sql16) == true){ // echo "success";
                                                      } else{ echo "ERROR: $sql16 <br> $mysqli->error"; }
                                                      if ($mysqli->query($sql26) == true){ // echo "success";
                                                      } else{ echo "ERROR: $sql26 <br> $mysqli->error"; }
                                                      $Sun6 = "SELECT House,Sun FROM `yearly kundali`.`year kundali6` WHERE House=6"; if ($result = $mysqli -> query($Sun6)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Su6">Su</div>'; } } $result -> free_result(); }
                                                      $Moon6 = "SELECT House,Moon FROM `yearly kundali`.`year kundali6` WHERE House=6"; if ($result = $mysqli -> query($Moon6)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Mo6">Mo</div>'; } } $result -> free_result(); }
                                                      $Venus6 = "SELECT House,Venus FROM `yearly kundali`.`year kundali6` WHERE House=6"; if ($result = $mysqli -> query($Venus6)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ve6">Ve</div>'; } } $result -> free_result(); }
                                                      $Mars6 = "SELECT House,Mars FROM `yearly kundali`.`year kundali6` WHERE House=6"; if ($result = $mysqli -> query($Mars6)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ma6">Ma</div>'; } } $result -> free_result(); }
                                                      $Mercury6 = "SELECT House,Mercury FROM `yearly kundali`.`year kundali6` WHERE House=6"; if ($result = $mysqli -> query($Mercury6)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Me6">Me</div>'; } } $result -> free_result(); }
                                                      $Jupiter6 = "SELECT House,Jupiter FROM `yearly kundali`.`year kundali6` WHERE House=6"; if ($result = $mysqli -> query($Jupiter6)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ju6">Ju</div>'; } } $result -> free_result(); }
                                                      $Saturn6 = "SELECT House,Saturn FROM `yearly kundali`.`year kundali6` WHERE House=6"; if ($result = $mysqli -> query($Saturn6)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Sa6">Sa</div>'; } } $result -> free_result(); } 
                                                      $Rahu6 = "SELECT House,Rahu FROM `yearly kundali`.`year kundali6` WHERE House=6"; if ($result = $mysqli -> query($Rahu6)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ra6">Ra</div>'; } } $result -> free_result(); }
                                                      $Ketu6 = "SELECT House,ketu FROM `yearly kundali`.`year kundali6` WHERE House=6"; if ($result = $mysqli -> query($Ketu6)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ke6">Ke</div>'; } } $result -> free_result(); }
                                                ?>
                                          </div>
                                          <div class="text7">7</div>
                                          <div>
                                                <?php
                                                      $mysqli = new mysqli("localhost","root","","yearly kundali");
                                                      if ($mysqli -> connect_errno) {
                                                      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                                      exit();
                                                      }
                                                      $in17 = " SELECT * FROM `personalinfo` R WHERE R.Age = S.Age ";
                                                      $in27 ="SELECT S.7 FROM `120 years` S WHERE EXISTS ($in17)";
                                                      $sql17 = "INSERT INTO `year kundali7` SELECT * FROM `birth kundali` WHERE `birth kundali`.`House` IN ($in27)";
                                                      $sql27 = "UPDATE `year kundali7` SET `House`=7 WHERE `year kundali7`.`House` IN ($in27)";
                                                      if ($mysqli->query($sql17) == true){ // echo "success";
                                                      } else{ echo "ERROR: $sql17 <br> $mysqli->error"; }
                                                      if ($mysqli->query($sql27) == true){ // echo "success";
                                                      } else{ echo "ERROR: $sql27 <br> $mysqli->error"; }
                                                      $Sun7 = "SELECT House,Sun FROM `yearly kundali`.`year kundali7` WHERE House=7"; if ($result = $mysqli -> query($Sun7)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Su7">Su</div>'; } } $result -> free_result(); }
                                                      $Moon7 = "SELECT House,Moon FROM `yearly kundali`.`year kundali7` WHERE House=7"; if ($result = $mysqli -> query($Moon7)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Mo7">Mo</div>'; } } $result -> free_result(); }
                                                      $Venus7 = "SELECT House,Venus FROM `yearly kundali`.`year kundali7` WHERE House=7"; if ($result = $mysqli -> query($Venus7)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ve7">Ve</div>'; } } $result -> free_result(); }
                                                      $Mars7 = "SELECT House,Mars FROM `yearly kundali`.`year kundali7` WHERE House=7"; if ($result = $mysqli -> query($Mars7)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ma7">Ma</div>'; } } $result -> free_result(); }
                                                      $Mercury7 = "SELECT House,Mercury FROM `yearly kundali`.`year kundali7` WHERE House=7"; if ($result = $mysqli -> query($Mercury7)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Me7">Me</div>'; } } $result -> free_result(); }
                                                      $Jupiter7 = "SELECT House,Jupiter FROM `yearly kundali`.`year kundali7` WHERE House=7"; if ($result = $mysqli -> query($Jupiter7)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ju7">Ju</div>'; } } $result -> free_result(); }
                                                      $Saturn7 = "SELECT House,Saturn FROM `yearly kundali`.`year kundali7` WHERE House=7"; if ($result = $mysqli -> query($Saturn7)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Sa7">Sa</div>'; } } $result -> free_result(); }
                                                      $Rahu7 = "SELECT House,Rahu FROM `yearly kundali`.`year kundali7` WHERE House=7"; if ($result = $mysqli -> query($Rahu7)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ra7">Ra</div>'; } } $result -> free_result(); }
                                                      $Ketu7 = "SELECT House,ketu FROM `yearly kundali`.`year kundali7` WHERE House=7"; if ($result = $mysqli -> query($Ketu7)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ke7">Ke</div>'; } } $result -> free_result(); }
                                                ?>
                                          </div>
                                          <div class="text8">8</div>
                                          <div>
                                                <?php
                                                      $mysqli = new mysqli("localhost","root","","yearly kundali");
                                                      if ($mysqli -> connect_errno) {
                                                      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                                      exit();
                                                      }
                                                      $in18 = " SELECT * FROM `personalinfo` R WHERE R.Age = S.Age ";
                                                      $in28 ="SELECT S.8 FROM `120 years` S WHERE EXISTS ($in18)";
                                                      $sql18 = "INSERT INTO `year kundali8` SELECT * FROM `birth kundali` WHERE `birth kundali`.`House` IN ($in28)";
                                                      $sql28 = "UPDATE `year kundali8` SET `House`=8 WHERE `year kundali8`.`House` IN ($in28)";
                                                      if ($mysqli->query($sql18) == true){ // echo "success";
                                                      } else{ echo "ERROR: $sql18 <br> $mysqli->error"; }
                                                      if ($mysqli->query($sql28) == true){ // echo "success";
                                                      } else{ echo "ERROR: $sql28 <br> $mysqli->error"; }
                                                      $Sun8 = "SELECT House,Sun FROM `yearly kundali`.`year kundali8` WHERE House=8"; if ($result = $mysqli -> query($Sun8)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Su8">Su</div>'; } } $result -> free_result(); }
                                                      $Moon8 = "SELECT House,Moon FROM `yearly kundali`.`year kundali8` WHERE House=8"; if ($result = $mysqli -> query($Moon8)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Mo8">Mo</div>'; } } $result -> free_result(); }
                                                      $Venus8 = "SELECT House,Venus FROM `yearly kundali`.`year kundali8` WHERE House=8"; if ($result = $mysqli -> query($Venus8)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ve8">Ve</div>'; } } $result -> free_result(); }
                                                      $Mars8 = "SELECT House,Mars FROM `yearly kundali`.`year kundali8` WHERE House=8"; if ($result = $mysqli -> query($Mars8)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ma8">Ma</div>'; } } $result -> free_result(); }
                                                      $Mercury8 = "SELECT House,Mercury FROM `yearly kundali`.`year kundali8` WHERE House=8"; if ($result = $mysqli -> query($Mercury8)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Me8">Me</div>'; } } $result -> free_result(); }
                                                      $Jupiter8 = "SELECT House,Jupiter FROM `yearly kundali`.`year kundali8` WHERE House=8"; if ($result = $mysqli -> query($Jupiter8)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ju8">Ju</div>'; } } $result -> free_result(); }
                                                      $Saturn8 = "SELECT House,Saturn FROM `yearly kundali`.`year kundali8` WHERE House=8"; if ($result = $mysqli -> query($Saturn8)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Sa8">Sa</div>'; } } $result -> free_result(); }
                                                      $Rahu8 = "SELECT House,Rahu FROM `yearly kundali`.`year kundali8` WHERE House=8"; if ($result = $mysqli -> query($Rahu8)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ra8">Ra</div>'; } } $result -> free_result(); }
                                                      $Ketu8 = "SELECT House,ketu FROM `yearly kundali`.`year kundali8` WHERE House=8"; if ($result = $mysqli -> query($Ketu8)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ke8">Ke</div>'; } } $result -> free_result(); }
                                                ?>
                                          </div>
                                          <div class="text9">9</div>
                                          <div>
                                                <?php
                                                      $mysqli = new mysqli("localhost","root","","yearly kundali");
                                                      if ($mysqli -> connect_errno) {
                                                      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                                      exit();
                                                      }
                                                      $in19 = " SELECT * FROM `personalinfo` R WHERE R.Age = S.Age ";
                                                      $in29 ="SELECT S.9 FROM `120 years` S WHERE EXISTS ($in19)";
                                                      $sql19 = "INSERT INTO `year kundali9` SELECT * FROM `birth kundali` WHERE `birth kundali`.`House` IN ($in29)";
                                                      $sql29 = "UPDATE `year kundali9` SET `House`=9 WHERE `year kundali9`.`House` IN ($in29)";
                                                      if ($mysqli->query($sql19) == true){ // echo "success";
                                                      } else{ echo "ERROR: $sql19 <br> $mysqli->error"; }
                                                      if ($mysqli->query($sql29) == true){ // echo "success";
                                                      } else{ echo "ERROR: $sql29 <br> $mysqli->error"; }
                                                      $Sun9 = "SELECT House,Sun FROM `yearly kundali`.`year kundali9` WHERE House=9"; if ($result = $mysqli -> query($Sun9)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Su9">Su</div>'; } } $result -> free_result(); }
                                                      $Moon9 = "SELECT House,Moon FROM `yearly kundali`.`year kundali9` WHERE House=9"; if ($result = $mysqli -> query($Moon9)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Mo9">Mo</div>'; } } $result -> free_result(); }
                                                      $Venus9 = "SELECT House,Venus FROM `yearly kundali`.`year kundali9` WHERE House=9"; if ($result = $mysqli -> query($Venus9)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ve9">Ve</div>'; } } $result -> free_result(); }
                                                      $Mars9 = "SELECT House,Mars FROM `yearly kundali`.`year kundali9` WHERE House=9"; if ($result = $mysqli -> query($Mars9)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ma9">Ma</div>'; } } $result -> free_result(); }
                                                      $Mercury9 = "SELECT House,Mercury FROM `yearly kundali`.`year kundali9` WHERE House=9"; if ($result = $mysqli -> query($Mercury9)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Me9">Me</div>'; } } $result -> free_result(); }
                                                      $Jupiter9 = "SELECT House,Jupiter FROM `yearly kundali`.`year kundali9` WHERE House=9"; if ($result = $mysqli -> query($Jupiter9)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ju9">Ju</div>'; } } $result -> free_result(); }
                                                      $Saturn9 = "SELECT House,Saturn FROM `yearly kundali`.`year kundali9` WHERE House=9"; if ($result = $mysqli -> query($Saturn9)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Sa9">Sa</div>'; } } $result -> free_result(); }
                                                      $Rahu9 = "SELECT House,Rahu FROM `yearly kundali`.`year kundali9` WHERE House=9"; if ($result = $mysqli -> query($Rahu9)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ra9">Ra</div>'; } } $result -> free_result(); }
                                                      $Ketu9 = "SELECT House,ketu FROM `yearly kundali`.`year kundali9` WHERE House=9"; if ($result = $mysqli -> query($Ketu9)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ke9">Ke</div>'; } } $result -> free_result(); }
                                                ?>
                                          </div>
                                          <div class="text10">10</div>
                                          <div>
                                                <?php
                                                      $mysqli = new mysqli("localhost","root","","yearly kundali");
                                                      if ($mysqli -> connect_errno) {
                                                      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                                      exit();
                                                      }
                                                      $in110 = " SELECT * FROM `personalinfo` R WHERE R.Age = S.Age ";
                                                      $in210 ="SELECT S.10 FROM `120 years` S WHERE EXISTS ($in110)";
                                                      $sql110 = "INSERT INTO `year kundali10` SELECT * FROM `birth kundali` WHERE `birth kundali`.`House` IN ($in210)";
                                                      $sql210 = "UPDATE `year kundali10` SET `House`=10 WHERE `year kundali10`.`House` IN ($in210)";
                                                      if ($mysqli->query($sql110) == true){// echo "success";
                                                      } else{ echo "ERROR: $sql110 <br> $mysqli->error"; }
                                                      if ($mysqli->query($sql210) == true){ // echo "success";
                                                      } else{ echo "ERROR: $sql210 <br> $mysqli->error"; }
                                                      $Sun10 = "SELECT House,Sun FROM `yearly kundali`.`year kundali10` WHERE House=10"; if ($result = $mysqli -> query($Sun10)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Su10">Su</div>'; } } $result -> free_result(); }
                                                      $Moon10 = "SELECT House,Moon FROM `yearly kundali`.`year kundali10` WHERE House=10"; if ($result = $mysqli -> query($Moon10)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Mo10">Mo</div>'; } } $result -> free_result(); }
                                                      $Venus10 = "SELECT House,Venus FROM `yearly kundali`.`year kundali10` WHERE House=10"; if ($result = $mysqli -> query($Venus10)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ve10">Ve</div>'; } } $result -> free_result(); }
                                                      $Mars10 = "SELECT House,Mars FROM `yearly kundali`.`year kundali10` WHERE House=10"; if ($result = $mysqli -> query($Mars10)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ma10">Ma</div>'; } } $result -> free_result(); }
                                                      $Mercury10 = "SELECT House,Mercury FROM `yearly kundali`.`year kundali10` WHERE House=10"; if ($result = $mysqli -> query($Mercury10)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Me10">Me</div>'; } } $result -> free_result(); }
                                                      $Jupiter10 = "SELECT House,Jupiter FROM `yearly kundali`.`year kundali10` WHERE House=10"; if ($result = $mysqli -> query($Jupiter10)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ju10">Ju</div>'; } } $result -> free_result(); }
                                                      $Saturn10 = "SELECT House,Saturn FROM `yearly kundali`.`year kundali10` WHERE House=10"; if ($result = $mysqli -> query($Saturn10)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Sa10">Sa</div>'; } } $result -> free_result(); }
                                                      $Rahu10 = "SELECT House,Rahu FROM `yearly kundali`.`year kundali10` WHERE House=10"; if ($result = $mysqli -> query($Rahu10)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ra10">Ra</div>'; } } $result -> free_result(); }
                                                      $Ketu10 = "SELECT House,ketu FROM `yearly kundali`.`year kundali10` WHERE House=10"; if ($result = $mysqli -> query($Ketu10)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ke10">Ke</div>'; } } $result -> free_result(); }
                                                ?>
                                          </div>
                                          <div class="text11">11</div>
                                          <div>
                                                <?php
                                                      $mysqli = new mysqli("localhost","root","","yearly kundali");
                                                      if ($mysqli -> connect_errno) {
                                                      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                                      exit();
                                                      }
                                                      $in111 = " SELECT * FROM `personalinfo` R WHERE R.Age = S.Age ";
                                                      $in211 ="SELECT S.11 FROM `120 years` S WHERE EXISTS ($in111)";
                                                      $sql111 = "INSERT INTO `year kundali11` SELECT * FROM `birth kundali` WHERE `birth kundali`.`House` IN ($in211)";
                                                      $sql211 = "UPDATE `year kundali11` SET `House`=11 WHERE `year kundali11`.`House` IN ($in211)";
                                                      if ($mysqli->query($sql111) == true){ // echo "success";
                                                      } else{ echo "ERROR: $sql111 <br> $mysqli->error"; }
                                                      if ($mysqli->query($sql211) == true){ // echo "success";
                                                      } else{ echo "ERROR: $sql211 <br> $mysqli->error"; }
                                                      $Sun11 = "SELECT House,Sun FROM `yearly kundali`.`year kundali11` WHERE House=11"; if ($result = $mysqli -> query($Sun11)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Su11">Su</div>'; } } $result -> free_result(); } 
                                                      $Moon11 = "SELECT House,Moon FROM `yearly kundali`.`year kundali11` WHERE House=11"; if ($result = $mysqli -> query($Moon11)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Mo11">Mo</div>'; } } $result -> free_result(); }  
                                                      $Venus11 = "SELECT House,Venus FROM `yearly kundali`.`year kundali11` WHERE House=11"; if ($result = $mysqli -> query($Venus11)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ve11">Ve</div>'; } } $result -> free_result(); } 
                                                      $Mars11 = "SELECT House,Mars FROM `yearly kundali`.`year kundali11` WHERE House=11"; if ($result = $mysqli -> query($Mars11)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ma11">Ma</div>'; } } $result -> free_result(); }
                                                      $Mercury11 = "SELECT House,Mercury FROM `yearly kundali`.`year kundali11` WHERE House=11"; if ($result = $mysqli -> query($Mercury11)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Me11">Me</div>'; } } $result -> free_result(); } 
                                                      $Jupiter11 = "SELECT House,Jupiter FROM `yearly kundali`.`year kundali11` WHERE House=11"; if ($result = $mysqli -> query($Jupiter11)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ju11">Ju</div>'; } } $result -> free_result(); }
                                                      $Saturn11 = "SELECT House,Saturn FROM `yearly kundali`.`year kundali11` WHERE House=11"; if ($result = $mysqli -> query($Saturn11)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Sa11">Sa</div>'; } } $result -> free_result(); } 
                                                      $Rahu11 = "SELECT House,Rahu FROM `yearly kundali`.`year kundali11` WHERE House=11"; if ($result = $mysqli -> query($Rahu11)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ra11">Ra</div>'; } } $result -> free_result(); }
                                                      $Ketu11 = "SELECT House,ketu FROM `yearly kundali`.`year kundali11` WHERE House=11"; if ($result = $mysqli -> query($Ketu11)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ke11">Ke</div>'; } } $result -> free_result(); }
                                                ?>
                                          </div>
                                          <div class="text12">12</div>
                                          <div>
                                                <?php
                                                      $mysqli = new mysqli("localhost","root","","yearly kundali");
                                                      if ($mysqli -> connect_errno) {
                                                      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                                      exit();
                                                      }
                                                      $in112 = " SELECT * FROM `personalinfo` R WHERE R.Age = S.Age ";
                                                      $in212 ="SELECT S.12 FROM `120 years` S WHERE EXISTS ($in112)";
                                                      $sql112 = "INSERT INTO `year kundali12` SELECT * FROM `birth kundali` WHERE `birth kundali`.`House` IN ($in212)";
                                                      $sql212 = "UPDATE `year kundali12` SET `House`=12 WHERE `year kundali12`.`House` IN ($in212)";
                                                      if ($mysqli->query($sql112) == true){ // echo "success";
                                                      } else{ echo "ERROR: $sql112 <br> $mysqli->error"; }
                                                      if ($mysqli->query($sql212) == true){ // echo "success";
                                                      } else{ echo "ERROR: $sql212 <br> $mysqli->error"; }
                                                      $Sun12 = "SELECT House,Sun FROM `yearly kundali`.`year kundali12` WHERE House=12"; if ($result = $mysqli -> query($Sun12)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Su12">Su</div>'; } } $result -> free_result(); } 
                                                      $Moon12 = "SELECT House,Moon FROM `yearly kundali`.`year kundali12` WHERE House=12"; if ($result = $mysqli -> query($Moon12)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Mo12">Mo</div>'; } } $result -> free_result(); } 
                                                      $Venus12 = "SELECT House,Venus FROM `yearly kundali`.`year kundali12` WHERE House=12"; if ($result = $mysqli -> query($Venus12)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ve12">Ve</div>'; } } $result -> free_result(); } 
                                                      $Mars12 = "SELECT House,Mars FROM `yearly kundali`.`year kundali12` WHERE House=12"; if ($result = $mysqli -> query($Mars12)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ma12">Ma</div>'; } } $result -> free_result(); }
                                                      $Mercury12 = "SELECT House,Mercury FROM `yearly kundali`.`year kundali12` WHERE House=12"; if ($result = $mysqli -> query($Mercury12)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Me12">Me</div>'; } } $result -> free_result(); } 
                                                      $Jupiter12 = "SELECT House,Jupiter FROM `yearly kundali`.`year kundali12` WHERE House=12"; if ($result = $mysqli -> query($Jupiter12)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ju12">Ju</div>'; } } $result -> free_result(); } 
                                                      $Saturn12 = "SELECT House,Saturn FROM `yearly kundali`.`year kundali12` WHERE House=12"; if ($result = $mysqli -> query($Saturn12)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Sa12">Sa</div>'; } } $result -> free_result(); } 
                                                      $Rahu12 = "SELECT House,Rahu FROM `yearly kundali`.`year kundali12` WHERE House=12"; if ($result = $mysqli -> query($Rahu12)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ra12">Ra</div>'; } } $result -> free_result(); } 
                                                      $Ketu12 = "SELECT House,ketu FROM `yearly kundali`.`year kundali12` WHERE House=12"; if ($result = $mysqli -> query($Ketu12)) { while ($row = $result -> fetch_row()) { if($row[1]==1) { echo '<div class="Ke12">Ke</div>'; } } $result -> free_result(); }
                                                ?>         
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </section>
            
            <section class="container text-center">
                  <form action="index.php" method="post">
                        <?php
                        $mysqli = new mysqli("localhost","root","","yearly kundali");
                        if ($mysqli -> connect_errno) {
                        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                        exit();
                        }
                        
                        $Birthsql = "UPDATE `yearly kundali`.`birth kundali` SET `Sun`=0,`Moon`=0,`Venus`=0,`Mars`=0,`Mercury`=0,`Jupiter`=0,`Saturn`=0,`Rahu`=0,`Ketu`=0 WHERE 1";
                        if ($mysqli->query($Birthsql) == true){
                        // echo "success";
                        }
                        else{
                        echo "ERROR: $Birthsql <br> $mysqli->error";
                        }
                        $personalsql = "DELETE FROM `yearly kundali`.`personalinfo` WHERE 1";
                        if ($mysqli->query($personalsql) == true){
                        // echo "success";
                        }
                        else{
                        echo "ERROR: $personalsql <br> $mysqli->error";
                        }
                        for ($i=1; $i <= 12 ; $i++) {
                        $yearsql = "DELETE FROM `yearly kundali`.`year kundali$i` WHERE 1";
                        if ($mysqli->query($yearsql) == true){
                        // echo "success";
                        }
                        else{
                        echo "ERROR: $yearsql <br> $mysqli->error";
                        }
                        }
                        ?>
                        <button type="submit" class="btn btn-primary">Clear Data</button>
                  </form>
            </section>
            <script src="index.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      </body>
</html>