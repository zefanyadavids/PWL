<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet " id="bootstrap-css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <style>
        .src-image {
          display: none;
        }

        .card {
          overflow: hidden;
          position: relative;
          border: 1px solid #CCC;
          border-radius: 8px;
          text-align: center;
          padding: 0;
          background-color: #28cca0;
          color: black;
        }

        .card .header-bg {
          /* This stretches the canvas across the entire hero unit */
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 70px;
          border-bottom: 1px #FFF solid;
          /* This positions the canvas under the text */
          z-index: 1;
        }
        .card .avatar {
          position: relative;
          margin-top: 15px;
          z-index: 100;
        }

        .card .avatar img {
          width: 100px;
          height: 100px;
          -webkit-border-radius: 50%;
          -moz-border-radius: 50%;
          border-radius: 50%;
          border: 5px solid rgba(0,0,30,0.8);
        }

    </style>
</head>
<body>
<?php
    include('template_nav_bar.php');
  ?>
  <h1 style="text-align: center">Project Credit By</h1><br/>
<div class="container">
    <div class="row">
    </div>
    <div class="row">
    <div class="col-sm-3">
            <div class="card">
                <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                <div class="avatar">
                    <img src="img_profile/71160014.jpg" alt="" />
                </div>
                <div class="content">
                    <p>Yonatan Kristanto<br>
                       71160014</p>
                    <p><button type="button" class="btn btn-default">Contact</button></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                <div class="avatar">
                    <img src="img_slideshow/2.jpg" alt="" />
                </div>
                <div class="content">
                    <p>Jalu Indrianto <br>
                       71160028</p>
                    <p><button type="button" class="btn btn-default">Contact</button></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                <div class="avatar">
                    <img src="img_slideshow/2.jpg" alt="" />
                </div>
                <div class="content">
                    <p>Yoga Rizky <br>
                        71160059</p>
                    <p><button type="button" class="btn btn-default">Contact</button></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                <div class="avatar">
                    <img src="img_slideshow/2.jpg" alt="" />
                </div>
                <div class="content">
                    <p>Zefanya David<br>
                       71160061</p>
                    <p><button type="button" class="btn btn-default">Contact</button></p>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
