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
    <x-navbar/>
    <header class="p-6 text-center">
        <h1 class="text-4xl font-bold">About Us</h1>
        <p class="text-lg mt-2">Welcome to Drop by Drop – a movement dedicated to water conservation.</p>
      </header>

      <!-- Section 1 -->
      <section class="bg-cyan-200 text-black py-12 px-6">
        <div class="max-w-4xl mx-auto text-center">
          <h2 class="text-3xl font-semibold">Our Mission</h2>
          <p class="mt-6 text-lg leading-relaxed">
            At Drop by Drop, we are committed to fostering a culture of water sustainability in every home, workplace, and community.
            Our mission is to educate, inspire, and empower people to take meaningful steps towards conserving water.
            By sharing actionable tips, hosting campaigns, and providing resources, we believe we can make a real difference in combating the global water crisis.
            Every drop saved today ensures a brighter tomorrow.
          </p>
        </div>
      </section>

      <!-- Section 2 -->
      <section class="bg-blue-400 text-white  py-12 px-6">
        <div class="max-w-4xl mx-auto text-center">
          <h2 class="text-3xl font-semibold">Why It Matters</h2>
          <p class="mt-6 text-lg leading-relaxed">
            Water is the foundation of life, yet millions around the world face water scarcity every day.
            Climate change, pollution, and unsustainable usage are rapidly depleting this critical resource.
            By raising awareness and adopting water-saving practices, we can address these challenges together.
            Conserving water is not just an environmental necessity; it is a moral responsibility to ensure clean water access for current and future generations.
          </p>
        </div>
      </section>

      <!-- Section 3 -->
      <section class="bg-blue-950 text-white py-12 px-6">
        <div class="max-w-4xl mx-auto text-center">
          <h2 class="text-3xl font-semibold">Get Involved</h2>
          <p class="mt-6 text-lg leading-relaxed">
            At Drop by Drop, we believe that small actions lead to big changes.
            Join our movement by pledging to reduce water waste in your daily life and encouraging others to do the same.
            Participate in our workshops, share our content on social media, or organize a local awareness drive in your community.
            Together, we can create a ripple effect that inspires millions to save water, one drop at a time.
          </p>
        </div>
      </section>
</body>
<x-footer/>
</html>
