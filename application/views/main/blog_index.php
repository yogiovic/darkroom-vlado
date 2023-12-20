<main>

	<!-- ==================== Start Slider ==================== -->

	<header class="page-header section-padding pb-0">
		<div class="container mt-80">
			<div class="row">
				<div class="col-lg-8">
					<div class="caption">

						<h2>DARKBLOG</h2>

					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- ==================== End Slider ==================== -->



	<!-- ==================== Start Blog ==================== -->

	<section class="blog-list-half section-padding sub-bg">
		<div class="container">
			<div class="row">
				<?php foreach ($articles as $a){ ?>
				<div class="col-lg-6">
					<div class="item mb-50">
						<div class="row">
							<div class="col-md-6 img">
								<img src="<?=base_url()?>asset/uploads/blog/<?=$a->img ?>" alt="">
							</div>
							<div class="col-md-6 main-bg cont valign">
								<div class="full-width">
									<span class="date fz-12 ls1 text-u opacity-7 mb-15"><?= date('d.M.Y',strtotime($a->created_at))  ?></span>
									<h5>
										<a href="<?=base_url()?>blog/<?=$a->seo ?>/<?=$a->id ?>"><?=$a->title ?></a>
									</h5>
									<div class="tags colorbg mt-15">
										<a href="<?=base_url()?>blog/<?=$a->seo ?>/<?=$a->id ?>"><?=$a->category_name ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php }?>

			</div>
		</div>
	</section>

	<!-- ==================== End Blog ==================== -->


</main>
