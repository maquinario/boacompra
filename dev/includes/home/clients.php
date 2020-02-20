<?php $clients = get_field('clients');
if($clients): ?>
<section class="clients">
  <div class="container">
    <div class="clients-top">
      <h2 class="clients-title"><?php echo $clients['title']; ?></h2>
      <div class="clients-text">
        <?php echo $clients['text']; ?>
      </div>
    </div>
    <?php $logos = $clients['logos'];
    if(!empty($logos)): ?>
      <ul class="clients-list">
        <?php foreach($logos as $logo): ?>
          <li class="client" style="background-image: url(<?php echo $logo['logo']; ?>);">
            <?php if($logo['link']): ?>
              <a href="<?php echo $logo['link']; ?>"><?php echo $logo['name']; ?></a>
            <?php else: ?>
              <?php echo $logo['name']; ?>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>
