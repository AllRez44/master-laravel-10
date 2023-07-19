<h2 style="font-family: Arial, sans-serif">Task</h2>
@if(isset($task))
    <h3 style="font-family: Arial, sans-serif"> {{$task['name']}}</h3>
    <p style="font-family: Arial, sans-serif; margin-left: 1rem">
        <strong>Category:</strong> {{$task['category']}}
    </p>
    <p style="font-family: Arial, sans-serif; margin-left: 1rem">
        <strong>Urgency:</strong> {{$task['urgency']}}
    </p>
@endif
<br/>
<a href="{{route('tasks.index')}}" style="text-decoration: none; color: lightblue; text-transform: capitalize;
    border: 1px solid dodgerblue; background-color: darkslateblue; font-family: Arial, sans-serif;
    padding: 0.3rem 0.6rem; border-radius: 6px; font-size: 0.8rem"
   type="button"> back </a>
