<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/weblogo.ico" type="image/x-icon">
    <title>E-LEARNING LIBRARY</title>
    <link rel="stylesheet" href="css_style\second.css">
    <link rel="stylesheet" href="fonts.css?v=<? echo time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>

    <style>
      .slick-slider {
          width: 90%;
          margin: 0 auto;
      }
    </style>

</head>
<body>
    <div id="myHeader">
        <nav id="navbar" >
            <a href="index.php"><img src="image/coe logo.jpg" ></a>
            <h1><span>COE</span> ONLINE LIBRARY</h1>
            <a href="https://plsp.edu.ph/" target="_blank" ><img src="image/logoplsp.jpg"  ></a>
        </nav>
    </div>



    <!-- <video autoplay muted loop id="background-video">
        <source src="image\Technology Background Loop Video - Non Copyright Video (720p).mp4" type="video/mp4">
    </video> -->


    <section class="year_selection">
        <h1>YEAR <span>SELECTION</span></h1>
        <div class="allgallery">
            <div class="gallery">
                <a href="YEAR/first_year.php" >
                    <img id="imageToChange1" src="image\first.jpg" alt="">
                    <div class="content1">
                        <h1>FIRST<span>x</span>YEAR</h1>
                    </div>
                </a>
            </div>

            <div class="gallery">
                <a href="YEAR/second_year.php">
                    <div class="gal2"><img id="imageToChange2" src="image\second.jpg" alt=""></div>
                    <div class="content2"><h1>SECOND<span>x</span>YEAR</h1></div>
                </a>
            </div>

            <div class="gallery">
                <a href="YEAR/third_year.php">
                    <img id="imageToChange3" src="image\third.jpg" alt="">
                    <div class="content3"><h1>THIRD<span>x</span>YEAR</h1></div>
                </a>
            </div>

            <div class="gallery">
                <a href="YEAR/forth_year.php">
                    <img  id="imageToChange4" src="image\forth.jpg" alt="">
                    <div class="content4"><h1>FORTH<span>x</span>YEAR</h1></div>
                </a>
            </div>
        </div>
    </section>


    <section class="all_module">
    <h1>ALL <SPAN>MODULES</SPAN></h1>
    <div class="all-module-gallery">
      <?php
         $conn = new mysqli("localhost","root", "", "library");

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM module  ORDER BY title ASC"; 
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
          echo "<div class='gallery'>";
          echo "<a href='" . $row["book_file"] . "' target='_blank' onclick='openPDF(\"" . $row["book_file"] . "\");'>";
          echo "<img src='" . $row["book_preview"] . "' alt='Preview Image' class='module-image'>";
          echo "<marquee scrollamount='5'>";
          echo  $row["title"];
          echo "</marquee>";
          echo "</a>";
          echo "</div>";
        }

        $conn->close();
      ?>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.all-module-gallery').slick({
        rows: 2,
        slidesToShow: 5,
        slidesToScroll: 5,
        dots: false,
        infinite: true,
        speed: 300,
      });
    });
  </script>


  <script>
        window.onscroll = function() {myFunction()};

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>
</body>
</html>
