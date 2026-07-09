<?php require_once './src/Functions/helpers.php'; ?>
<div class="my-7 sm:my-0 max-w-[1920px] md:h-[70vh] mx-auto grid sm:grid-cols-4 place-items-center">
    <div class="max-w-[400px] flex flex-col">
        <p class="md:text-4xl sm:text-2xl text-2xl tracking-tight">
            HEY, I AM<br>
            <span class="font-bold italic">VIRGIL ROSALITA</span><br>

            <div class="text-scramble__content">
                <p id="scramble-text-original">Fullstack Developer</p>
                <p class="text-scramble__text flex" aria-hidden="true">
                    <span id="scramble-text-1" class="bg-gradient-to-r from-blue-600 to-pink-500 bg-clip-text text-transparent"></span>                    
                    <div id="scramble-cursor" class="text-black md:text-2xl sm:text-xl text-md">
                        <?php includeWithArgs('./icons/underscore.php', ['width' => '16', 'height' => '16', 'color' => '#000']); ?>
                    </div>                   
                </p>
            </div>

        </p>
        <button class="my-6 p-2 bg-gradient-to-r from-[#2D82B5] to-[#015c92] rounded-lg max-w-[280px] cursor-pointer text-2xl text-white flex items-center justify-center gap-3">
            <span><?php includeWithArgs('./icons/resume.php', ['width' => '7', 'height' => '7', 'color' => '#fff']); ?></span>
            <span>Curriculum Vitae</span>
        </button>
    </div>
    <div class="sm:col-span-2 sm:ml-28">
        <img src="./images/virgil.jpg" alt="Profile Picture" class="w-[300px] sm:w-[500px] h-auto mx-auto">
    </div>
    <div class="text-5xl flex flex-row sm:flex-col gap-8 pr-3 sm:w-full place-items-end">
        <a href="">
            <?php includeWithArgs('./icons/github.php', ['width' => '10', 'height' => '10', 'color' => '#000']); ?>
        </a>
        <a href="">
            <?php includeWithArgs('./icons/linkedin.php', ['width' => '10', 'height' => '10', 'color' => '#000']); ?>
        </a>
        <a href="">
            <?php includeWithArgs('./icons/gmail.php', ['width' => '10', 'height' => '10', 'color' => '#000']); ?>
        </a>
        <a href="">
            <?php includeWithArgs('./icons/fb.php', ['width' => '10', 'height' => '10', 'color' => '#000']); ?>
        </a>
    </div>
</div>