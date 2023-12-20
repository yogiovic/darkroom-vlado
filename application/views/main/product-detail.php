

<div id="smooth-content">

            <main class="main-bg pt-80">


                <!-- ==================== Start product ==================== -->

                <section class="product-details section-padding">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                <div class="img-preview">
                                    <div class="gallery-top">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">

                                                <div class="swiper-slide">
                                                    <div class="img">
                                                        <img src="<?=base_url()?>assets/products/<?php echo $product['img'] ?>" alt="">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gallery-thumb mt-10">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-1">
                                <div class="product-info">
                                    <div class="top-info">
                                        <h5 class="main-color4">€ <?php echo $product['price'] ?></h5>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h4 class="line-height-1"><?php echo $product['title'] ?></h4>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="d-flex align-items-center">
                                                    <!-- <div>
                                                        <div class="rate fz-12 opacity-7">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="ml-10">
                                                        <p class="fz-13">(1 Review)</p>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text mt-30">
                                            <p><?php echo $product['short_info'] ?></p>
                                        </div>
                                        <div class="dot-list mt-30">
                                            <ul class="rest">
                                                <li class="mb-15">Jediný kus</li>
                                                <li>Biely podklad</li><br>
                                                <li>S podpisom a známkou originality</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="prod-order pt-30 pb-30 mt-50 bord-thin-top bord-thin-bottom">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="counter">
                                                    <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                                    <input type="text" value="1">
                                                    <span class="up" onClick='increaseCount(event, this)'>+</span>
                                                </div>
                                            </div>


                                            

                                <!-- Start Modal -->
                                          


               
               
            <button class="btn btn-primary open-button" data-toggle="modal" data-target="#myModal">Do košíka</button>


                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nadpis modálneho okna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                    <form class="form" method="dialog">
                        <label>Tvoje meno <input type="text"></label>
                        <label>Tvoj e-mail <input type="email"></label>
                        
                    </form>
                </div>
        
                <div class="modal-footer">  
                    <button class="btn btn-primary open-button" type="submit">Objednať</button>
                    <button type="button" class="btn btn-secondary close-button" data-dismiss="modal">Zavrieť</button>
                </div>
            </div>
        </div>
    </div>




                                       <!-- End Modal -->


                                     </div>





                                    </div>
                                    <div class="mt-40">
                                        <ul class="rest">
                                            <li class="d-flex align-items-center mb-15">
                                                <strong>No. : </strong>
                                                <span class="ml-10"><?php echo $product['no'] ?></span>
                                            </li>
                                            <li class="d-flex align-items-center mb-15">
                                                <strong>Kategória :</strong>
                                                <span class="ml-10"><a href="#0">Printy</a></span>
                                            </li>
                                            <!-- <li class="d-flex align-items-center">
                                                <strong>TAG :</strong>
                                                <span class="ml-10"><a href="#0">Men</a> , <a href="#0">Women</a> , <a
                                                        href="#0">Jacket</a></span>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-100">
                            <div class="col-lg-11">
                                <div class="overview" id="tabs">
                                    <ul class="rest tab-links mb-30">
                                        <li class="item-link current" data-tab="tabs-1">
                                            <h6>Špecifikácia</h6>
                                        </li>
                                        <!-- <li class="item-link" data-tab="tabs-2">
                                            <h6>Info</h6>
                                        </li>
                                        <li class="item-link" data-tab="tabs-3">
                                            <h6>Reviews (1)</h6>
                                        </li> -->
                                    </ul>
                                    <div class="tab-cont">
                                        <div class="tab-content current" id="tabs-1">
                                            <div class="item">
                                                <div class="text">
													<?php echo $product['long_content'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End product ==================== -->


            </main>
