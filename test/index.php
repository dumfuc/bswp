<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 uudised">
            <h1 class="pealkiri">Uudised</h1>
        </div>
    </div>
    <div class="row">
                        <?php
                        if(have_posts() ){
                            while(have_posts()){
                                the_post();

                                ?>

                                    <div class="col-md-4">
                                        <div class="col-md-12">
                                            <div class="card mb-3">
                                                <?php
                                                if(has_post_thumbnail()){ ?>
                                                    <img class="card-img-top img-fluid" src="<?php the_post_thumbnail('full', array()); ?>
                                                    <?php
                                                }
                                                ?>
                                                <div class="card-block">
                                                    <h4 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                    <p class="card-text"><small class="text-muted">Lisatud <?php the_time('d.m.Y'); ?> kell <?php the_time('H:i') ?></small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }
                        }

                        ?>

    <div class="row">
        <div class="col-sm-4 offset-sm-6">
            <nav>
                <ul class="pagination">
                    <li>
                        <?php previous_posts_link('<i class="fa fa-chevron-left"></i>'); ?>
                    </li>
                    <li>
                        <?php next_posts_link('<i class="fa fa-chevron-right"></i>'); ?>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>



<?php get_footer(); ?>