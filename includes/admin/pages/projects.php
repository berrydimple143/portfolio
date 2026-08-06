<?php require_once '../../src/Functions/helpers.php'; ?>
<div x-show="page === 'projects'" class="grid grid-cols-1 gap-3">
    
    <div
    class="overflow-hidden rounded-2xl border border-gray-200 bg-gradient-to-t from-blue-400 via-blue-500 to-blue-400 px-4 pb-3 pt-4 dark:border-gray-800 dark:bg-white/[0.03] sm:px-6"
    >
    <div
        class="flex flex-col gap-2 mb-4 sm:flex-row sm:items-center sm:justify-between"
    >
        <div>
        <h3 class="text-lg font-semibold text-gray-200 dark:text-white/90">
            List of Projects
        </h3>
        </div>

        <div class="flex items-center gap-3">
        
        <div class="relative">
            <span class="absolute top-1/2 left-4 -translate-y-1/2 hover:cursor-pointer">
              <svg
                class="fill-white dark:fill-white"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M3.04175 9.37363C3.04175 5.87693 5.87711 3.04199 9.37508 3.04199C12.8731 3.04199 15.7084 5.87693 15.7084 9.37363C15.7084 12.8703 12.8731 15.7053 9.37508 15.7053C5.87711 15.7053 3.04175 12.8703 3.04175 9.37363ZM9.37508 1.54199C5.04902 1.54199 1.54175 5.04817 1.54175 9.37363C1.54175 13.6991 5.04902 17.2053 9.37508 17.2053C11.2674 17.2053 13.003 16.5344 14.357 15.4176L17.177 18.238C17.4699 18.5309 17.9448 18.5309 18.2377 18.238C18.5306 17.9451 18.5306 17.4703 18.2377 17.1774L15.418 14.3573C16.5365 13.0033 17.2084 11.2669 17.2084 9.37363C17.2084 5.04817 13.7011 1.54199 9.37508 1.54199Z"
                  fill=""
                />
              </svg>
            </span>
            <input
            type="text"
            placeholder="Search project here ..."
            id="search-input"
            class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-100 focus:ring-brand-200/10 dark:focus:border-brand-400 h-11 w-full rounded-lg border border-gray-200 bg-transparent py-2.5 pr-14 pl-12 text-sm text-white placeholder:text-white focus:ring-1 focus:outline-hidden lg:w-[350px] dark:border-gray-800 dark:bg-gray-900 dark:bg-white/[0.03] dark:text-white/90 dark:placeholder:text-white/30"
        />

        <button
            id="search-button"
            class="absolute top-1/2 right-2.5 inline-flex -translate-y-1/2 items-center gap-0.5 rounded-lg border border-gray-200 bg-gray-50 px-[7px] py-[4.5px] text-xs -tracking-[0.2px] text-gray-500 dark:border-gray-800 dark:bg-white/[0.03] dark:text-gray-400"
        >
            <span> ⌘ </span>
            <span> F </span>
        </button>
        </div>
        <button @click.prevent="page = 'project_form'"
            class="inline-flex items-center gap-2 rounded-lg border border-blue-500 bg-gradient-to-t from-blue-300 via-blue-400 to-blue-300 px-4 py-2.5 text-theme-sm font-medium text-gray-100 shadow-theme-xs hover:text-green-300 dark:border-gray-700 dark:bg-gray-800 dark:text-green-300 dark:hover:bg-white/[0.03] dark:hover:text-green-300"
        >
            ADD PROJECT
        </button>
        </div>
    </div>

    <div class="w-full overflow-x-auto">
        <table class="min-w-full">
        <!-- table header start -->
        <thead class="text-gray-100 text-center text-theme-xs dark:text-gray-100">
            <tr class="border-gray-100 border-y dark:border-gray-800">
                <th class="py-3">
                    <div class="flex items-center">
                    <p>
                        Title
                    </p>
                    </div>
                </th>
                <th class="py-3">
                    <div class="flex items-center">
                    <p>
                        Description
                    </p>
                    </div>
                </th class="py-3">
                <th class="py-3">
                    <div class="flex items-center">
                    <p>
                        Technology
                    </p>
                    </div>
                </th>
                <th class="py-3">
                    <div class="flex items-center justify-center col-span-2">
                    <p>
                        Action
                    </p>
                    </div>
                </th>
            </tr>
        </thead>
        <!-- table header end -->

        <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
            <template x-for="(prj, index) in projects" :key="prj.id">
                <tr class="text-sm text-gray-100 text-theme-sm dark:text-white/90">
                    <td class="py-2">
                        <div class="flex items-center gap-3">
                            <div><p x-text="prj.title"></p></div>
                        </div>
                    </td>
                    <td class="py-2">
                        <div class="flex items-center">
                        <p x-html="prj.description" class="text-gray-100 text-theme-sm dark:text-gray-400">
                            
                        </p>
                        </div>
                    </td>
                    <td class="py-2">
                        <div class="flex items-center">
                        <p x-text="prj.technology">
                        </p>
                        </div>
                    </td>
                    <td class="py-2">
                        <div class="flex items-center justify-center">
                            
                                <button type="button" @click.prevent="editProject(prj.id)" class="inline-flex items-center text-white bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-800 box-border border border-transparent shadow-xs font-medium leading-5 rounded-base text-sm px-2 py-1 focus:outline-none cursor-pointer">

                                <svg fill="#fff" class="w-4 h-4 mr-1" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                 viewBox="0 0 494.936 494.936" xml:space="preserve">
                                <g>
                                <g>
                                <path d="M389.844,182.85c-6.743,0-12.21,5.467-12.21,12.21v222.968c0,23.562-19.174,42.735-42.736,42.735H67.157
                                c-23.562,0-42.736-19.174-42.736-42.735V150.285c0-23.562,19.174-42.735,42.736-42.735h267.741c6.743,0,12.21-5.467,12.21-12.21
                                s-5.467-12.21-12.21-12.21H67.157C30.126,83.13,0,113.255,0,150.285v267.743c0,37.029,30.126,67.155,67.157,67.155h267.741
                                c37.03,0,67.156-30.126,67.156-67.155V195.061C402.054,188.318,396.587,182.85,389.844,182.85z"/>
                                <path d="M483.876,20.791c-14.72-14.72-38.669-14.714-53.377,0L221.352,229.944c-0.28,0.28-3.434,3.559-4.251,5.396l-28.963,65.069
                                c-2.057,4.619-1.056,10.027,2.521,13.6c2.337,2.336,5.461,3.576,8.639,3.576c1.675,0,3.362-0.346,4.96-1.057l65.07-28.963
                                c1.83-0.815,5.114-3.97,5.396-4.25L483.876,74.169c7.131-7.131,11.06-16.61,11.06-26.692
                                C494.936,37.396,491.007,27.915,483.876,20.791z M466.61,56.897L257.457,266.05c-0.035,0.036-0.055,0.078-0.089,0.107
                                l-33.989,15.131L238.51,247.3c0.03-0.036,0.071-0.055,0.107-0.09L447.765,38.058c5.038-5.039,13.819-5.033,18.846,0.005
                                c2.518,2.51,3.905,5.855,3.905,9.414C470.516,51.036,469.127,54.38,466.61,56.897z"/>
                                </g>
                                </g>
                                </svg>
                                    Edit
                                </button>         
                                
                                <button @click.prevent="deleteProjectConfirm(prj.id)" type="button" class="inline-flex items-center  text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 box-border border border-transparent shadow-xs font-medium leading-5 rounded-base text-sm px-2 py-1  cursor-pointer">
                                <svg class="w-4 h-4 mr-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 11V17" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14 11V17" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4 7H20" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Delete
                        </button>
                        
                        <button x-show="!prj.status" @click.prevent="changeStatus(prj.id, 1)" type="button" class="inline-flex items-center text-white bg-gradient-to-r from-green-600 via-green-700 to-green-800 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-400 dark:focus:ring-green-900 box-border border border-transparent shadow-xs font-medium leading-5 rounded-base text-sm px-2 py-1  cursor-pointer">
                    
                    <svg fill="#fff" class="w-4 h-4 mr-1" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                        viewBox="0 0 479.989 479.989" xml:space="preserve">
                    <g>
                        <g>
                            <g>
                                <path d="M470.4,2.122c-4.693-3.52-11.413-2.56-14.933,2.133l-258.24,342.187L98.24,246.815c-4.267-4.16-10.987-4.053-15.04,0.213
                                    c-4.053,4.16-4.053,10.667,0,14.827l107.52,108.267c2.027,2.027,4.693,3.093,7.573,3.2h0.747
                                    c3.093-0.213,5.973-1.813,7.787-4.267l265.707-352C476.053,12.362,475.093,5.642,470.4,2.122z"/>
                                <path d="M421.333,213.322c-5.867,0-10.667,4.8-10.667,10.667v234.667h-384V63.989H303.68c5.333,0,10.133-3.84,10.88-9.067
                                    c0.96-6.613-4.16-12.267-10.56-12.267H16c-5.867,0-10.667,4.8-10.667,10.667v416c0,5.867,4.8,10.667,10.667,10.667h405.333
                                    c5.867,0,10.667-4.8,10.667-10.667V223.989C432,218.122,427.2,213.322,421.333,213.322z"/>
                            </g>
                        </g>
                    </g>
                    </svg>
                    Enable
                    </button>
                    <button x-show="prj.status" @click.prevent="changeStatus(prj.id, 0)" type="button" class="inline-flex items-center  text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 box-border border border-transparent shadow-xs font-medium leading-5 rounded-base text-sm px-2 py-1  cursor-pointer">
                    
                    <svg fill="#fff" class="w-4 h-4 mr-1" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <title>remove</title>
                    <path d="M11.188 4.781c6.188 0 11.219 5.031 11.219 11.219s-5.031 11.188-11.219 11.188-11.188-5-11.188-11.188 5-11.219 11.188-11.219zM11.25 17.625l3.563 3.594c0.438 0.438 1.156 0.438 1.594 0 0.406-0.406 0.406-1.125 0-1.563l-3.563-3.594 3.563-3.594c0.406-0.438 0.406-1.156 0-1.563-0.438-0.438-1.156-0.438-1.594 0l-3.563 3.594-3.563-3.594c-0.438-0.438-1.156-0.438-1.594 0-0.406 0.406-0.406 1.125 0 1.563l3.563 3.594-3.563 3.594c-0.406 0.438-0.406 1.156 0 1.563 0.438 0.438 1.156 0.438 1.594 0z"></path>
                    </svg>
                    Disable
                    </button>

                        </div>
                    </td>
                </tr>
            </template>            
            <template x-if="projects.length === 0">
                <tr class="border-b border-gray-200">
                    <td colspan="4" class="text-center text-gray-100">
                        No data found yet ...
                    </td>
                </tr>
            </template>
        </tbody>
        </table>
    </div>
    </div>


</div>