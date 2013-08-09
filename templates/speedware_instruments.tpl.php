<div class="speedware list instruments">
<?php foreach ($items as $instrument) : ?>
  <div class="item">
    <?php foreach ($instrument as $field => $value) : ?>
    <div class="<?php echo strtolower($field) ?>">
      <?php
      switch ($field) {
        default:
          echo $value;
      }
      ?>
    </div>
    <?php endforeach; ?>
  </div>
<?php endforeach; ?>
</div>
