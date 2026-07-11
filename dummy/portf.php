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
<body x-data="pageLoad()" class="bg-[#0f172a] text-slate-100 font-sans antialiased selection:bg-teal-500 selection:text-slate-900">

 <!-- Ambient Background Blobs -->
  <div class="fixed top-0 left-1/4 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl -z-10 animate-pulse"></div>
  <div class="fixed bottom-0 right-1/4 w-96 h-96 bg-teal-500/10 rounded-full blur-3xl -z-10 animate-pulse delay-1000"></div>

  <!-- Header Navigation -->
  <header class="sticky top-0 z-50 backdrop-blur-md bg-[#0f172a]/70 border-b border-slate-800">
    <nav class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
      <a href="#" class="text-xl font-bold bg-gradient-to-r from-teal-400 to-purple-500 bg-clip-text text-transparent">Alex.dev</a>
      <ul class="flex items-center space-x-8 text-sm font-medium text-slate-400">
        <li><a href="#about" class="hover:text-teal-400 transition-colors">About</a></li>
        <li><a href="#projects" class="hover:text-teal-400 transition-colors">Projects</a></li>
        <li><a href="#experience" class="hover:text-teal-400 transition-colors">Experience</a></li>
        <li><a href="#contact" class="px-4 py-2 bg-slate-800 text-slate-200 rounded-full border border-slate-700 hover:bg-slate-700 transition-colors">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main class="max-w-6xl mx-auto px-6 py-12 space-y-32">

    <!-- Hero Section -->
    <section id="about" class="pt-12 md:pt-24 flex flex-col items-start space-y-6 max-w-3xl">
      <div class="inline-flex items-center space-x-2 bg-teal-500/10 text-teal-400 px-3 py-1 rounded-full text-xs font-semibold tracking-wide border border-teal-500/20">
        <span class="w-2 h-2 rounded-full bg-teal-400 animate-ping"></span>
        <span>Available for Freelance & Full-time</span>
      </div>
      <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight leading-tight">
        Building digital products, <br>
        <span class="bg-gradient-to-r from-teal-400 via-emerald-400 to-purple-500 bg-clip-text text-transparent">one pixel at a time.</span>
      </h1>
      <p class="text-lg md:text-xl text-slate-400 font-normal leading-relaxed">
        I'm a frontend engineer and UI designer specializing in building highly polished, accessible, and high-performing web experiences.
      </p>
      <div class="flex flex-wrap gap-4 pt-4">
        <a href="#projects" class="px-6 py-3 bg-gradient-to-r from-teal-500 to-emerald-500 hover:from-teal-600 hover:to-emerald-600 text-slate-900 font-semibold rounded-xl shadow-lg shadow-teal-500/20 transition-all duration-300 transform hover:-translate-y-0.5">
          View My Work
        </a>
        <a href="#contact" class="px-6 py-3 bg-slate-800 hover:bg-slate-700 text-slate-200 font-medium rounded-xl border border-slate-700 transition-all duration-300 transform hover:-translate-y-0.5">
          Get In Touch
        </a>
      </div>
    </section>

    <!-- Bento Grid Tech Stack & Stats -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Bento Item 1: Core Expertise -->
      <div class="md:col-span-2 bg-slate-900/50 backdrop-blur-sm border border-slate-800/80 p-8 rounded-3xl flex flex-col justify-between group hover:border-slate-700 transition-colors">
        <div>
          <h3 class="text-xl font-bold mb-2">Core Tech Stack</h3>
          <p class="text-sm text-slate-400 mb-6">Tools and frameworks I use daily to bring ideas to reality.</p>
        </div>
        <div class="flex flex-wrap gap-2">
          <span class="px-3 py-1.5 bg-slate-800 text-slate-300 rounded-lg text-xs border border-slate-700/50">React / Next.js</span>
          <span class="px-3 py-1.5 bg-slate-800 text-slate-300 rounded-lg text-xs border border-slate-700/50">Tailwind CSS</span>
          <span class="px-3 py-1.5 bg-slate-800 text-slate-300 rounded-lg text-xs border border-slate-700/50">TypeScript</span>
          <span class="px-3 py-1.5 bg-slate-800 text-slate-300 rounded-lg text-xs border border-slate-700/50">Node.js</span>
          <span class="px-3 py-1.5 bg-slate-800 text-slate-300 rounded-lg text-xs border border-slate-700/50">GraphQL</span>
          <span class="px-3 py-1.5 bg-slate-800 text-slate-300 rounded-lg text-xs border border-slate-700/50">Figma</span>
        </div>
      </div>

      <!-- Bento Item 2: Quick Stat -->
      <div class="bg-gradient-to-br from-purple-900/30 to-slate-900/50 backdrop-blur-sm border border-purple-500/20 p-8 rounded-3xl flex flex-col justify-between group hover:border-purple-500/40 transition-colors">
        <div class="text-purple-400 text-3xl font-bold">45+</div>
        <div>
          <h3 class="text-lg font-bold mb-1">Projects Delivered</h3>
          <p class="text-xs text-slate-400">Ranging from minimal marketing sites to full-scale SaaS dashboards.</p>
        </div>
      </div>
    </section>

    <!-- Projects Grid Section -->
    <section id="projects" class="space-y-12">
      <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
        <div>
          <h2 class="text-3xl font-extrabold tracking-tight">Featured Case Studies</h2>
          <p class="text-slate-400 mt-2">A curated selection of my recent engineering and design work.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Project Card 1 -->
        <div class="group relative flex flex-col bg-slate-900/40 border border-slate-800/80 rounded-3xl overflow-hidden hover:border-slate-700 transition-all duration-300">
          <div class="aspect-video bg-gradient-to-tr from-teal-900/40 to-slate-800 flex items-center justify-center p-6 border-b border-slate-800/80 overflow-hidden">
            <!-- Replace with real image tag if preferred -->
            <div class="text-teal-400 font-mono text-sm tracking-wider uppercase bg-slate-950/80 px-4 py-2 rounded-lg border border-slate-800 transform group-hover:scale-105 transition-transform duration-300">SaaS Analytics Platform</div>
          </div>
          <div class="p-6 flex-1 flex flex-col justify-between">
            <div>
              <div class="flex items-center space-x-2 text-xs text-slate-400 mb-2">
                <span>Frontend</span>
                <span>•</span>
                <span>UI/UX Design</span>
              </div>
              <h3 class="text-xl font-bold mb-2 group-hover:text-teal-400 transition-colors">Nova Dashboard</h3>
              <p class="text-slate-400 text-sm leading-relaxed mb-4">
                A real-time data visualization dashboard monitoring heavy server microservices metrics. 
              </p>
            </div>
            <div class="flex items-center justify-between mt-4">
              <div class="flex space-x-2">
                <span class="text-xs font-medium text-slate-500 bg-slate-800/50 px-2.5 py-1 rounded">Next.js</span>
                <span class="text-xs font-medium text-slate-500 bg-slate-800/50 px-2.5 py-1 rounded">Recharts</span>
              </div>
              <a href="#" class="text-sm font-semibold text-teal-400 inline-flex items-center group-hover:underline">
                View Case 
                <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Project Card 2 -->
        <div class="group relative flex flex-col bg-slate-900/40 border border-slate-800/80 rounded-3xl overflow-hidden hover:border-slate-700 transition-all duration-300">
          <div class="aspect-video bg-gradient-to-tr from-purple-900/40 to-slate-800 flex items-center justify-center p-6 border-b border-slate-800/80 overflow-hidden">
            <div class="text-purple-400 font-mono text-sm tracking-wider uppercase bg-slate-950/80 px-4 py-2 rounded-lg border border-slate-800 transform group-hover:scale-105 transition-transform duration-300">E-Commerce Ecosystem</div>
          </div>
          <div class="p-6 flex-1 flex flex-col justify-between">
            <div>
              <div class="flex items-center space-x-2 text-xs text-slate-400 mb-2">
                <span>E-Commerce</span>
                <span>•</span>
                <span>Fullstack</span>
              </div>
              <h3 class="text-xl font-bold mb-2 group-hover:text-purple-400 transition-colors">Aura Apparel Studio</h3>
              <p class="text-slate-400 text-sm leading-relaxed mb-4">
                Headless marketplace platform built with dynamic filtering, cart memory configurations, and Stripe integration.
              </p>
            </div>
            <div class="flex items-center justify-between mt-4">
              <div class="flex space-x-2">
                <span class="text-xs font-medium text-slate-500 bg-slate-800/50 px-2.5 py-1 rounded">Tailwind</span>
                <span class="text-xs font-medium text-slate-500 bg-slate-800/50 px-2.5 py-1 rounded">Stripe</span>
              </div>
              <a href="#" class="text-sm font-semibold text-purple-400 inline-flex items-center group-hover:underline">
                View Case 
                <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
       
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