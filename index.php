<!-- "var_dump( dynamic_sidebar('sidebar_dow'));" -->

<?php get_header(); ?>
	<div id="content">
		<div class="container">
			<?php get_template_part('slider', 'Slider'); ?>
		</div>
		<div class="product-box">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 order-lg-0 order-1">
						<div class="sidebar">
							<div class="category-box">
								<h3>Danh mục sản phẩm</h3>
								<div class="content-cat">
									<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar_up') ) : ?><?php endif; ?>
								</div>
							</div>
							<div class="widget">
								<h3>
									<i class="fa fa-bars"></i>
									Tin tức
								</h3>
								<div class="content-w">
									<ul>
										<li>
											<a href="<?php bloginfo('stylesheet_directory'); ?>/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/news.jpg" alt=""></a>
											<h4><a href="<?php bloginfo('stylesheet_directory'); ?>/#">Thương hiệu đồng hồ thông minh Sinophy của nước nào?</a></h4>
											<div class="clear"></div>
										</li>
										<li>
											<a href="<?php bloginfo('stylesheet_directory'); ?>/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/news.jpg" alt=""></a>
											<h4><a href="<?php bloginfo('stylesheet_directory'); ?>/#">Thương hiệu đồng hồ thông minh Sinophy của nước nào?</a></h4>
											<div class="clear"></div>
										</li>
										<li>
											<a href="<?php bloginfo('stylesheet_directory'); ?>/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/news.jpg" alt=""></a>
											<h4><a href="<?php bloginfo('stylesheet_directory'); ?>/#">Thương hiệu đồng hồ thông minh Sinophy của nước nào?</a></h4>
											<div class="clear"></div>
										</li>
										<li>
											<a href="<?php bloginfo('stylesheet_directory'); ?>/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/news.jpg" alt=""></a>
											<h4><a href="<?php bloginfo('stylesheet_directory'); ?>/#">Thương hiệu đồng hồ thông minh Sinophy của nước nào?</a></h4>
											<div class="clear"></div>
										</li>
										<li>
											<a href="<?php bloginfo('stylesheet_directory'); ?>/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/news.jpg" alt=""></a>
											<h4><a href="<?php bloginfo('stylesheet_directory'); ?>/#">Thương hiệu đồng hồ thông minh Sinophy của nước nào?</a></h4>
											<div class="clear"></div>
										</li>
									</ul>
								</div>
							</div>
							<div class="widget">
								<h3>
									<i class="fa fa-bars"></i>
									Quảng cáo
								</h3>
								<div class="content-banner">
									<a href="<?php bloginfo('stylesheet_directory'); ?>/#">
										<img src="<?php bloginfo('stylesheet_directory'); ?>/images/banner.png" alt="">
									</a>
								</div>
							</div>
							<div class="widget">
								<h3>
									<i class="fa fa-facebook"></i>
									Facebook
								</h3>
								<div class="content-fb">
									<div class="fb-page" data-href="<?php bloginfo('stylesheet_directory'); ?>/https://www.facebook.com/huykiradotnet/" data-tabs="timeline" data-width="" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 order-lg-1 order-0">
						<div class="product-section">
							<h2 class="title-product">
								<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="title">Sản phẩm nổi bật</a>
								<div class="bar-menu"><i class="fa fa-bars"></i></div>
								<div class="list-child">
									<ul>
										<?php $product_cats = get_terms( 'product_cat');
										?>
										<?php foreach($product_cats as $product_cat){?>
											<?php echo "<li><a href=".get_term_link($product_cat).">".$product_cat->name."</a></li>";?>
										<?php }?>
									</ul>
								</div>
								<div class="clear"></div>
							</h2>
							<div class="content-product-box">
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
										<div class="item-product">
											<div class="thumb">
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp.png" alt=""></a>
												<span class="sale">Giảm <br>15%</span>
												<div class="action">
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
													<div class="clear"></div>
												</div>
											</div>
											<div class="info-product">
												<h4><a href="<?php bloginfo('stylesheet_directory'); ?>/#">Điện thoại iPhone Xs Max 256GB</a></h4>
												<div class="price">
													<span class="price-current">28.990.000₫</span>
													<span class="price-old">33.990.000₫</span>
												</div>
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="view-more">Xem chi tiết</a>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
										<div class="item-product">
											<div class="thumb">
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp2.png" alt=""></a>
												<span class="sale">Giảm <br>10%</span>
												<div class="action">
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
													<div class="clear"></div>
												</div>
											</div>
											<div class="info-product">
												<h4><a href="<?php bloginfo('stylesheet_directory'); ?>/#">Điện thoại OPPO A5 (2020) 128GB</a></h4>
												<div class="price">
													<span class="price-current">4.790.000₫</span>
													<span class="price-old">4.790.000₫</span>
												</div>
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="view-more">Xem chi tiết</a>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
										<div class="item-product">
											<div class="thumb">
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp.png" alt=""></a>
												<span class="sale">Giảm <br>15%</span>
												<div class="action">
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
													<div class="clear"></div>
												</div>
											</div>
											<div class="info-product">
												<h4><a href="<?php bloginfo('stylesheet_directory'); ?>/#">Điện thoại iPhone Xs Max 256GB</a></h4>
												<div class="price">
													<span class="price-current">28.990.000₫</span>
													<span class="price-old">33.990.000₫</span>
												</div>
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="view-more">Xem chi tiết</a>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
										<div class="item-product">
											<div class="thumb">
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp2.png" alt=""></a>
												<span class="sale">Giảm <br>10%</span>
												<div class="action">
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
													<div class="clear"></div>
												</div>
											</div>
											<div class="info-product">
												<h4><a href="<?php bloginfo('stylesheet_directory'); ?>/#">Điện thoại OPPO A5 (2020) 128GB</a></h4>
												<div class="price">
													<span class="price-current">4.790.000₫</span>
													<span class="price-old">4.790.000₫</span>
												</div>
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="view-more">Xem chi tiết</a>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
										<div class="item-product">
											<div class="thumb">
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp2.png" alt=""></a>
												<span class="sale">Giảm <br>10%</span>
												<div class="action">
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
													<div class="clear"></div>
												</div>
											</div>
											<div class="info-product">
												<h4><a href="<?php bloginfo('stylesheet_directory'); ?>/#">Điện thoại OPPO A5 (2020) 128GB</a></h4>
												<div class="price">
													<span class="price-current">4.790.000₫</span>
													<span class="price-old">4.790.000₫</span>
												</div>
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="view-more">Xem chi tiết</a>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
										<div class="item-product">
											<div class="thumb">
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp.png" alt=""></a>
												<span class="sale">Giảm <br>15%</span>
												<div class="action">
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
													<div class="clear"></div>
												</div>
											</div>
											<div class="info-product">
												<h4><a href="<?php bloginfo('stylesheet_directory'); ?>/#">Điện thoại iPhone Xs Max 256GB</a></h4>
												<div class="price">
													<span class="price-current">28.990.000₫</span>
													<span class="price-old">33.990.000₫</span>
												</div>
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="view-more">Xem chi tiết</a>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
										<div class="item-product">
											<div class="thumb">
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp2.png" alt=""></a>
												<span class="sale">Giảm <br>10%</span>
												<div class="action">
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
													<div class="clear"></div>
												</div>
											</div>
											<div class="info-product">
												<h4><a href="<?php bloginfo('stylesheet_directory'); ?>/#">Điện thoại OPPO A5 (2020) 128GB</a></h4>
												<div class="price">
													<span class="price-current">4.790.000₫</span>
													<span class="price-old">4.790.000₫</span>
												</div>
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="view-more">Xem chi tiết</a>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
										<div class="item-product">
											<div class="thumb">
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp.png" alt=""></a>
												<span class="sale">Giảm <br>15%</span>
												<div class="action">
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
													<div class="clear"></div>
												</div>
											</div>
											<div class="info-product">
												<h4><a href="<?php bloginfo('stylesheet_directory'); ?>/#">Điện thoại iPhone Xs Max 256GB</a></h4>
												<div class="price">
													<span class="price-current">28.990.000₫</span>
													<span class="price-old">33.990.000₫</span>
												</div>
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="view-more">Xem chi tiết</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<a href="<?php bloginfo('stylesheet_directory'); ?>/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/https://phongtrodn.com/wp-content/uploads/2020/02/huykira.png" alt=""></a>
						<br>
						<br>
						<div class="product-section">
							<h2 class="title-product">
								<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="title">Điện thoại</a>
								<div class="bar-menu"><i class="fa fa-bars"></i></div>
								<div class="list-child">
									<ul>
										<li><a href="<?php bloginfo('stylesheet_directory'); ?>/#">Iphone</a></li>
										<li><a href="<?php bloginfo('stylesheet_directory'); ?>/#">Samsung</a></li>
										<li><a href="<?php bloginfo('stylesheet_directory'); ?>/#">Sony</a></li>
										<li><a href="<?php bloginfo('stylesheet_directory'); ?>/#">HTC</a></li>
									</ul>
								</div>
								<div class="clear"></div>
							</h2>
							<div class="content-product-box">
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
										<div class="item-product">
											<div class="thumb">
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp.png" alt=""></a>
												<span class="sale">Giảm <br>15%</span>
												<div class="action">
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
													<div class="clear"></div>
												</div>
											</div>
											<div class="info-product">
												<h4><a href="<?php bloginfo('stylesheet_directory'); ?>/#">Điện thoại iPhone Xs Max 256GB</a></h4>
												<div class="price">
													<span class="price-current">28.990.000₫</span>
													<span class="price-old">33.990.000₫</span>
												</div>
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="view-more">Xem chi tiết</a>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
										<div class="item-product">
											<div class="thumb">
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp2.png" alt=""></a>
												<span class="sale">Giảm <br>10%</span>
												<div class="action">
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
													<div class="clear"></div>
												</div>
											</div>
											<div class="info-product">
												<h4><a href="<?php bloginfo('stylesheet_directory'); ?>/#">Điện thoại OPPO A5 (2020) 128GB</a></h4>
												<div class="price">
													<span class="price-current">4.790.000₫</span>
													<span class="price-old">4.790.000₫</span>
												</div>
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="view-more">Xem chi tiết</a>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
										<div class="item-product">
											<div class="thumb">
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp.png" alt=""></a>
												<span class="sale">Giảm <br>15%</span>
												<div class="action">
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
													<div class="clear"></div>
												</div>
											</div>
											<div class="info-product">
												<h4><a href="<?php bloginfo('stylesheet_directory'); ?>/#">Điện thoại iPhone Xs Max 256GB</a></h4>
												<div class="price">
													<span class="price-current">28.990.000₫</span>
													<span class="price-old">33.990.000₫</span>
												</div>
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="view-more">Xem chi tiết</a>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
										<div class="item-product">
											<div class="thumb">
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp2.png" alt=""></a>
												<span class="sale">Giảm <br>10%</span>
												<div class="action">
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
													<div class="clear"></div>
												</div>
											</div>
											<div class="info-product">
												<h4><a href="<?php bloginfo('stylesheet_directory'); ?>/#">Điện thoại OPPO A5 (2020) 128GB</a></h4>
												<div class="price">
													<span class="price-current">4.790.000₫</span>
													<span class="price-old">4.790.000₫</span>
												</div>
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="view-more">Xem chi tiết</a>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
										<div class="item-product">
											<div class="thumb">
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp2.png" alt=""></a>
												<span class="sale">Giảm <br>10%</span>
												<div class="action">
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
													<div class="clear"></div>
												</div>
											</div>
											<div class="info-product">
												<h4><a href="<?php bloginfo('stylesheet_directory'); ?>/#">Điện thoại OPPO A5 (2020) 128GB</a></h4>
												<div class="price">
													<span class="price-current">4.790.000₫</span>
													<span class="price-old">4.790.000₫</span>
												</div>
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="view-more">Xem chi tiết</a>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
										<div class="item-product">
											<div class="thumb">
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp.png" alt=""></a>
												<span class="sale">Giảm <br>15%</span>
												<div class="action">
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
													<div class="clear"></div>
												</div>
											</div>
											<div class="info-product">
												<h4><a href="<?php bloginfo('stylesheet_directory'); ?>/#">Điện thoại iPhone Xs Max 256GB</a></h4>
												<div class="price">
													<span class="price-current">28.990.000₫</span>
													<span class="price-old">33.990.000₫</span>
												</div>
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="view-more">Xem chi tiết</a>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
										<div class="item-product">
											<div class="thumb">
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp2.png" alt=""></a>
												<span class="sale">Giảm <br>10%</span>
												<div class="action">
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
													<div class="clear"></div>
												</div>
											</div>
											<div class="info-product">
												<h4><a href="<?php bloginfo('stylesheet_directory'); ?>/#">Điện thoại OPPO A5 (2020) 128GB</a></h4>
												<div class="price">
													<span class="price-current">4.790.000₫</span>
													<span class="price-old">4.790.000₫</span>
												</div>
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="view-more">Xem chi tiết</a>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
										<div class="item-product">
											<div class="thumb">
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp.png" alt=""></a>
												<span class="sale">Giảm <br>15%</span>
												<div class="action">
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
													<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
													<div class="clear"></div>
												</div>
											</div>
											<div class="info-product">
												<h4><a href="<?php bloginfo('stylesheet_directory'); ?>/#">Điện thoại iPhone Xs Max 256GB</a></h4>
												<div class="price">
													<span class="price-current">28.990.000₫</span>
													<span class="price-old">33.990.000₫</span>
												</div>
												<a href="<?php bloginfo('stylesheet_directory'); ?>/#" class="view-more">Xem chi tiết</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>		