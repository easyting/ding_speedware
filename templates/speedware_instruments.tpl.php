<div class="speedware_container">
  <table class="speedware list instruments">
  <?php foreach ($items as $i => $instrument) : ?>
    <tr class="item <?php echo $i % 2 == 0 ? "even" : "odd" ?>">
      <?php foreach ($instrument as $field => $value) : ?>
      <td class="<?php echo strtolower($field) ?>"><?php echo $value ?></td>
      <?php endforeach; ?>
    </tr>
  <?php endforeach; ?>
  </table>
</div>
