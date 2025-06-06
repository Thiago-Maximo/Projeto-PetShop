<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="estilo_menu-compras.css">
  <link rel="stylesheet" href="menu_compras.js">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script> 
  <title>Carrinho de Compras - Página Lateral</title>
</head>
<body>
  <aside class="side-cart" role="region" aria-label="Carrinho de Compras">
    <h2 class="side-cart__header">Seu Carrinho</h2>
    <div class="side-cart__items" id="cart-items" tabindex="0" aria-live="polite">
      <!-- Items will be dynamically added here -->
    </div>
    <footer class="side-cart__footer">
      <div class="subtotal">
        <span>Total:</span>
        <span id="cart-total">R$ 0,00</span>
      </div>
      <button class="checkout-btn" id="checkout-btn" aria-label="Finalizar compra">
        <a class="compras" href="#">Finalizar Compras</a>
      </button>
    </footer>
</body>
</html>

