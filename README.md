symfony33
=========

A Symfony project created on September 11, 2017, 7:44 pm. 
The project will be used to test Symfony3 framework

**CREATE BUNDLE**

$ php bin/console generate:bundle

After bundle has been created, edit composer.json and add the new bundle in autoload section, and then, run the command:
$ composer dump-autoload

That command creates the config, routing and adds the bundle in AppKernel.php file.
If your app has tests, the command creates the bundle files into the tests folder.