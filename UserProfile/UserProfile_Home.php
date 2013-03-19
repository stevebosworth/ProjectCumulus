<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

	<html class="no-js"> <!--<![endif]--><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Project Cumulus Home Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
     <!--Place favicon.ico and apple-touch-icon.png in the root directory--> 

    <!-- All JQuery file links -->
    <script src="js/vendor/modernizr-2.6.2.min.js" type="text/javascript"></script>
    <script src="http://use.edgefonts.net/arvo.js" type="text/javascript"></script>
    <script src="editProfilePhotoMenu/js/jquery-1.4.4.min.js" type="text/javascript"></script>
   <!-- <script src="js/jquery.js"></script>-->
            
    <!--All Javascript file links -->
    <script src="js/profile.js" type="text/javascript"></script>
    
    <!--All Javascript file for file uploader-->



<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE8+ -->
<!--[if gte IE 8]><script src="js/cors/jquery.xdr-transport.js"></script><![endif]-->

    
    <!-- All CSS file links --> 
    <link type="text/css" rel="stylesheet" href="css/main.css"/>    
    <link rel="stylesheet" href="css/normalize.css">
    <link type="text/css" rel="stylesheet" href="css/profile1.css"/>
    
    
  <!-- Bootstrap CSS Toolkit styles -->
<link rel="stylesheet" href="http://blueimp.github.com/cdn/css/bootstrap.min.css">
<!-- Generic page styles -->
<link rel="stylesheet" href="fileUpload/css/style.css">
<!-- Bootstrap styles for responsive website layout, supporting different screen sizes -->
<link rel="stylesheet" href="http://blueimp.github.com/cdn/css/bootstrap-responsive.min.css">
<!-- Bootstrap CSS fixes for IE6 -->
<!--[if lt IE 7]><link rel="stylesheet" href="http://blueimp.github.com/cdn/css/bootstrap-ie6.min.css"><![endif]-->
<!-- Bootstrap Image Gallery styles -->
<link rel="stylesheet" href="http://blueimp.github.com/Bootstrap-Image-Gallery/css/bootstrap-image-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="fileUpload/css/jquery.fileupload-ui.css">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="fileUpload/css/jquery.fileupload-ui-noscript.css"></noscript>
<!-- Shim to make HTML5 elements usable in older Internet Explorer versions -->
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    
</head>
<body>


