<html>
<head>
<meta charset="UTF-8">
    <title>Search Engine</title>
    
    

    <link href="style.css" rel="stylesheet" type="text/css"/>
    <script type = "text/javascript">

    	var image1 = new Image()
    	image1.src = "image1.jpg"

    	var image2 = new Image()
    	image2.src = "image2.jpg"

    	var image3 = new Image()
    	image3.src = "image3.png"

    </script>
</head>

<body>


                
    <div class = "body">
		<div class = "header"> 

			<p class = "text-header"> <img src = "search-icon.png" style = "height:150; width=170; "> <p class = "text-header1"> SEARCH </p> </p>
	
		</div>


					
		<div class="nav">
      		<div class="container">
       		    
      		     <span class="menu" onclick="window.location='#'"> HOME</span> |
                 <span class="menu" onclick="window.location='#'">ABOUT</span>|
                 <span class="menu" onclick="window.location='#'">BLOG</span>|
                 <span class="menu" onclick="window.location='#'">CONTACT</span>|
            	 

		    </div>
		</div>

		<div class = body2> 
	    	<div class = "content">
	    	<img src = "search-icon.png" name = "slide" class = "slider">

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
			<center>All Rights Reserved &copy Marasigan, Patricia Mae 2014<br></center>
		</div>

	</div>
</body>
</html>
