<?php if (validation_errors()) : ?>
<div class="notification error">
	<p><?php echo validation_errors(); ?></p>
</div>
<?php endif; ?>

<?php echo form_open($this->uri->uri_string()); ?>

	<!-- Tab Area -->
	<div class="tabs">
		
		<!-- Page Content -->
		<div id="content-tab">
			
			<a href="#" class="page-changer" id="page-two-link">Options &raquo;</a>
			
			<!-- Title -->
			<h2 class="page-title"><?php echo $page->page_title ?></h2>
			
			<textarea name="body" id="body"><?php echo $page->body; ?></textarea>
				
			
		</div>
		
		
		<!-- Page Settings -->
		<div id="setting-tab">
			<!-- Container? -->
			<div>
				<label>Container?</label>
				<input type="checkbox" name="is_folder" value="1" <?php echo isset($page) && $page->is_folder == '1' ? 'checked="checked"' : set_checkbox('is_folder', '1'); ?> />
			</div>
			<!-- Rich Text? -->
			<div>
				<label>Rich Text?</label>
				<input type="checkbox" name="rich_text" value="1" <?php echo isset($page) && $page->rich_text == '1' ? 'checked="checked"' : set_checkbox('rich_text', '1'); ?> />
			</div>
			
			<!-- Searchable? -->
			<div>
				<label>Searchable?</label>
				<input type="checkbox" name="searchable" value="1" <?php echo isset($page) && $page->searchable == '1' ? 'checked="checked"' : set_checkbox('searchable', '1'); ?> />
			</div>
			<!-- Cachable? -->
			<div>
				<label>Cacheable?</label>
				<input type="checkbox" name="cacheable" value="1" <?php echo isset($page) && $page->cacheable == '1' ? 'checked="checked"' : set_checkbox('cacheable', '1'); ?> />
			</div>
			<!-- Deleted? -->
			<div>
				<label>Deleted?</label>
				<input type="checkbox" name="deleted" value="1" <?php echo isset($page) && $page->deleted == '1' ? 'checked="checked"' : set_checkbox('deleted', '1'); ?> />
			</div>
		</div>
	</div>
	
	<div class="submits">
		<input type="submit" name="submit" value="Save Page" />
	</div>

<?php echo form_close(); ?>

<script>
head.ready(function() {
	// Tabs
	$('.tabs').tabs();
	
	// Details toggle
	$('#details-toggle').click(function(){
		var status = $(this).text();
		
		if (status == 'Show Details')
		{
			$('#page-info').slideDown();
			$(this).text('Hide Details');
		}
		else
		{
			$('#page-info').slideUp();
			$(this).text('Show Details');
		}
	
		return false;
	});
});
</script>