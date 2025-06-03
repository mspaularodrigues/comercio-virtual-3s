<form action="/product/{{$product->id}}" method="POST">
@csrf
@method('PUT')
    <div>
        <label>Nome</label>
        <input type="text" name="name" placeholder="Digite o nome do produto" value="{{$product->name}}">
    </div>
    <div>
        <label>Descrição</label>
        <textarea name="desc" placeholder="Digite o nome do produto" rows="5">{{$product->desc}}</textarea>
    </div>
    <div>
        <label>Preço</label>
        <input type="number" step="0.01" min="0.0" name="price" placeholder="Digite o preço" value="{{$product->price}}">
    </div>
    <div>
        <label>Quantidade</label>
        <input type="number" step="1" min="0" name="units" placeholder="Digite a quantidade em estoque" value="{{$product->units}}">
    </div>
    <div>
        <label>Nome</label>
        <select name="category_id">
            @foreach($categories as $category)    
                <option value="{{$category->id}}"
                    {{$category->id == $product->category->id ? 'selected' : '' }}
                >{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Editar Produto</button>
</form>
