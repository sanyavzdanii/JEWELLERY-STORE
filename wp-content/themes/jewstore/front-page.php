<?php /* Template Name: Front Page */ ?>

<?php get_header(); ?>
        <section class="front-slider" style="background-image: url('<?php echo get_stylesheet_directory_uri() . esc_html(get_theme_mod( 'jw_bg_link' )) ?>')">
            <div class="container d-flex align-items-center h-100">
                <div class="front-slider__text">
                    <?php
                        if( esc_html(get_theme_mod( 'jw_header_1' )) != '' ) {
                            echo '<p class="text-1">' . esc_html(get_theme_mod( 'jw_header_1' )) . 'test</p>';
                        }
                    ?>
                    <?php
                        if( esc_html(get_theme_mod( 'jw_header_2' )) ) {
                            echo '<h1 class="text-2">' . esc_html(get_theme_mod( 'jw_header_2' )) . '</h1>';
                        }
                    ?>
                    <?php
                        if( esc_html(get_theme_mod( 'jw_header_3' )) ) {
                            echo '<p class="text-3">' . esc_html(get_theme_mod( 'jw_header_3' )) . '</p>';
                        }
                    ?>
                    <?php
                        $button1Link = esc_html(get_theme_mod( 'jw_button_1_link' ));
                        $button1Text = esc_html(get_theme_mod( 'jw_button_1' ));

                        if( $button1Text != '' ) {
                    ?>
                        <a class="btn" href="<?php if($button1Link == '') {
                            echo '#';
                        } else {
                            echo $button1Link;
                        } ?>"><?= $button1Text ?></a>
                    <?php } ?>
                    <?php
                        $button2Link = esc_html(get_theme_mod( 'jw_button_2_link' ));
                        $button2Text = esc_html(get_theme_mod( 'jw_button_2' ));

                        if( $button2Text != '' ) {
                    ?>
                        <a class="btn btn--transparent" href="<?php if($button2Link == '') {
                            echo '#';
                        } else {
                            echo $button2Link;
                        } ?>"><?= $button2Text ?></a>
                    <?php } ?>

                </div>
            </div>
        </section>
	</header><!-- #masthead -->
	<section class="block-1 container d-flex align-items-center">
	    <div class="block-1__left">
            <?php
                $imgAlt = get_post_meta( get_the_ID(), 'Block_1_img_alt' )[0];
                $imgSrc = get_post_meta( get_the_ID(), 'Block_1_img' )[0];

                if( $imgSrc != '' ) {
                    echo '<img src="' . $imgSrc . '" alt="' . $imgAlt . '" width="624px" height="500px" />';
                } else {
                    echo '<img src="' . get_stylesheet_directory_uri() . '/assets/block-1-image-1.png" alt="' . $imgAlt . '" width="624px" height="500px">';
                }
            ?>
	    </div>
	    <div class="block-1__right text-center">
             <div class="zhadan-alex-testovoye">
                <?php
                    if( esc_html(get_theme_mod( 'jw_block_1_header_1' )) != '' ) {
                        echo esc_html(get_theme_mod( 'jw_block_1_header_1' ));
                    } else {
                        echo 'Donec sollicitudin';
                    }
                ?>
             </div>
             <div class="zhadan-alex-testovoye-1">
                <?php
                    if( esc_html(get_theme_mod( 'jw_block_1_header_2' )) != '' ) {
                        echo esc_html(get_theme_mod( 'jw_block_1_header_2' ));
                    } else {
                        echo 'JEWELLERY';
                    }
                ?>
             </div>
             <div class="zhadan-alex-testovoye-1 zhadan-alex-testovoye-1--small">
                <?php
                    if( esc_html(get_theme_mod( 'jw_block_1_header_3' )) != '' ) {
                        echo esc_html(get_theme_mod( 'jw_block_1_header_3' ));
                    } else {
                        echo 'STORE';
                    }
                ?>
             </div>
             <div class="zhadan-alex-testovoye-2">
                <?php
                    if( esc_html(get_theme_mod( 'jw_block_1_header_4' )) != '' ) {
                        echo esc_html(get_theme_mod( 'jw_block_1_header_4' ));
                    } else {
                        echo 'An sincerity so extremity he additions. Her yet there truth merit. Mrs all projecting favourable now unpleasing. Son law garden chatty temper. Oh children provided to mr elegance marriage strongly.';
                    }
                 ?>
             </div>
            <div>
                <?php
                    $button10Link = esc_html(get_theme_mod( 'jw_block_1_Button_link' ));
                    $button10Text = esc_html(get_theme_mod( 'jw_block_1_Button' ));

                    if( $button10Text != '' ) {
                ?>
                    <a class="btn btn--grey" href="<?php if($button10Link == '') {
                        echo '#';
                    } else {
                        echo $button10Link;
                    } ?>"><?= $button10Text ?></a>
                <?php } else { echo '<a class="btn btn--grey" href="#">SHOP NOW</a>'; } ?>
                <?php
                    $button20Link = esc_html(get_theme_mod( 'jw_block_2_Button_link' ));
                    $button20Text = esc_html(get_theme_mod( 'jw_block_2_Button' ));

                    if( $button20Text != '' ) {
                ?>
                    <a class="btn btn--transparent-2" href="<?php if($button20Link == '') {
                        echo '#';
                    } else {
                        echo $button20Link;
                    } ?>"><?= $button20Text ?></a>
                <?php } else { echo '<a class="btn btn--transparent-2" href="#">VIEW MORE</a>'; } ?>
            </div>
	    </div>
	</section>
	<section class="block-2 container">
	    <div class="zhadan-alex-testovoye text-center">
            <?php
                if( esc_html(get_theme_mod( 'jw_block_2_header_1' )) != '' ) {
                    echo esc_html(get_theme_mod( 'jw_block_2_header_1' ));
                } else {
                    echo 'Adipisicing elit';
                }
            ?>
        </div>
        <div class="zhadan-alex-testovoye-3 text-center">
            <?php
                if( esc_html(get_theme_mod( 'jw_block_2_header_2' )) != '' ) {
                    echo esc_html(get_theme_mod( 'jw_block_2_header_2' ));
                } else {
                    echo 'FEATURED PRODUCTS';
                }
            ?>
        </div>
        <div class="zhadan-alex-testovoye-2 text-center mb-50">
            <?php
                if( esc_html(get_theme_mod( 'jw_block_2_header_3' )) != '' ) {
                    echo esc_html(get_theme_mod( 'jw_block_2_header_3' ));
                } else {
                    echo 'There are many variations of passages of lorem ipsum available.';
                }
            ?>
        </div>
        <div class="d-flex mb-30">
            <div class="block-2__left">
                <div class="position-relative d-flex">
                    <?php
                        $imgBannerAlt = get_post_meta( get_the_ID(), 'Banner_1_img_alt' )[0];
                        $imgBannerSrc = get_post_meta( get_the_ID(), 'Banner_1_img' )[0];

                        if( $imgBannerSrc != '' ) {
                            echo '<img src="' . $imgBannerSrc . '" alt="' . $imgBannerAlt . '" width="624px" height="500px" />';
                        } else {
                            echo '<img src="' . get_stylesheet_directory_uri() . '/assets/banner-1.png" alt="' . $imgBannerAlt . '" width="270px" height="370px">';
                        }
                    ?>
                    <div class="banner-text text-center d-flex">
                        <div>
                            <div class="banner-text__header-text">
                                <?php
                                    $Banner1textHeader = get_post_meta( get_the_ID(), 'Banner_1_text_header' )[0];

                                    if( $Banner1textHeader != '' ) {
                                        echo $Banner1textHeader;
                                    } else {
                                        echo 'TRISTIQUE JUSTO';
                                    }
                                ?>
                            </div>
                            <div class="banner-text__regular-text">
                                <?php
                                    $Banner1text = get_post_meta( get_the_ID(), 'Banner_1_text' )[0];

                                    if( $Banner1text != '' ) {
                                        echo $Banner1text;
                                    } else {
                                        echo 'Started now shortly had for assured hearing expense led juvenile.';
                                    }
                                ?>
                            </div>
                            <div class="banner-text__shop-now">
                                shop now
                            </div>
                            <a href="<?php if(get_post_meta( get_the_ID(), 'jw_block_2_banner_link' )[0] != '') { echo get_post_meta( get_the_ID(), 'jw_block_2_banner_link' )[0]; } else { echo '#'; } ?>" class="fake-link"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-2__right">
                <div class="slider">
                    <?php
                        $allData = get_field( "featured_products" );

                        for($i = 0; $i < count($allData); $i++) {
                            $oneProduct = $allData[$i];
                            $wc_product = wc_get_product( $oneProduct->ID );

                            echo '<div class="slider__item text-center product"><div class="product__img d-flex position-relative">'
                            . $wc_product->get_image() . '<div class="product__modal"><div class="product__modal-inner"><a href="./?add-to-cart='
                            . $oneProduct->ID . '"><svg class="add-to-cart svg-icon pointer"><use xlink:href="'
                            . get_stylesheet_directory_uri() . '/assets/sprite.svg#cart-2-icon" /></svg></a><a href="'
                            . $wc_product->get_permalink() . '"><svg class="search svg-icon pointer"><use xlink:href="'
                            . get_stylesheet_directory_uri() . '/assets/sprite.svg#search-icon" /></svg></a></div></div></div>';
                            echo '<div class="product__name">' . $oneProduct->post_title . '</div>';
                            echo '<div class="product__category">' . $wc_product->get_categories() . '</div>';
                            echo '<div class="product__price">' . $wc_product->get_price_html() . '</div></div>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="d-flex">
            <div class="block-2__left">
                <div class="position-relative d-flex">
                    <?php
                        $imgBanner2Alt = get_post_meta( get_the_ID(), 'Banner_2_img_alt' )[0];
                        $imgBanner2Src = get_post_meta( get_the_ID(), 'Banner_2_img' )[0];

                        if( $imgBanner2Src != '' ) {
                            echo '<img src="' . $imgBanner2Src . '" alt="' . $imgBanner2Alt . '" width="624px" height="500px" />';
                        } else {
                            echo '<img src="' . get_stylesheet_directory_uri() . '/assets/banner-2.png" alt="' . $imgBanner2Alt . '" width="270px" height="370px">';
                        }
                    ?>
                    <div class="banner-text text-center d-flex">
                        <div>
                            <div class="banner-text__header-text white">
                                <?php
                                    $Banner2textHeader = get_post_meta( get_the_ID(), 'Banner_2_text_header' )[0];

                                    if( $Banner2textHeader != '' ) {
                                        echo $Banner2textHeader;
                                    } else {
                                        echo 'TRISTIQUE JUSTO';
                                    }
                                ?>
                            </div>
                            <div class="banner-text__regular-text gray">
                                <?php
                                    $Banner2text = get_post_meta( get_the_ID(), 'Banner_2_text' )[0];

                                    if( $Banner2text != '' ) {
                                        echo $Banner2text;
                                    } else {
                                        echo 'Started now shortly had for assured hearing expense led juvenile.';
                                    }
                                ?>
                            </div>
                            <div class="banner-text__shop-now white">
                                shop now
                            </div>
                            <a href="<?php if(get_post_meta( get_the_ID(), 'jw_block_2_banner_2_link' )[0] != '') { echo get_post_meta( get_the_ID(), 'jw_block_2_banner_2_link' )[0]; } else { echo '#'; } ?>" class="fake-link"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-2__right">
                <div class="slider">
                    <?php
                        $allData2 = get_field( "featured_products_copy" );

                        for($i = 0; $i < count($allData2); $i++) {
                            $oneProduct2 = $allData2[$i];
                            $wc_product2 = wc_get_product( $oneProduct2->ID );

                            echo '<div class="slider__item text-center product"><div class="product__img d-flex position-relative">'
                            . $wc_product2->get_image() . '<div class="product__modal"><div class="product__modal-inner"><a href="?add-to-cart='
                            . $oneProduct2->ID . '"><svg class="add-to-cart svg-icon pointer"><use xlink:href="'
                            . get_stylesheet_directory_uri() . '/assets/sprite.svg#cart-2-icon" /></svg></a><a href="'
                            . $wc_product2->get_permalink() . '"><svg class="search svg-icon pointer"><use xlink:href="'
                            . get_stylesheet_directory_uri() . '/assets/sprite.svg#search-icon" /></svg></a></div></div></div>';
                            echo '<div class="product__name">' . $oneProduct2->post_title . '</div>';
                            echo '<div class="product__category">' . $wc_product2->get_categories() . '</div>';
                            echo '<div class="product__price">' . $wc_product2->get_price_html() . '</div></div>';
                        }
                    ?>
                </div>
            </div>
        </div>
	</section>
	<section class="special-offer container d-flex align-items-center">
        <div class="special-offer__left position-relative d-flex">
            <?php
                $imgAlt = get_post_meta( get_the_ID(), 'special_offer_img_alt' )[0];
                $imgSrc = get_post_meta( get_the_ID(), 'special_offer_img' )[0];

                if( $imgSrc != '' ) {
                    echo '<img src="' . $imgSrc . '" alt="' . $imgAlt . '" width="581px" height="327px" />';
                } else {
                    echo '<img src="' . get_stylesheet_directory_uri() . '/assets/video.png" alt="' . $imgAlt . '" width="581px" height="327px">';
                }
            ?>
            <a class="fake-link" href="<?php if(get_post_meta( get_the_ID(), 'jw_block_3_video_link' )[0] != '') { echo get_post_meta( get_the_ID(), 'jw_block_3_video_link' )[0]; } else { echo 'https://youtu.be/KotxCkZBQpQ'; } ?>" target="_blank"></a>
        </div>
        <div class="special-offer__right">
             <div class="zhadan-alex-testovoye">
                <?php
                    if( esc_html(get_theme_mod( 'jw_special_offer_header_1' )) != '' ) {
                        echo esc_html(get_theme_mod( 'jw_special_offer_header_1' ));
                    } else {
                        echo 'Special offer';
                    }
                ?>
             </div>
             <div class="zhadan-alex-testovoye-1">
                <?php
                    if( esc_html(get_theme_mod( 'jw_special_offer_header_2' )) != '' ) {
                        echo esc_html(get_theme_mod( 'jw_special_offer_header_2' ));
                    } else {
                        echo 'JEWELLERY BOX';
                    }
                ?>
             </div>
             <div class="zhadan-alex-testovoye-1 zhadan-alex-testovoye-1--small">
                <?php
                    if( esc_html(get_theme_mod( 'jw_special_offer_header_3' )) != '' ) {
                        echo esc_html(get_theme_mod( 'jw_special_offer_header_3' ));
                    } else {
                        echo 'ALL IN ONE BOX';
                    }
                ?>
             </div>
             <?php
                 $button10Link = esc_html(get_theme_mod( 'jw_special_offer_Button_link' ));
                 $button10Text = esc_html(get_theme_mod( 'jw_special_offer_Button' ));

                 if( $button10Text != '' ) {
             ?>
                 <a class="btn btn--grey" href="<?php if($button10Link == '') {
                     echo '#';
                 } else {
                     echo $button10Link;
                 } ?>"><?= $button10Text ?></a>
             <?php } else { echo '<a class="btn btn--grey" href="#">Check Now</a>'; } ?>
        </div>
    </section>

    <section class="block-discount container d-flex">
        <div class="block-discount__left">
            <div class="zhadan-alex-testovoye-1">
                <?php
                    if( esc_html(get_theme_mod( 'jw_block-discount_header_2' )) != '' ) {
                        echo esc_html(get_theme_mod( 'jw_block-discount_header_2' ));
                    } else {
                        echo 'DISCOUNT OF <span>20%</span>';
                    }
                ?>
            </div>
            <div class="zhadan-alex-testovoye-1 zhadan-alex-testovoye-1--small">
                <?php
                    if( esc_html(get_theme_mod( 'jw_block-discount_header_3' )) != '' ) {
                        echo esc_html(get_theme_mod( 'jw_block-discount_header_3' ));
                    } else {
                        echo 'ON ALL GOLD RINGS';
                    }
                ?>
            </div>
            <div class="zhadan-alex-testovoye-2 mb-15">
                <?php
                    if( esc_html(get_theme_mod( 'jw_block-discount_header_4' )) != '' ) {
                        echo esc_html(get_theme_mod( 'jw_block-discount_header_4' ));
                    } else {
                        echo 'She exposed painted fifteen are noisier mistake led waiting. Surprise not wandered speedily husbands although yet end. Are court tiled cease young built fat one man taken. We highest ye friends is exposed equally in. Ignorant had too.';
                    }
                 ?>
            </div>
            <div class="zhadan-alex-testovoye-2">
                <?php
                    if( esc_html(get_theme_mod( 'jw_block-discount_list' )) != '' ) {
                        echo '<ul>' . esc_html(get_theme_mod( 'jw_block-discount_list' )) . '</ul>';
                    } else {
                        echo '<ul><li>His six are entreaties instrument acceptance unsatiable.</li><li>Iscovery commanded fat mrs remaining son she principle.</li><li>Settling you has separate supplied bed concluded resembled.</li><li>Cause dried no solid no an small so still widen ten weather.</li></ul>';
                    }
                 ?>
            </div>
            <div>
                <?php
                    $button10Link = esc_html(get_theme_mod( 'jw_block-discount_Button_link' ));
                    $button10Text = esc_html(get_theme_mod( 'jw_block-discount_Button' ));

                    if( $button10Text != '' ) {
                ?>
                    <a class="btn btn--grey" href="<?php if($button10Link == '') {
                        echo '#';
                    } else {
                        echo $button10Link;
                    } ?>"><?= $button10Text ?></a>
                <?php } else { echo '<a class="btn btn--grey" href="#">Go to shop</a>'; } ?>
                <?php
                    $button20Link = esc_html(get_theme_mod( 'jw_block-discount_2_Button_link' ));
                    $button20Text = esc_html(get_theme_mod( 'jw_block-discount_2_Button' ));

                    if( $button20Text != '' ) {
                ?>
                    <a class="btn btn--transparent-2" href="<?php if($button20Link == '') {
                        echo '#';
                    } else {
                        echo $button20Link;
                    } ?>"><?= $button20Text ?></a>
                <?php } else { echo '<a class="btn btn--transparent-2" href="#">VIEW MORE</a>'; } ?>
            </div>
        </div>
        <div class="block-discount__right">
            <?php
                $imgAlt = get_post_meta( get_the_ID(), 'block-discount_img_alt' )[0];
                $imgSrc = get_post_meta( get_the_ID(), 'block-discount_img' )[0];

                if( $imgSrc != '' ) {
                    echo '<img src="' . $imgSrc . '" alt="' . $imgAlt . '" width="585px" height="520px" />';
                } else {
                    echo '<img src="' . get_stylesheet_directory_uri() . '/assets/discount.png" alt="' . $imgAlt . '" width="585px" height="520px">';
                }
            ?>
        </div>
    </section>

    <section class="block-all container d-flex">
        <div class="block-all__left">
            <div class="zhadan-alex-testovoye black">
                <?php
                    if( esc_html(get_theme_mod( 'jw_special_offer_header_1' )) != '' ) {
                        echo esc_html(get_theme_mod( 'jw_special_offer_header_1' ));
                    } else {
                        echo 'Special offer';
                    }
                ?>
            </div>
            <div class="zhadan-alex-testovoye-4">
                <?php
                    if( esc_html(get_theme_mod( 'jw_block-all_header_3' )) != '' ) {
                        echo esc_html(get_theme_mod( 'jw_block-all_header_3' ));
                    } else {
                        echo 'ON ALL GOLD RINGS';
                    }
                ?>
            </div>
            <div class="zhadan-alex-testovoye-5 mb-30">
                <?php
                    if( esc_html(get_theme_mod( 'jw_block-all_header_4' )) != '' ) {
                        echo esc_html(get_theme_mod( 'jw_block-all_header_4' ));
                    } else {
                        echo 'She exposed painted fifteen are noisier mistake led waiting.';
                    }
                 ?>
            </div>
            <div>
                <?php
                    $button10Link = esc_html(get_theme_mod( 'jw_block-all_Button_link' ));
                    $button10Text = esc_html(get_theme_mod( 'jw_block-all_Button' ));

                    if( $button10Text != '' ) {
                ?>
                    <a class="btn btn--grey" href="<?php if($button10Link == '') {
                        echo '#';
                    } else {
                        echo $button10Link;
                    } ?>"><?= $button10Text ?></a>
                <?php } else { echo '<a class="btn btn--grey" href="#">Go to shop</a>'; } ?>
            </div>
        </div>
        <div class="block-all__right">
            <?php
                $imgAlt = get_post_meta( get_the_ID(), 'block-all_img_alt' )[0];
                $imgSrc = get_post_meta( get_the_ID(), 'block-all_img' )[0];

                if( $imgSrc != '' ) {
                    echo '<img src="' . $imgSrc . '" alt="' . $imgAlt . '" width="585px" height="520px" />';
                } else {
                    echo '<img src="' . get_stylesheet_directory_uri() . '/assets/discount.png" alt="' . $imgAlt . '" width="585px" height="520px">';
                }
            ?>
        </div>
    </section>
<?php get_footer(); ?>