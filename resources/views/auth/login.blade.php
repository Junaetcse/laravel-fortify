<x-guest-layout>


<div>
<form action="/login" method="POST" style="width: 50%; text-align: center; margin-left: 23%;">
    @csrf
       

        <div class="container">
            <h1>Login</h1>
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

         
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="psw" required>
        
             <hr>

            <button type="submit" class="registerbtn">Login</button>
        </div>
</form>
</div>
</x-guest-layout>