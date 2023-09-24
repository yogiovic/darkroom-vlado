<main>

	<!-- ==================== Start Slider ==================== -->

	<header class="page-header blog-header section-padding pb-0">
		<div class="container mt-80">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="caption">
						<div class="sub-title fz-12">
							<a href="#0"><span>darkblog</span></a>

						</div>
						<h1 class="fz-55 mt-30"><?= $article->title ?></h1>
					</div>
					<div class="info d-flex mt-40 align-items-center">
						<div class="left-info">
							<div class="d-flex">
								<div class="author-info">
									<div class="d-flex align-items-center">
										<a href="#0" class="circle-60">
											<img src="<?= base_url() ?>asset/img/blog/author1.jpg" alt=""
												 class="circle-img">
										</a>
										<a href="#0" class="ml-20">
											<!--                                                <span class="opacity-7">Author</span>-->
											<h6 class="fz-16">Vladimir_Shoots</h6>
										</a>
									</div>
								</div>
								<div class="date ml-50">
									<a href="#0">
										<span class="opacity-7">Uverejnené</span>
										<h6 class="fz-16"><?= date('d.M.Y', strtotime($article->created_at)) ?></h6>
									</a>
								</div>
							</div>
						</div>
						<div class="right-info ml-auto">
							<!--                                <div>-->
							<!--                                    <span class="pe-7s-comment fz-18 mr-10"></span>-->
							<!--                                    <span class="opacity-7">02 Comments</span>-->
							<!--                                </div>-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="background bg-img parallaxie mt-80"
			 data-background="<?= base_url() ?>asset/uploads/blog/<?= $article->img ?>"></div>
	</header>

	<!-- ==================== End Slider ==================== -->


	<!-- ==================== Start Blog ==================== -->



	<section class="blog section-padding pb-0">
		<div class="container">
			<div class="main-post">
				<div class="item pb-60">
					<div>
						<div class="row justify-content-center">
							<div class="col-lg-10">
								<div class="text">
									<?=$article->long_content ?>
								</div>
							</div>
						</div>
					</div>






				</div>
				<div class="info-area flex mt-20 pb-20">
					<div>
						<div class="tags flex">
							<div class="valign">
								<span>Tags :</span>
							</div>
							<div>
