<section class="medium-8 columns">

	<?php foreach ($posts as $Post): ?>

	<article class="blog-post">
		
	    <!-- Plugins Post Begin -->
	    <?php Theme::plugins('postBegin') ?>
	    		
		<h3>
			<a href="<?php echo $Post->permalink() ?>"><?php echo $Post->title() ?></a> 
			<small><?php echo $Post->date() ?></small>
		</h3>
		
	    <!-- Post content -->
	    <div class="post-content">
	        <?php
	            // Cover Image
	            if($Post->coverImage()) {
	                echo '<img class="thumbnail" src="'.$Post->coverImage().'" alt="Cover Image">';
	            }
	
	            // Call the method with FALSE to get the first part of the post
	            echo $Post->content(false);
	        ?>
	    </div>
	
	    <?php if($Post->readMore()) { ?>
	    <a class="read-more" href="<?php echo $Post->permalink() ?>"><?php $Language->printMe('Read more') ?></a>
	    <?php } ?>
	    
		
		<div class="callout">
			<ul class="menu simple">
	            <?php
	                echo $Language->get('Posted By').' ';
	
	                if( Text::isNotEmpty($Post->user('firstName')) || Text::isNotEmpty($Post->user('lastName')) ) {
	                    echo '<li>' .$Post->user('firstName').' '.$Post->user('lastName'). '</li>';
	                }
	                else {
	                    echo '<li>' .$Post->user('username'). '</li>';
	                }
	            ?>
			</ul>
		</div>
		
	    <!-- Plugins Post End -->
	    <?php Theme::plugins('postEnd') ?>		

	</article>	

	<?php endforeach; ?>
	
</section>

<aside class="medium-3 columns" data-sticky-container>
	<?php include(PATH_THEME_PHP.'sidebar.php'); ?>
</aside>

<!-- Paginator for posts -->
<?php
	echo Paginator::html();
?>