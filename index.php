<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virgil Rosalita Portfolio Website</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
    <link rel="stylesheet" href="./css/main.css">
    <!-- <link href="./src/output.css" rel="stylesheet"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
     <script src="./js/tailwindcss.cdn.js"></script>
    <script type="module" src="./js/main.js"></script>
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body x-data="pageLoad()">
    <div class="text-white flex items-center justify-between max-w-[1920px] mx-auto h-16 border-b border-gray-300 bg-gradient-to-r from-blue-200 via-blue-500 to-blue-400">        
        <?php include('./includes/front/header.php'); ?>      
    </div>          
    <?php include('./includes/front/hero.php'); ?> 
    <?php include('./includes/front/about.php'); ?>
    <?php include('./includes/front/work.php'); ?>
    <?php include('./includes/front/experience.php'); ?>    
    <?php include('./includes/front/contact.php'); ?>   
    <script>
        function pageLoad() {
            return {
                showMobileMenu: false,      
                projects: [
                    { 
                        id: 1, 
                        title: "Project 1",
                        img: './images/projects/1.jpg', 
                        description: "This is a sample description. This is a sample description. This is a sample description. This is a sample description. This is a sample description."
                    },
                    { 
                        id: 2, 
                        title: "Project 2",
                        img: './images/projects/2.jpg', 
                        description: "This is a sample description. This is a sample description. This is a sample description. This is a sample description. This is a sample description."
                    },
                    { 
                        id: 3, 
                        title: "Project 3",
                        img: './images/projects/3.jpg', 
                        description: "This is a sample description. This is a sample description. This is a sample description. This is a sample description. This is a sample description."
                    },
                    { 
                        id: 4, 
                        title: "Project 4",
                        img: './images/projects/4.jpg', 
                        description: "This is a sample description. This is a sample description. This is a sample description. This is a sample description. This is a sample description."
                    }
                ],          
                experiences: [
                    {
                        id: 1,
                        company: "GlobalTech Development Inc.",
                        duration: "2011-2012",
                        description: "I am responsible for creating, planning, developing, troubleshooting and deploying projects in shared hosting and/or in the cloud."
                    },
                    {
                        id: 2,
                        company: "AltusTech IT Solutions Corp.",
                        duration: "2012-2015",
                        description: "I am responsible for creating, planning, developing, troubleshooting and deploying projects in shared hosting and/or in the cloud."
                    }
                ],
                showMobile() {
                    this.showMobileMenu = !this.showMobileMenu;
                },                
                initText() {                      
                    const tl = gsap.timeline({
                        id: "text-scramble",
                        defaults: { ease: "none" }
                    });
                    const cursorTl = gsap.timeline({ repeat: -1 });
                    gsap.set("#scramble-text-original", { opacity: 0 });

                    cursorTl
                    .to("#scramble-cursor", {
                        opacity: 0,
                        duration: 0.5,
                        ease: "none",
                        delay: 0.2
                    })
                    .to("#scramble-cursor", {
                        opacity: 1,
                        duration: 0.5,
                        ease: "none",
                        delay: 0.2
                    });

                    tl.to("#scramble-text-1", {
                    scrambleText: {
                        text: "I am an interactive ",
                        chars: "0110",
                        speed: 0.4
                    },
                    duration: 2
                    })
                    .to("#scramble-text-1", {
                        scrambleText: {
                        text: " and well-experienced",
                        chars: "0110",
                        speed: 0.4
                        },
                        duration: 2
                    })
                    .to("#scramble-text-1", {
                        scrambleText: { text: " fullstack web application", chars: "0110", speed: 0.4 },
                        duration: 2
                    })
                    .to("#scramble-text-1", {
                        scrambleText: { text: " developer for more", chars: " 0110", speed: 0.3 },
                        duration: 2
                    })
                    .to("#scramble-text-1", {
                        scrambleText: { text: " than 13 years now.", chars: " 0110", speed: 0.3 },
                        duration: 2
                    })
                    .to("#scramble-text-1", {
                        scrambleText: { text: " Hire me as your", chars: " 0110", speed: 0.3 },
                        duration: 2
                    })
                    .to("#scramble-text-1", {
                        scrambleText: { text: "Fullstack Developer", chars: " 0110", speed: 0.3
                        },
                        duration: 2
                    })
                    .add(cursorTl);
                    tl.play(0);
                },
                init() {                    
                    this.initText();                                       
                }
            }
        }
    </script>    
</body>
</html>