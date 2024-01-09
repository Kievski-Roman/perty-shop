document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('myModal');
    var openBtns = document.querySelectorAll('.open-modal-btn');
    var closeBtn = document.getElementById('closeModalBtn');
    var modalImage = document.getElementById('modalProductImage');
    var modalName = document.getElementById('modalProductName');
    var modalDescription = document.getElementById('modalProductDescription');
    var modalPrice = document.getElementById('modalProductPrice');
    var quantityInput = document.getElementById('quantity');
    var addToCartBtn = document.getElementById('addToCartBtn');

    openBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            modal.style.display = 'block';
            // Заполните модальное окно данными соответствующего продукта
            modalImage.src = btn.parentElement.querySelector('img').src;
            modalName.textContent = btn.parentElement.querySelector('h3').textContent;
            modalDescription.textContent = btn.parentElement.querySelector('p').textContent;
            modalPrice.textContent = btn.parentElement.querySelector('.price').textContent;
        });
    });

    closeBtn.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });

    addToCartBtn.addEventListener('click', function() {
        // Добавьте здесь код для обработки добавления товара в корзину
        // Например, можно использовать значения из modalName, modalPrice и quantityInput
    });
});

