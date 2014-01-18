<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
<div class="art-post">
    <div class="art-post-body">
<div class="art-post-inner art-article">
<h2 class="art-postheader"<?php print $title_attributes; ?>><?php print render($title_prefix); ?>
<?php echo art_node_title_output($title, $node_url, $page); ?>
<?php print render($title_suffix); ?>
</h2>
<?php ob_start(); ?>
<?php if ($display_submitted): ?>
<div class="art-postheadericons art-metadata-icons">
<?php echo art_submitted_worker($date, $name); ?>

</div>
<?php endif; ?>
<?php $metadataContent = ob_get_clean(); ?>
<?php if (trim($metadataContent) != ''): ?>
<div class="art-postmetadataheader">
<?php echo $metadataContent; ?>

</div>
<?php endif; ?>
<div class="art-postcontent">
<?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      $terms = get_terms_D7($content);
      hide($content[$terms['#field_name']]);
      print render($content);
    ?>

</div>
<div class="cleared"></div>
<?php ob_start(); ?>
<?php print $user_picture; ?>
<?php if (isset($content['links']) || isset($content['comments'])):
$output = art_links_woker_D7($content);
if (!empty($output)):	?>
<div class="art-postfootericons art-metadata-icons">
<?php echo $output; ?>

</div>
<?php endif; endif; ?>
<?php $metadataContent = ob_get_clean(); ?>
<?php if (trim($metadataContent) != ''): ?>
<div class="art-postmetadatafooter">
<?php echo $metadataContent; ?>

</div>
<?php endif; ?>

</div>

		<div class="cleared"></div>
    </div>
</div>

<?php
	$vars = get_defined_vars();
	$view = get_artx_drupal_view();
	$view->print_comment_node($vars);
?>
</div>