<!--								<a href="blog-classic.html">Cestovanie</a>-->
<!--								<a href="blog-classic.html">Kultura</a>-->
								<p><?=$article->category_name ?></p>
							</div>
						</div>
					</div>
					<div class="ml-auto">
						<div class="share-icon flex">
							<div class="valign">
								<span>Share :</span>
							</div>
							<div>
								<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
								<a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
								<a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!--                    <div class="author-area mt-50">-->
				<!--                        <div class="flex">-->
				<!--                            <div class="author-img mr-30">-->
				<!--                                <div class="img">-->
				<!--                                    <img src="assets/imgs/blog/author1.jpg" alt="" class="circle-img">-->
				<!--                                </div>-->
				<!--                            </div>-->
				<!--                            <div class="cont valign">-->
				<!--                                <div class="full-width">-->
				<!--                                    <h6 class="fw-600 mb-10">Chris Smith</h6>-->
				<!--                                    <p>Nulla eleifend, lectus eu gravida facilisis, ipsum metus faucibus eros,-->
				<!--                                        vitae vulputate nibh libero ac metus.</p>-->
				<!--                                </div>-->
				<!--                            </div>-->
				<!--                        </div>-->
				<!--                    </div>-->
				<div class="next-prv-post flex mt-50">
					<div class="thumb-post bg-img" data-background="assets/imgs/blog/b2.jpg">
						<a href="blog-details.html">
                                <span class="fz-12 text-u ls1 main-color mb-15"><i class="pe-7s-angle-left"></i>
                                    Prev Post</span>
							<h6 class="fw-600 fz-16">Ways to quickly traffic to <br> your website.</h6>
						</a>
					</div>
					<div class="thumb-post ml-auto text-right bg-img"
						 data-background="assets/imgs/blog/b3.jpg">
						<a href="blog-details.html">
                                <span class="fz-12 text-u ls1 main-color mb-15">Next Post <i
										class="pe-7s-angle-right"></i></span>
							<h6 class="fw-600 fz-16">How to Handle Your Good Employee.</h6>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="recent-posts blog-list-half crev sub-bg section-padding mt-100">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="mb-60">
							<h3>Recent Posts</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 md-mb50">
						<div class="item mb-30">
							<div class="row rest">
								<div class="col-md-6">
									<div class="img">
										<img src="assets/imgs/blog/h5.jpg" alt="">
									</div>
								</div>
								<div class="col-md-6 valign">
									<div class="cont">
										<span class="date fz-12 ls1 text-u opacity-7 mb-15">August 6, 2022</span>
										<h5>
											<a href="#0">Free advertising for your online business.</a>
										</h5>
										<div class="tags colorbg mt-15">
											<a href="#0">Marketing</a>
											<a href="#0">Design</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="item mb-30">
							<div class="row rest">
								<div class="col-md-6">
									<div class="img">
										<img src="assets/imgs/blog/h6.jpg" alt="">
									</div>
								</div>
								<div class="col-md-6 valign">
									<div class="cont">
										<span class="date fz-12 ls1 text-u opacity-7 mb-15">August 6, 2022</span>
										<h5>
											<a href="#0">Business meeting 2023 in San Francisco.</a>
										</h5>
										<div class="tags colorbg mt-15">
											<a href="#0">Marketing</a>
											<a href="#0">Design</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--            <div class="comments-post section-padding">-->
		<!--                <div class="container">-->
		<!--                    <div class="row justify-content-center">-->
		<!--                        <div class="col-lg-11">-->
		<!--                            <div class="text mb-60">-->
		<!--                                <h3>Comments</h3>-->
		<!--                            </div>-->
		<!--                        </div>-->
		<!--                    </div>-->
		<!--                    <div class="row justify-content-center">-->
		<!--                        <div class="col-lg-11">-->
		<!--                            <div class="item-box">-->
		<!--                                <div class="row">-->
		<!--                                    <div class="col-lg-9">-->
		<!--                                        <div class="flex">-->
		<!--                                            <div class="user-img mr-30">-->
		<!--                                                <div class="img circle-80 line-height-1">-->
		<!--                                                    <img src="assets/imgs/blog/author1.jpg" alt="" class="circle-img">-->
		<!--                                                </div>-->
		<!--                                            </div>-->
		<!--                                            <div class="cont">-->
		<!--                                                <h6 class="line-height-1">Megan fox</h6>-->
		<!--                                                <span class="fz-12 ls1 text-u mb-15">14 sept 2021, 07:00 AM</span>-->
		<!--                                                <p class="fz-14">Ut elementum turpis lorem, id vulputate risus consequat vitae. Morbi eget-->
		<!--                                                    urna imperdiet, pellentesque nulla id, tempus mauris.</p>-->
		<!--                                            </div>-->
		<!--                                        </div>-->
		<!--                                    </div>-->
		<!--                                    <div class="col-lg-3 d-flex align-items-center">-->
		<!--                                        <div class="replay-post ml-auto">-->
		<!--                                            <a href="#0">-->
		<!--                                                <span>Replay</span>-->
		<!--                                            </a>-->
		<!--                                        </div>-->
		<!--                                    </div>-->
		<!--                                </div>-->
		<!--                            </div>-->
		<!--                            <div class="item-box replayed">-->
		<!--                                <div class="row">-->
		<!--                                    <div class="col-lg-9">-->
		<!--                                        <div class="flex">-->
		<!--                                            <div class="user-img mr-30">-->
		<!--                                                <div class="img circle-80 line-height-1">-->
		<!--                                                    <img src="assets/imgs/blog/author1.jpg" alt="" class="circle-img">-->
		<!--                                                </div>-->
		<!--                                            </div>-->
		<!--                                            <div class="cont">-->
		<!--                                                <h6 class="line-height-1">Megan fox</h6>-->
		<!--                                                <span class="fz-12 ls1 text-u mb-15">14 sept 2021, 07:00 AM</span>-->
		<!--                                                <p class="fz-14">Ut elementum turpis lorem, id vulputate risus consequat vitae. Morbi eget-->
		<!--                                                    urna imperdiet, pellentesque nulla id, tempus mauris.</p>-->
		<!--                                            </div>-->
		<!--                                        </div>-->
		<!--                                    </div>-->
		<!--                                    <div class="col-lg-3 d-flex align-items-center">-->
		<!--                                        <div class="replay-post ml-auto">-->
		<!--                                            <a href="#0">-->
		<!--                                                <span>Replay</span>-->
		<!--                                            </a>-->
		<!--                                        </div>-->
		<!--                                    </div>-->
		<!--                                </div>-->
		<!--                            </div>-->
		<!--                        </div>-->
		<!--                    </div>-->
		<!--                </div>-->
		<!--            </div>-->

		<div class="comments-from section-padding sub-bg">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-11">
						<div class="text mb-60">
							<h3>Zanechaj feedback</h3>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-11">
						<form id="contact-form" method="post" action="contact.php">

							<div class="messages"></div>

							<div class="controls row">

								<div class="col-lg-6">
									<div class="form-group mb-30">
										<input id="form_name" type="text" name="name" placeholder="Name"
											   required="required">
									</div>
								</div>

								<div class="col-lg-6">
									<div class="form-group mb-30">
										<input id="form_email" type="email" name="email" placeholder="Email"
											   required="required">
									</div>
								</div>

								<div class="col-12">
									<div class="form-group mb-30">
                                            <textarea id="form_message" name="message" placeholder="Message" rows="4"
													  required="required"></textarea>
									</div>
								</div>

								<div class="col-12 text-center mt-20">
									<button type="submit" class="butn-circle">
                                            <span class="full-width">
                                                <span class="full-width">Zdielať</span>
                                            </span>
										<img src="assets/imgs/svg-assets/circle-star.svg" alt="" class="circle-star">
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ==================== End Blog ==================== -->


</main>
