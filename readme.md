# 5 Pixel Development CMS Base v0.1
The 5 Pixel Development CMS Base is designed to make the life of a web developer a little bit easier
<br>

## Upcomming features/changes
> i'm currently maintaining the dynamic menu because right now you might as well take it <br>
> to a italian restaurant and give it to the chef to serve it with the house specialty sauce 
<br>

## Last changelog 
> \+ = added, - = removed, ~ = changed
>
> ### 5 Pixel CMS Base v0.1
>
>     + the basic folder structure for the dinamic menu
>     + a role based login/register system to separate 
>       visitors from users and users from admin or mods (mods don't exist by default) 
>     + easy to use template
<br>

## readme content
> - Upcomming features/changes
> - Last changelog
> - readme content
> - Installation guide
> - Languages/Library's used
> - From project to plugin
> - Create a plugin (site page)
> - Changelog history
<br>

## Installation guide
> 1. create a folder within your xampp workspace or other services
> 2. do a pull request or place the unzipped contents of the folder here
> 3. create a database by default the database name the site calls is called '5_pixel_cms' 
> 4. import the 'database.sql' file in the database you just created
> 5. go within your workspace to 'root-folder/src/inc/dbh.inc.php' 
> 6. here you will find default login credentials to the database and the database name used change it if yours are different

    $serverName = "127.0.0.1";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "5_pixel_cms";

> 7. after you have done this start your local server if not already done and redirect to 'https://localhost/root-folder/index.php'
> 8. now you are on the home page of the website where visitors and user can see to be able to enter the cms login with the following login credentials

    username: Admin
    password: Admin123

<br>

## Languages/Library's used
> ### Languages
> - html 5
> - css 3
> - php v7.4.2
>
> ### Library's
> - Bootstrap v5.0.0 beta3
>     - Docs: https://getbootstrap.com/docs/5.0/
> - jQuery v3.6.0
>    - Docs: https://api.jquery.com/
> - Font Awesome v5.15.1
>    - Docs: https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use
>
<br>

## From project to plugin
> if you want to turn old projects with bs v3.x or v4.x into a plugin for the 5 Pixel CMS Base <br> you should check out these page's for transforming the project
>
> bs v4.x all classes: <br>
> https://www.w3schools.com/bootstrap4/bootstrap_ref_all_classes.asp
>
> bs v3.x all classes: <br>
> https://www.w3schools.com/bootstrap/bootstrap_ref_all_classes.asp
<br>


## Create a plugin (site page)
>
> ### Intro
> Because the 5 Pixel CMS Base uses a dinamic menu its quite easy to <br> 
> add/create a new plugin.
>
> ### Step 1
> Go to 'root-folder/src/plugins/cms/' within the cms folder you will <br> 
> find a folder called template the folder its self is te base of the plugin
> 
> ### Step 2
> Copy the template folder now go back to 'root-folder/src/plugins' and <br> 
> paste it either in the site or cms or both if you want to make some thing <br> 
> that is used by the user and the admin for instance when you want the <br>
> user or visitor to leave a message on a contact page and the admin <br>
> to read the submitted message within the cms
>
> ### Step 3
> change the name of the folder because the template folder is ignored <br> when creating menu buttons by default
>
> ### Step 4
> in this folder there are a couple of files including a index.php file <br>
>
> <strong><em>!!! its really important that you don't change the name of this file !!!</em></strong><br> 
>
> NOTE: if you do want to change the name of the main file of the <br> 
> plugin you will need to change the name of every main file of each plugin <br> 
> and you need to change the called file in the 1_menu.php file you can find <br> 
> this file within 'root-folder/src/base/'.
>
> ### Step 5 
> Open the index.php file there you will find this code...
> 
> #### Head tag
> within the first included file '0_head.php' below you will find the  <br>
> opening html & body tag you will also find the cdns here
>
> the closing head tag is placed in this file so you can add optional 
> - js files
> - css files  
> - title 
> - title icon
> - meta tags 
>
> the reason for placing meta tags here is because when the site is   <br>
> effectively used you probably don't want the cms dashboard to be  <br>
> found on google even though there are options to prevent visitors  <br>
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
> #### Body tag
> ##### Section 1
> Here you will find the title thats inside the header of the  <br>
> page change 'Plugin Name' to your plugin name
>
>     <div class="row bg-dark text-white">
>
>         <div class="col-12 p-2" id="header">
>
>             <h1>5 Pixel CMS - Plugin Name</h1>
>
>         </div>
>
>     </div>
>
> ##### Section 2
> The first column of the second row in the body tag is placed <br> within the '1_menu.php' file
>
>     <div class="row">
>         <?php include_once '../../../base/1_menu.php'; ?>
>
> ### Section 3
> Within the second column you should place the content of <br> the plugin you want to write 
>
> NOTE: when you place the content of your plugin within a  <br>
> separate file that you are going to include here you'll  <br>
> need to start the first div tag with a row class since  <br>
> your inside a div tag with a col class <br>
>
>         <div class="col-10">
>             <!-- content -->
>         </div>
>
>     </div>
<br>

## Changelog history 
> \+ = added, - = removed, ~ = changed
>
> ### 5 Pixel CMS Base v0.1
>
>     + the basic folder structure for the dinamic menu
>     + a role based login/register system to separate 
>       visitors from users and users from admin or mods (mods don't exist by default) 
>     + easy to use template