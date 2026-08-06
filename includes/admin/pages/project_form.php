<div x-show="page === 'project_form'" class="grid grid-cols-1 gap-3">
    <form @submit.prevent="submitProject" class="md:col-span-6 p-4 sm:p-8 space-y-6">
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div>
          <label for="title" class="block text-sm font-semibold text-gray-700">Project Title</label>
          <input type="text" x-model="title" id="title" name="title" autocomplete="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 border p-2.5 text-sm outline-none transition-all" placeholder="Type a project title here ..." required="">
        </div>
        <div>
          <label for="code" class="block text-sm font-semibold text-gray-700">Code URL</label>
          <input type="text" x-model="code" id="code" name="code" autocomplete="code" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 border p-2.5 text-sm outline-none transition-all" placeholder="Type a project code URL here ...">
        </div>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div>
          <label for="technology" class="block text-sm font-semibold text-gray-700">Programming technology used for this project</label>
          <input type="text" x-model="technology" id="technology" name="technology" autocomplete="technology" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 border p-2.5 text-sm outline-none transition-all" placeholder="Next.js, Tailwind CSS">
        </div>
        <div>
          <label for="image" class="block text-sm font-semibold text-gray-700">Project Image</label>
          <div class="flex items-center justify-center">
          <input 
              type="file" 
              accept="image/*"              
              @change="uploadImage" 
              class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100"
          >
          <input type="text" x-model="image" id="image" name="image" autocomplete="image" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 border p-2.5 text-sm outline-none transition-all" placeholder="Read-Only Image URL here ..." required="" readonly>
          </div>
        </div>
      </div>

      <div>
        <label for="description" class="block text-sm font-semibold text-gray-700">Project Description</label>
        <textarea x-model="description" id="description" name="description" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 border p-2.5 text-sm outline-none transition-all" placeholder="Type a project description here ..." required=""></textarea>
      </div>

      <div class="pt-2 flex items-start justify-start space-x-1">
        <button type="submit" class="w-[170px] justify-center inline-flex items-center px-6 py-3 border border-transparent text-sm font-semibold rounded-md shadow-md text-white bg-gradient-to-t from-blue-500 via-blue-600 to-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200">
          <svg fill="#fff" class="w-4 h-4 mr-2" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
            <path d="M26 0H6a6 6 0 0 0-6 6v20a6 6 0 0 0 6 6h20a6 6 0 0 0 6-6V6a6 6 0 0 0-6-6zM11 2v3a1 1 0 1 0 2 0V2h10v7H9V2zm19 24a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V6a4 4 0 0 1 4-4h1v8a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V2h1a4 4 0 0 1 4 4zM16 13a7.5 7.5 0 1 0 7.5 7.5A7.5 7.5 0 0 0 16 13zm0 13a5.5 5.5 0 1 1 5.5-5.5A5.5 5.5 0 0 1 16 26zM16 17.5a3 3 0 1 0 3 3 3 3 0 0 0-3-3zm0 4a1 1 0 1 1 1-1 1 1 0 0 1-1 1z"/>
        </svg>
          Save Project          
        </button>
        <button @click.prevent="cancelForm" type="button" class="w-[170px] justify-center inline-flex items-center px-6 py-3 border border-transparent text-sm font-semibold rounded-md shadow-md text-white bg-gradient-to-t from-orange-500 via-orange-600 to-orange-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200">
          <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12ZM16.1716 14.7574C16.6951 13.967 17 13.0191 17 12C17 9.23858 14.7614 7 12 7C10.9809 7 10.033 7.30488 9.24261 7.8284L16.1716 14.7574ZM7.8284 9.24261L14.7574 16.1716C13.967 16.6951 13.0191 17 12 17C9.23858 17 7 14.7614 7 12C7 10.9809 7.30488 10.033 7.8284 9.24261ZM12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5Z" fill="#fff"/>
          </svg>
          Cancel          
        </button>
      </div>
    </form>
</div>