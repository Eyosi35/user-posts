<x-layout title="My Posts">

<div>
   <b>
     Welcome, {{ auth()->user()->first_name }}
   </b>
</div>
    <div style="text-align:center; margin-bottom: 25px;">
        <h1 style="color:#764ba2; margin:0;"> Lately Posts</h1>
        <p style="color:#888; margin-top:5px;">Everything you've shared so far</p>
    </div>

    @forelse ($posts as $post)
        <div style="background:#f9f7fc; border-left: 5px solid #764ba2; padding: 18px; margin-bottom: 15px; border-radius: 8px; transition: 0.2s;">
            <h2 style="margin:0 0 8px 0; color:#333;">Title: {{ $post->title}}</h2>
            <p style="margin:0; color:#555;">{{ $post->content}}</p>
            <a  href="{{ route('edit', $post) }}" class = 'inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-r-md leading-5 hover:text-gray-400 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:active:bg-gray-700 dark:focus:border-blue-800 dark:text-gray-300 dark:hover:bg-gray-900 dark:hover:text-gray-300'>
                Edit Content
            </a>
        </div>

        <br><br>

    @empty
        <div style="text-align:center; padding: 30px; color:#999;">
            <p>You haven't created any posts yet.</p>
        </div>
    @endforelse

    <div>
        {{ $posts->links()}}
    </div>

    
</x-layout>