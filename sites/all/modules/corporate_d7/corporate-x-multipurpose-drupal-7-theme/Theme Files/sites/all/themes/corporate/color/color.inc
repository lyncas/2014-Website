<?php

$info = array(

  // Available colors and color labels used in theme.
  'fields' => array(
    'base' => t('Base'),
	'textheaders' => t('Text Headers'),
	'blocksarea' => t('Blocks Area'),
	'menu' => t('Menu'),
	'menushadow' => t('Menu Shadow(no preview)'),
    'link' => t('Link'),
	'slidelink' => t('Slide Link Background'),
	'slidelinktext' => t('Slide Link Color'),
    'text' => t('Text'),	
	'textshadow' => t('Headers Shadow(no preview)'),
	'smalltextshadow' => t('Inner Headers Shadow(no preview)'),
	'headers' => t('Footer'),
    'menuitems' => t('Menu Items'),
    'menuitemsactive' => t('Menu Items Active'),
    'srch' => t('Search Box'),	
	'footertext' => t('Footer Text'),	
  ),
  // Pre-defined color schemes.
  'schemes' => array(
    'default' => array(
      'title' => t('Corporate X Gray (Base) '),
      'colors' => array(
        'base' => '#666666',
		'textheaders' => '#ededed',
		'blocksarea' => '#6d6d6d',
		'menu' => '#333333',
		'menushadow' => '#020202',
        'link' => '#ffD42B',
		'slidelink' => '#fac700',
		'slidelinktext' => '#323232',
        'text' => '#bababa',
		'textshadow' => '#010101',		
		'smalltextshadow' => '#212121',		
		'headers' => '#222222',
        'menuitems' => '#878b84',
        'menuitemsactive' => '#ffffff',
        'srch' => '#656565',
		'footertext' => '#646464',
      ),
    ),
	'corporatex' => array(
      'title' => t('Corporate X (Default)'),
      'colors' => array(
        'base' => '#303030',
		'textheaders' => '#ededed',
		'blocksarea' => '#393939',
		'menu' => '#1f1f1f',
		'menushadow' => '#020202',
        'link' => '#ffD42B',
		'slidelink' => '#fac700',
		'slidelinktext' => '#323232',
        'text' => '#bababa',
		'textshadow' => '#010101',
		'smalltextshadow' => '#222222',		
		'headers' => '#222222',
        'menuitems' => '#878b84',
        'menuitemsactive' => '#ffffff',
        'srch' => '#656565',
		'footertext' => '#ada8a8',
      ),
    ),
	'bluenight' => array(
      'title' => t('Blue Night'),
      'colors' => array(
        'base' => '#193157',
		'textheaders' => '#ededed',
		'blocksarea' => '#143871',
		'menu' => '#000000',
		'menushadow' => '#000000',
        'link' => '#3dacff',
		'slidelink' => '#ffD42C',
		'slidelinktext' => '#323232',
        'text' => '#fafafa',
		'textshadow' => '#000000',
		'smalltextshadow' => '#222222',		
		'headers' => '#000000',
        'menuitems' => '#676767',
        'menuitemsactive' => '#cdcdcd',
        'srch' => '#193157',
		'footertext' => '#ffffff',
      ),
    ),
	'fashion' => array(
      'title' => t('Fashion Show'),
      'colors' => array(
        'base' => '#fe00cd',
		'textheaders' => '#ededed',
		'blocksarea' => '#393939',
		'menu' => '#b45fab',
		'menushadow' => '#000000',
        'link' => '#ff7d3d',
		'slidelink' => '#000000',
		'slidelinktext' => '#fe00cd',
        'text' => '#000000',
		'textshadow' => '#000000',
		'smalltextshadow' => '#555555',		
		'headers' => '#000000',
        'menuitems' => '#676767',
        'menuitemsactive' => '#cdcdcd',
        'srch' => '#464646',
		'footertext' => '#ffffff',
      ),
    ),
	'clean' => array(
      'title' => t('Clean View (Really Cool, Test it)'),
      'colors' => array(
        'base' => '#ffffff',
		'textheaders' => '#000000',
		'blocksarea' => '#d6d6d6',
		'menu' => '#ffffff',
		'menushadow' => '#ffffff',
        'link' => '#c76c00',
		'slidelink' => '#c76c00',
		'slidelinktext' => '#ffffff',
        'text' => '#757070',
		'textshadow' => '#ffffff',
		'smalltextshadow' => '#ffffff',		
		'headers' => '#c4c4c4',
        'menuitems' => '#cdcdcd',
        'menuitemsactive' => '#676767',
        'srch' => '#c9c9c9',
		'footertext' => '#303030',
      ),
    ),
	'black' => array(
      'title' => t('Black Site'),
      'colors' => array(
        'base' => '#000000',
		'textheaders' => '#ededed',
		'blocksarea' => '#111111',
		'menu' => '#000000',
		'menushadow' => '#000000',
        'link' => '#3f6b88',
		'slidelink' => '#3f6b88',
		'slidelinktext' => '#ffffff',
        'text' => '#8a8a8a',
		'textshadow' => '#000000',
		'smalltextshadow' => '#555555',		
		'headers' => '#0d0d0d',
        'menuitems' => '#7f7f7f',
        'menuitemsactive' => '#ffffff',
        'srch' => '#464646',
		'footertext' => '#8a8a8a',
      ),
    ),
  ),

  // Images to copy over.
  'copy' => array(    
	'logo.png',
  ),

  // CSS files (excluding @import) to rewrite with new color scheme.
  'css' => array(
    'css/colors.css',
  ),

  // Gradient definitions.
  'gradients' => array(
  ),

  // Color areas to fill (x, y, width, height).
  'fill' => array(
    'base' => array(0, 0, 10, 500),
	'menu' => array(100, 100, 500, 500),
    'link' => array(0, 0, 1000, 1000),
  ),

  // Coordinates of all the theme slices (x, y, width, height)
  // with their filename as used in the stylesheet.
  'slices' => array(     
    'screenshot.png'                       => array(0, 37, 400, 240),
  ),

  // Reference color used for blending. Matches the base.png's colors.
  'blend_target' => '#ffffff',

  // Preview files.
  'preview_image' => 'color/preview.png',
  'preview_css' => 'color/preview.css',
  'preview_js' => 'color/preview.js',
  'preview_html' => 'color/preview.html',

  // Base file for image generation.
  'base_image' => 'color/preview.png',
);
