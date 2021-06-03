<?php include_once "layout/header.php"; ?>
<?php include_once "dataBaseConnect.php";?>
<?php
//lấy id truyền qua
$id_sp = $_GET['id'];

$sql    = "SELECT * FROM san_pham 
JOIN phan_loai on san_pham.ID_hang = phan_loai.ID_hang
WHERE ID_san_pham = $id_sp";
$stmt   = $connect->query( $sql );
$stmt->setFetchMode(PDO::FETCH_OBJ);
$row    = $stmt->fetch();
?>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="admin/<?php echo $row->hinh_anh;?>" alt="">
							</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="admin/<?php echo $row->hinh_anh;?>" alt="">
							</div>
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name"><?php echo $row->Ten_san_pham; ?></h2>
							<div>
								<h3 class="product-price"><?php echo number_format($row->Gia_san_pham);?></h3>
								<!-- <span class="product-available">In Stock</span> -->
							</div>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->


							<div class="add-to-cart">
								<a href="add_to_cart.php?id=<?php echo $row->ID_san_pham;?>"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</button></a>
							</div>
						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab2">Details</a></li>
								<li><a data-toggle="tab" href="#tab3">Reviews (3)</a></li>
							</ul>
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>

	</div>
		<!-- /NEWSLETTER -->
<?php include_once "layout/footer.php" ?>
		
