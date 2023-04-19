<?php /* Template Name: Front Page */ ?>

<?php get_header(); ?>
        <section class="front-slider" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/Pic_Slider.png')">
            <div class="container d-flex align-items-center h-100">
                <div class="front-slider__text">
                    <?php
                        if( get_post_meta( get_the_ID(), 'Header_Text_1' ) ) {
                            echo '<p class="text-1">' . get_post_meta( get_the_ID(), 'Header_Text_1' )[0] . '</p>';
                        }
                    ?>
                    <?php
                        if( get_post_meta( get_the_ID(), 'Header_Text_1' ) ) {
                            echo '<h1 class="text-2">' . get_post_meta( get_the_ID(), 'Header_Text_2' )[0] . '</h1>';
                        }
                    ?>
                    <?php
                        if( get_post_meta( get_the_ID(), 'Header_Text_3' ) ) {
                            echo '<p class="text-3">' . get_post_meta( get_the_ID(), 'Header_Text_3' )[0] . '</p>';
                        }
                    ?>
                    <?php
                        $button1Link = get_post_meta( get_the_ID(), 'Header_Button_1_link' )[0];
                        $button1Text = get_post_meta( get_the_ID(), 'Header_Button_1' )[0];

                        if( $button1Text != '' ) {
                    ?>
                        <a class="btn" href="<?php if($button1Link == '') {
                            echo '#';
                        } else {
                            echo $button1Link;
                        } ?>"><?= $button1Text ?></a>
                    <?php } ?>
                    <?php
                        $button2Link = get_post_meta( get_the_ID(), 'Header_Button_2_link' )[0];
                        $button2Text = get_post_meta( get_the_ID(), 'Header_Button_2' )[0];

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
                Donec sollicitudin
            </div>
            <div class="zhadan-alex-testovoye-1">
                JEWELLERY
            </div>
            <div class="zhadan-alex-testovoye-1 zhadan-alex-testovoye-1--small">
                STORE
            </div>
            <div class="zhadan-alex-testovoye-2">
                An sincerity so extremity he additions. Her yet there truth merit. Mrs all projecting favourable now unpleasing. Son law garden chatty temper. Oh children provided to mr elegance marriage strongly.
            </div>
            <div>
                <?php
                    $button10Link = get_post_meta( get_the_ID(), 'Block_1_Button_1_link' )[0];
                    $button10Text = get_post_meta( get_the_ID(), 'Block_1_Button_1' )[0];

                    if( $button10Text != '' ) {
                ?>
                    <a class="btn btn--grey" href="<?php if($button10Link == '') {
                        echo '#';
                    } else {
                        echo $button10Link;
                    } ?>"><?= $button10Text ?></a>
                <?php } ?>
                <?php
                    $button20Link = get_post_meta( get_the_ID(), 'Block_1_Button_2_link' )[0];
                    $button20Text = get_post_meta( get_the_ID(), 'Block_1_Button_2' )[0];

                    if( $button20Text != '' ) {
                ?>
                    <a class="btn btn--transparent-2" href="<?php if($button20Link == '') {
                        echo '#';
                    } else {
                        echo $button20Link;
                    } ?>"><?= $button20Text ?></a>
                <?php } ?>
            </div>
	    </div>
	</section>
<?php get_footer(); ?>