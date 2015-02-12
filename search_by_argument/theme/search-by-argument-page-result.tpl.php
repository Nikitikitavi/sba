<?php if(!empty($nodes)):?>
	<h2>List of nodes contains "<?php print $search_term;?>"</h2>
		<ul>
			<?php foreach($nodes as $node):?>
				<li><?php print '<a href="/node/' . $node->nid . '">' . $node->title;?></a></span></li>
			<?php endforeach;?>
		</ul>
<?php else:?>
	<div>No results matching your search.</div>
<?php endif;?>