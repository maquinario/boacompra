<?php $products = get_field('products'); if($products): ?>
<section class="products">
  <div class="container">
    <div class="products-top">
      <h2 class="products-title"><?php echo $products['title']; ?></h2>
      <div class="products-text">
        <?php echo $products['text']; ?>
      </div>
    </div>
    <?php $productPages = get_posts(array('post_parent' => 16, 'post_type' => 'page')); array_multisort(array_column($productPages, 'menu_order'), SORT_ASC, $productPages); if(!empty($productPages)): ?>
    <ul class="products-list">
      <div class="products-listWrap">
        <?php foreach($productPages as $product): ?>
         <li class="product product-<?php echo sanitize_title(get_the_title($product)); ?>">
           <i class="icon-prod icon-<?php echo sanitize_title(get_the_title($product)); ?>"></i>
           <h3 class="product-title"><?php echo get_the_title($product); ?></h3>
           <div class="product-text">
             <?php the_field('description', $product) ?>
           </div>
         </li>
        <?php endforeach; ?>
      </div>
    </ul>
   <?php endif; ?>
 </div>
</section>
<?php endif; ?>
