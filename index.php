<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Carrois+Gothic+SC&family=DM+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" href="css/fonts.css">

 
</head>
<body>
  <?php 
      $database = [
        [
          title => "",
          short_text => "",
          img => "",
          users => "",
          url => ".php"
        ]


      ]

     ?>
     <?php
              $connect = mysqli_connect("127.0.0.1","root","","Blog");
              $text_query = 'SELECT * FROM newcategoria';
              $query = mysqli_query($connect, $text_query);
              $result1 = $query -> fetch_assoc();
              $result2 = $query -> fetch_assoc();
              $result3 = $query -> fetch_assoc();
             
                    
            ?>
  <header class="header">
    <div class="container">
      <a href="index.php"><div class="header__box">
         <div class="header__title">
            Cool name of a furniture store
         </div>
      </div></a>    
    </div>
  </header>
  <div class="caption">
    <div class="container">
      <div class="caption__box">
        <div class="caption__title">
          EVERYTHING FOR CONVENIENCE
        </div>
      </div>
    </div>
  </div>
  <div class="main">
    <div class="container">
      <div class="main1__box">

        <a class="main1__margin" href="furniture.php"><div class="main__content-furniture">
          <div class="main__content-img">
            <img class="main__content-furniture-img" src="img/furniture.jpg" alt="">
          </div>
          <p class="main__content-furniture-text">
            FURNITURE
          </p>
        </div></a>

        <a class="main1__margin" href="pillows.php"><div class="main__content-pillows">
           <div class="main__content-imgPill">
            <img class="main__content-pillows-img" src="img/pillows.jpg" alt="">
           </div>
          <p class="main__content-pillows-text">
            PILLOWS
          </p>
        </div></a>

        <a class="main1__margin" href="lighting.php"><div class="main__content-lighting">
          <div class="main__content-imgLight">
            <img class="main__content-lighting-img" src="img/lighting.jpg" alt="">
          </div>
          <p class="main__content-lighting-text">
            LIGHTING
          </p>
        </div></a>

      </div>
      <div class="main2__box">

        <a class="main2__margin" href="chair.php"><div class="main2__content-chair">
          <div class="main2__content-imgChair">
            <img class="main2__content-chair-img" src="img/chair.jpg" alt="">
          </div>
          <p class="main2__content-chair-text">
            CHAIR
          </p>
        </div></a>

        <?php echo "<a href='".$result1["adres"]."'><div class='".$result1["block"]."'>
          <div class='main2__content-imgChair'>
              <img class='".$result1["block2"]."' src='".$result1["img"]."'>
          </div>
          <p class='".$result1["bloc3"]."'>
               ".$result1["text"]."
          </p>
        </div></a>";
        ?>

        <?php echo "<a href='".$result2["adres"]."'><div class='".$result2["block"]."'>
          <div class='main2__content-imgChair'>
              <img class='".$result2["block2"]."' src='".$result2["img"]."'>
          </div>
          <p class='".$result2["bloc3"]."'>
               ".$result2["text"]."
          </p>
        </div></a>";
        ?>


          

      </div> 
      <div class="main3__box">
        <?php echo "<a href='".$result3["adres"]."'><div class='".$result3["block"]."'>
          <div class='main3__content-imgChair'>
              <img class='".$result3["block2"]."' src='".$result3["img"]."'>
          </div>
          <p class='".$result3["bloc3"]."'>
               ".$result3["text"]."
          </p>
        </div></a>";
        ?>
      </div>
    </div>
  </div>




    

</body>
</html>