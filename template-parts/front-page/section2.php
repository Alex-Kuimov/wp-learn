<?php
	/*
	 * Section 2
	 */
   ?>

<div class="section nobottommargin">
   <div class="container clear-bottommargin clearfix">
      
      <div class="row topmargin-sm clearfix">
          <?php foreach ($args as $tab): ?>
              <div class="col-lg-4 bottommargin">
                  <i class="i-plain color i-large <?php echo esc_attr( $tab['icon'] ); ?> inline-block" style="margin-bottom: 15px;"></i>
                  <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                      <span class="before-heading"><?php echo esc_html( $tab['subicon'] ); ?></span>
                      <h4><?php echo esc_html( $tab['title'] ); ?></h4>
                  </div>
                  <p><?php echo esc_html( $tab['text'] ); ?></p>
              </div>
          <?php endforeach; ?>
      </div>
   
   </div>
</div>
