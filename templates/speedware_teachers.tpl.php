<div class="speedware list teachers">
<?php foreach ($items as $teacher) : ?>
  <div class="item">
    <?php foreach ($teacher as $field => $value) : ?>
    <div class="<?php echo strtolower($field) ?>">
      <?php
      switch ($field) {
        case 'Fag':
          echo implode(', ', $value->string);
          break;
        default:
          echo $value;
      }
      ?>
    </div>
    <?php endforeach; ?>
  </div>
<?php endforeach; ?>
</div>
