**What is MonoKit?**

The *MonoKit* allows you to use better and faster than your HTML files without transferring between pages, which has resulted in a higher speed and loading of the styles that do not detract from the Internet.

**How it work?**

The *MonoKit*, in essence, downloads and displays the pages that you have coded out so that the user can continue to work without moving the pages and reloading the website.

**How make a fragment?**

   **1.Step One**
   
    go to app->fragments and make a folder for your fragment
    
  **2.Step Two**
     
    make index.php and index.js.php
   
  **3.Step Three**
    
    Put the below code in index.php
    <div>
        <!-- content -->
    </div>
    <script>
        <?php include "index.js.php" ?>
    </script>
   
  **4.Step Four**
    
    Go to the Config and add your fragment in fragments define with below format
    
    "fragment_id" => [
        "url" => root . "app/fragments/{YOUR-FRAGMENT-NAME}/index.php",
        "title" => "{YOUR-OPTIONAL-NAME-FOR-FRAGMENT}",
        "params" => [
            "from" => "MonoKit"
        ]
    ],
    
  **Notic** you can get params in index.php with get like `$_GET['from']`
  
  
  **My Site Configuration**
  You can config your site in app->config.php 
  
  you can add you style, script, meta name, meta properties and put root address