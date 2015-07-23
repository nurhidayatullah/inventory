<?php $last_key = count($items) - 1 ?>

<?php !isset($separator) and $separator = '&raquo;' ?>

<?php foreach ($items as $key => $item): ?>
  <?php if ($key < $last_key): ?>
    <?php echo link_to(
      $item->getText(),
      $item->getUri(ESC_RAW),
      $item->getOptions() instanceOf sfOutputEscaperArrayDecorator ? $item->getOptions()->getRawValue() : $item->getOptions()
    ) ?>  
    <?php echo $separator ?>
  <?php else: ?>
    <strong><?php echo $item->getText() ?></strong>
  <?php endif ?>
<?php endforeach ?>