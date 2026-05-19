<?php
$start        = strtotime('next years');
$end          = mktime(0, 0, 0, 2, 1, 2021);
$start_date   = date('D, j M \'y', $start); // Sat, 1 Jan '21
$end_date     = date('l, F d, Y', $end); // Sunday, 
?>
<?php include 'includes/header.php'; ?>

  <p><b>Sale starts:</b> <?= $start_date ?></p>
  <p><b>Sale ends:</b> <?= $end_date ?></p>

<?php include 'includes/footer.php'; ?>