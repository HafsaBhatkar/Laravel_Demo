<div>
    <h1>Home Page</h1>
    <p>{{ $name }}</p>
    <h3><?php echo $name; ?></h3>
    <br>
    <!-- Random Function -->
    <h3>{{ rand(13, 100) }}</h3>

    <!-- Printing array -->
    <p>{{ $users[0] }}</p>
    @foreach ($users as $user)
        <h4>{{ $user }}</h4>
    @endforeach

    <!-- If else -->
    @if ($name == 'Hafsa')
        <h2>This is Hafsa</h2>
    @elseif ($name == 'Uzma')
        <h2>This is Uzma</h2>
    @else
        <h2>This is someone</h2>
    @endif

    <div>
        @for($i=0; $i<=10; $i++)
            <p>{{ $i }}</p>
        @endfor
    </div>


    <!-- When there is no desire, all things are at peace. - Laozi -->
</div>
