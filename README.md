cake-bootstraph
===============
Installation & Setup
Clone the plugin into your app/Plugin folder with git clone git@github.com:visionred/BootstrapCake.git

Add CakePlugin::load('BootstrapCake'); in your bootstrap.php under app/Config/bootstrap.php

Setup your CakePHP Console (if you haven't already) following this guide

Switch to your console, run the following command (in your project path) and follow the guide:

    cake BootstrapCake.install 
Open your AppController.php under app/Controller and add a new helper:

    class AppController extends Controller {
        public $helpers = array('BootstrapCake.Bootstrap'); 
    }
Note: You can also load the helper in every other controller if you like. But it's recommended to in the AppController to make it always available.

Thats it! You're done and can now use Twitter Bootstrap in your CakePHP project!
