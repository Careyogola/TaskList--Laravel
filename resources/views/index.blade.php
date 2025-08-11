<div>
    <h1>Welcome To Blade</h1>
</div>

<div>
    @if (count($tasks))
    @foreach ($tasks as $task )
    <div>
        {{ $task->title }}
        
    </div>
    <div>
        {{ $task ->description }}
    </div>
    
    @endforeach
    
    @endif
</div>