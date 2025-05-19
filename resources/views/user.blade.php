<div>
    <h1>User Login</h1>
   <form action="users" method="post">
        @csrf
        <!-- <input type="hidden" name="_method" value="put"> -->
        <div>
            <input type="text" name="name" placeholder="Enter your name" value="{{ old('name') }}">
        </div>
        <div>
            <input type="text" name="password" placeholder="Enter your password">
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
