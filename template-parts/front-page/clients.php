<?php
	/**
	 * Cletns section
     *
     * @var $args;
     *
	 */?>
<?php if ($args):?>
    <div class="container clearfix">
        
        <div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="60" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">
            <?php foreach ($args as $item):?>
                <?php if ($item['image']): ?>
                    <div class="oc-item">
                        <a href="<?php echo esc_url($item['url']);?>">
                            <img src="<?php echo esc_attr($item['image'])?>" alt="<?php echo esc_attr($item['name'])?>">
                        </a>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    
    </div>
<?php endif;?>