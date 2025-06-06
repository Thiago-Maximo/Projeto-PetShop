// menu_compras.js

document.addEventListener('DOMContentLoaded', () => {
  const botaoCarrinho = document.getElementById('abrir-compras');

  if (botaoCarrinho) {
    botaoCarrinho.addEventListener('click', () => {
      fetch('menu_compras.php')
        .then(response => response.text())
        .then(data => {
          const container = document.getElementById('conteudo-carrinho');
          container.innerHTML = data;

          const carrinho = container.querySelector('.side-cart');
          if (carrinho) {
            // Estilo slide-in lateral
            carrinho.style.position = 'fixed';
            carrinho.style.right = '0';
            carrinho.style.top = '0';
            carrinho.style.height = '100%';
            carrinho.style.zIndex = '9999';
            carrinho.style.backgroundColor = '#fff';
            carrinho.style.boxShadow = '-2px 0 5px rgba(0,0,0,0.3)';
            carrinho.style.transition = 'right 0.3s ease-in-out';

            // Fecha o carrinho ao clicar fora dele
            const fecharAoClicarFora = (event) => {
              if (!carrinho.contains(event.target) && event.target !== botaoCarrinho) {
                container.innerHTML = ''; // Remove o conteúdo
                document.removeEventListener('click', fecharAoClicarFora); // Remove o listener
              }
            };

            // Adiciona o listener para clique fora
            setTimeout(() => {
              document.addEventListener('click', fecharAoClicarFora);
            }, 10); // Pequeno delay para evitar fechamento imediato
          }
        })
        .catch(error => {
          console.error('Erro ao carregar o carrinho:', error);
        });
    });
  }
});
