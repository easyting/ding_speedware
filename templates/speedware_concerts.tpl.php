<div class="speedware_container">
  <table class="speedware list concerts">
  <?php foreach ($items as $i => $concert) : ?>
    <tr class="item <?php echo $i % 2 == 0 ? "even" : "odd" ?>">
      <?php foreach ($concert as $field => $value) : ?>
      <td class="<?php echo strtolower($field) ?>">
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
      </td>
      <?php endforeach; ?>
    </tr>
  <?php endforeach; ?>
  </table>
</div>
