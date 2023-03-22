<section class="form">
    <div class="container">
        <h1 class="catalog-title">Добавление товара</h1>
        <form method="post" action="../createproduct.php" enctype="multipart/form-data">
            <p>
                <label for="id1">Наименование:</label>
                <input type="text" name="name" id="id1">
            </p>
            <p>
                <label for="id2">Описание:</label>
                <input type="text" name="description" id="id2">
            </p>
            <p>
                <label for="id3">Цена:</label>
                <input type="text" name="price" id="id3">
            </p>
            <p>
                <label for="id4">Изображение:</label>
                <input type="file" name="picture[]" id="id4" multiple>
            </p>
            <p>
            <p><input type="submit" value="Создать"></p>
        </form>
    </div>
</section>