<form>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <div id="container">
        <header>
            <div id="title">
                <a href="#"><img src="img/icons/header_logo.png" alt="Project-Cumulus-Logo" id="logo"></a>
            </div>

            <nav id="nav_controls">
                <ul>
                    <li class="usr_control"><a href="#"><img src="img/icons/chat_icon_head.png" alt="Chat" title="Chat" class="icon"></a></li>
                    <li class="usr_control"><a href="#"><img src="img/icons/mail_icon_head.png" alt="Messages" title="Messages" class="icon"></a></li>
                    <li class="usr_control"><a href="#"><img src="img/icons/profile_icon_head.png" alt="Profile" title="Profile" class="icon"></a></li>
                    <li class="usr_control"><a href="#"><img src="img/icons/settings_icon_head.png" alt="Settings" title="Settings" class="icon"></a></li>
                    <li class="usr_control"><a href="#"><img src="img/icons/logout_icon_head.png" alt="Logout" title="Logout" class="icon"></a></li>
                </ul>
            </nav>
            <nav id="nav_main">
                <ul>
                    <li class="nav_header" class="nav_link"><a href="#">Home</a></li>
                    <li class="nav_header" class="nav_link"><a href="#">About</a></li>
                    <li class="nav_header" class="nav_link"><a href="#">Support</a></li>
                    <li class="nav_header" class="nav_link"><a href="#">Blog</a></li>
                    <li class="nav_header" class="nav_link"><a href="#">FAQ</a></li>
                </ul>
            </nav>

        </header>
                

 
 
		<!--/////////////My codes for div content_container////////////-->
        
        <div id="content_container">
        
        	<div id="profile_photo">
            profile photo
        	</div><!--/profile_photo-->
            
            <div id="profileNameAnd_searchArea">
            
            <div id="activeUser_name">
            <p>Welcome Nnabugwu</p>
            </div><!--/activeUser_name-->
            
            <div id="searchBox_Area">
            
            	<div id="search_Box">
                	<input type="text" name="txt_search" placeholder="Search All" autocomplete="on"/>
                </div><!--/search_Box-->
            	<div id="search_Button">
                	<input type="button" name="btn_search" value="Search" class="button_size"/>
                </div><!--/search_Button-->
                <div id="advanced_Search">
                	<a href="#" class="link_color">Advanced Search</a>
                </div><!--/advanced_Search-->
            </div><!--/searchBoxArea-->
            
        </div><!--/profileNameAnd_searchArea-->
        
        <div id="advancedSearch_options">        	
        </div><!--/advancedSearch_options-->
        
        
			<aside id="leftSide_bar">
            <div id="profileMenu_title"><h3>Profile Menu</h3></div>
            	<nav id="profile_menu">
                	<ul>
                    	<li><a href="#">Discussions</a></li>
                        <li><a href="#">Messages</a></li>
                        <li><a href="#">Friends</a></li>
                        <li><a href="#">Law Quick Link</a></li>
                        <li><a href="#">Edit Profile</a></li>
                        <li><a href="#">Settings</a></li>
                        <li class="event"><a href="#">Events</a></li>
                    </ul>
            	</nav>               
			</aside><!--/leftSide_bar-->           
            <div id = "vetical_separatorLeft"></div><!--/vetical_separator-->
            
            
            <aside id="rightSide_bar">
            <div id="rightSideBar_ActiveDiscussionTitle"><h3>Active Discussions</h3></div>
            
            <!--Accordion Plugin-->
            <div class="accordion">
    
                    <div class="panelshow"><h4>Discussion 1</h4></div>
                    <div class="panel">
                        <h5>lorem loremskk sdkfjsdfjkdf  sodkjflskdfj sd  sdkfjlsdkf sdfk  sdkfjd df ldsf</h5>
                        <p><label id="art_label" name="art_label">Article:</label>
                        <input type="text" id="txt_article" name="txt_article" /></p>
                        <input type="button" id="btn_subart" name="btn_subart" onClick="subArticle()" value="Submit" class="button_size" />
                    </div>
                    
                    <div class="panelshow"><h4>Discussion 2</h4></div>
                    <div class="panel">
                        <h5>kdsjfdsfkl  dfkjsdfl ksdf  lskdf lsdlfsdl  sdlkfsd fl lormm k</h5>
                        <p><label id="case_label" name="case_label">Case Law:</label>
                        <input type="text" id="txt_case" name="txt_case" /></p>
                        <p><label id="desc_label" name="desc_label">Description:</label>
                        <input type="text" id="txt_desc" name="txt_desc" /></p>
                        <input type="button" id="btn_subcase" name="btn_subcase" onClick="subCase()" value="Submit" />
                    </div>
                    
                     <div class="panelshow"><h4>Discussion 3</h4></div>
                    <div class="panel">
                        <h5>lorem ldsfkdfkml jdkf ldsfk  ksjdlfkj ;dsfkl skdf sdkfdsk f</h5>
                        <p><label id="tags_label" name="tags_label">Tags:</label>
                        <input type="text" id="txt_tags" name="txt_tags" /></p>
                        <input type="button" id="btn_subtags" name="btn_subtags" onClick="subTags()" value="Submit" />
                    </div>
                    
                    <div class="panelshow"><h4>Discussion 4</h4></div>
                    <div class="panel">
                        <h5>lorem isp skm fkm  knslkdf iodk j sdfjlidsfok dsfj  </h5>
                        <p><label id="comm_label" name="comm_label">Tags:</label>
                        <input type="text" id="txt_comm" name="txt_comm" /></p>
                        <input type="button" id="btn_subcomm" name="btn_subcomm" onClick="subComments()" value="Submit" />
                    </div>
                    
            
            
            </aside><!--/rightSide_bar-->
            <div id = "vetical_separatorRight"></div><!--/vetical_separator-->
            
            
            
            <div id="profileMain_content">
           		<span id="EditProfilePage_title">Edit Profile</span><!--/EditProfilePage_title-->
                                
           		<div id="editProfile_content">
                
                  <section id="edit_profilePhoto">
                  <div id="editPhoto_title">Photo</div>
                      <figure id="edit_Photo">
                          <img src="#" alt="" title="profile photo"/>                     
                      </figure><!--/edit_profilePhoto-->
                      
                      <div id="choose_photo">
                          <!--copied codes for edit profile photo plugin-->
                       <div id="box">
                          <!--<a href="#" class="bt btleft"><span>&#9734;</span> Favorite</a>-->
                          <a href="#" class="bt" id="btmiddle">Change Photo <span>&#9660;</span></a>
                          <!--<a href="#" class="bt btright">Share this <span>&#9660;</span></a>-->
                      </div><!--/box-->
                      <div id="menu">
                      <div id="triangle"></div>
                      
                      
                      <div id="tooltip_menu">
                                      
                                                                  
                      <!--edit photo menu list-->
                           <a href="#" class="menu_top" >
                              <img src="editProfilePhotoMenu/img/2.png"/>
                              Choose Existing Photo
                              
                             <!-- <div class="span7">-->
                			  <!-- The fileinput-button span is used to style the file input field as button -->
               				  <!--<span class="btn btn-success fileinput-button">-->
                  			 <!-- <i class="icon-plus icon-white"></i>-->
                    		 <!-- <a>Choose existing photo</a>
                              <input type="file" name="files[]" single>
                              </span>
                              </div>-->
                          </a>
                          <a href="webCamTest.php">
                               <img src="editProfilePhotoMenu/img/3.png"/>
                               Take Photo
                          </a>
                      </div><!--/tooltip_menu-->
                      </div><!--/menu-->
                      </div><!--/choose_photo-->
                      
                         
                  </section><!--/edit_profilePhoto-->
                
                <section id="edit_name">
                	<div id="editName_title">Name</div>
                    <input id="txt_editName" type="text"/>
                </section><!--/edit_name-->
                
                <section id="edit_email">
                	<div id="editEmail_title">Email</div>
                    <input type="text" id="txt_editEmail"/>
                </section><!--/edit_email-->
                
                <section id="edit_password">
                	<div id="current_passwordDetails">
                    	<div id="editPasswordTitle">Password</div>
                    	<input type="password" id="txt_editPassword"/>
                    	<a id="chng_pswDropdown" href="/change_password" class="link_color">Edit</a>
                    </div><!--/current_passwordDetails-->
                	
                    <div id="change_password">
                    <section id="Edit_curPasw">
                    	<span id="currentPasw_Title">Current Password</span><!--/currentPasw_Title-->
                        <input id="txt_currentPassword" type="password"/></section>
                    <section id="Edit_newPasw">
                    	<span id = "newPasw_Title">New Password</span><!--/newPasw_Title-->
                        <input id="txt_newPassword" type="password"/>
                    </section>
                    <section id="Edit_verNewPasw">
                    	<span id = "verifyNewPasw_Title">Verify New Password</span><!--/verifyNewPasw_Title-->
                        <input id="txt_verifyNewPassword" type="password"/>
                    </section>
                    <section id="btn_done">
                    	<input type="submit" id="btn_pswDone" value="Done"/>   
                    </section> 
                    </div><!--/change_password-->
                </section><!--/edit_password-->
                
                <section id="edit_JobTitle">
                	<span id="editJobTitle_title">Job Title</span>
                    <input type="text" id="txt_editJobTitle"/>
                </section><!--/edit_JobStatus-->
                
                <section id="edit_location">
                	<span id="editLocation_title">Location</span>
                    <select id="sel_location">
                    	<option>Australia</option>
                        <option>Canada</option>
                        <option>United States of America</option>
                        <option>Zimbabwe</option>
                    </select>
                </section><!--/edit_location-->
                
                <section id="edit_bio">
                	<span id="editBio_title">Bio</span>
                    <textarea id="txt_editBio" ></textarea>
                </section><!--/edit_bio-->
                	
            </div><!--/editProfile_content-->
            <div id="save_changes">
            <input type="submit" id="btn_saveChanges" value="Save Changes" class="button_size"/>
            </div>
            </div><!--/profileMain_content-->
            
        </div> <!-- /content_container -->
        
        
  		<!------------////////////////////////////////////----------------->
        <!--file uploader codes-->
 <div class="container">
    <div class="page-header">
       <!-- <h1>jQuery File Upload Demo</h1>
    </div>
    <blockquote>
        <p>File Upload widget with multiple file selection, drag&amp;drop support, progress bars and preview images for jQuery.<br>
        Supports cross-domain, chunked and resumable file uploads and client-side image resizing.<br>
        Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.</p>
    </blockquote>
    <br>-->
    <!-- The file upload form used as target for the file upload widget -->
    <form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
        <!-- Redirect browsers with JavaScript disabled to the origin page -->
        <noscript><input type="hidden" name="redirect" value="http://blueimp.github.com/jQuery-File-Upload/"></noscript>
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
            <div class="span7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <i class="icon-plus icon-white"></i>
                    <span>Choose existing photo</span>
                    <input type="file" name="files[]" multiple>
                </span>
               <!-- <button type="submit" class="btn btn-primary start">
                    <i class="icon-upload icon-white"></i>
                    <span>Start upload</span>
                </button>
                <button type="reset" class="btn btn-warning cancel">
                    <i class="icon-ban-circle icon-white"></i>
                    <span>Cancel upload</span>
                </button>
                <button type="button" class="btn btn-danger delete">
                    <i class="icon-trash icon-white"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" class="toggle">-->
            </div>
            <!-- The global progress information -->
            <div class="span5 fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="bar" style="width:0%;"></div>
                </div>
                <!-- The extended global progress information -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The loading indicator is shown during file processing -->
        <div class="fileupload-loading"></div>
        <br>
        
        
        <!-- The table listing the files available for upload/download -->
        <table role="presentation" class="table table-striped">
       		 <tbody class="files" data-toggle="modal-gallery" data-target="#modal-gallery"></tbody>
        </table>
    </form>
    <br>
    
    
    
    <!--<div class="well">
        <h3>Demo Notes</h3>
        <ul>
            <li>The maximum file size for uploads in this demo is <strong>5 MB</strong> (default file size is unlimited).</li>
            <li>Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in this demo (by default there is no file type restriction).</li>
            <li>Uploaded files will be deleted automatically after <strong>5 minutes</strong> (demo setting).</li>
            <li>You can <strong>drag &amp; drop</strong> files from your desktop on this webpage with Google Chrome, Mozilla Firefox and Apple Safari.</li>
            <li>Please refer to the <a href="https://github.com/blueimp/jQuery-File-Upload">project website</a> and <a href="https://github.com/blueimp/jQuery-File-Upload/wiki">documentation</a> for more information.</li>
            <li>Built with Twitter's <a href="http://twitter.github.com/bootstrap/">Bootstrap</a> toolkit and Icons from <a href="http://glyphicons.com/">Glyphicons</a>.</li>
        </ul>
    </div>-->
