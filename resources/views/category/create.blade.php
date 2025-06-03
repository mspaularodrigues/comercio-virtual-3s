<form action="/category" method="POST">
@csrf
    <div>
        <label>Nome da categoria</label>
        <input type="text" name="name" placeholder="Digite o nome da categoria">
    </div>
    <div>
        
    <button type="submit">Criar Categoria</button>
</form>