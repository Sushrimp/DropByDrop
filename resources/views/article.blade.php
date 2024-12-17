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
    <header class="bg-white">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex justify-evenly">
          <h1 class="text-4xl font-bold tracking-tight text-defaultColor">
            Articles
          </h1>
            <div class="relative w-2/4">
              <button class="absolute left-2 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-blue-500">🔍</button>
              <input type="text" placeholder="Search articles..." class="w-full px-10 py-2 bg-searchBg border border-gray-300 rounded-full focus:outline-none focus:ring-1 focus:ring-backgroundColor focus:border-backgroundColor"/>
            </div>

            {{-- if is admin --}}
          <a href="/newpost" class="bg-cyan-500 hover:bg-cyan-700 rounded-full bg-backgroundColor px-5 py-3 text-sm font-medium text-white">+ Create New Article</a>
      </div>
    </header>
    <main class="bg-white">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        @php
            $i = 1;
        @endphp
        <div class="flex flex-row justify-evenly flex-wrap">
            <h3 class="text-2xl px-5 pt-10 font-bold tracking-tight text-defaultColor">Latest Article</h3>
            @foreach ($articles as $article)
                <div>
                        <div
                            class="w-2/4 mx-auto mt-5 rounded-lg overflow-hidden shadow-lg border border-gray-300 bg-white">
                            <div class="flex items-center justify-between px-4 py-3">
                                <div class="flex items-center">
                                    {{$article->title}}
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
                                <p class="text-sm text-gray-800">{{$article->body}}Lorem ipsum dolor sit amet consectetur adipisicing elit. At mollitia quibusdam nam impedit necessitatibus, ipsum molestias corporis tempore in dicta et eligendi inventore deserunt ducimus doloremque blanditiis cumque pariatur dolor?</p>
                            </div>
                            @if (1+1==2)
                                <img class="w-full h-64 object-cover" src="" alt="Image not found" />
                            @endif
                            @php
                            @endphp
                        </div>
                </div>
            @endforeach

      </div>
    </main>
  </div>
</body>
</html>
