<div>
    <h1>User Form</h1>

    <!-- @if($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif -->
    <form action="user-form" method="post">
        @csrf
        <div>
            <input type="text" name="userName" placeholder="Enter your name" 
            value="{{ old('userName') }}"
            class="{{ $errors->first('userName') ? 'input-error' : '' }}">
            <span>
                @error('userName'){{$message}}@enderror
            </span>
        </div>
        <div>
            <input type="text" name="userCity" placeholder="Enter your city" 
            value="{{ old('userCity') }}"
            class="{{ $errors->first('userCity') ? 'input-error' : '' }}">
            <span>
                @error('userCity'){{ $message }}@enderror
            </span>
        </div>
        <div>
            <input type="text" name="userEmail" placeholder="Enter your email" 
            class="{{ $errors->first('userEmail') ? 'input-error' : '' }}"
            value="{{ old('userEmail') }}">
            <span>
                @error('userEmail'){{ $message }}
                @enderror
            </span>
        </div>
        <br>
        <div>
            <input type="submit" name="submitBtn" value="Add User">
        </div>
    </form>


    <style>
        input{
            margin-bottom: 0.8rem;
        }
        .input-error{
            border: 2px solid red;
        }
    </style>


    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
</div>
