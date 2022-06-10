<?php 
	session_start();
	include '../koneksi.php';
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
	<link rel="icon" 
      type="image/png" 
      href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kelola Pesanan </title>
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
            <h2>Daftar Pesanan</h2>
            </div>
            <div class="data-tables datatable-dark">
            <table id="dataTable3" class="display" style="width:100%"><thead class="thead-dark">
            <tr>
            <th>No</th>
            <th>ID Pesanan</th>
            <th>Nama Customer</th>
            <th>Tanggal Order</th>
            <th>Total</th>
            <th>Status</th>
            </tr></thead><tbody>
              
    <?php 
    $brgs=mysqli_query($conn,"SELECT * from cart c, login l where c.userid=l.userid and status!='Cart' and status!='Selesai' order by idcart ASC");
    $no=1;
    while($p=mysqli_fetch_array($brgs)){
    $orderids = $p['orderid'];
    ?>
												
    <tr>
    <td><?php echo $no++ ?></td>
    <td><strong><a href="order.php?orderid=<?php echo $p['orderid'] ?>">#<?php echo $p['orderid'] ?></a></strong></td>
    <td><?php echo $p['namalengkap'] ?></td>
    <td><?php echo $p['tglorder'] ?></td>
    <td>Rp<?php 
												
    $result1 = mysqli_query($conn,"SELECT SUM(d.qty*p.hargaafter) AS count FROM detailorder d, produk p where orderid='$orderids' and p.idproduk=d.idproduk order by d.idproduk ASC");
    $cekrow = mysqli_num_rows($result1);
    $row1 = mysqli_fetch_assoc($result1);
    $count = $row1['count'];
    if($cekrow > 0){
    echo number_format($count);
    } else {
    echo 'No data';
    }?></td>
    <td><?php 
    $orders = $p['orderid'];
    $cekkonfirmasipembayaran = mysqli_query($conn,"select * from konfirmasi where orderid='$orders'");
    $cekroww = mysqli_num_rows($cekkonfirmasipembayaran);
    if($cekroww > 0){
    echo 'Confirmed';
    } else {
    if($p['status']!='Pengiriman'){
    echo "Menunggu Konfirmasi";
    } else {
    echo "Pengiriman";
    };
    }
													
    ?></td>
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
