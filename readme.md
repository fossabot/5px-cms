# <strong>5 Pixel Development CMS Base v0.4<strong>
<br>

# intro
> The 5 Pixel Development CMS Base is designed to make the life of a web developer a little bit easier
>
> base currently contains
> - home page
> - cms dashboard
> - role-based login system
> - dynamic & responsive menu
> 
<br>

# Readme content
- Upcoming features/changes **[GoTo](https://github.com/5m1Ly/5_Pixel_Development_CMS_Base#upcoming-featureschanges)**
- Readme content
- Languages/Library's used **[GoTo](https://github.com/5m1Ly/5_Pixel_Development_CMS_Base#languageslibrarys-used)**
- Installation guide **[GoTo](https://github.com/5m1Ly/5_Pixel_Development_CMS_Base#installation-guide)**
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
> - Bootstrap v5.0.0 | **[Docs](https://getbootstrap.com/docs/5.0/)**
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

# Last changelog
> ## 5 Pixel CMS Base v0.5 (\+ added, - removed, ~ changed)
> 
> ### 0_head.php
>
>     + dynamically adding css link tags, js script tags, include_once php files within the head tag
>
> if you want to add css files you dont need to add link script tags or include php file.
> from now on you'll need to add a scripts folder within your plugin folder and it automatically adds these
> note that it only supports .css, .js & .php file extensions
>
<br>

# Changelog history
> ## 5 Pixel CMS Base v0.4 (\+ added, - removed, ~ changed)
> We the developers of 5 Pixel wanted to implement the cms with in a project for on of our clients and after a few quick test the the menu 
> didn't work like we wanted to so we made a major change to let it work to our satisfaction. 
> ### Folder Structure
> this important is for al the people that already created a plugin. like mentioned above the menu didn't work to our satisfaction because
> the folders that were changed to menu buttons were sorted alphabetically which gave 0 logic to the menu. so from now on you can sort the
> buttons by simply adding a character_ to the folder so you are easily able to sort the order of the menu.
> NOTE: look at the [ascii tabel](http://www.asciitabel.be/) to see how characters are ordered.
>
> ### 1_menu.php
> 
>     ~ the way the button displays because of the new menu
>     ~ the way some old functions worked
>     + if statement to check with the currentDir function if you in the cms or site folder so it will only display the home or dashboard button when your a admin based on you location
>     + function that splits the folder name on the (_) and returns the name of the of the plugin
>
> ### All plugins
>
>     ~ the base structure of a web page
>     - sidebar menu
>     + menu within the header that changes to dropdown when screen is equal to x width 
> 
> ## 5 Pixel CMS Base v0.3 (\+ added, - removed, ~ changed)
> ### 0_head.php
>
>     + function that gets the name of the directory where the current plugin folder is located
>     + redirect to home plugin when client is logged in but doesn't have admin perms and current plugin is located within the cms directory
>     + redirect to login plugin when client isn't logged in and current plugin is located within the cms directory
>
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