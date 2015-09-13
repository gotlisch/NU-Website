<?php get_header(); ?>
<body id="start">

	<!-- This is the overlay DIV that is displayed while loading a new page -->
	<div id="loader"></div>

	<div class="container">
	
	<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">NU</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Submit a product</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
	

				<div class="hero-unit">
					<h1>Infinite Scroll</h1>
					<p>here is a simple example of a infinite scroll!</p>
			</div>


		<!-- This is the main container (#scroll-container) -->
		<div id="scroll-container">
		
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>		
  
		<div class="content">
			<div class="row">
				<div class="col-md-3"></div>
				
					<div class="col-md-6">
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
							<div class="item">
						<? the_post_thumbnail( 'large-square' ); ?>
								<div class="panel-body">
									<h4><?php the_title(); ?></h4>
									<p><?php the_content(); ?></p>
								</div>
							</div>
						</a>		
					</div>
				<div class="col-md-3"></div>
			</div>  
  
  <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
  <div class="navigation index">
    <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
    <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
  </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>
		
		
			

			
		
			
			

			
			
			
			</div> 	<!-- end content -->

		</div>
	</div>

	<!-- These are all the links that can be loaded. -->
	<div id="pages">
		<a href="./index.html"></a>
		<a href="./page2.html"></a>
		<a href="./page3.html"></a>
		<a href="./page4.html"></a>
	</div>
	

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



</body>
</html>