<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 flex items-center justify-center">
  <div class="max-w-6xl w-full bg-white rounded-2xl shadow-xl overflow-hidden grid grid-cols-1 md:grid-cols-12">
    
    <!-- Left Column: Contact Information -->
    <div class="md:col-span-5 bg-indigo-900 p-8 flex flex-col justify-between text-white relative">
      <!-- Decorative background blur -->
      <div class="absolute top-0 right-0 -mt-12 -mr-12 w-40 h-40 bg-indigo-700 rounded-full blur-2xl opacity-50">        
      </div>      
      <div>
        <h2 class="text-3xl font-extrabold tracking-tight">Registration Form</h2>
        <p class="mt-4 text-indigo-200 text-sm leading-relaxed">
          Please fill-up the form correctly and legibly.
        </p>
      </div>
    </div>

    <!-- Right Column: Contact Form -->
    <form @submit.prevent="register" class="md:col-span-7 p-8 sm:p-12 space-y-6">

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div>
          <label for="firstname" class="block text-sm font-semibold text-gray-700">First Name</label>
          <input type="text" x-model="firstname" id="firstname" name="firstname" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 border p-2.5 text-sm outline-none transition-all" placeholder="Type your firstname here ..." required="">
        </div>
        <div>
          <label for="lastname" class="block text-sm font-semibold text-gray-700">Last Name</label>
          <input type="text" x-model="lastname" id="lastname" name="lastname" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 border p-2.5 text-sm outline-none transition-all" placeholder="Type your lastname here ..." required="">
        </div>
      </div>     

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div>
          <label for="middlename" class="block text-sm font-semibold text-gray-700">Middle Name <span class="italic text-xs font-semibold">(Optional)</span></label>
          <input type="text" x-model="middlename" id="middlename" name="middlename" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 border p-2.5 text-sm outline-none transition-all" placeholder="Type your middle name here ...">
        </div>
        <div>
          <label for="username" class="block text-sm font-semibold text-gray-700">Username <span class="italic text-xs font-semibold">(Optional)</span></label>
          <input type="text" x-model="username" id="username" name="username" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 border p-2.5 text-sm outline-none transition-all" placeholder="Type your username here ...">
        </div>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div>
          <label for="email" class="block text-sm font-semibold text-gray-700">Email Address</label>
          <input type="email" x-model="email" id="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 border p-2.5 text-sm outline-none transition-all" placeholder="Type your email here ..." required="">
        </div>
        <div>
          <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
          <input type="password" x-model="password" id="password" name="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 border p-2.5 text-sm outline-none transition-all" placeholder="Type your password here ..." required="">
        </div>
      </div>

      <div class="pt-2">
        <button type="submit" class="w-full justify-center inline-flex items-center px-6 py-3 border border-transparent text-sm font-semibold rounded-md shadow-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200 cursor-pointer">
          Register Now
          <svg class="ml-2 -mr-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
          </svg>
        </button>
      </div>
    </form>

  </div>
</div>
