@foreach ($tasks as $task)
    <li>
        <a href="/tasks/{{ $task->id }}"> <!-- /tasks = ./ -->
            {{ $task->body }}
        </a>
    </li>
@endforeach
