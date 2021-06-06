<x-guest-layout>


<div>
<form action="/register" method="POST" style="width: 50%; text-align: center; margin-left: 23%;">
    @csrf
       

        <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <hr>

            <label for="Name"><b>Name</b></label>
            <input type="text" placeholder="Enter Email" name="name" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="psw" required>
            
        
            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="password_confirmation" id="psw-repeat" required>
            <hr>

            <button type="submit" class="registerbtn">Register</button>
        </div>
</form>
</div>
</x-guest-layout>