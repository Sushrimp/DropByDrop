<!doctype html>
<html class="h-full bg-gray-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Drop By Drop</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>

<body class="h-full">
  <div class="min-h-full">
    <x-navbar/>

    <div class="flex flex-col justify-center items-center px-48 py-10 space-y-2">
        <div class="flex flex-col space-y-2 justify-center items-center bg-white border-gray-300 px-8 p-4 rounded-lg border">
            <div class="flex flex-col justify-center items-center">
                <p class="text-3xl font-bold text-gray-800">{{ $post['title'] }}</p>
                <p class="text-md text-gray-600">by : {{ $post['user']['name'] }}</p>
            </div>

            @if ($post['image'])
                <img class="w-auto h-64 object-cover rounded-md" src={{$post['image']}} alt="Image not found" />
            @endif

            <p class="text-lg text-gray-700">{{ $post['body'] }}</p>
        </div>

        <div class="flex space-x-2 justify-center items-center bg-white border-gray-300 px-4 p-2 rounded-lg border">
            @if($userLiked)
                <form action={{ url('/unlikePost') }} method="POST">
                    @csrf
                    <input type="hidden" name="postId" value={{ $post['id'] }} />
                    <button type="submit" class="px-4 py-2 bg-transparent text-red-600 border-red-600 border font-bold rounded-md hover:bg-red-600 hover:text-white duration-150">
                        Unlike
                    </button>
                </form>
            @else
                <form action={{ url('/likePost') }} method="POST">
                    @csrf
                    <input type="hidden" name="postId" value={{ $post['id'] }} />
                    <button type="submit" class="px-4 py-2 bg-red-500 text-white font-bold rounded-md hover:bg-red-700 duration-150">
                        Like
                    </button>
                </form>
            @endif

            <p>{{ count($post['like']) }}</p>
        </div>
    </div>

    @if(!Auth::guest())
    <form action={{ url('/addReply') }} method="POST" class="px-48">
        @csrf
        <div class="flex space-x-2">
            <input type="hidden" name="postId" value={{ $post['id'] }} />
            <input name="description" class="w-full p-3 border rounded" placeholder="Add your reply..."></input>

            <button type="submit" class="px-4 py-3 bg-cyan-500 text-white font-bold rounded hover:bg-cyan-700 duration-150">
                Reply
            </button>
        </div>
    </form>
    @endif

    @if($post['reply'])
    <div class="flex px-48 py-5 w-full">
        <div class="flex flex-col w-full bg-white border-gray-300 rounded-lg border">
            @foreach ($post['reply'] as $reply)
                <div class="flex flex-col px-8 p-4">
                    <p class="text-md font-bold text-gray-800">{{ $reply['user']['name'] }}</p>
                    <p class="text-sm text-gray-500">{{ $reply['description'] }}</p>
                </div>
                @if (!$loop->last)
                    <div class="border border-x-gray-300"></div>
                @endif
            @endforeach
        </div>
    </div>
    @endif
    {{-- reply -> description ->  --}}


    </div>
</body>
</html>
