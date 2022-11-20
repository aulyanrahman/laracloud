<footer class="main-footer">
	<div class="row">
		<div class="col-md-6">
			<strong>Copyright &copy; 2022 <a href="home">CASE STUDY</a>.</strong>
			All rights reserved.
		</div>
		<div class="col-md-6 float-right text-right">
			<img src="{{asset('images/cloud.jpg')}}" alt="icon-laracloud" height="30px" width="30px" class="img-fluid mr-1">
			<b>CASE STUDY</b>
		</div>
	</div>

</footer>

<div class="modal fade" id="modalSetting" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel"><span class="font-weight-bold"> <i class="fa fa-cog" aria-hidden="true"></i> Ubah Password</span></h5>
				<button type="button" class="close closeModal" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="#" method="POST" class="formSetting" id="formSetting" autocomplete="off">
					<div class="form-group row align-items-center mb-0 text-sm">
						<label for="pwd" class="col-md-4 form-label-cust">Password Baru<small class="text-danger">*</small></label>
						<div class="col-md-8 form-group-control">
							<input type="password" name="pwd" id="pwd" class="form-control form-control-border form-control-xs" placeholder="Password" aria-describedby="pwd" maxlength="65">
						</div>
					</div>
					<div class="form-group row align-items-center mb-0 text-sm">
						<label for="pwd_confirm" class="col-md-4 form-label-cust">Konfirmasi Password Baru<small class="text-danger">*</small></label>
						<div class="col-md-8 form-group-control">
							<input type="password" name="pwd_confirm" id="pwd_confirm" class="form-control form-control-border form-control-xs" placeholder="Konfirmasi Password" aria-describedby="pwd_confirm" maxlength="65">
						</div>
					</div>
					<div class="row float-right mt-2">
						<button type="submit" class="btn btn-sm bg-cyan col-md-12 btnSimpanPass" id="btnSimpanPass"> <i class="fa fa-save"></i> Simpan</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>

<!-- jquery-validation -->
<script src="{{asset('plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>

</body>

</html>