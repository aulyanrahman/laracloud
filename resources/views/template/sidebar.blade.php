
<!-- Navbar -->
<nav class="main-header navbar navbar-light navbar-white ">
	<div class="container-fluid d-flex">
		<div class="flex-column p-0">
			<img src="{{asset('images/cloud.jpg')}}" alt="Icon" class="brand-image " style="opacity: .8;">
		</div>
		<div class="flex-column p-0 justify-content-start  ml-2">
			<div class="flex-row">
				<span class="font-weight-bolder text-lg"><a href="/">CASE STUDY</a></span><br>
			</div>

		</div>
		<div class="flex-column p-0 justify-content-start ml-auto">
			<!-- <a href="#" class="btn bg-cyan btn-sm text-sm text-center font-weight-bold btnSetting col-md-12" id="btnSetting"><span>
					<i class="fa fa-cog"></i> Setting</a> -->
		</div>
		<div class="flex-column p-0 justify-content-start ml-auto mr-3">
			<div class="flex-row row">
				<div class="mr-1">
				</div>
				<div class="">
				</div>
			</div>
		</div>


		<div class="flex-column p-0 justify-content-end text-right mr-2">
			<div class="flex-row">
				<small class="text-muted font-weight-bold text-lg"><?= date("d-m-Y") ?></small><br>
			</div>
			<div class="flex-row">
				<small class="font-weight-bold text-md"><?= date("H:i") ?></small>
			</div>
		</div>
	</div>

</nav>
<!-- /.navbar -->