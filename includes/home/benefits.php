<?php
$benefits = get_field('benefits'); if($benefits): ?>
  <section class="benefits">
    <div class="container">
      <figure class="benefits-img">
        <img src="<?php echo $benefits['image']; ?>">
      </figure>
      <div class="benefits-content">
        <h2 class="benefits-title"><?php echo $benefits['title']; ?></h2>
        <div class="benefits-text">
          <?php echo $benefits['text']; ?>
        </div>
        <?php $benefitsList = $benefits['list']; if(!empty($benefitsList)): ?>
          <ul class="benefits-list">
            <?php foreach($benefitsList as $benefit): ?>
              <li class="benefit">
                <i class="benefit-icon icon-<?php echo $benefit['icon']; ?>"></i>
                <p class="benefit-text"><?php echo $benefit['item'] ?></p>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endif; ?>
