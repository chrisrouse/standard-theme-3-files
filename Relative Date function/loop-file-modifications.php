<!-- loop.php -->

<!-- Find the following in loop.php at lines 40 and 43. -->
<span class="the-relative-time"><?php if(!function_exists('how_long_ago')){the_time('F jS, Y'); } else { echo how_long_ago(get_the_time('U')); } ?></span></a>
				<?php } else { ?>
					<span class="the-relative-time"><?php if(!function_exists('how_long_ago')){the_time('F jS, Y'); } else { echo how_long_ago(get_the_time('U')); } ?></span>
				<?php } // end if/else ?>




<!-- And replace it with this. -->
<span class="the-relative-time"><?php if(!function_exists('how_long_ago')){the_time('F jS, Y'); } else { echo how_long_ago(get_the_time('U')); } ?></span>

<!-- You should have to change this twice. -->



<!-- Find the follow in each post format at the lines indicated.-->
<!-- loop-image.php at lines 43-46-->
<!-- loop-link.php at lines 76-79-->
<!-- loop-quote.php at lines 54-57-->
<!-- loop-status.php at lines 36-39-->
<!-- loop-video.php at lines 37-40-->


<span class="the-time updated">&nbsp;<?php _e( 'on', 'standard' ) . ' '; echo get_the_time( get_option( 'date_format' ) ); ?></span>
				<?php } else { ?>
					<?php printf( '<span class="the-time">' . __( 'Posted on %1$s', 'standard' ) . '</span>', get_the_time( get_option( 'date_format' ) ) ); ?>


<!-- And replace it with this. -->
<span class="'how_long_ago'">&nbsp;<?php _e( 'on', 'standard' ) . ' '; echo how_long_ago(get_the_time('U') ); ?></span>
				<?php } else { ?>
					<?php printf( '<span class="the-relative-time">' . __( 'Posted %1$s', 'standard' ) . '</span>', how_long_ago(get_the_time('U') ) ); ?>
				<?php } // end if ?>