(function($) {

	$(function() {
		var slider = $('.fl-node-<?php echo $id; ?> .fl-content-slider-wrapper').bxSlider({
			adaptiveHeight: true,
			auto: <?php if ( $settings->auto_play ) { echo 'true';
} else { echo 'false'; } ?>,
			autoHover: <?php if ( $settings->auto_hover ) { echo 'true';
} else { echo 'false'; } ?>,
			autoControls: <?php if ( $settings->play_pause ) { echo 'true';
} else { echo 'false'; } ?>,
			pause: <?php echo $settings->delay * 1000; ?>,
			mode: '<?php echo $settings->transition; ?>',
			speed: <?php echo $settings->speed * 1000; ?>,
			controls: false,
			infiniteLoop: <?php echo $module->is_loop_enabled(); ?>,
			pager: <?php if ( $settings->dots ) { echo 'true';
} else { echo 'false'; } ?>,
			video: true,
			onSliderLoad: function(currentIndex) {
				$('.fl-node-<?php echo $id; ?> .fl-content-slider-wrapper').addClass('fl-content-slider-loaded');

				// Remove autoplay video sources
				$('.fl-node-<?php echo $id; ?> iframe[src*="autoplay"]').each( function(){
					var src = $( this ).attr( 'src' );
					$( this ).attr( 'data-url', src );

					if ( ! $( this ).is( ':visible' ) || 0 === $( this ).parents( '.fl-slide-0:not(.bx-clone)' ).length ) {
						$( this ).attr( 'src', '' );
					}
				});
				/* if slide 0 contains a video and it is set to auto play, then play */
				$('.fl-slide-0:not(.bx-clone) video[autoplay]').trigger('play');
			},
			onSlideBefore: function(ele, oldIndex, newIndex) {
				$('.fl-node-<?php echo $id; ?> .fl-content-slider-navigation a').addClass('disabled');
				$('.fl-node-<?php echo $id; ?> .bx-viewport > .bx-controls .bx-pager-link').addClass('disabled');
			},
			onSlideAfter: function( ele, oldIndex, newIndex ) {

				// Swap autoplay video sources
				$( '.fl-node-<?php echo $id; ?> .fl-slide-' + newIndex + ':not(.bx-clone) iframe[data-url*="autoplay"]:visible' ).each( function(){
					var src = $( this ).attr( 'data-url' );
					$( this ).attr( 'src', src );
				} );

				$( '.fl-node-<?php echo $id; ?> .fl-slide-' + oldIndex + ':not(.bx-clone) iframe[src*="autoplay"]:visible' ).each( function(){
					var src = $( this ).attr( 'src' );
					$( this ).attr( 'src', '' );
				} );

				$('.fl-node-<?php echo $id; ?> .fl-content-slider-navigation a').removeClass('disabled');
				$('.fl-node-<?php echo $id; ?> .bx-viewport > .bx-controls .bx-pager-link').removeClass('disabled');
				/* Pause and play videos if autoplay */
				$( '.fl-node-<?php echo $id; ?> .fl-slide-' + oldIndex + ':not(.bx-clone)').find('video[autoplay]').trigger('pause')
				$( '.fl-node-<?php echo $id; ?> .fl-slide-' + newIndex + ':not(.bx-clone)').find('video[autoplay]').trigger('play')
			}
		});

		// Store a reference to the slider.
		slider.data('bxSlider', slider);

		<?php if ( $settings->arrows ) : ?>

			$('.fl-node-<?php echo $id; ?> .slider-prev').on( 'click', function( e ){
				e.preventDefault();
				slider.goToPrevSlide();
			} );

			$('.fl-node-<?php echo $id; ?> .slider-next').on( 'click', function( e ){
				e.preventDefault();
				slider.goToNextSlide();
			} );

		<?php endif; ?>

	});

})(jQuery);
