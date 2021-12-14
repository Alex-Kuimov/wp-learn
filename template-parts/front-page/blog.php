<?php
/**
 * Section blog
 *
 * @var $args;
 */
?>
<?php if ($args): ?>
    <?php if($args['blog_title']): ?>
        <div class="section notopmargin notopborder">
            <div class="container clearfix">
                <div class="heading-block center nomargin">
                    <h3><?php echo esc_html( $args['blog_title'] );?></h3>
                </div>
            </div>
        </div>
    <?php endif; ?>
    
    <?php if($args['posts']):?>
        <div class="container clear-bottommargin clearfix">
        <div class="row">
    
            <?php foreach ($args['posts'] as $item): ?>
            <div class="col-lg-3 col-md-6 bottommargin">
                <div class="ipost clearfix">
                    <?php if ($item['image']): ?>
                        <div class="entry-image">
                            <a href="<?php echo esc_url( $item['post_link'] );?>">
                                <img class="image_fade" src="<?php echo esc_attr( $item['image'] );?>" alt="<?php echo esc_attr($item['title'])?>">
                            </a>
                        </div>
                    <?php endif; ?>
                    
                    <div class="entry-title">
                        <h3><a href="<?php esc_url( $item['post_link'] );?>"><?php echo esc_html($item['title'])?></a></h3>
                    </div>
                    
                    <ul class="entry-meta clearfix">
                        <li><i class="icon-calendar3"></i> <?php echo esc_html($item['date'])?></li>
                        <?php if ($item['count_comments']): ?>
                            <li>
                                <a href="<?php echo esc_url( $item['post_link'] );?>#comments"><i class="icon-comments"></i><?php echo esc_html($item['count_comments'])?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    
                    <?php if ($item['excerpt']): ?>
                        <div class="entry-content">
                            <p><?php echo esc_html($item['excerpt']);?></p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif;?>
<?php endif;?>