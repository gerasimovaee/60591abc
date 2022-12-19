<section class="item">
    <?
    $id = $_GET['product_id'];
    $result = $conn->query("SELECT * FROM products WHERE id=".$id);
    $item = $result->fetch() ?>
    <div class="container">
        <h1 class="item-title"><?= $item['name'] ?></h1>
        <img src="<?= $item['image_URL'] ?>" width="510" height="392" alt="<?= $item['name'] ?>">
        <p class="price"><del><?= $item['price']*1.1 ?></del> <?= $item['price'] ?></p>
        <p><?= $item['description'] ?></p>
    </div>
</section>