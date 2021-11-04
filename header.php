<!--top bar-->
<?php

	$corner_image = "images/user_male.jpg";
	if(isset($USER)){

		if(file_exists($USER['profile_image']))
		{
			$image_class = new Image();
			$corner_image = $image_class->get_thumb_profile($USER['profile_image']);
		}else{

			if($USER['gender'] == "Female"){

				$corner_image = "images/user_female.jpg";
			}
		}
	}
?>

<div id="blue_bar"style="height:70px!important">
	<form method="get" action="search.php">
		<div style="width: 1200px;margin:auto;font-size: 30px;height:70px!important">
			<div class="" style="width:300px;display: inline-block;">
				<a href="index.php" style="color: white;">Facebook GT</a> 
			</div>
			<div class="" style="width:500px;display: inline-block;">
				&nbsp &nbsp <input type="text" id="search_box" name="find" placeholder="Buscar personas" />
			</div>

			<?php if(isset($USER)): ?>
				<div class="" style="width:200px;display: inline-block;">
					<div style="display: inline-block;vertical-align: middle;">
						<a href="profile.php">
							<img src="<?php echo $corner_image ?>" style="width: 30px;float: right;border-radius: 50px;padding-top: 10px;">		
						</a>
					</div>
					<div style="display: inline-block;vertical-align: middle;">
						<span style="font-size:20px"><?php echo $user_data['first_name'] . " " . $user_data['last_name'] ?></span>
					</div>
					
				</div>
				<div class="" style="width:100px;display: inline-block; vertical-align: middle;">
					<a href="logout.php">
						<span style="font-size:15px;float: right;margin:0px;color:white;">Cerrar sesión</span>
					</a>
				</div>
				<div class="" style="width:25px;display: inline-block; vertical-align: middle;">
					<a href="notifications.php">
					<span style="">
						<img src="notif.svg" style="width:25px;float:right;margin-top: 10px">
						<?php
							$notif = check_notifications();
						?>
						<?php if($notif > 0): ?>
							<div style="background-color: red;color: white;position: absolute;right:-15px;
							width:15px;height: 15px;border-radius: 50%;padding: 4px;text-align:center;font-size: 14px;"><?= $notif ?></div>
						<?php endif; ?>
					</span>
					</a>
				</div>		
			<?php else: ?>
				<a href="login.php">
				<span style="font-size:13px;float: right;margin:10px;color:white;">Login</span>
			<?php endif; ?>


		</div>
	</form>
</div>
