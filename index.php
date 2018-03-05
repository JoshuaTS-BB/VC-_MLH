<!DOCTYPE html>

<html>
	<head>
		<title>Vassar College MLH Hack Day</title>
		
		<link rel="stylesheet" media="screen" href="style.css" />
		
		<script>
			function scrollToId(id) {
				document.querySelector("#"+id).scrollIntoView({behavior: "smooth"});
			}
		</script>
	</head>
	<body>
		<div id="header">
			<h1>Vassar College Local Hack Day</h1>
			<div id="navigation">
				<a href="#top">Home</a>
				<a onclick="scrollToId('about')">About</a>
				<a onclick="scrollToId('register')">Register</a>
				<a onclick="scrollToId('die')">Die</a>
				<a onclick="scrollToId('sponsors')">Sponsors</a>
			</div>
		</div>
		<div id="main_heading"><img src="images/heading.png" /></div>
		<div class="content" id="about">
			<h2>About</h2>
			<hr />
			<image src="students.jpg" style="float: right; margin: 1em;" />
			<p>Lorem ipsum dolor sit amet consectetur adipiscing elit molestie vitae lectus dictumst, posuere aliquet potenti quisque eleifend non donec habitant hac congue fames torquent, inceptos nullam nostra sem rhoncus dis sagittis dignissim sociis dapibus. Mi eget dignissim id aliquet facilisi vivamus, leo faucibus tristique lacinia in lectus hendrerit, pretium praesent nam proin felis. Porta commodo taciti fusce ullamcorper est, libero ridiculus ultrices dapibus orci elementum, parturient sodales tempor faucibus. Sem etiam tincidunt iaculis neque posuere feugiat vivamus fringilla, risus eros ut per natoque fermentum ornare nisi hendrerit, maecenas nec placerat parturient velit sagittis sodales. Felis quisque tellus tempus ante condimentum mollis fames laoreet ultricies ligula, accumsan velit fusce class pharetra vel venenatis dictum ornare turpis, viverra nisl nisi per augue sagittis malesuada enim eu. Non imperdiet neque mollis mi in fermentum orci nulla cum, lacus egestas mattis mus lobortis vitae dis.</p>
			<p>Platea a in nisi magnis lobortis erat, aliquam accumsan molestie dapibus quam feugiat, mauris eleifend sollicitudin hac facilisis, lectus nec natoque nisl torquent. Platea eros ut feugiat arcu libero dui proin mattis torquent metus, sapien quam auctor aliquam cras nunc nec nostra sem cum, pulvinar varius eleifend maecenas suspendisse ad diam in tristique. Vestibulum turpis facilisis blandit diam potenti ullamcorper metus et placerat est nisl, himenaeos id natoque ante vehicula rutrum faucibus porta senectus ac venenatis vulputate, tortor pellentesque egestas euismod massa vel tellus integer laoreet libero. Nascetur vulputate nulla ligula nec netus enim tempus accumsan vel nam iaculis platea integer, mollis hac blandit consequat ullamcorper aptent inceptos suscipit viverra leo quis vivamus. Leo scelerisque ad euismod posuere penatibus montes taciti, ut a consequat magnis at.</p>
		</div>
		<div class="content" id="register">
			<h2>Register</h2>
			<hr />
			<form>
				<input type="text" value="Name"><br />
				<input type="email" value="Email"><br />
				<input type="submit" value="Submit">
			</form>
		</div>
		<div class="content" id="die">
			<h2>Die</h2>
			<hr />
			<p>Lorem ipsum dolor sit amet consectetur adipiscing elit molestie vitae lectus dictumst, posuere aliquet potenti quisque eleifend non donec habitant hac congue fames torquent, inceptos nullam nostra sem rhoncus dis sagittis dignissim sociis dapibus. Mi eget dignissim id aliquet facilisi vivamus, leo faucibus tristique lacinia in lectus hendrerit, pretium praesent nam proin felis. Porta commodo taciti fusce ullamcorper est, libero ridiculus ultrices dapibus orci elementum, parturient sodales tempor faucibus. Sem etiam tincidunt iaculis neque posuere feugiat vivamus fringilla, risus eros ut per natoque fermentum ornare nisi hendrerit, maecenas nec placerat parturient velit sagittis sodales. Felis quisque tellus tempus ante condimentum mollis fames laoreet ultricies ligula, accumsan velit fusce class pharetra vel venenatis dictum ornare turpis, viverra nisl nisi per augue sagittis malesuada enim eu. Non imperdiet neque mollis mi in fermentum orci nulla cum, lacus egestas mattis mus lobortis vitae dis.</p>
			<p>Platea a in nisi magnis lobortis erat, aliquam accumsan molestie dapibus quam feugiat, mauris eleifend sollicitudin hac facilisis, lectus nec natoque nisl torquent. Platea eros ut feugiat arcu libero dui proin mattis torquent metus, sapien quam auctor aliquam cras nunc nec nostra sem cum, pulvinar varius eleifend maecenas suspendisse ad diam in tristique. Vestibulum turpis facilisis blandit diam potenti ullamcorper metus et placerat est nisl, himenaeos id natoque ante vehicula rutrum faucibus porta senectus ac venenatis vulputate, tortor pellentesque egestas euismod massa vel tellus integer laoreet libero. Nascetur vulputate nulla ligula nec netus enim tempus accumsan vel nam iaculis platea integer, mollis hac blandit consequat ullamcorper aptent inceptos suscipit viverra leo quis vivamus. Leo scelerisque ad euismod posuere penatibus montes taciti, ut a consequat magnis at.</p>
		</div>
		<div class="content" id="sponsors">
			<h2>Sponsors</h2>
			<hr />
			<img src="images/s1.png" />
			<img src="images/s2.jpg" />
			<img src="images/s3.png" />
			<img src="images/s4.png" />
			<img src="images/s5.jpg" />
			<img src="images/s6.png" />
			<img src="images/s7.jpg" />
		</div>
	</body>
</html>
