<div class="px-6 pt-16 pb-10 max-w-[1300px] mx-auto grid sm:grid-cols-2 gap-4">   
    <template x-for="pr in projects" :key="pr.id"> 
        <div class="rounded-xl bg-gradient-to-r from-gray-800 via-gray-900 to-black overflow-hidden shadow-2xl z-10 transform transition duration-300 hover:scale-105">           
            <a href="#" class="group cols-span-3 overflow-hidden">
                <img :src="pr.img" class="h-[250px] w-full object-cover object-top rounded-t-xl" />
            </a>   
            <div class="p-4 text-white mb-3 mr-3">
                <h2 class="text-lg font-semibold" x-text="pr.title"></h2>
                <p class="text-gray-300 text-sm mt-4" x-text="pr.description"></p>
            </div>               
        </div>    
    </template>       
</div>