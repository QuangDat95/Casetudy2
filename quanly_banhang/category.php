<?php include_once "layout/header.php"; ?>
 <?php include_once "dataBaseConnect.php";?> 
<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM san_pham 
	JOIN phan_loai ON san_pham.ID_hang = phan_loai.ID_hang
    WHERE  san_pham.ID_hang = '$id' ";
    // thực hiện truy vấn
    $query = $connect->query($sql);
    // tùy chọn kiểu trả về
    $query->setFetchMode(PDO::FETCH_OBJ);
    // lấy tất cả kết quả
    $rows = $query->fetchAll();
?>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Tất cả sản phẩm</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
                                       
                                    <?php foreach($rows as $key => $row): ?>
										<div class="product">
                                        <a href="product.php?id=<?php echo $row->ID_san_pham;?>"><div class="product-img">
												<img src="admin/<?php echo $row->hinh_anh;?>">
											</div></a>
											<div class="product-body">
												<h5 class="product-category"><?php echo $row->Ten_hang;?></h5>
												<h3 class="product-name"><a href="product.php?id=<?php echo $row->ID_san_pham;?>"><?php echo $row->Ten_san_pham;?></a></h3>
												<!-- <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4> -->
                                                <h4 class="product-price"><?php echo number_format($row->Gia_san_pham); ?></h4>											
											</div>			
										</div>
                                    <?php endforeach; ?>
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		
		<?php include_once "layout/footer.php"; ?>