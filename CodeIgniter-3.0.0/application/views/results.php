<html>
<head>
	<title></title>
</head>
<body>

​<div id="container">​
	
	<div class="alert alert-success">​
		Thank you for giving it up! You have done so: <?php echo $this->session->
		userdata('counter'); ?> time(s) now.​
	</div>​
	
	<div id="body">​
		<h3>Submitted Information</h3>​
		<p>Name: <?php echo $this->session->userdata['post_data']['full_name']; ?></p>​
		<p>Dojo Location: <?php echo $this->session->userdata['post_data']['location']; ?></p>​
		<p>Favorite Language: <?php echo $this->session->userdata['post_data']['language']; ?></p>​
		<p>Comment: <?php echo $this->session->userdata['post_data']['comment_box']; ?></p>​
		<a href="/" class="btn btn-primary">Go Back</a>​
	</div>​
​</div>​
​
</body>​
</html>