</div>
</div>


<!-- modal-gallery is the modal dialog used for the image gallery -->
<div id="modal-gallery" class="modal modal-gallery hide fade" data-filter=":odd" tabindex="-1">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h3 class="modal-title"></h3>
    </div>
    <div class="modal-body"><div class="modal-image"></div></div>
    <div class="modal-footer">
        <a class="btn modal-download" target="_blank">
            <i class="icon-download"></i>
            <span>Download</span>
        </a>
        <a class="btn btn-success modal-play modal-slideshow" data-slideshow="5000">
            <i class="icon-play icon-white"></i>
            <span>Slideshow</span>
        </a>
        <a class="btn btn-info modal-prev">
            <i class="icon-arrow-left icon-white"></i>
            <span>Previous</span>
        </a>
        <a class="btn btn-primary modal-next">
            <span>Next</span>
            <i class="icon-arrow-right icon-white"></i>
        </a>
    </div>

        
        
      <!-----------------///////////////////////////////------------------------->
      <!--file uploader script-->
<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td class="preview"><span class="fade"></span></td>
        <td class="name"><span>{%=file.name%}</span></td>
        <td class="size"><span>{%=o.formatFileSize(file.size)%}</span></td>
        {% if (file.error) { %}
            <td class="error" colspan="2"><span class="label label-important">Error</span> {%=file.error%}</td>
        {% } else if (o.files.valid && !i) { %}
            <td>
                <div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="bar" style="width:0%;"></div></div>
            </td>
            <td class="start">{% if (!o.options.autoUpload) { %}
                <button class="btn btn-primary">
                    <i class="icon-upload icon-white"></i>
                    <span>Start</span>
                </button>
            {% } %}</td>
        {% } else { %}
            <td colspan="2"></td>
        {% } %}
        <td class="cancel">{% if (!i) { %}
            <button class="btn btn-warning">
                <i class="icon-ban-circle icon-white"></i>
                <span>Cancel</span>
            </button>
        {% } %}</td>
    </tr>
{% } %}
</script>


