<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My App' }}</title>
</head>
<body style="margin:0; font-family: 'Segoe UI', Arial, sans-serif; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh;">

    <div style="background: rgba(255,255,255,0.95); padding: 15px 40px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 10px rgba(0,0,0,0.15);">
        <div style="font-weight: bold; font-size: 22px; color: #764ba2;">
            <a href="{{ url('/') }}" style="text-decoration: none; color: #764ba2;">My App</a>
        </div>

        <div style="display: flex; gap: 10px; align-items: center; background: #f0f0f3; padding: 6px; border-radius: 30px;">
            @guest
                <x-nav-link href="{{ route('login') }}" :active="request()->is('login')">
                    Login
                </x-nav-link>

                <x-nav-link href="{{ route('register') }}" :active="request()->is('register')">
                    Register
                </x-nav-link>
            @endguest

            @auth
                
                 <x-nav-link href="{{ route('posts') }}" :active="request()->routeIs('posts')">
                    View Posts
                </x-nav-link>

                <x-nav-link href="{{ route('create') }}" :active="request()->routeIs('create')">
                    Create post
                </x-nav-link>

                <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background: transparent; color: #999; border: none; padding: 10px 22px; border-radius: 25px; cursor: pointer; font-weight: 600; font-size: 15px;">
                        Logout
                    </button>
                </form>
            @endauth
        </div>
    </div>

    <div style="max-width: 600px; margin: 50px auto; background: white; padding: 35px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
        {{ $slot }}
    </div>

</body>
</html>