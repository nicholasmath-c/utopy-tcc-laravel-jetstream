<form action="{{ route('checkout') }}" method="post">
    @csrf
    @method('POST')

    <!-- Aqui você pode adicionar campos de input para os dados do produto -->
    <input type="text" name="name" placeholder="Nome do produto">
    <input type="number" name="price" placeholder="Preço do produto">
    <input type="number" name="quantity" placeholder="Quantidade do produto">
    <button type="submit">Finalizar Compra</button>
</form>
