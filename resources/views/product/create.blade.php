<form action="/product" method="POST">
@csrf
    <div>
        <label>Nome</label>
        <input type="text" name="name" placeholder="Digite o nome do produto">
    </div>
    <div>
        <label>Descrição</label>
        <textarea name="desc" placeholder="Digite o nome do produto" rows="5"></textarea>
    </div>
    <div>
        <label>Preço</label>
        <input type="number" step="0.01" min="0.0" name="price" placeholder="Digite o preço">
    </div>
    <div>
        <label>Quantidade</label>
        <input type="number" step="1" min="0" name="units" placeholder="Digite a quantidade em estoque">
    </div>
    <div>
        <label>Nome</label>
        <select name="category_id">
            @foreach($categories as $category)    
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Criar Produto</button>
</form>