<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        {% if (file.error) { %}
            <td></td>
            <td class="name"><span>{%=file.name%}</span></td>
            <td class="size"><span>{%=o.formatFileSize(file.size)%}</span></td>
            <td class="error" colspan="2"><span class="label label-important">Error</span> {%=file.error%}</td>
        {% } else { %}
            <td class="preview">{% if (file.thumbnail_url) { %}
                <a href="{%=file.url%}" title="{%=file.name%}" data-gallery="gallery" download="{%=file.name%}"><img src="{%=file.thumbnail_url%}"></a>
            {% } %}</td>
            <td class="name">
                <a href="{%=file.url%}" title="{%=file.name%}" data-gallery="{%=file.thumbnail_url&&'gallery'%}" download="{%=file.name%}">{%=file.name%}</a>
            </td>
            <td class="size"><span>{%=o.formatFileSize(file.size)%}</span></td>
            <td colspan="2"></td>
        {% } %}
        <td class="delete">
            <button class="btn btn-danger" data-type="{%=file.delete_type%}" data-url="{%=file.delete_url%}"{% if (file.delete_with_credentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                <i class="icon-trash icon-white"></i>
                <span>Delete</span>
            </button>
            <input type="checkbox" name="delete" value="1">
        </td>
    </tr>
{% } %}



</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="http://blueimp.github.com/JavaScript-Templates/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="http://blueimp.github.com/JavaScript-Load-Image/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="http://blueimp.github.com/JavaScript-Canvas-to-Blob/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS and Bootstrap Image Gallery are not required, but included for the demo -->
<script src="http://blueimp.github.com/cdn/js/bootstrap.min.js"></script>
<script src="http://blueimp.github.com/Bootstrap-Image-Gallery/js/bootstrap-image-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="js/jquery.fileupload.js"></script>
<!-- The File Upload file processing plugin -->
<script src="js/jquery.fileupload-fp.js"></script>
<!-- The File Upload user interface plugin -->
<script src="js/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="js/main.js"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE8+ -->
<!--[if gte IE 8]><script src="js/cors/jquery.xdr-transport.js"></script><![endif]-->
    
</body>
</html>
