<?php
require 'config.php';
if(!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}
else{
    header("Location: login.php");
}
?>

<?php
$conne = mysqli_connect("localhost","root","","tb_user");
$query="SELECT * FROM `images`";
$result=mysqli_query($conne , $query);
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Account Settings UI Design</title>
	<link rel="icon" type="image/x-icon" href="./imgs/logochicon.png">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css"
		href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="userprofile\css\style.css"> -->
	<link rel="stylesheet" href="index.css">

	<style>
		@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap");

		body {
			background: #f9f9f9;
			font-family: "Roboto", sans-serif;
		}

		.shadow {
			box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1) !important;
		}

		.profile-tab-nav {
			min-width: 250px;
		}

		.tab-content {
			flex: 1;
		}

		.form-group {
			margin-bottom: 1.5rem;
		}

		.nav-pills a.nav-link {
			padding: 15px 20px;
			border-bottom: 1px solid #ddd;
			border-radius: 0;
			color: #333;
		}

		.nav-pills a.nav-link i {
			width: 20px;
		}

		.img-circle img {
			height: 100px;
			width: 100px;
			border-radius: 100%;
			border: 5px solid #fff;
		}

		.card img {
			height: 50%;

		}

		.card .card-body {
			object-fit: 100%;
		}
	</style>
</head>

