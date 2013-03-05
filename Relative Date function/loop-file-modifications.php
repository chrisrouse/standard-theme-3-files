<!-- loop.php -->

<!-- Find the following in loop.php. This should be around line 40 and 41. -->
<span class="the-time updated"><?php the_time( get_option( 'date_format' ) ); ?></span>


<!-- And replace it with this. -->
<span class="the-relative-time"><?php if(!function_exists('how_long_ago')){the_time('F jS, Y'); } else { echo how_long_ago(get_the_time('U')); } ?></span>

<!-- You should have to change this twice. -->



<!-- Find the follow in each post format at the lines indicated.-->
<!-- loop-image.php at line 43-46-->
<!-- loop-link.php at line 76-79-->
<!-- loop-quote.php at line 54-57-->
<!-- loop-status.php at line 36-39-->
<!-- loop-video.php at line 37-40-->


<span class="the-time updated">&nbsp;<?php _e( 'on', 'standard' ) . ' '; echo get_the_time( get_option( 'date_format' ) ); ?></span>
				<?php } else { ?>
					<?php printf( '<span class="the-time">' . __( 'Posted on %1$s', 'standard' ) . '</span>', get_the_time( get_option( 'date_format' ) ) ); ?>


<!-- And replace it with this. -->
<span class="'how_long_ago'">&nbsp;<?php _e( 'on', 'standard' ) . ' '; echo how_long_ago(get_the_time('U') ); ?></span>
				<?php } else { ?>
					<?php printf( '<span class="the-relative-time">' . __( 'Posted %1$s', 'standard' ) . '</span>', how_long_ago(get_the_time('U') ) ); ?>
				<?php } // end if ?>