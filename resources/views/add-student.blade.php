<div>
    <h1>Student Details</h1>

    <form action="add-student" method="post">
        @csrf
        <div>
            <input type="text" name="name" placeholder="Enter your name">
        </div>
        <div>
            <input type="email" name="email" placeholder="Enter your email">
        </div>
        <div>
            <input type="phone" name="phone" placeholder="Enter your phone no.">
        </div>
        <div>
            <input type="submit" name="submit" value="Submit">
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
