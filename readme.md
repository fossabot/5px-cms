# <strong>5 Pixel Development CMS Base v0.3<strong>
The 5 Pixel Development CMS Base is designed to make the life of a web developer a little bit easier
<br>

### Upcoming features/changes
> Better password encryption
<br>

# Readme content
- Upcoming features/changes **[GoTo](https://github.com/5m1Ly/5_Pixel_Development_CMS_Base#upcoming-featureschanges)**
- Readme content
- Languages/Library's used **[GoTo](https://github.com/5m1Ly/5_Pixel_Development_CMS_Base#languageslibrarys-used)**
- Installation guide **[GoTo](https://github.com/5m1Ly/5_Pixel_Development_CMS_Base#installation-guide)**
- Create a plugin (site page) **[GoTo](https://github.com/5m1Ly/5_Pixel_Development_CMS_Base#create-a-plugin-site-page)**
- Change your project to a plugin **[GoTo](https://github.com/5m1Ly/5_Pixel_Development_CMS_Base#change-your-project-to-a-plugin)**
- Changing the main file name of plugins **[GoTo](https://github.com/5m1Ly/5_Pixel_Development_CMS_Base#changing-the-main-file-name-of-plugins)**
- Changing the button style within the menu **[GoTo](https://github.com/5m1Ly/5_Pixel_Development_CMS_Base#changing-the-button-style-within-the-menu)**
- Last changelog **[GoTo](https://github.com/5m1Ly/5_Pixel_Development_CMS_Base#last-changelog)**
- Changelog history **[GoTo](https://github.com/5m1Ly/5_Pixel_Development_CMS_Base#changelog-history--added---removed--changed)**
<br>

# Languages/Library's used
> ## Languages
> - html 5
> - css 3
> - php v7.4.2
>
> ## Library's
> - Bootstrap v5.0.0 beta3 | **[Docs](https://getbootstrap.com/docs/5.0/)**
> - jQuery v3.6.0 | **[Docs](https://api.jquery.com/)**
> - Font Awesome v5.15.1 | **[Docs](https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use)**
<br>

# Installation guide
> ## Step 1
> create a folder within your xampp workspace or other services
> ## Step 2
> do a pull request or place the unzipped contents of the folder here
> ## Step 3
> create a database by default the database name the site calls is called '5_pixel_cms' 
> ## Step 4
> import the 'database.sql' file in the database you just created
> ## Step 5
> go within your workspace to 'root-folder/src/inc/dbh.inc.php' 
> ## Step 6
> here you will find default login credentials to the database and the database name used change it if yours are different
>
>     $serverName = "127.0.0.1";
>     $dbUsername = "root";
>     $dbPassword = "";
>     $dbName = "5_pixel_cms";
>
> ## Step 7
> after you have done this start your local server if not already done and redirect to 'localhost/root-folder/index.php' in the browser
> ## Step 8
> now you are on the home page of the website where visitors and user can see to be able to enter the cms login with the following login credentials
>
>     username: Admin
>     password: Admin123
<br>

# Create a plugin (site page)
>
> ## Intro
> Because the 5 Pixel CMS Base uses a dynamic menu its quite easy to
> add/create a new plugin.
> ## Step 1
> Go to 'root-folder/src/plugins/cms/' within the cms folder you will
> find a folder called template the folder its self is the base of the plugin
> ## Step 2
> Copy the template folder now go back to 'root-folder/src/plugins' and 
> paste it either in the site or cms or both if you want to make some thing
> that is used by the user and the admin for instance when you want the
> user or visitor to leave a message on a contact page and the admin
> to read the submitted message within the cms
> ## Step 3
> Change the name of the folder because the template folder is ignored when creating menu buttons by default
> ## Step 4
> In this folder there are a couple of files including a index.php file <br>
> <strong><em>!!! its really important that you don't change the name of this file !!!</em></strong><br>
> NOTE: If you do want to change the name of the main file of the 
> plugins follow the steps in **[this](https://github.com/5m1Ly/5_Pixel_Development_CMS_Base#changing-the-main-file-name-of-plugins)** paragraph.
> ## Step 5 
> Open the index.php file there you will find this code...
> ### Head tag
> Within the first included file '0_head.php' below you will find the
> opening html & body tag you will also find the cdns here
>
> The closing head tag is placed in the main file of a plugin so you can add optional 
>
> - js files
> - css files  
> - title 
> - title icon
> - meta tags 
>
> The reason for placing meta tags here is because when the site is
> effectively used you probably don't want the cms dashboard to be
> found on google even though there are options to prevent visitors
> from entering the cms
>   
>     <?php include_once '../../../base/0_head.php'; ?>
> 
>         <script src="./js/app.js"></script>
>         <link rel="stylesheet" href="./css/style.css">
> 
>         <title>5 Pixel CMS</title>
> 
>     </head>
> <br>
>
> ### Body tag
> #### Section 1
> Here you will find the title thats inside the header of the
> page change 'Plugin Name' to your plugin name
>
>     <div class="row bg-dark text-white">
>         <div class="col-12 p-2" id="header">
>
>             <h1>5 Pixel CMS - Plugin Name</h1>
>
>         </div>
>     </div>
>     <div class="row">
>         <div class="col-2">
>             <div class="row text-center justify-content-center py-3 bg-dark">
>                 <?php include_once '../../../base/1_menu.php'; ?>
>             </div>
>         </div>
>         <div class="col-10">
>
>             <!-- content -->
>
>         </div>
>     </div>
>
> NOTE: when you place the content of your plugin within a
> separate file that you are going to include here you'll
> need to start the first div tag with a row class since
> your inside a div tag with a col class
<br>

# Change your project to a plugin
> ## Step 1
> Change the name of the main file to index.php
> ## Step 2 
> Make sure that external files of the project (all files accept for index.php) are within the project folder
> ## Step 3 
> Simply drag you project folder either to 'root-folder/src/plugins/cms' if it is a admin page or to 'root-folder/src/plugins/site' if it is a user page 
>
> if you want to turn old projects with bs v3.x or v4.x into a plugin for the 5 Pixel CMS Base you should check out these page's for transforming the project
>
> **[bs v4.x all classes](https://www.w3schools.com/bootstrap4/bootstrap_ref_all_classes.asp)**<br>
> **[bs v3.x all classes](https://www.w3schools.com/bootstrap/bootstrap_ref_all_classes.asp)**
<br>

# Changing the main file name of plugins
> ## Step 1 
> Go to 'root-folder/base/' and op the 1_menu.php
> ## Step 2
> Here you will find the next code on line 4 $mainFile contains the name of the main file of any plugin
> you can also change the bootstrap classes of the button or add your own classes when you want style them yourself
>
>     $mainFile = '/index.php">';
> 
> NOTE: When changing the main file name<br><strong><em>!!! its really important that you don't remove this (">) piece of the string !!!</em></strong>
<br>

# Changing the button style within the menu
> ## Step 1 
> Go to 'root-folder/base/' and op the 1_menu.php
> ## Step 2
> Here you will find the next code on line 7 & 8 $startBtn contains a div tag with the col bs class which in this case resizes the width of the button this variable also contains the a tag with the bs class btn which formats the basic styling of the button and the class btn-warning which formats the color of the button. then you'll see the w-100 class which in this case sets the button width to a 100% with of the parent in this case col-11 besides these classes it contains the mb-2 class for white space underneath the button.
>
>     $startBtn = '<div class="col-11"><a class="btn btn-warning w-100 mb-2" href="';
>     $endBtn = '</a></div>';
>
<br>

# Last changelog
> ## 5 Pixel CMS Base v0.3 (\+ added, - removed, ~ changed)
> ### 0_head.php
>
>     + function that gets the name of the directory where the current plugin folder is located
>     + redirect to home plugin when client is logged in but doesn't have admin perms and current plugin is located within the cms directory
>     + redirect to login plugin when client isn't logged in and current plugin is located within the cms directory
>
<br>

# Changelog history
> ## 5 Pixel CMS Base v0.2 (\+ added, - removed, ~ changed)
> ### 1_menu.php
>
>     + function from 'functions.inc.php'
>     - html code from the top & bottom
>     -, ~ unnecessary if/else & switch/case statements
>     ~ moved all hardcoded values to the top of the file and temporarily 
>       placed them in variables until i have a better understanding of 
>       objects in php
>
> NOTE: the removed html code is placed within the main file of the dashboard, home & template plugin 
> so if you created a plugin change contents of these pages to this code
>
>     <div class="row">
>         <div class="col-2">
>             <div class="row text-center justify-content-center py-3 bg-dark">
>                 <?php include_once '../../../base/1_menu.php'; ?>
>             </div>
>         </div>
>         <div class="col-10">
>             <!-- content -->
>         </div>
>     </div>
>
> ### functions.inc.php
>
>     - function that was used by the menu because it didn't work like intended to when executed from menu file 
>
> ### register/index.php
>
>     + body & html closing tag
>     ~ moved the included 'err.msg.php' file to the header
>
> ### login/index.php
>
>     ~ moved the included 'err.msg.php' file to the header
>
> NOTE: if created a plugin and you want to keep the experience a visitor or user has/had you 
> should change the following code within your plugin just below the body opening tag
>
>       <div class="row bg-dark text-white me-0">
>     ~     <div class="col-6 py-2 ps-4" id="header">
>               <h1>5 Pixel CMS - Login Page</h1>
>           </div>
>     +     <div class="col-6">
>     +         <?php include_once '../../../inc/err.msg.php'; ?>  
>     +     </div>
>       </div>
>  
> ## 5 Pixel CMS Base v0.1 - Changelog (\+ added, - removed, ~ changed)
>
>     + the basic folder structure for the dinamic menu
>     + a role based login/register system to separate 
>       visitors from users and users from admin or mods (mods don't exist by default) 
>     + easy to use template