<x-layout title="Register">
    <div style="text-align:center; margin-bottom:25px;">
        <h1 style="color:#764ba2; margin:0;"> Create Account</h1>
        <p style="color:#888; margin-top:5px;">Join us in a few seconds</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div style="margin-bottom: 18px;">
            <input type="text" name="first_name" placeholder="Name" 
                style="width:100%; padding:12px; border:1px solid #ddd; border-radius:8px; box-sizing:border-box; font-size:14px;">

            @error('first_name')
                <p style="color: red ; font-size: 12px;">
                    {{ $message}}
                </p>
            @enderror                        
        </div>

        <div>
            <input type="text" name="last_name" placeholder="Last Name" 
                style="width:100%; padding:12px; border:1px solid #ddd; border-radius:8px; box-sizing:border-box; font-size:14px;">

            @error('last_name')
                <p style="color: red ; font-size: 12px;">
                    {{ $message}}
                </p>
            @enderror 
        </div>
        <br>

        <div style="margin-bottom: 18px;">
            <input type="email" name="email" placeholder="Email" 
                style="width:100%; padding:12px; border:1px solid #ddd; border-radius:8px; box-sizing:border-box; font-size:14px;">

                @error('email')
                    <p style="color: red ; font-size: 12px;">
                        {{ $message}}
                    </p>
                @enderror 
        </div>

        <div style="margin-bottom: 18px;">
            <input type="password" name="password" placeholder="Password" 
                style="width:100%; padding:12px; border:1px solid #ddd; border-radius:8px; box-sizing:border-box; font-size:14px;">

                @error('password')
                    <p style="color: red ; font-size: 12px;">
                        {{ $message}}
                    </p>
                @enderror 
        </div>

        <div style="margin-bottom: 18px;">
            <input type="password" name="password_confirmation" placeholder="Confirm Password" 
                style="width:100%; padding:12px; border:1px solid #ddd; border-radius:8px; box-sizing:border-box; font-size:14px;">

            @error('password_confirmation')
                <p style="color: red ; font-size: 12px;">
                    {{ $message}}
                </p>
            @enderror                
        </div>

        <div>
            <button type="submit"
                style="width:100%; background:#764ba2; color:white; border:none; padding:13px; border-radius:8px; font-size:16px; font-weight:600; cursor:pointer;">
                Register
            </button>
        </div>
    </form>

    <div style="text-align:center; margin-top:20px; color:#888;">
        Already have an account? <a href="{{ route('login') }}" style="color:#764ba2; font-weight:600; text-decoration:none;">Login</a>
    </div>
</x-layout>