<div>
    <h1>Home Page</h1>
    <a href="about">About</a>
    
    <h3>
        {{ URL::previous() }}
    </h3>

    <h3>
        {{ URL::full() }}
    </h3>

    <h3>
        {{ url()->current() }}
    </h3>
    <h3>
        {{ url()->full() }}
    </h3>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
</div>
