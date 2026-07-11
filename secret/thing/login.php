<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Virgil Rosalita Portfolio Website - Login Form</title>
        <link rel="icon" type="image/x-icon" href="../../images/favicon.ico">          
        <script src="../../js/tailwindcss.cdn.js"></script>
        <script type="module" src="../../js/main.js"></script>
        <style>
            [x-cloak] { display: none !important; }
        </style>
    </head>
    <body x-data="loginLoad()">
        <?php include('../../includes/front/modals/login-successful.php'); ?>
        <?php include('../../includes/secret/login.php'); ?> 
        <script>
            function loginLoad() {
                return {
                    email: '',
                    password: '',		    
                    loading: false,
                    redirectUrl: '../../secret/thing/index.php',
                    loginAPI: "http://localhost/portfolio/api/login.php",
                    errors: {},

                    checkAuth() {
                        let logged = sessionStorage.getItem("logged");
                        setTimeout(() => {
                            if(logged) {
                                window.location = this.redirectUrl;
                            } 
                        }, 50);
                    },

                    init() {                       
                        this.checkAuth();
                    },

                    async submitAuth() {
                        this.loading = true;
                        try {
                            const response = await fetch(this.loginAPI, {
                                method: "POST",
                                headers: {"Content-Type": "application/json"},
                                body: JSON.stringify({ 
                                    email: this.email,
                                    password: this.password		        	
                                })
                            });
                            
                            const resp = await response.json();
                            const modal = document.getElementById('loginSuccessful');

                            if(!resp.status) {
                                alert("Invalid email/password.");
                            } else {
                                modal.classList.remove('hidden');  	
                                setTimeout(() => {
                                    modal.classList.add('hidden');
                                    sessionStorage.setItem("user_id", resp.user.id);                                    	
                                    sessionStorage.setItem("email", resp.user.email);			  
                                    sessionStorage.setItem("logged", true);
                                    window.location = this.redirectUrl;
                                }, 2000);
                            }
                        } catch (error) {		      	  
                            console.error('Error fetching data:', error);
                        } finally {
                            this.loading = false;
                        }		      
                    }
                }
            }
        </script>   
    </body>
</html>