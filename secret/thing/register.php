<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Virgil Rosalita Portfolio Website - Registration Form</title>
        <link rel="icon" type="image/x-icon" href="./images/favicon.ico">          
        <script src="../../js/tailwindcss.cdn.js"></script>
        <script type="module" src="../../js/main.js"></script>
        <style>
            [x-cloak] { display: none !important; }
        </style>
    </head>
    <body x-data="loginLoad()">
        <?php include('../../includes/front/modals/registration-successful.php'); ?>
        <?php include('../../includes/secret/register.php'); ?>
        <script>
            function loginLoad() {
                return {
                    firstname: '',
                    lastname: '',
                    middlename: '',
                    email: '',
                    username: '',
                    password: '',
                    loading: false,
                    redirectUrl: '../../secret/thing/login.php',
                    registerAPI: "http://localhost/portfolio/api/register.php",
                    errors: {},
                    registerSuccessful: null,
                    clearInputs() {
                        this.firstname = '';
                        this.lastname = '';
                        this.middlename = '';
                        this.email = '';
                        this.username = '';
                        this.password = '';
                    },
                    init() {
                        this.registerSuccessful = document.getElementById('registerSuccessful');
                    },
                    async register() {
                        this.loading = true;
                        this.registerSuccessful.classList.remove('hidden');
                        try {
                            const response = await fetch(this.registerAPI, {
                                method: "POST",
                                headers: {"Content-Type": "application/json"},
                                body: JSON.stringify({ 
                                    firstname: this.firstname,
                                    lastname: this.lastname,
                                    middlename: this.middlename,
                                    username: this.username,
                                    email: this.email,
                                    password: this.password
                                })
                            });
                            
                            const resp = await response.json();                           
                            
                            if(!resp.status) {
                                alert("Invalid inputs");
                            } else {                                
                                setTimeout(() => {                                    
                                    this.registerSuccessful.classList.add('hidden');
                                    sessionStorage.setItem("user_id", resp.user.id);                                    	
                                    sessionStorage.setItem("email", resp.user.email);	
                                    sessionStorage.setItem("username", resp.user.username);		  
                                    //sessionStorage.setItem("logged", true);
                                    window.location = this.redirectUrl;
                                }, 2000);
                            }
                        } catch (error) {		      	  
                            console.error('Error fetching data:', error);
                        } finally {              
                            this.clearInputs();              
                            this.loading = false;
                        }		      
                    }
                }
            }
        </script>   
    </body>
</html>