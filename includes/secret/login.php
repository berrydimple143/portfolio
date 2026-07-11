<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 flex items-center justify-center">
  <div class="max-w-6xl w-full bg-white rounded-2xl shadow-xl overflow-hidden grid grid-cols-1 md:grid-cols-12">
    
    <!-- Left Column: Contact Information -->
    <div class="md:col-span-5 bg-indigo-900 p-8 flex flex-col justify-between text-white relative">
      <!-- Decorative background blur -->
      <div class="absolute top-0 right-0 -mt-12 -mr-12 w-40 h-40 bg-indigo-700 rounded-full blur-2xl opacity-50"></div>
      
      <div>
        <h2 class="text-3xl font-extrabold tracking-tight">Fill in the form</h2>
        <p class="mt-4 text-indigo-200 text-sm leading-relaxed">
          Please fill in the form at the right or below correctly.
        </p>
      </div>
    </div>
   <form @submit.prevent="submitAuth" class="md:col-span-7 p-8 sm:p-12 space-y-6">
    <!-- Right Column: Contact Form -->   
      <div>
        <label for="email" class="block text-sm font-semibold text-gray-700">Email address</label>
        <input type="email" x-model="email" name="email" id="email" autocomplete="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 border p-2.5 text-sm outline-none transition-all" placeholder="john@example.com" required="">
        <span x-show="errors.email" class="text-red-500" x-text="errors.email"></span>
      </div>

      <div>
        <label for="phone" class="block text-sm font-semibold text-gray-700">Password</label>
        <input type="password" x-model="password" id="password" name="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 border p-2.5 text-sm outline-none transition-all" placeholder="Type your password here ..." required="">
      </div>

      <div class="pt-2">
        <button type="submit" class="w-full justify-center inline-flex items-center px-6 py-3 border border-transparent text-sm font-semibold rounded-md shadow-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200 cursor-pointer">
          Login Here
          <svg class="ml-2 -mr-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
          </svg>
        </button>
      </div>
    </form>

  </div>
</div>
