<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../../assets/css/main.css"> 
    <link rel="stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="../footer/footer.css">

    <title>Document</title>
</head>
<body>
    <div class="conteiner">
        <?php include '../header/header.php'; ?>
    <main class="home">
        <div class="preview">
            <h2 class="preview__title">Порадуй свого найкращого чотирилапого друга найсмачнішим обідом – тепер у нас є вишукані страви для твого улюбленця!</h2>
            <a href="#" class="preview__link">КУПИТИ ЗАРАЗ</a>
        </div>
        <div class="product">
            <h2 class="product__title">
                НОВИНКА
            </h2>
        <div class="product__cards">
            <div class="product-card">
                <img src="../../img/cards-photo.png" alt="Product 1">
                <h3>Product 1</h3>
                <p>Description of Product 1.</p>
                <span class="price">$19.99</span>
                <button class="open-modal-btn">Add to Cart</button>
            </div>
            
            <div class="product-card">
                <img src="../../img/cards-photo.png" alt="Product 2">
                <h3>Product 2</h3>
                <p>Description of Product 2.</p>
                <span class="price">$29.99</span>
                <button class="open-modal-btn">Add to Cart</button>
            </div>
            
            <div class="product-card">
                <img src="../../img/cards-photo.png" alt="Product 3">
                <h3>Product 3</h3>
                <p>Description of Product 3.</p>
                <span class="price">$39.99</span>
                <button class="open-modal-btn">Add to Cart</button>
            </div>
            
            <div class="product-card">
                <img src="../../img/cards-photo.png" alt="Product 4">
                <h3>Product 4</h3>
                <p>Description of Product 4.</p>
                <span class="price">$49.99</span>
                <button class="open-modal-btn">Add to Cart</button>
            </div>
        </div>
        <div class="modal" id="myModal">
            <div class="modal-content">
                <span class="close" id="closeModalBtn">&times;</span>
                <img src="" alt="Product Image" id="modalProductImage">
                <h2 id="modalProductName">Product Name</h2>
                <p id="modalProductDescription">Description of the product.</p>
                <span id="modalProductPrice">$0.00</span>
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" value="1" min="1">
                <button id="addToCartBtn">Add to Cart</button>
            </div>
        </div>
        
        <div class="conteiner-link">
            <a href="#" class="product__link">КУПИТИ ЗАРАЗ</a>
        </div>
        </div>
        <div class="info">
            <div class="info__items">
                <div class="info__item">
                    <h3 class="info__title">NATURAL
                        INGREDIENTS</h3>
                    <p class="info__text">I'm a paragraph. Click here to add your own text and edit me.</p>
                </div>
                <div class="info__item">
                    <h3 class="info__title">100%
                        HOMEMADE</h3>
                    <p class="info__text">I'm a paragraph. Click here to add your own text and edit me.</p>
                </div>
                <div class="info__item">
                    <h3 class="info__title">100%
                        HOMEMADE</h3>
                    <p class="info__text">I'm a paragraph. Click here to add your own text and edit me.</p>
                </div>
            </div>
        </div>
    </main>
<?php include '../footer/footer.php'; ?>
    </div>
 
<script src="../header/header.js">
</script>
<script src="../../assets/js/main.js">
</script>
<script src="../footer/footer.js"></script>
 <!--
<script src="blocks/product/product.js"></script>

<script src="assets/js/main.js"></script>
    -->

</body>
</html>