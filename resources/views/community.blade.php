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
        <x-navbar />
        <header class="bg-white">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex justify-between items-center">
                <h1 class="text-4xl font-bold tracking-tight text-defaultColor">
                    Community
                </h1>
                <div class="relative w-2/4">
                    <button
                        class="absolute left-2 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-blue-500">🔍</button>
                    <input type="text" placeholder="Search community post"
                        class="w-full px-10 py-2 bg-searchBg border border-gray-300 rounded-full focus:outline-none focus:ring-1 focus:ring-backgroundColor focus:border-backgroundColor" />
                </div>
                @if(!Auth::guest())
                    <a href="/newpost"
                        class="bg-cyan-500 hover:bg-cyan-700 rounded-full bg-backgroundColor px-5 py-3 text-sm font-medium text-white">+
                        Share your thought</a>
                @endif
            </div>
        </header>
        <main class="bg-white">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <!-- Your content -->
                <h3 class="text-2xl px-5 py-5 font-bold tracking-tight text-defaultColor">Latest Posts</h3>
                <div class="flex flex-row justify-evenly flex-wrap">
                    @foreach ($posts as $post)
                        <a href="{{ url('/community/detail/' . $post['id']) }}">
                            <article
                                class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white border border-gray-300">
                                <div class="flex items-center p-4 w-full">
                                    <div class="flex flex-col w-full">
                                        <div class="flex justify-between items-center w-full">
                                            <p class="text-lg font-bold text-gray-800">{{ $post['user']['name'] }}</p>
                                            <p class="text-sm text-gray-500 font-bold">5 mins</p>
                                        </div>
                                        <div class="w-full flex items-center justify-left">
                                            @if (strlen($post['title']) <= 70)
                                                <p class="text-md text-gray-800">{{ $post['title'] }}</p>
                                            @else
                                                <p class="text-md text-gray-800">
                                                    {{ substr($post['title'], 0, 70) }}...
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @if ($post['image'])
                                    <img class="w-full h-64 object-cover" src={{$post['image']}} alt="Image not found" />
                                @endif
                                @php
                                @endphp
                            </article>
                        </a>
                    @endforeach
                </div>
                @php
                @endphp
                <h3 class="text-2xl px-5 pt-10 font-bold tracking-tight text-defaultColor">Top Posts</h3>
                @foreach ($posts as $post)
                    <a href="{{ url('/community/detail/' . $post['id']) }}">
                        <div
                            class="w-2/4 mx-auto mt-5 rounded-lg overflow-hidden shadow-lg border border-gray-300 bg-white">
                            <div class="flex items-center justify-between px-4 py-3">
                                <div class="flex items-center">
                                    <img class="w-10 h-10 rounded-full border border-gray-300"
                                        src="https://via.placeholder.com/100" />
                                    <div class="ml-3">
                                        <h3 class="text-sm font-bold text-gray-800">{{ $post['user']['name'] }}</h3>
                                        <p class="text-xs text-gray-500">5 mins •</p>
                                    </div>
                                </div>
                                <button class="text-gray-500 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M12 10.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm0 5.25a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm0 5.25a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="px-4 py-2">
                                <p class="text-sm text-gray-800">{{ $post['title'] }}</p>
                            </div>
                            @if ($post['image'])
                                <img class="w-full h-64 object-cover" src={{$post['image']}} alt="Image not found" />
                            @endif
                            @php
                            @endphp
                        </div>
                    </a>
                @endforeach
            </div>
        </main>
    </div>
</body>
<x-footer />

</html>
