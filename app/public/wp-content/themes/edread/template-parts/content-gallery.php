<div class="flex flex-wrap center mb5 fade">
  <?php $images = get_sub_field('gallery'); ?>
  <?php foreach($images as $image) : ?>


    <div class="gallery-image mb2 justify-between ph1 <?php the_field('image_width', $image['id']); ?>">
      <?php echo wp_get_attachment_image($image['id'], 'full'); ?>

      <!-- here we assign our caption to a variable called $caption -->
      <?php $caption = wp_get_attachment_caption($image['id']); ?>

      <!-- if the caption is not empty, we render it onto the page -->
      <?php if(!empty($caption)) : ?>
        <p class="caption f6 o-50 pt3 mv0">
          <?php echo $caption; ?>
        </p>
      <?php endif; ?>
    </div>

  <?php endforeach; ?>
</div>
