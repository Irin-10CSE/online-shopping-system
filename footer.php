<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>address</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>01904616707</a></li>
									<li><a href="esmitakhan10@gmail.com"><i class="fa fa-envelope-o"></i>esmitakhan10@gmail.com</a></li>
									
								</ul>
								<p>owner</p>
									<table>
										<tr>
											<td>

									<img src="irin.png"width="80px"height="80px"/>
									<div class="desc">&nbsp;&nbsp;Airin <br>&nbsp;&nbsp;Contact:01904616&nbsp;</div>
									
</td>
									
									<td>&nbsp;

                                    <img src="saima.png"width="80px"height="80px"/>
									<div class="desc"> &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;saima <br>&nbsp;&nbsp;Contact:01879666</div>
</td>

<td>&nbsp;&nbsp;&nbsp;

                                    <img src="fariha.png"width="80px"height="80px"/>
									<div class="desc"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;AFrin<br>&nbsp;&nbsp;Contact:01567756</div>
</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</tr>
									</table>
	
							</div>
						</div>
						<div class="col-md-6 text-center" style="margin-top:80px;">
							<ul class="footer-payments">
								
							
							<li><img src="giphy.gif"style="width:300px;height:200px;"></li>
								
								
							</ul>

							<span class="copyright">
							
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
							
							</span>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">categories</h3>
								<ul class="footer-links">
								<li><a href="https://backend.robishop.com.bd/pub/media/catalog/product/1/_/1_4_4.png">Mobiles</a></li>
									<li><a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsTkROt4k89pbGweqQeytAZySU0mRpJiyEmN_FCHgRkw6-KR01jPISZdQhh8W1nEBa5Wg&usqp=CAU">Men</a></li>
									<li><a href="http://localhost/online-shopping-system/product_images/girl-walking.jpg">Women</a></li>
									<li><a href="https://www.brandthreads.com/wp-content/uploads/2021/03/K6-0824-alt1-450x675.jpg">Kids</a></li>
									<li><a href="https://i.pinimg.com/736x/e2/eb/26/e2eb26bbfaa840b15aa9c9501df0f37d.jpg">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->
                

			<!-- bottom footer -->
			
			<!-- /bottom footer -->
		</footer>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/actions.js"></script>
		<script src="js/sweetalert.min"></script>
		<script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>
		<script>var c = 0;
        function menu(){
          if(c % 2 == 0) {
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";    
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";    
            c++; 
              }else{
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";        
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";        
            c++;
              }
        }
           
		
</script>
    <script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>
	
