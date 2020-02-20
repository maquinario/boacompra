<?php $solution = get_field('solution'); if($solution): ?>
<section class="solution">
  <div class="container">
    <div class="solution-top">
      <h2 class="solution-title"><?php echo $solution['title']; ?></h2>
      <figure class="solution-image">
        <img src="<?php echo $solution['image'] ?>" alt="">
      </figure>
    </div>
    <?php $boxes = $solution['boxes']; if(!empty($boxes)): ?>
      <div class="solution-boxes">
        <?php foreach($boxes as $box): ?>
          <div class="solution-box">
            <h3 class="solution-subtitle"><?php echo $box['title']; ?></h3>
            <div class="solution-text">
              <?php echo $box['text']; $link = $box['link']; if(!empty($link)): ?>
                <a href="<?php echo $link['url'] ?>" class="solution-link"><?php echo $link['text']; ?></a>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>
