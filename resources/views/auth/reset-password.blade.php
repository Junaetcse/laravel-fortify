<x-guest-layout>


<div>
<form action="/reset-password" method="POST" style="width: 50%; text-align: center; margin-left: 23%;">
    @csrf
       
        <div class="container">
            <h1>Forgot Password</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
            <hr>

            <input type="hidden"  name="token" id="psw" value="{{request()->route('token')}}">


            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" value="{{old('email',$request->email) }}" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="psw" required>
            
        
            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="password_confirmation" id="psw-repeat" required>
            <hr>
            <button type="submit" class="registerbtn">Reset link</button>
        </div>
</form>
</div>
</x-guest-layout>