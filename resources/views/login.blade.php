<div>
    <h1>Login</h1>
    <form action="login" method="post">
        @csrf
        <div>
            <input type="text" name="name" placeholder="Enter your name">
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
    <!-- Well begun is half done. - Aristotle -->
</div>
