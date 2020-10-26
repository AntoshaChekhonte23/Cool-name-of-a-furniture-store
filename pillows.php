<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<!-- css-include -->
	<link href="https://fonts.googleapis.com/css2?family=Carrois+Gothic+SC&family=DM+Sans&display=swap" rel="stylesheet">
 	<link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
 	<link rel="stylesheet" href="css/fonts.css">
  	<link rel="stylesheet" href="css/style1.css">
  	<link rel="stylesheet" href="css/stylepillows1.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  	<style>
  		.displayNone{
			display: none;
		}
		.displayBlock{
			display: block;
		}
  		.work-item {
	position: relative;
}
.work-item:before {
	position: absolute;
	content: "";
	background-color: rgba(255, 255, 255, 0.45);
	width:258px;
	height: 258px;
	opacity: 0;
	transition: all 0.5s ease;
}
.work-item:hover::before {
	opacity: 1;
	width:258px;
	height: 258px;
}
.item-wrap img {
	width: 100%;
}
.item-grid {
	width: 33.33%;
	float: left;
}
.description-div{
	width:258px;
	height: 258px;
	position:absolute;
	left:0;
	top:0;

}
.project-description  {
	position:absolute;
	left:0px;
	top:0px;
	z-index: 1;
	opacity: 0;
	visibility: hidden;
	transition: .3s all ease-in-out;
	
	
}
.project-description li{
	list-style:none;
	margin: 0px -35px;
	font-family: 'Poiret One', cursive;
	letter-spacing: 1.5px;
	font-weight: bold;
	width:258px;
	padding: 3px 0px;
	font-size: 15px;
}
.project-description h3{
	margin-top:5px;
	margin-left: 10px;
	font-family: 'Poiret One', cursive;
	letter-spacing: 1.5px;
	font-weight: bold;
	font-size: 20px;
	color: #000;
	font-size: 20px;
}
.project-description h3 a::before {
	border-bottom: 1px solid #232323;
	bottom: 225;
	content: "";
	height: 1px;
	margin-left: 10px;
	left: 0;
	position: absolute;
	width: 50px;
}
.project-description a{
	text-decoration: none;
	color:black;
}
.work-item:hover .project-description {
	opacity: 1;
	visibility: visible;
	right: 15px;
	transition-delay: 0.5s;
}
  	</style>
</head>


