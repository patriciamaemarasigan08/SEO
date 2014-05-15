<html>
<head>
<meta charset="UTF-8">
    <title>Artistic-Dream</title>
    <meta name = "description=" content ="Search engine is a program that searches for and identifies items in a database that correspond to keywords or characters specified by the user, used especially for finding particular sites on the World Wide Web.">
    
    

    <link href="style.css" rel="stylesheet" type="text/css"/>
    <script type = "text/javascript">

    	var image1 = new Image()
    	image1.src = "image/Image2_TravelJournal.jpg"

    	var image2 = new Image()
    	image2.src = "image/Photograpy1.jpg"

    	var image3 = new Image()
    	image3.src = "image/Image3_DailyLife.jpg"

    </script>
</head>

<body>


                
    <div class = "body">
		<div class = "header"> 
	        <img src ="image/artistic.png" class ="image_artistic">  <img src ="image/dream.png"  class ="image_dream">
           <p class = "developer"> by: P & P: Patty Personal Blog </p>
		</div>


					
		<div class="nav">
      		<div class="container">
       		    
      		     <span class="menu" onclick="window.location='#'"> HOME</span> |
                 <span class="menu" onclick="window.location='#'">APPS</span>|
                 <span class="menu" onclick="window.location='#'">BLOG</span>|
                 <span class="menu" onclick="window.location='#'">CONTACT</span>|
            	 

		    </div>
		</div>

		<div class = body2> 
	    	<div class = "content">
	    	<img src = "image/Image2_TravelJournal.jpg" name = "slide" class = "slider">

	    		<script type="text/javascript">
	    		var step = 1
	    		function slideit(){
	    			document.images.slide.src = eval("image"+step+".src")

	    			if(step <3)
	    				step ++
	    			else
	    				step = 1
	    			setTimeout("slideit()",3500)
	    		}
	    		slideit()
	    		</script>

	    		<div class = "sidebar">

                <div>
                    <img src = "image/oa.png" class = "img-profile">
                    <h3> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Patricia Mae Flores Marasigan </h3>
                    <h5>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 9teen | Senior Student | I am a dreamer <br><br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Follow @crabbi_patty on </h5>
                </div>

        <div style= "margin-left:50px; margin-top:-10px;">
            <img src = "image/facebook.png" class = "site-size1" onclick="window.location='http://www.facebook.com'"> 
            <img src = "image/instagram.png" class = "site-size1" onclick="window.location='http://www.instagram.com'">
            <img src = "image/twitter.png" class = "site-size" onclick="window.location='http://www.twitter.com'">
        </div>
				<form action = "index.php" method="GET">
                		  <input type = "text" class = "textbox" name = "textboxsearch" placeholder = "What are you looking for?"/> 
                		  <input type = "submit" class ="button" name = "searchbutton" value = "SEARCH"/>

            </form> 

            <?php
                		if (isset($_GET['searchbutton'])){
                			mysql_connect("localhost","patty","93sMSMahx5zG7GUC");
                			mysql_select_db("searchengine");

                			$search_value = $_GET['textboxsearch'];

                			echo "<font face = \"Segoe UI Light\"> <br/> &nbsp;&nbsp;  Search Results for <b> $search_value</b></font>";
                			print "<br>";

                			$query = "select * from search where site_keyword like '%$search_value%'";
                			$run = mysql_query($query);

                			while ($row =mysql_fetch_array($run)){
                				$title = $row['site_title'];
                				$link = $row['site_link'];
                				$description = $row['site_description'];

                				echo "<font face =\"Segoe UI Light\"><font-size = '5'> <a href = '$link'> &nbsp;&nbsp; $title </a> </font></br>";
                				echo "<font color = 'green'> &nbsp;&nbsp; $link </font>";
                				echo "<p><style= 'margin-left:5px; margin-right:5px;'> &nbsp;&nbsp; $description </p> <hr/>";

                			}
                		}

                	?> 

        
			</div>
		</div>

</div>
			
		<div class = "footer">
			<center>All content found in this blog are &copy Marasigan, Patricia Mae 2014<br> You may not copy, reproduce or steal any content without permission</center>
		</div>

	</div>
</body>
</html>
