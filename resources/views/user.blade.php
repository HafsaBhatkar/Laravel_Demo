<div>
    <h1>User</h1>
   <form action="users" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <div>
            <input type="text" name="name" placeholder="Enter your name" value="{{ old('name') }}">
        </div>
        <div>
            <input type="text" name="age" placeholder="Enter your age">
        </div>
        <div>
            <input type="text" name="email" placeholder="Enter your email">
        </div>
        <div>
            <input type="submit" name="submit" value="Submit">
        </div>
   </form>

   <style>
        input{
            margin-bottom: 0.5rem;
            padding: 0.2rem;
        }
   </style>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
</div>
