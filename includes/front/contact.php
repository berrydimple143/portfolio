<?php require_once './src/Functions/helpers.php'; ?>
<div id="contactPage" class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 flex items-center justify-center">
  <div class="max-w-6xl w-full bg-white rounded-2xl shadow-xl overflow-hidden grid grid-cols-1 md:grid-cols-12">
    
    <!-- Left Column: Contact Information -->
    <div class="md:col-span-5 bg-indigo-900 p-8 flex flex-col justify-between text-white relative">
      <!-- Decorative background blur -->
      <div class="absolute top-0 right-0 -mt-12 -mr-12 w-40 h-40 bg-indigo-700 rounded-full blur-2xl opacity-50"></div>
      
      <div>
        <h2 class="text-3xl font-extrabold tracking-tight">Get in touch</h2>
        <p class="mt-4 text-indigo-200 text-sm leading-relaxed">
          I would love to hear from you. Fill out the form and I will get back to you within 24 hours.
        </p>
      </div>

      <!-- Info items -->
      <div class="mt-2 space-y-6">
        <div class="flex items-center space-x-4">
          <div class="bg-indigo-800 p-3 rounded-lg">            
            <?php includeWithArgs('./images/icons/telephone.php', ['color' => '#fff']); ?>
          </div>
          <div>
            <p class="text-xs text-indigo-300 uppercase tracking-wider font-semibold">Call me</p>
            <p class="text-sm font-medium">+63 909 640-0461</p>
          </div>
        </div>

        <div class="flex items-center space-x-4">
          <div class="bg-indigo-800 p-3 rounded-lg">
            <?php includeWithArgs('./images/icons/envelope.php', ['color' => '#fff']); ?>
          </div>
          <div>
            <p class="text-xs text-indigo-300 uppercase tracking-wider font-semibold">Email me</p>
            <p class="text-sm font-medium">dimplevirgil@gmail.com</p>
          </div>
        </div>

        <div class="flex items-center space-x-4">          
          <div class="bg-indigo-800 p-3 rounded-lg">
            <?php includeWithArgs('./images/icons/linkedin.php', ['width' => '6', 'height' => '6', 'color' => '#b8b8ff']); ?>
          </div>
          <div>
            <p class="text-xs text-indigo-300 uppercase tracking-wider font-semibold">Connect With Me</p>
            <a href="https://www.linkedin.com/in/virgil-rosalita-34020b157" target="_blank" class="text-sm font-medium">https://www.linkedin.com/in/virgil-rosalita-34020b157</a>
          </div>
        </div>

        <div class="flex items-center space-x-4">          
          <div class="bg-indigo-800 p-3 rounded-lg">
            <?php includeWithArgs('./images/icons/fb.php', ['width' => '6', 'height' => '6', 'color' => '#b8b8ff']); ?>
          </div>
          <div>
            <p class="text-xs text-indigo-300 uppercase tracking-wider font-semibold">Message Me</p>
            <a href="https://www.facebook.com/DodongVirgil123" target="_blank" class="text-sm font-medium">https://www.facebook.com/DodongVirgil123</a>
          </div>
        </div>

        <div class="flex items-center space-x-4">
          <div class="bg-indigo-800 p-3 rounded-lg">
            <?php includeWithArgs('./images/icons/location.php', ['color' => '#fff']); ?>
          </div>
          <div>
            <p class="text-xs text-indigo-300 uppercase tracking-wider font-semibold">Address</p>
            <p class="text-sm font-medium">Toril, Davao City, Philippines, 8000</p>
          </div>
        </div>


      </div>
      <div>&nbsp;</div>     
    </div>

    <!-- Right Column: Contact Form -->
    <form class="md:col-span-7 p-8 sm:p-12 space-y-6">
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div>
          <label for="first-name" class="block text-sm font-semibold text-gray-700">First name</label>
          <input type="text" id="first-name" name="first-name" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 border p-2.5 text-sm outline-none transition-all" placeholder="John">
        </div>
        <div>
          <label for="last-name" class="block text-sm font-semibold text-gray-700">Last name</label>
          <input type="text" id="last-name" name="last-name" autocomplete="family-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 border p-2.5 text-sm outline-none transition-all" placeholder="Doe">
        </div>
      </div>

      <div>
        <label for="email" class="block text-sm font-semibold text-gray-700">Email address</label>
        <input type="email" id="email" name="email" autocomplete="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 border p-2.5 text-sm outline-none transition-all" placeholder="john@example.com">
      </div>

      <div>
        <label for="phone" class="block text-sm font-semibold text-gray-700">Phone number <span class="text-gray-400 font-normal">(Optional)</span></label>
        <input type="tel" id="phone" name="phone" autocomplete="tel" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 border p-2.5 text-sm outline-none transition-all" placeholder="+1 (555) 000-0000">
      </div>

      <div>
        <label for="message" class="block text-sm font-semibold text-gray-700">Message</label>
        <textarea id="message" name="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 border p-2.5 text-sm outline-none transition-all" placeholder="Leave me a message..."></textarea>
      </div>

      <div class="pt-2">
        <button type="submit" class="w-full justify-center inline-flex items-center px-6 py-3 border border-transparent text-sm font-semibold rounded-md shadow-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200">
          Send Message
          <svg class="ml-2 -mr-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
          </svg>
        </button>
      </div>
    </form>

  </div>
</div>
