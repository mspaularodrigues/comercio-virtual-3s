<table border="1">
    <thead>
    <tr>
        <th>Id</th>
        <th>Ingredientes</th>
        <th>Recomendação de uso</th>
        <th>Modo de Preparo</th>
        <th>Produto</th>
        <th>Advertência</th>
        <th>Alergênics</th>
        <th>Tamanho</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
        
@foreach($infoProduct as $info)
    <tr>
        <td>{{$info->id}}</td>
        <td>{{$info->ingredientes}}</td>
        <td>{{$info->recomendacao_uso}}</td>
        <td>{{$info->modo_preparo}}</td>
        <td>{{$info->product->name}}</td>
        <td>{{$info->advertencia}}</td>
        <td>{{$info->alergenicos}}</td>
        <td>{{$info->tamanho}}</td>
       <td style="display: flex">
            <a href="/product/{{$info->product->id ?? 0}}/edit">Edit</a>
            <form action="/product/{{$info->product->id ?? 0}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Apagar</button>
            </form>
        </td>
    </tr>
@endforeach
    </tbody>
</table>
