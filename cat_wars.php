<?php
	$pageTitle = "Cat Wars";
	$pageCurrent = "cat_wars";
	$section = "home";
?>
<?php include('inc/header.php'); ?>

<div class="content-left grid_9">
<h4>Cat Wars: Lion vs Cheetah</h4>
<div class="fit-vids">
<iframe src="http://player.vimeo.com/video/28725021?title=0&amp;portrait=0" width="894" height="500" frameborder="0"></iframe>
</div>
</div>
<script>
    // Basic FitVids Test
    $(".fit-vids").fitVids();
</script>
<div class="sidebar grid_3">
<h3>Cat Wars</h3>
<p>
Role: Designer, Animator</br>
Art Director: Scott Pryor</br>
Production: Pixeldust Studio
</p>
<?php include('inc/share.php'); ?>
<!-- Previous/Next -->

<?php include('inc/previous_next.php'); ?>


<!-- Previous/Next ends -->
</div>
<?php include('inc/footer.php'); ?>