<h1>This is a test view</h1>
<p>
	If you see this, everything seems to work. Now, for some capitals:
</p>
<ul>
	<?php foreach($this->data["capitals"] as $capital): ?>
		<li>The capital of <strong><?php echo $capital[0]; ?></strong> is <strong><?php echo $capital[1]; ?></strong>.</li>
	<?php endforeach; ?>
</ul>