<body>

	<?php require_once("php/header.php"); ?>


	<section class="py-5 my-5">
		<div class="container">

			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHoAAAB6CAMAAABHh7fWAAAAZlBMVEX///8rLzIiJypkZmcAAAAlKSwWHCD6+voTGR0oLC8aHyPx8fGjo6QbISSnqKh/gIJUVljU1NUAAAdAQ0UABw/f39+MjY4MFBnl5ebKy8tsbnBeYGI2Ojx2eHlHSkyFh4iXmJm4uLnxVhhVAAADCElEQVRoge2ZXZuqIBRGBUtFwvxGsiz//58czTrTzGSxcZMXh3XTRRfrAfZGePE8h8PhcDgcNgkblewPvn/YJ6oJPyiu6pTJSNABEUmW1tWHxKotgy15YBuUrfqAOEvzH96bPU8zy+Jw/0w8yfdW17w6xs/FI/HR4pJn0cyQbwOPrE26CtgrMyEssFRtGX1jHtzUyrj58eVs3+b8yC2oW/HeTIho8c2J1DETIhNsM2dvF3qCMewpP2tN93XKz7hmHumahynHHfYu0FcHO1R1obnSI6zANFcbfTMhG8y9HDLfyDN+ohA1PeGZww6w1MNid3hfbq65k91BbC8OqrKhzvDUsAJHLfH/U73iWkM+HiMRnnrFvl5xN/MS0IxHmGekBvblahDVK36v1zylQNoLsbWurHci9fj7C9cEo+hXn/VuH553eHGr/yY+4Ju9ptDY0miB2tN31rtfe57K36UKubUMK9u8zlI2FgMsXrzYWqLCRqLwj7CWM8VGZW07K83aZ3IqW9tp4Yhq6e+MlH4kIx2pLh2Ng3hMhsef7vKpZPhKo5J6zMPrRFnZRBxXQnU4zVRydjooe90V9mkgRNwmv187wiZpYyGitLckV2l57amtjNtzX3EeDnBe9ec2ltM/ZWejyRr/If/fCpnnrOi6guW5FA9/5D56wSflnz2MXfmzr5W4x5TQB0Qa0kdc8arQPo+OiAJtd1MMdNsbJp0gVZuiGvH/T7YUxa0E6HI9wQSCu5IG5sEdLW4ybmYe3OXSOk+BFfYNTZeZL8CI8hF5WWLOgNHRT5a8M4bm0z1CU/PlTsolZkLMt3NODKv7DiOml4Ia9OzwjKA2HLTugx7+sHdad/nXxGZp0nHxoMdHZRNztrC8J0qT3q5Bx4M5hEmhLe2sCUbgZuijwxwGWS0sh57HIKGGpe/zwHP5MAUfyJ6zBX9DoC8t88TQDa3JsdQ5tM4UyoYyUkLPpj2eugeqdTPo94BTaqy2NmjsHZ4a+t106k+rS4pECVX3rY9EC+1rh8PhcDgcv/gCSXwvmKpnryMAAAAASUVORK5CYII="
								alt="Image" class="shadow">
						</div>
						<h4 class="text-center">
							<?php echo $row["name"]; ?>
						</h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<!--<a class="nav-link active" id="account-tab" data-toggle="pill" href="#Profile" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i> 
							Profile
						</a>
						-->
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#Profile" role="tab"
							aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i>
							Profile
						</a>

						<a class="nav-link" id="achivements-tab" data-toggle="pill" href="#achivements" role="tab"
							aria-controls="achivements" aria-selected="false">
							<i class="fa fa-user text-center mr-1"></i>
							Achivements
						</a>

						<a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab"
							aria-controls="security" aria-selected="false">
							<i class="fa fa-user text-center mr-1"></i>
							Terms & Conditions
						</a>

						<a class="nav-link" href="index.php">Home</a>
						<a class="nav-link" href="logout.php">Logout</a>
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade" id="Profile" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4 text-center">My Account</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<h6 style="color:#000;">Welcome,</h6>
									<h3 class="form-control">
										<?php echo $row["name"]; ?>
									</h3>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<h6>Authorized by CyberHub via,</h6>
									<h3 class="form-control">
										<?php echo $row["email"]; ?>
									</h3>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<h6>Username</h6>
									<h3 class="form-control">
										<?php echo $row["username"]; ?>
									</h3>
								</div>
							</div>
						</div>

					</div>
					<div class="tab-pane fade" id="Profile" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4 text-center">My Account</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<h6 style="color:#000;">Welcome,</h6>
									<h3 class="form-control">
										<?php echo $row["name"]; ?>
									</h3>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<h6>Authorized by,</h6>
									<h3 class="form-control">
										<?php echo $row["email"]; ?>
									</h3>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<h6>Username</h6>
									<h3 class="form-control">
										<?php echo $row["username"]; ?>
									</h3>
								</div>
							</div>
						</div>

					</div>

					<div class="tab-pane fade" id="achivements" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4 text-center">My Achivements</h3>
						<div class="row">
							<div class="col-6 border m-2">
								<h3>Image list</h3>
								<div class="row">
									<div class="col-4">
										<div class="card" style="width: 18rem;">
											<img src="https://marketplace.canva.com/EAFJXTjgz1M/1/0/1600w/canva-blue-and-yellow-minimalist-employee-of-the-month-certificate-_A_NvKtzEzc.jpg"
												class="card-img-top" alt="Server Error">
											<div class="card-body">
												<h5 class="card-title">Card title</h5>
												<p class="card-text">Some quick example text to build on the card title
													and make up the bulk of the card's content.</p>
											</div>
										</div>

									</div>



								</div>
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Cert no</th>
											<th>Course</th>
											<th>E-Certificate</th>
										</tr>
									</thead>
									<tbody>
										<?php
										while($fetch=mysqli_fetch_assoc($result)){
											echo  "<tr>";
											echo "<td>{$fetch['id']}</td>";
											echo "<td>{$fetch['title']}</td>";
											echo "<td><img src='images/{$fetch['image']}' width='100'></td>";
											echo " </tr>";
										}
										?>
									</tbody>
								</table>
							</div>
						</div>

					</div>



					<div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
						<h3 class="mb-4">Terms & Conditions</h3>
						<div class="row">
							<div class="col-md-12">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
									incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
									exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
									irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
									pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
									deserunt mollit anim id est laborum.</p>
							</div>
						</div>
						<!--<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>-->
					</div>



					<!-- <div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
						<h3 class="mb-4">Application Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="app-check">
										<label class="form-check-label" for="app-check">
										App check
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
										<label class="form-check-label" for="defaultCheck2">
										Lorem ipsum dolor sit.
										</label>
									</div>
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
					<div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
						<h3 class="mb-4">Notification Settings</h3>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification1">
								<label class="form-check-label" for="notification1">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum accusantium accusamus, neque cupiditate quis
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification2" >
								<label class="form-check-label" for="notification2">
									hic nesciunt repellat perferendis voluptatum totam porro eligendi.
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification3" >
								<label class="form-check-label" for="notification3">
									commodi fugiat molestiae tempora corporis. Sed dignissimos suscipit
								</label>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div> -->
				</div>
			</div>
		</div>
		</div>
	</section>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>