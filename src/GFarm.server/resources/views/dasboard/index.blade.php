@extends('leyaut')
@section('Body')
<ul>
    <?php foreach($tarefas as $tarefa): ?>
        <li><?= $tarefa; ?></li>
        lista
    <?php endforeach ?>
</ul>
@endsection
    
