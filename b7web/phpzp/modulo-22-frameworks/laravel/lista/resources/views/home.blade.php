<h1> Lista de Tarefas </h1>
@if(count($lista) > 0)
    <ul>
    @foreach($lista as $item)
            <li>{{$item->item}} <a href="delete/{{$item->id}}">[X]</a></li>
    @endforeach
    </ul>
@else
    <h4>Não há itens</h4>
@endif

<hr>

<form method="post">
    {{csrf_field()}}
    <input type="text" name="item">
    <input type="submit" value="+">
</form>
