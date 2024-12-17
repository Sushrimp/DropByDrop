<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body>
    <x-navbar/>
    {{-- <div class="h-[300px] bg-blue-950"></div> --}}
    <img class="brightness-50 h-[300px] w-screen" src="{{ asset('home 01-water-new.png') }}">
    <div id="section-1" class="p-16">
        <div class="flex gap-4 mb-10">
            <img class="h-32 w-32 rounded-full"
            src={{ asset("profile-circle-icon-512x512-zxne30hp.png")}}
            alt="">
            <div class="flex flex-col gap-2">
                <p class="text-3xl font-bold text-cyan-400">
                    {{$currUser->name}}
                </p>
                <p>{{$currUser->email}}</p>
                <p>Joined at {{
                    substr($currUser->created_at, 0, 10)
                }}
                </p>
            </div>
        </div>
        <div class="mb-10">
            <p class="font-bold text-3xl">Challenges History:</p>
            <article class="py-3 my-6 w-[100%] bg-cyan-200 rounded-xl">
            <input
                type="checkbox"
                class="ml-4 challenge-checkbox"
            />
            <label class="ml-4 text-2xl font-bold italic">Turn off taps when not in use</label>
            </article>
        </div>
        <div class="mb-10">
            <p class="font-bold text-3xl">My community posts:</p>

            @if (count($myPosts) > 0)
            <div class="flex">
                @foreach ($myPosts as $post)
                <a href="{{ url('/community/detail/' . $post['id']) }}">
                    <div
                        class="w-auto mx-auto mt-5 rounded-lg overflow-hidden shadow-lg border border-gray-300 bg-white">
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
            @else
                <p>You haven't posted anything yet...</p>
            @endif
        </div>
    </div>
    <x-footer/>
</body>
</html>
