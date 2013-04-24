<html>
<head>

<?php include 'include/head.inc.php' ?>

<!-- Additional head items -->
<title>Search Results</title>
<link href="css/search.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
<link href='http://fonts.googleapis.com/css?family=Arvo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" language="javascript" src="js/search.js"></script>
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
<script>var $j = jQuery.noConflict();</script>

<script>
	$j(function() {
    	$j( "#tabs" ).tabs();
  	});
  
	$j(document).ready(function(e)
	{
	
		$j("#filter_button").click(function(e) 
		{
			$j("#filters").slideToggle("slow");
		});
	});
</script>

</head>

<body>
    <?php include 'include/header.inc.php' ?>
        
            <div id="search_logo">
                <img src="img/icons/logo.png" alt="Project Cumulus Logo" class="logo_big">
                <!--<h1>Welcome to Project Cumulus</h1>
                <h2>Legal Wiki</h2>-->
            </div>
            <div id="search">
                <div id="banner">
                    <h1>Cumulus Search Results</h1>
                </div>
                <div id="bsc_search">
                    <form id="frm_search" action="search_engine.php" method="POST" >
                        <input type="text" id="txt_search" name="txt_search" placeholder="Search the legal code" />
                        <input type="submit" id="btn_search" name="btn_search" value="Search" />
                    </form>    
                    <div id="adv_option">
                        <label for="cbk_adv">Advanced Search</label>
                        <input type="checkbox" id="cbk_adv" name="chk_adv" value="1" />
                    </div> <!-- /adv_option -->
                </div> <!-- /bsc_search -->               
                <span id="search_text" />
            </div><!--/search-->
        
        <div id="content">
            <!--<div id="result">
                <p id="result_number">Displaying <strong>(number)</strong> results</p>
            </div>-->
            <div id="filter_container">
            	<h3>
                    <?php
                        $search_query = $_POST['txt_search'];


                        if(!empty($search_query)){
                            echo 'Displaying Results for "' . $search_query . '"';
                        } 
                        else{
                            echo 'Please Enter a Search Query';
                        }
                        ?>

                </h3>
                <!--<input id="filter_button" type="button" value="Filter Results" />-->
                <div id="filters" style="display: none">
                    <ul>
                        <li><a href="#">Relevance</a></li>
                        <li><a href="#">View Count</a></li>
                        <li><a href="#">Rating</a></li>
                    </ul>
                </div> 	
            </div><!--/filter_container-->
            <div id="tabs">
                <ul>
                    <li><a href="#tabs-1">Results</a></li>
                    <li><a href="#tabs-2">Visualize (PRO)</a></li>
                </ul>
                
                <div id="tabs-1"><!--Search results tab-->
                    <article class="result">
						<?php
							require_once('classes/Dbconn.class.php');
							require_once('classes/search_db.class.php');
							require_once('classes/Search.class.php');

							$search_query = $_POST['txt_search'];

							if(!empty($search_query)){

								$new_search = new search_class();
								$result = $new_search->searchSections($search_query);

								foreach ($result as $resultset) {
						        	echo "<h5>" . $resultset->getLaw_Name() . " > " . $resultset->getBook_Title() . " > " . $resultset->getTitle_Title() . " > 
                                    " . $resultset->getCh_Title() . " > " . $resultset->getDiv_Title() . " > Section " . "
                                    <a href='section.php?section=" . $resultset->getSec_Num() . "'>" .  $resultset->getSec_Num() . "
                                    </h5>
                                    <br /><a href='section.php?section=" . $resultset->getSec_Num() . "'>
                                    &quot;" . substr($resultset->getSec_Txt(), 0, 50) . "...&quot;</a>
                                    <br /><br />
                                    " ;
								}
							}
							else {
								echo "Invalid Search Query";
							}
						?>
					</article>
                </div><!--/tabs-1-->
                
                <div id="tabs-2"><!--Visualization tab-->
                    <section class="result">
                    visualization tab
                    </section>
                </div><!--/tabs-2-->
            </div><!--/tabs-->
        </div><!--/content-->
    
        <?php include 'include/footer.inc.php' ?>
    <?php include 'include/closer.inc.php' ?>
</body>
</html>