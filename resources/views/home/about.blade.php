<x-app-layout>
    <div class="mx-auto sm:px-6 lg:px-8 mb-10">
        Sobre
    </div>







    <footer>
        <div class="footer-column">
          <h3>Navegação</h3>
          <ul>
            <li>Aventura</li>
            <li>Terror</li>
          </ul>
        </div>
        <div class="footer-column">
          <h3>Redes Sociais</h3>
          <ul>
            <li>Instagram</li>
            <li>Twitter</li>
            <li>Facebook</li>
          </ul>
        </div>
        <div class="footer-column">
          <h3>Conta</h3>
          <ul>
            <li>Criar conta</li>
            <li>Login</li>
          </ul>
        </div>
        <div class="footer-bottom">
          <p>&copy; 2023 Utopy - Plataforma de Jogos Indies. Todos os direitos reservados.</p>
        </div>
      </footer>
      <style>
        /* Estilos CSS para o footer */
        footer {
          background-color:blueviolet	 ;
          padding: 20px;
          text-align: center;
        }

        .footer-column {
          display: inline-block;
          vertical-align: top;
          margin-right: 250px;
        }

        .footer-column h3 {
          font-size: 18px;
          margin-bottom: 10px;
        }

        .footer-column ul {
          list-style: none;
          padding: 0;
        }

        .footer-column li {
          margin-bottom: 50px;
        }

        .footer-bottom {
          font-size: 14px;
          color: white ;
        }
      </style>
</x-app-layout>
