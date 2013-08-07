<div class="speedware list concerts">
<?php foreach ($items as $concert) : ?>
  <div class="item">
    <?php foreach ($concert as $field => $value) : ?>
    <div class="<?php echo strtolower($field) ?>">
      <?php
      switch ($field) {
        case 'Dato':
          echo $value->format('Y-m-d');
        break;

        case 'Starttid':
          echo $value->format('H:i');
        break;

        case 'Sluttid':
          echo $value->format('H:i');
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
