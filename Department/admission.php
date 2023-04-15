<!doctype html>
<html lang="en">

<head>
    

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" /> -->
  
    <?php include "links/include/link.php" ?>
    <!-- Header -->
    
    <style>


.box-shadow {
	box-shadow: 6px 6px 20px #000;
}
div.glyphicons ul {
	max-height: 300px;
	overflow: scroll;
	padding: 12px;
	margin: 0;
}
div.glyphicons ul li {
	display: inline-block;
	color: rgb(46, 49, 51);
	padding: 8px;
	margin: 4px;
	border: 1px solid rgb(46, 49, 51);
	border-radius: 4px;
	cursor: pointer;
}
div.glyphicons ul li:hover {
	background: rgb(46, 49, 51);
	color: #fff;
}

.features-list li:not(:first-of-type) {
	margin-top: 12px;
}
.glyphicon-pushpin {
	margin-left: 0;
	margin-right: 12px;
}


@media (min-width: 520px) {
  	.button-wrapper {
		align-items: center;
    	flex-flow: row wrap;
    	-ms-flex-flow: row wrap;
    	-webkit-flex-flow: row wrap;
  	}
	.btn-container-center>a.btn {
		margin-left: 12px;
		margin-right: 12px;
	}
	.btn-container-center {
		justify-content: center;
	}
	.btn-container-center>a.btn:first-of-type {
		margin-left: 0;
	}
}


        
        iframe{
            height:5in;
            margin:50px 100px ;
            width:80%;
        }
		
        
        </style>
</head>
<body>
 <?php include "links/include/header.php"?> 

 <br>
 <br>
 <br>
 <br>
 

<!-- Buttons -->
 <div class="row content">
				
				<div class="col-md-12">
					<div class="button-wrapper btn-container-center">
						<a class="btn btn-lg btn-sucess" href="links/courses/aiml.html">M.sc(AI ML)<span class="glyphicon glyphicon-align-justify"></span></a>
						<a class="btn btn-lg btn-success" href="links/courses/mca.html">Mca<span class="glyphicon glyphicon-align-justify"></span></a>
						<a class="btn btn-lg btn-success" href="links/courses/msc.html">Msc(CS)<span class="glyphicon glyphicon-align-justify"></span></a>
                        <a class="btn btn-lg btn-success" href="links/courses/mtec.html">M.Tech.(Networking & Communication)<span class="glyphicon glyphicon-align-justify"></span></a>
                        <a class="btn btn-lg btn-success" href="links/courses/mtec.html">M.Tech.(Web Technology)<span class="glyphicon glyphicon-align-justify"></span></a>
                        <a class="btn btn-lg btn-success" href="links/courses/pgdcsa.html">PGDCSA<span class="glyphicon glyphicon-align-justify"></span></a>
        
					</div>
				</div>
			</div>
			<br>
			<br>
			<br>

            
 <!-- Iframes --> 
    <?php
    $scan = (scandir('./links/courses/'));
    foreach ($scan as $file) {
        if (is_file("./links/courses/$file") ) {
            echo '<div class="w-2/4 pl-40 mx-auto text-white bg-blue-600 ">NEW COURSES</div><iframe src= ./links/courses/'. $file .'></iframe><br>';
            
        }
    }
    ?>




    <!-- Footer -->
    <?php include "links/include/footer.php"?>
</body>

</html>