  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  @include('template.header')
  @include('template.sidebar')
  	<!-- Main content -->
  	<section class="content">
  		<div class="container">
  			<!-- Small boxes (Stat box) -->
  			<div class="row">
  				<div class="col-md-1 col-6 mt-3"></div>
                <div class="col-lg-3 col-6 mt-3">
  					<div class="small-box bg-info">
  						<div class="inner">
  							<h3>Asset</h3>
  						</div>
  						<div class="icon">
  							<i class="ion ion-image"></i>
  						</div>
  						<a href="asset" class="small-box-footer">Upload Gambar <i class="fas fa-arrow-circle-right"></i></a>
  					</div>
  				</div>
  				<div class="col-lg-3 col-6 mt-3">
  					<div class="small-box bg-info">
  						<div class="inner">
  							<h3>Kategori</h3>
  						</div>
  						<div class="icon">
  							<i class="ion ion-ios-briefcase"></i>
  						</div>
  						<a href="category" class="small-box-footer">Daftar Kategori <i class="fas fa-arrow-circle-right"></i></a>
  					</div>
  				</div>
  				<div class="col-lg-3 col-6 mt-3">
  					<div class="small-box bg-info">
  						<div class="inner">
  							<h3>Produk</h3>
  						</div>
  						<div class="icon">
  							<i class="ion ion-bag"></i>
  						</div>
  						<a href="product" class="small-box-footer">Daftar Produk <i class="fas fa-arrow-circle-right"></i></a>
  					</div>
  				</div>
  				<div class="col-md-1 col-6 mt-3"></div>
  			</div>
  			<!-- /.row -->
  		</div><!-- /.container-fluid -->
  	</section>
  	<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('template.footer')