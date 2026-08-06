<!doctype html>
<html lang="en">
  <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Virgil Rosalita Portfolio Website - Admin Panel</title>
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
    <?php include('../../includes/admin/preloader.php'); ?>
    <div class="flex h-screen overflow-hidden">
      <?php include('../../includes/admin/sidebar.php'); ?>
      <div
        class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto"
      >
        <?php include('../../includes/admin/overlay.php'); ?>
        <?php include('../../includes/admin/header.php'); ?>
        <main class="bg-gradient-to-r from-blue-300 via-blue-200 to-blue-300 h-screen">
          <div class="p-1 mx-auto max-w-(--breakpoint-2xl) md:p-2">
            <div class="grid grid-cols-6 gap-4 md:gap-6">
              <div class="col-span-6 space-y-6 xl:col-span-7">
                <?php include('../../includes/admin/pages/dashboard.php'); ?>
                <?php include('../../includes/admin/pages/projects.php'); ?>
                <?php include('../../includes/admin/pages/project_form.php'); ?>
                <?php include('../../includes/admin/pages/about.php'); ?>
                <?php include('../../includes/admin/pages/experiences.php'); ?>
                <?php include('../../includes/admin/pages/technologies.php'); ?>
                <?php include('../../includes/admin/pages/contact.php'); ?>
                <?php include('../../includes/admin/pages/messages.php'); ?>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
    <script>
            function dashboardLoad() {
                return {
                    page: 'dashboard', 
                    projectId: null,
                    loaded: false,                     
                    darkMode: false, 
                    menuToggle: false,
                    stickyMenu: false,                     
                    selected: false,
                    sidebarToggle: false, 
                    scrollTop: false,
                    title: '',
                    code: '',
                    technology: '',
                    image: '',
                    description: '',
                    file: '',
                    mode: 'add',
                    redirectUrl: '../../secret/thing/login.php',
                    projectUrl: '../../api/admin/project.php',
                    uploadUrl: '../../api/admin/upload.php',
                    projects: [],
                    experiences: [],
                    
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
                        this.initProjects();                        
                    },                    
                    deleteProjectConfirm(id) {
                      const decision = confirm("Are you sure you want to delete this project?");
                      if(decision) {
                        this.deleteProject(id);
                      }
                    },
                    clearForm() {
                        this.title = "";
                        this.technology = "";
                        this.image = "";
                        this.description = "";
                        this.code = "";
                    },
                    cancelForm() {
                        this.page = 'projects';
                        this.clearForm();
                    },
                    async uploadImage(event) {
                        const files = event.target.files;
                        if (files.length === 0) return;
                        this.file = files[0];
                        let imgUrl = URL.createObjectURL(this.file);
                        const formData = new FormData();
                        formData.append('image', this.file);
                        try {
                            const response = await fetch(this.uploadUrl, {
                                method: 'POST',
                                body: formData
                            });

                            const result = await response.json();
                            if (response.ok && result.success) {
                                this.isError = false;
                                this.message = result.message;
                                this.image = result.filename;
                            } else {
                                this.isError = true;
                                this.message = result.message || 'Upload failed.';
                            }
                        } catch (error) {
                            this.isError = true;
                            this.message = 'A network error occurred.';
                        }
                    },
                    async editProject(id) {
                      this.projectId = id;
                      this.mode = 'edit';
                      try {
                          let response = await fetch(this.projectUrl, {
                            method: 'POST',
                            headers: {'Content-Type': 'application/json'},
                            body: JSON.stringify({
                                id: id,
                                status: 1,
                                code: 'sample',
                                title: 'sample',
                                technology: 'sample',
                                image: 'sample',
                                description: 'sample',
                                mode: "search"
                            })
                          });
                          let project = await response.json();
                          this.title = project.data.title;
                          this.technology = project.data.technology;
                          this.image = project.data.image;
                          this.code = project.data.code;
                          this.description = project.data.description;
                          this.page = 'project_form';
                      } catch(error) {
                          console.error('Error fetching data:', error);
                      }
                    },
                    async changeStatus(id, status) {                      
                      try {
                          let response = await fetch(this.projectUrl, {
                              method: 'POST',
                              headers: {'Content-Type': 'application/json'},
                              body: JSON.stringify({ 
                                  id: id,
                                  status: status,
                                  code: 'sample',
                                  title: 'sample',
                                  technology: 'sample',
                                  image: 'sample',
                                  description: 'sample',
                                  mode: "change"
                              })
                          });
                          let project = await response.json();
                      } catch (error) {
                          console.error('Error fetching data:', error);
                      } finally {                          
                          this.initProjects();                        
                          setTimeout(() => {
                            this.page = 'projects';
                          }, 10);
                      }
                    }, 
                    async deleteProject(id) {
                      try {
                          let response = await fetch(this.projectUrl, {
                              method: 'POST',
                              headers: {'Content-Type': 'application/json'},
                              body: JSON.stringify({ 
                                  id: id,
                                  status: 1,
                                  title: 'sample',
                                  code: 'sample',
                                  technology: 'sample',
                                  image: 'sample',
                                  description: 'sample',
                                  mode: "delete"
                              })
                          });
                          await response.json();
                      } catch(error) {
                        console.error('Error fetching data:', error);
                      } finally {
                        this.initProjects();                        
                      }
                    },   
                    async submitProject() {
                      let id = 2;
                      if(this.mode == 'edit') { id = this.projectId; }
                      if(!this.image) {
                          alert("You must upload an image for this project.");
                      } else {
                          try {
                              let response = await fetch(this.projectUrl, {
                                  method: 'POST',
                                  headers: {'Content-Type': 'application/json'},
                                  body: JSON.stringify({ 
                                      id: id,
                                      status: 1,
                                      title: this.title,
                                      code: this.code,
                                      technology: this.technology,
                                      image: this.image,
                                      description: this.description,
                                      mode: this.mode
                                  })
                              });
                              await response.json();
                          } catch(error) {
                          console.error('Error fetching data:', error);
                          } finally {
                          this.initProjects();                        
                          setTimeout(() => {
                              this.page = 'projects';
                              this.clearForm();
                          }, 500);
                          }
                      }
                    },
                    async initProjects() {
                        this.mode = 'add';
                        try {
                            let response = await fetch(this.projectUrl, {
                                method: 'POST',
                                headers: {'Content-Type': 'application/json'},
                                body: JSON.stringify({ 
                                    id: 2,
                                    status: 1,
                                    title: 'sample',
                                    code: 'sample',
                                    technology: 'sample',
                                    image: 'sample',
                                    description: 'sample',
                                    mode: "getAll"
                                })
                            });
                            let project = await response.json();
                            this.projects = project.data;                    
                        } catch(error) {
                        console.error('Error fetching data:', error);
                        }
                    },  
                    logout() {
                        sessionStorage.clear();
                        window.location = this.redirectUrl;
                    }
                }
            }
    </script>
  </body>
</html>
