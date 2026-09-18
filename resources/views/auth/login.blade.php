<x-layout title="Login">
    <div style="text-align:center; margin-bottom:25px;">
        <h1 style="color:#764ba2; margin:0;">Welcome Back</h1>
        <p style="color:#888; margin-top:5px;">Login to continue</p>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div style="margin-bottom: 18px;">
            <input type="email" name="email" placeholder="Email" 
                style="width:100%; padding:12px; border:1px solid #ddd; border-radius:8px; box-sizing:border-box; font-size:14px;">
        </div>

        @error('email')
            <p style="color: red ; font-size: 12px;">
                {{ $message}}
            </p>
        
            @enderror 

        <div style="margin-bottom: 18px;">
            <input type="password" name="password" placeholder="Password"
                style="width:100%; padding:12px; border:1px solid #ddd; border-radius:8px; box-sizing:border-box; font-size:14px;">
        </div>

        @error('password')
            <p style="color: red ; font-size: 12px;">
                {{ $message}}
            </p>
        @enderror 

        <div>
            <button type="submit"
                style="width:100%; background:#764ba2; color:white; border:none; padding:13px; border-radius:8px; font-size:16px; font-weight:600; cursor:pointer;">
                Login
            </button>
        </div>
    </form>

    <div style="text-align:center; margin-top:20px; color:#888;">
        Don't have an account? <a href="{{ route('register') }}" style="color:l; font-weight:600; text-decoration:none;">Register</a>
    </div>
</x-layout>