<h2 style="font-family: Arial, sans-serif">Tasks</h2>
@if(isset($tasks) && count($tasks))
    @foreach($tasks as $key => $task)
        <ul style="display: flex; font-family: Arial, sans-serif">
            <li style="cursor: pointer; list-style-type: none; padding: 0.3rem 0.6rem;
            border: 1px solid gray; border-radius: 6px; display: flex; box-sizing: border-box">
                <a href="{{ route('tasks.task', $task) }}">
                    {{($key+1) . '. ' . $task['name']}}
                </a>
            </li>
        </ul>
    @endforeach
@endif

