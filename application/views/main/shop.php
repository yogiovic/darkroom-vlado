<div id="smooth-content">

            <main class="main-bg">

                <!-- ==================== Start Slider ==================== -->

                <header class="work-header section-padding pb-0">
                    <div class="container mt-80">
                        <div class="row">
                            <div class="col-12">
                                <div class="caption">
                                    
                                    <h2>DARKSHOP</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- ==================== End Slider ==================== -->



                <!-- ==================== Start shop ==================== -->

                <section class="main-shop section-padding">
                    <div class="container">
                        <div class="row md-marg">
                            <div class="col-lg-3">
                                <div class="sidebar">

                                    <div class="item search mb-40">
                                        <form action="contact.php">
                                            <div class="form-group">
                                                <input type="text" name="shop_search" placeholder="Search">
                                                <button type="submit">
                                                    <span class="pe-7s-search"></span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="item categories mb-40">
                                        <div class="title">
                                            <h6>Kategórie</h6>
                                        </div>
                                        <div class="dot-list">
                                            <ul class="rest">
												<?php foreach ($productCategories as $category){ ?>
                                                <li><a href="<?=base_url()?>shop/<?=$category['category_seo'] ?>"><?=$category['category_name'] ?></a></li>
												<?php }?>
                                            </ul>
                                        </div>
                                    </div>
                                    </div>


                                    
                             

                                    <!-- <div class="item tags">
                                        <div class="title">
                                            <h6>Popular Tags</h6>
                                        </div>

                                        <div class="tags-links">
                                            <a href="#0">Design</a>
                                            <a href="#0">Development</a>
                                            <a href="#0">Tech</a>
                                            <a href="#0">Blog</a>
                                            <a href="#0">Branding</a>
                                            <a href="#0">Mobile</a>
                                            <a href="#0">Ui-ThemeZ</a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="col-lg-9">
                                <div class="shop-products">
                                    <div class="top-side d-flex align-items-end mb-40">
                                        <div>
<!--                                            <h6 class="fz-16 line-height-1">Zobrazených 10 výsledkov</h6>-->
                                        </div>
                                    </div>
                                     <div class="row">
                                        <?php foreach($products as $product){ ?>
                                        <div class="col-md-6">
                                            <div class="item mb-50">
                                                <div class="img">
                                                    <img src="<?=base_url()?>assets/products/<?php echo $product->img?>" alt="">
                                                    <a href="<?=base_url()?>detail/<?php echo $product->id?>" 
                                                    	class="add-cart">
                                                    	Zobraziť
                                                	</a>
                                                    <!-- <span class="fav"><i class="far fa-heart"></i></span> -->
                                                </div>
                                                <div class="cont">
                                                    <h6><?php echo $product->title?></h6>
                                                    <h5><?php echo $product->price?> &euro;</h5>
													<?php if ($product->status == 1){?>
															<h6 style="color: green"> Dostupné</h6>
													<?php } else { ?>

															<h6 style="color: red"> Predané</h6>
													<?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                       <?php } ?>

                                       
                                    </div> 
<!--                                    <div class="pagination d-flex justify-content-center mt-30">-->
<!--                                        <ul class="rest">-->
<!--                                            <li class="active"><a href="#0">1</a></li>-->
<!--                                            <li><a href="#0"><i class="fas fa-chevron-right"></i></a></li> -->
<!--                                        </ul>-->
<!--                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End shop ==================== -->


            </main>
