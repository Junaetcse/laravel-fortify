<x-guest-layout>


<div>


<div action="/login" method="POST" style="width: 50%; text-align: center; margin-left: 23%;">
    @csrf
       

        <div class="container">
            <h1>Login</h1>

            <div class="mb-4 text-sm text-gray-600">
                'Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.'
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    A new verification link has been sent to the email address you provided during registration.
                </div>
            @endif

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

         
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <button type="submit">
                        {{ __('Resend Verification Email') }}
                    </button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>

        </div>
</div>
</div>
</x-guest-layout>