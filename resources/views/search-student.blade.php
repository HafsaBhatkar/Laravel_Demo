<div>
    <h1>Search Student</h1>

    <table border="2">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Operations</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->phone}}</td>
            <td>{{$student->created_at}}</td>
            <td>{{$student->updated_at}}</td>
            <td>
                <a href="{{ 'delete/'.$student->id }}">Delete</a>
                <a href="{{ 'edit/'.$student->id }}">Edit</a>
            </td>
        </tr>
        @endforeach
        
    </table>

    {{ $students->appends(['value'=> $value])->links() }}

    
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
</div>
