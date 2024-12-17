<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drop By Drop - Login</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
        <div class="absolute top-8 left-8">
            <svg width="80" height="80" viewBox="0 0 119 122" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <rect width="119" height="122" rx="43" fill="#00C4FF"/>
            <rect x="59" y="18" width="27" height="33" fill="url(#pattern0_12_12)"/>
            <rect x="64" y="61" width="27" height="33" fill="url(#pattern1_12_12)"/>
            <rect x="17" y="34" width="42" height="55" fill="url(#pattern2_12_12)"/>
            <defs>
            <pattern id="pattern0_12_12" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image0_12_12" transform="matrix(0.00477431 0 0 0.00390625 -0.111111 0)"/>
            </pattern>
            <pattern id="pattern1_12_12" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image0_12_12" transform="matrix(0.00477431 0 0 0.00390625 -0.111111 0)"/>
            </pattern>
            <pattern id="pattern2_12_12" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image0_12_12" transform="matrix(0.00511533 0 0 0.00390625 -0.154762 0)"/>
            </pattern>
            <image id="image0_12_12" width="256" height="256" xlink:href="data:image/png;base64,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"/>
            </defs>
            </svg>
        </div>

        <div class="w-full max-w-4xl bg-[#3DE5FF] rounded-[92px] shadow-lg overflow-hidden flex">
            <div class="w-1/2 bg-gradient-to-b from-cyan-100 to-cyan-200 p-12 flex flex-col justify-between relative rounded-r-[92px]">
                <div class="mt-20">
                    <h1 class="text-5xl font-bold text-cyan-500 leading-tight">
                        Save Water,<br>
                        Drop by<br>
                        Drop
                    </h1>
                </div>
            </div>

            <div class="w-1/2 bg-[#3DE5FF] p-12 flex flex-col justify-center">
                <h2 class="text-4xl font-bold text-white mb-12">Hello Again!</h2>

                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ url('/logincheck') }}" class="space-y-6">
                    @csrf
                    @method('post')

                    <div>
                        <label for="email_input" class="block text-black mb-2">Email</label>
                        <input
                            type="email"
                            name="email_input"
                            id="email_input"
                            class="w-full p-3 rounded-lg bg-white/90 border-0 focus:ring-2 focus:ring-white"
                            required
                            autocomplete="email"
                            value="{{ old('email_input') }}"
                        >
                    </div>

                    <div>
                        <label for="password_input" class="block text-black mb-2">Password</label>
                        <input
                            type="password"
                            name="password_input"
                            id="password_input"
                            class="w-full p-3 rounded-lg bg-white/90 border-0 focus:ring-2 focus:ring-white"
                            required
                        >
                    </div>

                    <div class="flex items-center">
                        <input
                            type="checkbox"
                            id="remember"
                            name="remember"
                            class="rounded border-white text-cyan-600 focus:ring-cyan-500"
                        >
                        <label for="remember" class="ml-2 text-black">
                            Remember me
                        </label>
                    </div>

                    <button
                        type="submit"
                        class="bg-[#00C3FF] text-white py-3 px-6 rounded-full font-bold float-right"
                    >
                        Login
                    </button>
                </form>
            </div>
        </div>
        <div class="absolute bottom-4 text-center text-gray-600">
            Copyright. All rights reserved. {{ date('Y') }}
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
