<?php foreach($Posts as $key => $post): ?>
	<div class="span4">
	<h5><?php echo $post['Post']['title']; ?></h5>
	<p><?php echo $post['Post']['body']; ?></p>
	<p><?php echo $this->Html->link("View details", array('controller'=>'posts', 'action' =>'details', $post['Post']['id']), array('class'=>'btn'));  ?></p>
</div>
<?php endforeach; ?>
