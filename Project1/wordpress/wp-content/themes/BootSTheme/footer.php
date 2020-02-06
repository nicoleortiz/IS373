<?php wp_footer(); ?>
<div class = "collapse navbar-collapse navHeaderCollapse">
				
					<ul class = "nav navbar-nav navbar-right">
					
						<li><a href = "#">Home</a></li>
						<li class = "dropdown">
							
							<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Blog <b class = "caret"></b></a>
							<ul class = "dropdown-menu">
								<li><a href = "#">Item One</a></li>
								<li><a href = "#">Item Two</a></li>
								<li><a href = "#">Item Three</a></li>
								<li><a href = "#">Item Four</a></li>
							</ul>
						
						</li>
						<li class = "dropdown">
							
							<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Social Media <b class = "caret"></b></a>
							<ul class = "dropdown-menu">
								<li><a href = "#">Twitter</a></li>
								<li><a href = "#">Facebook</a></li>
								<li><a href = "#">Google+</a></li>
								<li><a href = "#">Instagram</a></li>
							</ul>
						
						</li>
						<li><a href = "#">About</a></li>
						<li><a href = "#contact" data-toggle="modal">Contact</a></li>
					
					</ul>
				
				</div>
				
			</div>
		</div>
		
		<div class = "container">

			<div class = "jumbotron">
				<h2>Post Title</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc arcu erat, congue eget ornare et, luctus eget purus. Etiam et risus metus. Nam sed mi tellus. Mauris molestie massa eu metus tempor, in hendrerit arcu adipiscing.</p>
			</div>

			<div class = "panel panel-default panel-body">
				<div class = "row">
					<div class = "col-md-2">
						<ul class="nav nav-pills nav-stacked">
							<li><a href = "#">Category One</a></li>
							<li><a href = "#">Category Two</a></li>
							<li><a href = "#">Category Three</a></li>
							<li><a href = "#">Category Four</a></li>
						</ul>
					</div>
					<div class = "col-md-10">
						<a href = "#"><h3>This random post is really awesome!</h3></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc arcu erat, congue eget ornare et, luctus eget purus. Etiam et risus metus. Nam sed mi tellus. Mauris molestie massa eu metus tempor, in hendrerit arcu adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<p class = "text-muted">Posted by Nicole on March 6, 2019</p>
					</div>
				</div>
			</div>

		</div>
		
		<div class = "navbar navbar-default navbar-fixed-bottom">
		
			<div class = "container">
				<p class = "navbar-text pull-left">IS 373 Mini Project 1</p>
				<a href = "http://youtube.com/" class = "navbar-btn btn-danger btn pull-right">Subscribe on YouTube</a>
			</div>
		
		</div>
		
		<div class = "modal fade" id = "contact" role = "dialog">
		    <div class = "modal-dialog">
		        <div class = "modal-content">
		            <form class = "form-horizontal">
		                <div class = "modal-header">
		                    <h4>Contact BootStrap Theme</h4>
		                </div>
		                <div class = "modal-body">
		                
		                    <div class = "form-group">
		                        
		                        <label for = "contact-name" class = "col-lg-2 control-label">Name:</label>
		                        <div class = "col-lg-10">
		                            
		                            <input type = "text" class = "form-control" id = "contact-name" placeholder = "Full Name">
		                            
		                        </div>
		                        
		                    </div>
		                    
		                    <div class = "form-group">
		                        
		                        <label for = "contact-email" class = "col-lg-2 control-label">Email:</label>
		                        <div class = "col-lg-10">
		                            
		                            <input type = "email" class = "form-control" id = "contact-email" placeholder = "you@example.com">
		                            
		                        </div>
		                        
		                    </div>
		                    
		                    <div class = "form-group">
		                        
		                        <label for = "contact-msg" class = "col-lg-2 control-label">Message:</label>
		                        <div class = "col-lg-10">
		                            
		                            <textarea class = "form-control" rows = "8"></textarea>
		                            
		                        </div>
		                        
		                    </div>
		                
		                </div>
		                <div class = "modal-footer">
                            <a class = "btn btn-default" data-dismiss = "modal">Close</a>    
		                    <button class = "btn btn-primary" type = "submit">Send</button>
		                </div>
		            </form>
		        </div>
		    </div>
		</div>
		
		<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="../wp-content/themes/MyBSTheme/js/bootstrap.min.js"></script>
		
	</body>
</html>