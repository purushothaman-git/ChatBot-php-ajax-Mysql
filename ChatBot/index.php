<!doctype html>
<html lang="en">
<head>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-6 offset-md-3 col-sm-6 offset-sm-3 col-12 comments-main pt-4 rounded">
				<ul class="p-0">
					<li>
						<div class="row comments mb-2">
							<div class="col-md-2 col-sm-2 col-3 text-center user-img">
								<img src="images/image.png" id="profile-photo" class="rounded-circle" />
							</div>
							<div class="col-md-9 col-sm-9 col-9 comment rounded mb-2">
								<like></like>
								<p class="mb-0 text-white" style="font-size:15px;">Hey there,How can i help you?</p>
							</div>
						</div>
					</li>
					<ul class="p-0">
						<li id="user">

						</li>
					</ul>
				</ul>

				<div class="row comment-box-main p-3 rounded-bottom">
					<div class="col-md-9 col-sm-9 col-9 pr-0 comment-box">
						<input type="text" class="form-control" id="msg" placeholder="comment ...." />
					</div>
					<div class="col-md-3 col-sm-2 col-2 pl-0 text-center send-btn">
						<button class="btn btn-info" id="save">Send</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
	$(document).ready(function(){
		$("#save").click(function(){

			var msg = $('#msg').val();
			if(msg==''){ 
				alert("Please Type something.....");	
			}else{

				$("#user").append("	<div class='row comments mb-2'><div class='col-md-2 offset-md-2 col-sm-2 offset-sm-2 col-3 offset-1 text-center user-img'><img src='images/image.png' id='profile-photo'  class='rounded-circle' /></div><div class='col-md-7 col-sm-7 col-8 comment rounded mb-2'><like></like><p class='mb-0 text-white' style='font-size:15px;'>"+ msg +"</p></div></div>");
				$('#msg').val("");
			

			$.ajax({
				url:"message.php",
				method:"POST",
				data:{msg:msg},
				success:function(data)
				{
	       $("#user").append("	<div class='row comments mb-2'><div class='col-md-2 col-sm-2 col-3 text-center user-img'><img src='images/image.png' id='profile-photo' class='rounded-circle' /></div><div class='col-md-9 col-sm-9 col-9 comment rounded mb-2'><like></like><p class='mb-0 text-white' style='font-size:15px;'>"+ data +"</div>");
				}
			});


}

		});
	});


</script>
</html>