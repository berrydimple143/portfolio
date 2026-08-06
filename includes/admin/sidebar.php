<?php require_once '../../src/Functions/helpers.php'; ?>
<aside :class="sidebarToggle ? 'translate-x-0 lg:w-[70px]' : '-translate-x-full'"
  class="sidebar fixed left-0 top-0 z-9999 flex h-screen w-[290px] flex-col overflow-y-hidden border-r border-blue-800 bg-gradient-to-r from-blue-800 via-blue-700 to-blue-900 px-5 dark:border-blue-800 dark:bg-black lg:static lg:translate-x-0"
>
  <div class="py-6">&nbsp;</div>
  <!-- SIDEBAR HEADER -->
  <div
    class="flex flex-col overflow-y-auto duration-300 ease-linear no-scrollbar"
  >
    <!-- Sidebar Menu -->
    <nav class="text-gray-200">
      <!-- Menu Group -->
      <div>
        <h3 class="mb-4 text-xs uppercase leading-[20px]">
          <span
            class="menu-group-title"
            :class="sidebarToggle ? 'lg:hidden' : ''"
          >
            ADMIN PANEL
          </span>
        </h3>

        <ul class="flex flex-col gap-4 mb-6">
          <!-- Menu Item Dashboard -->
          <li class="p-1 hover:bg-gradient-to-t from-blue-500 via-blue-600 to-blue-500 hover:p-1 hover:rounded-full" :class="(page === 'dashboard') ? 'bg-gradient-to-t from-blue-500 via-blue-600 to-blue-500 p-1 rounded-full' : ''">
            <a @click.prevent="page = 'dashboard'" class="menu-item group flex items-center justify-start space-x-2 cursor-pointer">
              
            <?php includeWithArgs('../../images/icons/dashboard.php', ['color' => '#fff', 'class' => 'w-7 h-7', 'view' => '0 0 24 24']); ?>

              <span
                class="menu-item-text"
                :class="sidebarToggle ? 'lg:hidden' : ''"
              >
                Dashboard
              </span>
            </a>            
          </li>
          <!-- Menu Item Dashboard -->         

          <li class="p-1 hover:bg-gradient-to-t from-blue-500 via-blue-600 to-blue-500 hover:p-1 hover:rounded-full" :class="(page === 'projects' || page === 'project_form') ? 'bg-gradient-to-t from-blue-500 via-blue-600 to-blue-500 p-1 rounded-full' : ''">
            <a @click.prevent="page = 'projects'" @click.prevent="navigate('/secret/thing/projects.php')" class="menu-item group flex items-center justify-start space-x-2 cursor-pointer">
              <?php includeWithArgs('../../images/icons/work.php', ['color' => '#fff', 'class' => 'w-5 h-5', 'view' => '0 0 60 60']); ?>

              <span
                class="menu-item-text"
                :class="sidebarToggle ? 'lg:hidden' : ''"
              >
                Projects
              </span>
            </a>
          </li>

          <!-- Menu Item Profile -->
          <li class="p-1 hover:bg-gradient-to-t from-blue-500 via-blue-600 to-blue-500 hover:p-1 hover:rounded-full" :class="(page === 'experiences') ? 'bg-gradient-to-t from-blue-500 via-blue-600 to-blue-500 p-1 rounded-full' : ''">
            <a @click.prevent="page = 'experiences'" class="menu-item group flex items-center justify-start space-x-2 cursor-pointer">
              <?php includeWithArgs('../../images/icons/experience.php', ['color' => '#fff', 'class' => 'w-6 h-6', 'view' => '0 0 512 512']); ?>
              <span
                class="menu-item-text"
                :class="sidebarToggle ? 'lg:hidden' : ''"
              >
                Experiences
              </span>
            </a>
          </li>

          <li class="p-1 hover:bg-gradient-to-t from-blue-500 via-blue-600 to-blue-500 hover:p-1 hover:rounded-full" :class="(page === 'technologies') ? 'bg-gradient-to-t from-blue-500 via-blue-600 to-blue-500 p-1 rounded-full' : ''">
            <a @click.prevent="page = 'technologies'" class="menu-item group flex items-center justify-start space-x-2 cursor-pointer">
              <?php includeWithArgs('../../images/icons/code.php', ['color' => '#fff', 'class' => 'w-6 h-6', 'view' => '0 0 24 24']); ?>
              <span
                class="menu-item-text"
                :class="sidebarToggle ? 'lg:hidden' : ''"
              >
                Technologies
              </span>
            </a>
          </li>

          <li class="p-1 hover:bg-gradient-to-t from-blue-500 via-blue-600 to-blue-500 hover:p-1 hover:rounded-full" :class="(page === 'about') ? 'bg-gradient-to-t from-blue-500 via-blue-600 to-blue-500 p-1 rounded-full' : ''">
            <a @click.prevent="page = 'about'" class="menu-item group flex items-center justify-start space-x-2 cursor-pointer">
              <?php includeWithArgs('../../images/icons/about.php', ['color' => '#fff', 'class' => 'w-6 h-6', 'view' => '0 0 24 24']); ?>

              <span
                class="menu-item-text"
                :class="sidebarToggle ? 'lg:hidden' : ''"
              >
                About Information
              </span>
            </a>
          </li>

          <li class="p-1 hover:bg-gradient-to-t from-blue-500 via-blue-600 to-blue-500 hover:p-1 hover:rounded-full" :class="(page === 'contact') ? 'bg-gradient-to-t from-blue-500 via-blue-600 to-blue-500 p-1 rounded-full' : ''">
            <a @click.prevent="page = 'contact'" class="menu-item group flex items-center justify-start space-x-2 cursor-pointer">
              <?php includeWithArgs('../../images/icons/contact.php', ['color' => '#fff', 'class' => 'w-5 h-5', 'view' => '0 0 64 64']); ?>
              <span
                class="menu-item-text"
                :class="sidebarToggle ? 'lg:hidden' : ''"
              >
                Contact Information
              </span>
            </a>
          </li>

          <li class="p-1 hover:bg-gradient-to-t from-blue-500 via-blue-600 to-blue-500 hover:p-1 hover:rounded-full" :class="(page === 'messages') ? 'bg-gradient-to-t from-blue-500 via-blue-600 to-blue-500 p-1 rounded-full' : ''">
            <a @click.prevent="page = 'messages'" class="menu-item group flex items-center justify-start space-x-2 cursor-pointer">
              <?php includeWithArgs('../../images/icons/messages.php', ['color' => '#fff', 'class' => 'w-5 h-5', 'view' => '0 0 72 72']); ?>
              <span
                class="menu-item-text"
                :class="sidebarToggle ? 'lg:hidden' : ''"
              >
                Messages
              </span>
            </a>
          </li>

          <li class="p-1 hover:bg-gradient-to-t from-blue-500 via-blue-600 to-blue-500 hover:p-1 hover:rounded-full">
            <a @click.prevent="logout" class="menu-item group flex items-center justify-start space-x-2 cursor-pointer">
              <?php includeWithArgs('../../images/icons/logout.php', ['color' => '#fff', 'class' => 'w-6 h-6', 'view' => '0 -0.5 25 25']); ?>
              <span
                class="menu-item-text"
                :class="sidebarToggle ? 'lg:hidden' : ''"
              >
                Logout
              </span>
            </a>
          </li>

        </ul>
      </div>     
    </nav>    
  </div>
</aside>