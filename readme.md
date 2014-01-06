#Slate
Slate is is a boilerplate project to get up and running fast. The main idea is to have both API and client-code in the same project. To achieve this the backend and a directory containing the client-code are loosely coupled.

It makes use of the following frameworks:
- slim framework [http://www.slimframework.com] along with composer
- Yeoman web-app [https://github.com/yeoman/generator-webapp]
 
To put in plainly, Slate just combines the slim framework with a client project, which is installed via Yeoman. In this case I used the generator for generic web-apps, but you could substitute it with generators for angularjs or similar.



##Get it running
Use composer (if not installed globally use: `curl -s https://getcomposer.org/installer | php`) to run `composer install`

Edit the composer.json as needed to add php-packages.

##What goes where?

1. `/index.php`: setting up the application and routes
2. `/controllers`: you can put in here some classes for custom code to keep the file index.php slim
3. `/client`: this is a yeoman webapp. uses grunt and bower. the dist folder is also the template-folder for slim. The directory `dist` is created by grunt when you build the app. Feel free to delete these files and use another generator  [http://yeoman.io/community-generators.html].


If you use the client directory with the provided files, make sure to run these commands after cloning the repository:

1. `npm install`
2. `bower install` or `bower update`
3. `grunt` or `grunt build`

##You don´t want a fancy client app?
If you don´t need a dedicated client just delete the client dir and adjust the path to your templates in index.php
`$app->config('templates.path', './client/dist');` to `$app->config('templates.path', './templates');`. Now put your template files (which can be Twig-files if you want to) in there, update your routes and you´re good to go.




####Todo

- The directory `/controllers` is strictly not for controllers, but for any custom code. What to do?
- change `.htaccess` to do asset routing correctly
