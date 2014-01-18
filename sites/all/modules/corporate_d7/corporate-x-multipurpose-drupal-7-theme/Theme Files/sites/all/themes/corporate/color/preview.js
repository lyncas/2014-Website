
(function ($) {
  Drupal.color = {
    callback: function(context, settings, form, farb, height, width) {
      // Solid background.
      $('#preview', form).css('backgroundColor', $('#palette input[name="palette[base]"]', form).val());
	  $('#preview-block-system-main-menu', form).css('backgroundColor', $('#palette input[name="palette[menu]"]', form).val());
	  $('#preview .selector', form).css('backgroundColor', $('#palette input[name="palette[menuitems]"]', form).val());
	  $('#preview .selector.active', form).css('backgroundColor', $('#palette input[name="palette[menuitemsactive]"]', form).val());
	  $('#preview a.internal-link', form).css('backgroundColor', $('#palette input[name="palette[slidelink]"]', form).val());
	  $('#search', form).css('backgroundColor', $('#palette input[name="palette[srch]"]', form).val());	  
	  $('#preview #footer', form).css('backgroundColor', $('#palette input[name="palette[headers]"]', form).val());
	  $('#preview .views-row-3', form).css('backgroundColor', $('#palette input[name="palette[blocksarea]"]', form).val());
	  
	  
      // Text preview
      $('#text', form).css('color', $('#palette input[name="palette[text]"]', form).val());
      $('#preview a', form).css('color', $('#palette input[name="palette[link]"]', form).val());
      $('#menu', form).css('color', $('#palette input[name="palette[menu]"]', form).val());
	  $('#views_slideshow_cycle_main_home_page-page .views-slideshow-cycle-main-frame-row h2 a', form).css('color', $('#palette input[name="palette[text]"]', form).val());	  
	  $('#views_slideshow_cycle_main_home_page-page .views-slideshow-cycle-main-frame-row .field-content', form).css('color', $('#palette input[name="palette[textheaders]"]', form).val());	 
	  
	  
	  
	  $('#preview .views-field-field-home-item-title a, #preview .views-field-field-home-item-read-1', form).css('color', $('#palette input[name="palette[text]"]', form).val());
	  $('#preview a.internal-link', form).css('color', $('#palette input[name="palette[slidelinktext]"]', form).val());
	  
	  $('#preview-block-system-main-menu ul.menu li a', form).css('color', $('#palette input[name="palette[menuitems]"]', form).val());
	  $('#preview-block-system-main-menu ul.menu li a:hover, #preview-block-system-main-menu ul.menu li a.active', form).css('color', $('#palette input[name="palette[menuitemsactive]"]', form).val());
	  $('#search', form).css('color', $('#palette input[name="palette[text]"]', form).val());
	  
	  $('#preview #footer div', form).css('color', $('#palette input[name="palette[footertext]"]', form).val());
	  
	  $('h2 a', form).css('color', $('#palette input[name="palette[textheaders]"]', form).val());
	  	  
    }
  };
})(jQuery);
