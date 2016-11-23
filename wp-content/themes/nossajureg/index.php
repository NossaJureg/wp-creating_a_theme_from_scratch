<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <?php while(have_posts()) : the_post(); ?>
                    <?php
                    $title = get_the_title();
                    $permalink = get_the_permalink();
                    $author_name = get_the_author();
                    $author_link = get_the_author_link();
                    $description = get_the_excerpt();
                    $published = get_the_date();
                    $thumbnail = get_the_post_thumbnail(null, null, ['class' => 'img-responsive']);
                    ?>
                    <h2> <a href="<?php echo $permalink; ?>"><?php echo $title; ?></a> </h2>
                    <p class="lead"> by <a href="<?php echo $author_link; ?>"><?php echo $author_name; ?></a> </p>
                    <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $published; ?></p>
                    <?php if ($thumbnail) : ?>
                        <hr>
                        <?php echo $thumbnail; ?>
                    <?php endif; ?>
                    <hr>
                    <p><?php echo $description; ?></p>
                    <a class="btn btn-primary" href="<?php echo $permalink; ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <hr>
                <?php endwhile; ?>
                
                <ul class="pager">
                    <?php if (get_previous_posts_link()) : ?>
                        <li class="previous"><?php previous_posts_link("&larr; Older"); ?></li>
                    <?php endif; ?>
                    <?php if (get_next_posts_link()) : ?>
                        <li class="next"><?php next_posts_link("Newer &rarr;"); ?></li>
                    <?php endif; ?>
                </ul>
            </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Blog Search Well -->
            <div class="well">
                <h4>Blog Search</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
                <!-- /.input-group -->
            </div>

            <!-- Blog Categories Well -->
            <div class="well">
                <h4>Blog Categories</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>

            <!-- Side Widget Well -->
            <div class="well">
                <h4>Side Widget Well</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
            </div>

        </div>

    </div>
    <!-- /.row -->

    <hr>

<?php get_footer(); ?>
