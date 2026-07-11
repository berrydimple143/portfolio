<!doctype html>
<html lang="en">
  <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Virgil Rosalita Portfolio Website</title>
        <link rel="icon" type="image/x-icon" href="../../images/favicon.ico">     
        <link rel="stylesheet" href="../../css/main.css">     
        <script src="../../js/tailwindcss.cdn.js"></script>
        <script type="module" src="../../js/main.js"></script>
        <style>
            [x-cloak] { display: none !important; }
        </style>
  </head>
  <body x-data="dashboardLoad()" :class="{'dark bg-gray-900': darkMode === true}"
  >
    <!-- ===== Preloader Start ===== -->
    <?php include('../../partials/preloader.php'); ?> 
    <!-- ===== Preloader End ===== -->

    <!-- ===== Page Wrapper Start ===== -->
    <div class="flex h-screen overflow-hidden">
      <!-- ===== Sidebar Start ===== -->
      <?php include('../../partials/sidebar.php'); ?> 
      <!-- ===== Sidebar End ===== -->

      <!-- ===== Content Area Start ===== -->
      <div
        class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto"
      >
        <!-- Small Device Overlay Start -->
        <?php include('../../partials/overlay.php'); ?> 
        <!-- Small Device Overlay End -->

        <!-- ===== Header Start ===== -->
        <?php include('../../partials/header.php'); ?>
        <!-- ===== Header End ===== -->

        <!-- ===== Main Content Start ===== -->
        <main>
          <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
            <div class="grid grid-cols-12 gap-4 md:gap-6">
              <div class="col-span-12 space-y-6 xl:col-span-7">
                <!-- Metric Group One -->
                <?php include('../../partials/metric-group/metric-group-01.php'); ?>
                <!-- Metric Group One -->

                <!-- ====== Chart One Start -->
                <?php include('../../partials/chart/chart-01.php'); ?>
                <!-- ====== Chart One End -->
              </div>
              <div class="col-span-12 xl:col-span-5">
                <!-- ====== Chart Two Start -->
                 <?php include('../../partials/chart/chart-02.php'); ?>
                <!-- ====== Chart Two End -->
              </div>

              <div class="col-span-12">
                <!-- ====== Chart Three Start -->
                 <?php include('../../partials/chart/chart-03.php'); ?>
                <!-- ====== Chart Three End -->
              </div>

              <div class="col-span-12 xl:col-span-5">
                <!-- ====== Map One Start -->
                <?php include('../../partials/map-01.php'); ?>
                <!-- ====== Map One End -->
              </div>

              <div class="col-span-12 xl:col-span-7">
                <!-- ====== Table One Start -->
                <?php include('../../partials/table/table-01.php'); ?>
                <!-- ====== Table One End -->
              </div>
            </div>
          </div>
        </main>
        <!-- ===== Main Content End ===== -->
      </div>
      <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->
    <script>
            function dashboardLoad() {
                return {
                    page: 'ecommerce', 
                    loaded: false, 
                    darkMode: false, 
                    menuToggle: false,
                    stickyMenu: false, 
                    sidebarToggle: true, 
                    scrollTop: false,
                    redirectUrl: '../../secret/thing/login.php',
                    checkAuth() {
                        let logged = sessionStorage.getItem("logged");
                        setTimeout(() => {
                            if(!logged) {
                                window.location = this.redirectUrl;
                            } 
                        }, 50);
                    },
                    init() {
                        this.checkAuth();
                        this.darkMode = JSON.parse(localStorage.getItem('darkMode'));
                        //$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)));
                    }
                }
            }
    </script>
  </body>
</html>
