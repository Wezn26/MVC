<p>Main Page!!!</p>

<?php foreach ($news as $value) : ?>
    <h3><?php echo $value['title']; ?></h3>
    <p><?php echo $value['text']; ?></p>
    <hr>
<?php endforeach; ?>

<!--<p>Name: <b><?php echo $name ?></b></p>
<p>Name: <b><?php echo $age ?></b></p>-->

<!--<p><?php var_dump($this->route['controller']); ?></p>-->



