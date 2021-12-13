<?php
/**
 * Our works section template
 *
 * @var $args
 */
?>
<?php if ( $args ): ?>
    <div class="section topmargin nobottommargin nobottomborder">
        <div class="container clearfix">
            <div class="heading-block center nomargin">
                <?php if ($args['ourworks_title']): ?>
                    <h3><?php echo esc_html( $args['ourworks_title'] );?></h3>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <?php if ($args['posts']):?>
        <div id="portfolio" class="portfolio portfolio-nomargin grid-container portfolio-notitle portfolio-full grid-container clearfix">
            
            <?php foreach ( $args['posts'] as $item ): ?>
                <article class="portfolio-item pf-media pf-icons">
                    <?php if ( $item['image'] ): ?>
                        <div class="portfolio-image">
                            <a href="<?php echo esc_url( $item['post_link'] )?>">
                                <img src="<?php echo esc_attr( $item['image']['url'] ); ?>" alt="<?php echo esc_attr( $item['image']['title'] ); ?>">
                            </a>
                            <div class="portfolio-overlay"></div>
                        </div>
                    <?php endif; ?>
                    <div class="portfolio-desc">
                        <?php if ($item['title']):?>
                            <h3><a href="<?php echo esc_url( $item['post_link'] );?>"><?php echo esc_html( $item['title'] );?></a></h3>
                        <? endif;?>
                        <?php if ($item['link']):?>
                            <span><a href=""<?php echo esc_url( $item['link']['url'] )?>"><?php echo esc_html( $item['link']['title'] );?></a></span>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
	<?php endif; ?>
<?php endif; ?>