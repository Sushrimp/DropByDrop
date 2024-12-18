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
    <main class="bg-white shadow">
      <div id="home-section-1" class="absolute mx-auto max-w-7xl p-32">
          {{-- <h1 class="text-3xl font-bold tracking-tight text-gray-900">
              Dashboard
            </h1> --}}
            <h1 class="text-8xl font-bold text-cyan-600">
              @lang('home.dropbydrop')
            </h1>
            <p class="mt-3 text-lg text-cyan-600">@lang('home.slogan')</p>
      </div>
        {{-- <img src="{{asset('/ocean.png')}}" style="width: 100%"/> --}}
        <video autoplay loop class="w-screen">
          <source src="istockphoto-1464814791-640_adpp_is.mp4" type="video/mp4">
        </video>

      <div id="home-section-2" class="relative text-white font-serif">
        <img class="brightness-50" src="/images/home 01-water-new.png">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 ">
          <p class="text-3xl text-center mb-4">Our water needs attention.</p>
          <p>
            Clean water is essential for life. Yet, billions of people around the world still lack access to safe drinking water. From the parched lands of Africa to the urban slums of Asia, water scarcity is a pressing global crisis. Every day, countless individuals, particularly women and children, spend hours fetching water from distant sources, often compromising their health and education.          </p>
        </div>
      </div>

      <div id="home-section-3" class="py-6 px-16 mb-10">
        <h1 class="w-1/2 my-16 text-7xl font-bold text-cyan-400">Why is this important?</h1>
        <p class="font-serif">
          Clean water is the foundation of human health, hygiene, and well-being. It's crucial for:

          Hydration: Keeping our bodies functioning optimally.
          Sanitation: Preventing the spread of diseases.
          Agriculture: Producing food to feed the world.
          Industry: Powering economies and creating jobs.
          When water resources are strained, it leads to severe consequences, including waterborne diseases, malnutrition, poverty, and conflict. By addressing water scarcity, we can improve the quality of life for countless individuals and communities.
        </p>
      </div>
      <div id="home-section-4" class="flex">
        <div id="left" class="w-1/2 bg-cyan-100 py-6 px-16">
          <h1 class="my-16 text-7xl font-bold text-cyan-400">Let's fight this together</h1>
          <p class="font-serif">
            We can make a difference by taking action, big or small. Every drop counts. Here's how you can contribute:

            Conserve Water: Simple habits like shorter showers, fixing leaks, and using water-efficient appliances can significantly reduce water consumption.
            Support Organizations: Donate to organizations working to provide clean water solutions in underserved areas.
            Advocate for Change: Raise awareness about water scarcity and encourage policymakers to prioritize water conservation and sustainable water management.
            Innovate: Develop innovative technologies to improve water efficiency and treatment.
            By joining forces, we can create a sustainable future where everyone has access to clean water. Let's work together to protect this precious resource for generations to come.
          </p>
        </div>
        <div id="right" class="w-1/2">
          <img src="/images/globalwatercrisis.png" />
        </div>
      </div>
      <div id="home-section-3" class="py-6 px-16 mb-10">
        <h1 class="w-1/2 my-16 text-7xl font-bold text-cyan-400">Featured Articles</h1>

        <div class="flex">
            @foreach ($articles as $article)
            <div>
                    <div
                        class="w-2/4 rounded-lg overflow-hidden shadow-lg border border-gray-300 bg-white">
                        <div class="flex items-center justify-between px-4 py-3">
                            <div class="flex items-center font-bold">
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
                        @php
                        @endphp
                    </div>
            </div>
        @endforeach
        </div>

      </div>







      <div id="home-section-dailychallenge" class="relative items-center mt-16 p-24 mb-16 mx-36 bg-blue-400 rounded-3xl">
        <h1 class="text-7xl font-bold text-white">Your daily Challenge!</h1>
        <div class=" text-white">
            <h1 class="text-2xl font-bold">18 December 2024</h1>
          </div>
        <div id="challenges">
          @foreach ($challenges as $challenge)
            <div>
              <article class="py-3 my-6 w-[100%] bg-cyan-200 rounded-xl">
                <input
                    type="checkbox"
                    class="ml-4 challenge-checkbox"
                    id="challenge{{ $loop->index }}"
                    name="challenge{{ $loop->index }}"
                    value="{{ $challenge['challenge'] }}"
                    onchange="event.preventDefault(); window.location.href='{{ route('proof')}}'"
                />
                <label class="ml-4 text-2xl font-bold italic" for="challenge{{ $loop->index }}">{{ $challenge['challenge']}}</label>
              </article>
            </a>
          @endforeach
        </div>
        <p class="text-2xl italic text-gray-500">Help contribute saving the world!</p>

        <div id="congrats-message" style="display: none;">
          <br/>
          <h1 class="text-5xl font-bold text-green-500">Challenge Completed! Congratulations!!!</h1>
          <p>Share this happy moment with the community!</p>
          <br/>
          <a href="community" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">Share with community -></a>
        </div>

        <div class="decorations">
          <svg id="decoration-1" class="absolute top-0 left-0" height="100" width="100" xmlns="http://www.w3.org/2000/svg">
            <circle r="10" cx="50" cy="50" fill="lightgrey" />
          </svg>
          <svg id="decoration-2" class="absolute top-0 right-0" height="100" width="100" xmlns="http://www.w3.org/2000/svg">
            <circle r="10" cx="50" cy="50" fill="lightgrey" />
          </svg>
          <svg id="decoration-3" class="absolute bottom-0 left-0" height="100" width="100" xmlns="http://www.w3.org/2000/svg">
            <circle r="10" cx="50" cy="50" fill="lightgrey" />
          </svg>
          <svg id="decoration-4" class="absolute bottom-0 right-0" height="100" width="100" xmlns="http://www.w3.org/2000/svg">
            <circle r="10" cx="50" cy="50" fill="lightgrey" />
          </svg>
        </div>

        </br>
        </br>
        </br>
      </div>
















    </main>
  </div>

  <script>

  </script>
</body>

<x-footer/>
</html>
