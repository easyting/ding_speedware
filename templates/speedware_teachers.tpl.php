<div class="speedware_container">
  <table class="speedware list teachers">
  <?php foreach ($items as $i => $teacher) : ?>
    <tr class="item <?php echo $i % 2 == 0 ? "even" : "odd" ?>">
      <?php foreach ($teacher as $field => $value) : ?>
      <td class="<?php echo strtolower($field) ?>">
        <?php
        switch ($field) {
          case 'Fag':
            if (is_object($value)) {
              echo implode(', ', (array)$value->string);
            }
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
