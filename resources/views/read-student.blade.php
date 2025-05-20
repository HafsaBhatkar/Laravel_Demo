<div>
    <h1>Student List</h1>
    <form action="search-student" method="post">
        @csrf
        <input class="search" type="text" name="value" value="{{ request('value')}}" placeholder="Search">
        <input type="submit" name="submit" value="Search">
    </form>

    <form action="deleteMultiple" method="post">
        @csrf
        <input type="submit" value="Delete" name="delete">
    </form>
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
                <input type="checkbox" name="ids[]" value="{{ $student->id }}" />
            </td>
        </tr>
        @endforeach
        
    </table>
   {{-- {{ $students->links() }} --}}


    <style>
        .search{
            padding: 0.4rem;
            width: 20%;
        }

        .w-5.h-5{
            width: 10px;
        }
    </style>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
</div>
