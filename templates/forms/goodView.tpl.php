<form>
    <img src=<?php echo $image;?> alt="">

    <?php foreach ($properties as $key => $value) :?>
        <h3> <?php echo $key; ?>  </h3>
        <p>  <?php echo $value; ?> </p>
    <?php endforeach;?>

</form>