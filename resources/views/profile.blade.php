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
    <img class="brightness-50 h-[300px] w-screen" src="images/home 01-water-new.png">
    <div id="section-1" class="p-16">
        <div class="flex gap-4 mb-10">
            @if ($currUser->profilePicture)
            <img class="h-32 w-32 rounded-full" src={{$currUser->profilePicture}} alt="Image not found" />
            @else
            <img class="h-32 w-32 rounded-full"
            src="images/profile-circle-icon-512x512-zxne30hp.png"
            alt="">
            @endif
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
            <div>
                <button onclick="document.getElementById('popup').showModal()" class="ml-20 bg-blue-400 p-5 rounded-xl text-xs">Edit Profile <br/> Picture</button>
            </div>
        </div>
        <dialog style="  border: none;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);" id="popup">
            <p>This is a popup window!</p>
                    <form method="post" action="{{ url('/pfpUpdate') }}" class="flex flex-col" enctype="multipart/form-data">
          @csrf
          <div class="flex">
            <div class="md:w-1/2">
              <div>
                <p class="text-md text-gray-800 pb-3">Add a tittle</p>
                {{-- <input class="w-3/4 px-2 py-2 bg-white border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-backgroundColor focus:border-backgroundColor" name="title" placeholder="Title..."></input> --}}
              </div>
              <div class="py-5">
                <p class="text-md text-gray-800 pb-3">Body / Descripition</p>
                {{-- <textarea class="w-3/4 px-2 py-2 bg-white border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-backgroundColor focus:border-backgroundColor resize-none" name="body" placeholder="Body..."></textarea> --}}
              </div>
            </div>
            <div class="w-1/4 mt-8 p-4 bg-blue-100 rounded-lg shadow-md">
              <div class="text-2xl mb-3">👋</div>
                <p class="text-gray-800 text-sm leading-relaxed">This is a community we build together. Please be welcoming and open-minded.</p>
                <p class="mt-2 text-gray-800 text-sm leading-relaxed">Please follow the community guidelines.</p>
              </div>
            </div>
          <div class="max-w-md bg-white mb-10">
            <label for="image-upload" class="block text-sm font-medium text-gray-700 mb-2">Upload image (optional)</label>
            <div class="flex items-center justify-center w-full">
              <label for="image-upload" class="flex flex-col items-center justify-center w-full h-48 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                <div class="flex flex-col items-center justify-center">
                  <svg class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18M10 8h4m-2 12h.01"></path>
                  </svg>
                  <p class="mb-2 text-sm text-gray-500">
                    <span class="font-semibold">Click to upload</span> or drag and drop
                  </p>
                  <p class="text-xs text-gray-500">PNG, JPG, GIF (Max 2MB)</p>
                </div>
                <input id="image-upload" name="image" type="file" accept="image/*" class="hidden"/>
              </label>
            </div>
          </div>
          <button class="w-1/6 mx-auto rounded-full bg-backgroundColor px-5 py-3 text-sm font-medium text-white bg-cyan-500 hover:bg-cyan-700" type="submit">Post!</button>
        </form>
            <button class="bg-blue-400 p-4 rounded-lg" onclick="document.getElementById('popup').close()">Close</button>
        </dialog>
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
