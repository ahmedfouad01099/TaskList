<h1>
    The list of tasks
</h1>

<!-- <div>
    @if(count($tasks))
        @foreach ($tasks as $task)
        <div>
            {{ $task->title }}
        </div>
        
        @endforeach
    @else
        <div>There are no tasks</div>
    @endif
</div> -->

<div>
    @forelse($tasks as $task)
        <div> {{$task->description}}</div>
    @empty
        <div>There are no tasks</div>
    @endforelse
</div>