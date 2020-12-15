<?php
$id = \webLazy\Core\Request::uri()[1];
$row = \webLazy\Model\SearchModel::searchTypeBlog($id);
require_once 'views/Shop/header.php';

?>
	<div class="breadcrumb-area">
		<div class="container">
			<div class="breadcrumb-content">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li class="active">Search Blog</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Li's Breadcrumb Area End Here -->
	<!-- Begin Li's Main Blog Page Area -->
	<div class="li-main-blog-page pt-60 pb-55">
		<div class="container">
			<div class="row">
				<!-- Begin Li's Main Content Area -->
				<div class="col-lg-12">
					<div class="row li-main-content">
						<?php foreach ($row as $value) : ?>
							<div class="col-lg-12">
								<div class="li-blog-single-item pb-30">
									<div class="row">
										<div class="col-lg-6">
											<div class="li-blog-banner">
												<?php $img = json_decode($value[5], true); ?>
												<a href="<?= \webLazy\Core\URL::uri('singerBlog') . '/' . $value[0] ?>"><img
														class="img-full" style="width: 420px;height: 240px"
														src="./assets/upload/News/<?= $img[1] ?>" alt=""></a>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="li-blog-content">
												<div class="li-blog-details">
													<h3 class="li-blog-heading pt-xs-25 pt-sm-25"><a
															href="<?= \webLazy\Core\URL::uri('singerBlog') . '/' . $value[0] ?>"><?= $value['2'] ?></a>
													</h3>
													<div class="li-blog-meta">
														<a class="comment" href="#"><i
																class="fa fa-comment-o"></i> <?php echo
															(\webLazy\Model\CommentModel::countComment($value[0])[0] ==
																0) ? '0 Comment' :
																\webLazy\Model\CommentModel::countComment($value[0])[0] .
																' Comment'; ?></a>
														<a class="views" href="#"><i
																class="fa fa fa-eye"></i><?php echo $value[7] == 0 ?
																'1' : $value[7] ?>
															views</a>
														<a class="post-time"
														   href="<?= \webLazy\Core\URL::uri('singerBlog') . '/' .
														   $value[0] ?>"><i
																class="fa fa-calendar"></i><?= $value[8] ?></a>
													</div>
													<p><?= the_excerpt($value[4]) ?></p>
													<a class="read-more"
													   href="<?= \webLazy\Core\URL::uri('singerBlog') . '/' .
													   $value[0] ?>">Read
														More...</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
						<!-- Begin Li's Pagination Area -->
						<div class="col-lg-12">
							<div class="li-paginatoin-area text-center pt-25">
								<div class="row">
									<div class="col-lg-12">
										<ul class="li-pagination-box">
											<li><a class="Previous" href="#">Previous</a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a class="Next" href="#">Next</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- Li's Pagination End Here Area -->
					</div>
				</div>
				<!-- Li's Main Content Area End Here -->
			</div>
		</div>
	</div>
<?php
require_once 'views/Shop/footer.php';

