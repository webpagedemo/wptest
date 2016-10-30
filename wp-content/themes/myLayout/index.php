<?php get_header(); ?>

<!-- Main -->
        <div id="main">
                <?php if ( have_posts() ) : ?>
                    <?php // The loop ?>
                    <?php while( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', get_post_format() ); ?>
                        
                        <!-- Post -->
                        <article class="post">
                                <header>
                                        <div class="title">
                                                <h2><a href="#">Magna sed adipiscing</a></h2>
                                                <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                                        </div>
                                        <div class="meta">
                                                <time class="published" datetime="2015-11-01">November 1, 2015</time>
                                                <a href="#" class="author"><span class="name">Jane Doe</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/avatar.jpg" alt="" /></a>
                                        </div>
                                </header>
                                <a href="#" class="image featured"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pic01.jpg" alt="" /></a>
                                <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                                <footer>
                                        <ul class="actions">
                                                <li><a href="#" class="button big">Continue Reading</a></li>
                                        </ul>
                                        <ul class="stats">
                                                <li><a href="#">General</a></li>
                                                <li><a href="#" class="icon fa-heart">28</a></li>
                                                <li><a href="#" class="icon fa-comment">128</a></li>
                                        </ul>
                                </footer>
                        </article>
                        
                    <?php endwhile; ?>
                <?php endif; ?>
                <!-- Pagination -->
                        <ul class="actions pagination">
                                <li><a href="" class="disabled button big previous">Previous Page</a></li>
                                <li><a href="#" class="button big next">Next Page</a></li>
                        </ul>

        </div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>