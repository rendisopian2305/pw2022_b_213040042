<?php 
	session_start();
	include '../koneksi.php';
			
	if(isset($_POST["addproduct"])) {
		$namaproduk=$_POST['namaproduk'];
		$idkategori=$_POST['idkategori'];
		$deskripsi=$_POST['deskripsi'];
		$rate=$_POST['rate'];
		$hargabefore=$_POST['hargabefore'];
		$hargaafter=$_POST['hargaafter'];
		
		$nama_file = $_FILES['uploadgambar']['name'];
		$ext = pathinfo($nama_file, PATHINFO_EXTENSION);
		$random = crypt($nama_file, time());
		$ukuran_file = $_FILES['uploadgambar']['size'];
		$tipe_file = $_FILES['uploadgambar']['type'];
		$tmp_file = $_FILES['uploadgambar']['tmp_name'];
		$path = "../produk/".$random.'.'.$ext;
		$pathdb = "produk/".$random.'.'.$ext;


		if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
		  if($ukuran_file <= 5000000){ 
			if(move_uploaded_file($tmp_file, $path)){ 
			
			  $query = "insert into produk (idkategori, namaproduk, gambar, deskripsi, rate, hargabefore, hargaafter)
			  values('$idkategori','$namaproduk','$pathdb','$deskripsi','$rate','$hargabefore','$hargaafter')";
			  $sql = mysqli_query($conn, $query); 
			  
			  if($sql){ 
				
				echo "<br><meta http-equiv='refresh' content='5; URL=produk.php'> You will be redirected to the form in 5 seconds";
					
			  }else{
				echo "Sorry, there's a problem while submitting.";
				echo "<br><meta http-equiv='refresh' content='5; URL=produk.php'> You will be redirected to the form in 5 seconds";
			  }
			}else{
			  echo "Sorry, there's a problem while uploading the file.";
			  echo "<br><meta http-equiv='refresh' content='5; URL=produk.php'> You will be redirected to the form in 5 seconds";
			}
		  }else{
			echo "Sorry, the file size is not allowed to more than 1mb";
			echo "<br><meta http-equiv='refresh' content='5; URL=produk.php'> You will be redirected to the form in 5 seconds";
		  }
		}else{
		  echo "Sorry, the image format should be JPG/PNG.";
		  echo "<br><meta http-equiv='refresh' content='5; URL=produk.php'> You will be redirected to the form in 5 seconds";
		}
	
	};
	?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
	<link rel="icon" 
      type="image/png" 
      href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kelola Produk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <div class="page-container">
	<div class="sidebar-menu">
        <div class="main-menu">
            <div class="menu-inner">
            <nav>
            <ul class="metismenu" id="menu">
			<li class="active"><a href="index.php"><span>Home</span></a></li>
			<li><a href="../"><span>Kembali ke Toko</span></a></li>
			<li>
            <a href="manageorder.php"><span>Kelola Pesanan</span></a>
            </li>

			<li>
            <a href="javascript:void(0)" aria-expanded="true"><span>Kelola Toko</span></a>
            <ul class="collapse">
            <li><a href="kategori.php">Kategori</a></li>
            <li><a href="produk.php">Produk</a></li>
			<li><a href="pembayaran.php">Metode Pembayaran</a></li>
            </ul>
            </li>

			<li><a href="customer.php"><span>Kelola Pelanggan</span></a></li>
			<li><a href="user.php"><span>Kelola Staff</span></a></li>
            <li>
            <a href="../logout.php"><span>Logout</span></a>
            </li>
            </ul>
            </nav>
            </div>
        </div>
    </div>
        <div class="main-content">
            <div class="header-area">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content-inner">
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2>Daftar Produk</h2>
									<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2">Tambah Produk</button>
                                </div>
                                    <div class="data-tables datatable-dark">
										 <table id="dataTable3" class="display" style="width:100%"><thead class="thead-dark">
											<tr>
												<th>No.</th>
												<th>Gambar</th>
												<th>Nama Produk</th>
												<th>Kategori</th>
												<th>Harga Diskon</th>
												<th>Deskripsi</th>
												<th>Rate</th>
												<th>Harga Awal</th>
												<th>Tanggal</th>
											</tr></thead><tbody>
											<?php 
											$brgs=mysqli_query($conn,"SELECT * from kategori k, produk p where k.idkategori=p.idkategori order by idproduk ASC");
											$no=1;
											while($p=mysqli_fetch_array($brgs)){

												?>
												
												<tr>
													<td><?php echo $no++ ?></td>
													<td><img src="../<?php echo $p['gambar'] ?>" width="50%"\></td>
													<td><?php echo $p['namaproduk'] ?></td>
													<td><?php echo $p['namakategori'] ?></td>
													<td><?php echo $p['hargaafter'] ?></td>
													<td><?php echo $p['deskripsi'] ?></td>
													<td><?php echo $p['rate'] ?></td>
													<td><?php echo $p['hargabefore'] ?></td>
													<td><?php echo $p['tgldibuat'] ?></td>
													
												</tr>		
												
												<?php 
											}
											
												
											
		
											?>
										</tbody>
										</table>
                                    </div>
								 </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                
            </div>
        </div>
    </div>
			<div id="myModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Tambah Produk</h4>
						</div>
						
						<div class="modal-body">
						<form action="produk.php" method="post" enctype="multipart/form-data" >
								<div class="form-group">
									<label>Nama Produk</label>
									<input name="namaproduk" type="text" class="form-control" required autofocus>
								</div>
								<div class="form-group">
									<label>Nama Kategori</label>
									<select name="idkategori" class="form-control">
									<option selected>Pilih Kategori</option>
									<?php
									$det=mysqli_query($conn,"select * from kategori order by namakategori ASC")or die(mysqli_error());
									while($d=mysqli_fetch_array($det)){
									?>
										<option value="<?php echo $d['idkategori'] ?>"><?php echo $d['namakategori'] ?></option>
										<?php
								}
								?>		
									</select>
									
								</div>
								<div class="form-group">
									<label>Deskripsi</label>
									<input name="deskripsi" type="text" class="form-control" required>
								</div>
								<div class="form-group">
									<label>Rating (1-5)</label>
									<input name="rate" type="number" class="form-control"  min="1" max="5" required>
								</div>
								<div class="form-group">
									<label>Harga Sebelum Diskon</label>
									<input name="hargabefore" type="number" class="form-control">
								</div>
								<div class="form-group">
									<label>Harga Setelah Diskon</label>
									<input name="hargaafter" type="number" class="form-control">
								</div>
								<div class="form-group">
									<label>Gambar</label>
									<input name="uploadgambar" type="file" class="form-control">
								</div>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
								<input name="addproduct" type="submit" class="btn btn-primary" value="Tambah">
							</div>
						</form>
					</div>
				</div>
			</div>
	
	<script>
	$(document).ready(function() {
    $('#dataTable3').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
	} );
	</script>
	
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
	 <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <script src="assets/js/line-chart.js"></script>
    <script src="assets/js/pie-chart.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
	
</body>
</html>