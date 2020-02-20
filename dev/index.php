<?php get_header(); ?>

<?php query_posts('pagename=home');
if(have_posts()):while(have_posts()):the_post();

if(have_rows('banner')): ?>
<section class="banners">
  <div class="container">
    <?php while(have_rows('banner')):the_row(); ?>
      <figure class="banner" style="background-image: url(<?php the_sub_field('imagem'); ?>);">
        <?php if(get_sub_field('link')): ?>
          <a href="<?php the_sub_field('link'); ?>" class="banner-link"><?php the_sub_field('titulo') ?></a>
        <?php endif; ?>
        <div class="banner-content">
          <h2 class="banner-title"><?php the_sub_field('titulo') ?></h2>
        </div>
      </figure>
    <?php endwhile; ?>
  </div>
</section>
<?php endif; ?>

<?php get_template_part('includes/home/benefits'); ?>

<?php get_template_part('includes/home/solution'); ?>

<?php get_template_part('includes/home/products'); ?>

<?php get_template_part('includes/home/clients'); ?>

<?php include(locate_template('includes/cta.php', false, false)); ?>



<?php endwhile; endif; ?>
<?php get_footer(); ?>
