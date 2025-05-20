<div>
    <h1>Edit Student Details</h1>

    <form action="/edit-student/{{ $students->id }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div>
            <input type="text" name="name" value="{{ $students->name }}" placeholder="Enter your name">
        </div>
        <div>
            <input type="email" name="email" value="{{ $students->email }}" placeholder="Enter your email">
        </div>
        <div>
            <input type="phone" name="phone" value="{{ $students->phone }}" placeholder="Enter your phone no.">
        </div>
        <div>
            <input type="submit" name="update" value="Update">
            <a href="/read-student">Cancel</a>
        </div>
    </form>

    <style>
        input{
            margin-bottom: 0.5rem;
            padding: 0.3rem;
        }
    </style>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div>