<body>

		

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
          Pillows
        </div>
      </div>
    </div>
  </div>

  <div class="main">
  	<div class="container">
		<div class="Main1_2__box">

		       <div class="Main__content-pillows">
		           <div class="Main__content-img">
			          <div class="item-grid">
			           	<div class="work-item" href="#">
				             <img class="Main__content-pillows-img " src="imgpillows/pillows1.jpg" alt="">
				           	<div class="project-description ">
				           		<div class="description-div">
									<h3><a href="#">Description</a></h3>
									<ul class="project-catagorry text-capitalize">
										<li>•Designed by Adam Rogers</li>
										<li>•Poly/linen performance fabric</li>
										<li>•Performance fabric is water- and stain-resistant and easy to clean</li>
										<li>•Engineered wood frame</li>
										<li>•Frame is benchmade with certified sustainable hardwood that's kiln-dried to prevent warping</li>
									</ul>
								</div>
							</div>
				        </div>
			        </div>
		          </div>
		          <p class="Main__content-pillows-txt">
		            18"X12" SILHOUETTE PILLOW
		          </p>		
		          <p class="Main__content-pillows-price">
		            RUB 2512.08 
		          </p>
		          <a href=""><button class="Main__btn default-btn">Buy</button></a>
		        </div>

		         <div class="Main__content-pillows">
		           <div class="Main__content-img">
			          <div class="item-grid">
			           	<div class="work-item" href="#">
				             <img class="Main__content-pillows-img pillows1" src="imgpillows/pillows3.jpg" alt="">
				           	<div class="project-description ">
				           		<div class="description-div">
									<h3><a href="#">Description</a></h3>
									<ul class="project-catagorry text-capitalize">
										<li>•Designed by Adam Rogers</li>
										<li>•Poly/linen performance fabric</li>
										<li>•Performance fabric is water- and stain-resistant and easy to clean</li>
										<li>•Engineered wood frame</li>
										<li>•Frame is benchmade with certified sustainable hardwood that's kiln-dried to prevent warping</li>
									</ul>
								</div>
							</div>
				        </div>
			        </div>
			        
		          </div>
		          <p class="Main__content-pillows-txt">
		            36"X16" PALETTE VELVET PILLOW
		          </p>
		          	
		          <p class="Main__content-pillows-price">
		            RUB 5015.80
		          </p>
		          <a href=""><button class="Main__btn default-btn">Buy</button></a>
		        </div>

		        <div class="Main__content-pillows">
		           <div class="Main__content-img">
		           	
			            
			           <div class="item-grid">
			           	<div class="work-item" href="#">
				             <img class="Main__content-pillows-img pillows1" src="imgpillows/pillows5.jpg" alt="">
				           	<div class="project-description ">
				           		<div class="description-div">
									<h3><a href="#">Description</a></h3>
									<ul class="project-catagorry text-capitalize">
										<li>•Designed by Adam Rogers</li>
										<li>•Poly/linen performance fabric</li>
										<li>•Performance fabric is water- and stain-resistant and easy to clean</li>
										<li>•Engineered wood frame</li>
										<li>•Frame is benchmade with certified sustainable hardwood that's kiln-dried to prevent warping</li>
									</ul>
								</div>
							</div>
				        </div>
			        </div>
			      
		          </div>
		          <p class="Main__content-pillows-txt">
		            20" SIMON IVORY WOOL PILLOW
		          </p>
		           
		          <p class="Main__content-pillows-price">
		            RUB 5015.80
		          </p>
		          <a href=""><button class="Main__btn default-btn">Buy</button></a>
		        </div>

		        <div class="Main__content-pillows">
		           <div class="Main__content-img">
		           
			            
			          <div class="item-grid">
			           	<div class="work-item" href="#">
				             <img class="Main__content-pillows-img pillows1" src="imgpillows/pillows7.jpg" alt="">
				           	<div class="project-description ">
				           		<div class="description-div">
									<h3><a href="#">Description</a></h3>
									<ul class="project-catagorry text-capitalize">
										<li>•Designed by Adam Rogers</li>
										<li>•Poly/linen performance fabric</li>
										<li>•Performance fabric is water- and stain-resistant and easy to clean</li>
										<li>•Engineered wood frame</li>
										<li>•Frame is benchmade with certified sustainable hardwood that's kiln-dried to prevent warping</li>
									</ul>
								</div>
							</div>
				        </div>
			         </div>
		          </div>
		          <p class="Main__content-pillows-txt">
		           	16" BETTIE TEAL PILLOW
		          </p>
		           
		          <p class="Main__content-pillows-price">
		            RUB 3342.47

		          </p>
		          <a href=""><button class="Main__btn default-btn">Buy</button></a>
		        </div>

		         <div class="Main__content-pillows">
		           <div class="Main__content-img">
		           	
			            
			          <div class="item-grid">
			           	<div class="work-item" href="#">
				             <img class="Main__content-pillows-img pillows1" src="imgpillows/pillows9.jpg" alt="">
				           	<div class="project-description ">
				           		<div class="description-div">
									<h3><a href="#">Description</a></h3>
									<ul class="project-catagorry text-capitalize">
										<li>•Designed by Adam Rogers</li>
										<li>•Poly/linen performance fabric</li>
										<li>•Performance fabric is water- and stain-resistant and easy to clean</li>
										<li>•Engineered wood frame</li>
										<li>•Frame is benchmade with certified sustainable hardwood that's kiln-dried to prevent warping</li>
									</ul>
								</div>
							</div>
				        </div>
			         </div>
			       
		          </div>
		          <p class="Main__content-pillows-txt">
		           20" CAPRI SILK PILLOW
		          </p>
		           	
		          <p class="Main__content-pillows-price">
		            RUB 4179.14
		          </p>
		          <a href=""><button class="Main__btn default-btn">Buy</button></a>
		        </div>

		</div>
		<?php
	 		$connect = mysqli_connect("127.0.0.1","root","","Blog");
          	$text_query = 'SELECT * FROM newcategoriaPillows';
         	$query = mysqli_query($connect, $text_query);
          	$furniture1 = $query -> fetch_assoc();
            $furniture2 = $query -> fetch_assoc();
            $furniture3 = $query -> fetch_assoc();
            $furniture4 = $query -> fetch_assoc();
            $furniture5 = $query -> fetch_assoc();
	 	?>  
	 	<div class="Main2_2__box">
	  		<?php echo "<div class='Main2__content-pillows'>
	           <div class='Main__content-img'>
	           		<div class='item-grid'>
			           	<div class='work-item displayNone ".$furniture1["block1"]."'>
				            <img class='Main__content-pillows-img' src='".$furniture1["img"]."'>
				           	<div class='project-description'>
				           		<div class='description-div'>
									<h3><a href=''>Description</a></h3>
									<ul class='project-catagorry '>
										<li>•Designed by Adam Rogers</li>
										<li>•Poly/linen performance fabric</li>
										<li>•Performance fabric is water- and stain-resistant and easy to clean</li>
										<li>•Engineered wood frame</li>
										<li>•Frame is benchmade with certified sustainable hardwood that's kiln-dried to prevent warping</li>
									 </ul>
								</div>
							</div>
				        </div>
		       		</div>
	          </div>
	          <p class='Main__content-pillows-txt'>
	           	".$furniture1["text1"]."
	          </p>
	          <p class='Main__content-pillows-price'>
	            ".$furniture1["text2"]."
	          </p>
	          <a href=''><button class='Main__btn default-btn displayNone ".$furniture1["block2"]."'>Buy</button></a>
	        </div>";
	        ?>

	        <?php echo "<div class='Main2__content-pillows'>
	           <div class='Main__content-img'>
	           		<div class='item-grid'>
			           	<div class='work-item displayNone ".$furniture2["block1"]."'>
				            <img class='Main__content-pillows-img' src='".$furniture2["img"]."'>
				           	<div class='project-description'>
				           		<div class='description-div'>
									<h3><a href=''>Description</a></h3>
									<ul class='project-catagorry '>
										<li>•Designed by Adam Rogers</li>
										<li>•Poly/linen performance fabric</li>
										<li>•Performance fabric is water- and stain-resistant and easy to clean</li>
										<li>•Engineered wood frame</li>
										<li>•Frame is benchmade with certified sustainable hardwood that's kiln-dried to prevent warping</li>
									</ul>
								</div>
							</div>
				        </div>
		       		</div>
	          </div>
	          <p class='Main__content-pillows-txt'>
	           	".$furniture2["text1"]."
	          </p>
	          <p class='Main__content-pillows-price'>
	            ".$furniture2["text2"]."
	          </p>
	          <a href=''><button class='Main__btn default-btn displayNone ".$furniture2["block2"]."'>Buy</button></a>
	        </div>";
	        ?>


	  	</div>



	</div>
  </div>

	<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src="js/index.js"></script>
</body>
</html>