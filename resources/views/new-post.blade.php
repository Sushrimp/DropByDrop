<!doctype html>
<html class="h-full bg-gray-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>✨ Drop By Drop ✨</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>

<body class="h-full">
  <div class="min-h-full">
    <x-navbar/>
    <header class="bg-white">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          <h1 class="text-3xl font-bold tracking-tight text-defaultColor">Create New Post</h1>
      </div>
    </header>
    <main class="bg-white">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <form method="post" action="{{ url('/addPost') }}" class="flex flex-col" enctype="multipart/form-data">
          @csrf
          <div class="flex">
            <div class="md:w-1/2">
              <div>
                <p class="text-md text-gray-800 pb-3">Add a tittle</p>
                <input class="w-3/4 px-2 py-2 bg-white border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-backgroundColor focus:border-backgroundColor" name="title" placeholder="Title..."></input>
              </div>
              <div class="py-5">
                <p class="text-md text-gray-800 pb-3">Body / Descripition</p>
                <textarea class="w-3/4 px-2 py-2 bg-white border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-backgroundColor focus:border-backgroundColor resize-none" name="body" placeholder="Body..."></textarea>
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
      </div>
    </main>
  </div>
</body>
</html>
