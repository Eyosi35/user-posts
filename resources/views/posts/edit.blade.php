<x-layout>
<form method="POST" action=" {{ route('update', $post) }}">
    @csrf
    @method('PATCH')

  <div style="margin-bottom: 18px;">
            <input type="text" name="title" placeholder="New Title" value = " {{ old('title', $post->title )}} "
                style="width:100%; padding:12px; border:1px solid #ddd; border-radius:8px; box-sizing:border-box; font-size:14px;">

            @error('title')
                <p style="color: red ; font-size: 12px;">
                    {{ $message}}
                </p>
            @enderror                        
        </div>

        <div style="margin-bottom: 18px;">
            <input type="text" name="content" placeholder="New Content" value="{{ old('content', $post->content) }}"
                style="width:100%; padding:12px; border:1px solid #ddd; border-radius:8px; box-sizing:border-box; font-size:14px;">

                @error('content')
                    <p style="color: red ; font-size: 12px;">
                        {{ $message}}
                    </p>
                @enderror 
        </div>

        <div>
            <a href="{{ route('posts') }}" style=" text-decoration:none ; width:100%; background:#764ba2; color:white; border:none; padding:13px; border-radius:8px; font-size:16px; font-weight:600; cursor:pointer;">
              Cancel
            </a>
        </div>
        <br>

        <div>
            <button type="submit"
                style="width:100%; background:#764ba2; color:white; border:none; padding:13px; border-radius:8px; font-size:16px; font-weight:600; cursor:pointer;">
                Update Post
            </button>
        </div>
    </form>

</x-layout>