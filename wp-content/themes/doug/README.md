# Welcome to Doug.

Doug loves you. And he cares about you. And he wants to help you make awesome WordPress sites.

## Doug's requirements

Doug requires that you have global versions of the following software installed on your local machine in order for him to do his job correctly:
* [Git](https://git-scm.com/)
* [Node.js](https://docs.npmjs.com/getting-started/installing-node)
* [Node Package Manager (comes with Node.js)](https://docs.npmjs.com/getting-started/installing-node)
* [Bower](https://bower.io/)
* [Bower Installer](https://github.com/blittle/bower-installer)
* [Gulp](https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md)

Once you have all of the appropriate software installed on your local machine, you should be ready to start setting up Doug.

## Setting up Doug

* Open your terminal
* Change your directory to wherever you'd like Doug to go
* Clone Doug by running ```git clone git@github.com:goldenspiralmarketing/doug.git```
* Run ```cd doug``` to get all up in Doug's directory
* Run ```npm install``` to install Gulp and other useful node packages to Doug's **node_modules** folder
* Run ```bower install``` to install all kinds of helpful UI goodies to Doug's **bower_components** folder
* Run ```bower-installer``` to install just the essential files from Doug's **bower_components** folder to Doug's **lib** folder
* Using your FTP client of choice, push all of Doug to the **themes** directory on your server, making sure to **exclude** Doug's **node_modules** & **bower_components** if you want to save Doug from taking up an exorbitant and unnecessary amount of space

Once these steps are complete, you should be ready to start configuring Doug.

## Configuring Doug

* Open Doug's file entitled **gulpfile.js** in your text editor of choice
* At the top of the file, look at each of the values set to ```XXX_REPLACE_THIS_XXX```
* Replace all of those values with your project's appropriate FTP or SFTP credentials
* Directly below that section, uncomment the correct version of the ```serve``` variable to allow for either regular FTP functionality or SFTP functionality
* Save the file

Once these steps are complete, you should be ready to start developing with Doug.

## Developing with Doug

* Open your terminal and get into Doug's directory
* Run ```gulp watch``` if you **do not** wish for Doug to send files to the FTP server after compiling on save
* Alternatively, run ```gulp watch --ftp``` if you **do** wish for Doug to send files to the FTP server after compiling on save

### Working with PHP in Doug

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

### Working with CSS in Doug

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

### Working with JS in Doug

* Add new JS files to Doug's **js/modules** directory
* Any JS files in this directory that are saved while running ```gulp watch``` will be minified and 

## Additional Information

You are now well on your way to making an awesome WordPress site with Doug! Look at you! You make a great team.

Doug was made by the team at [Golden Spiral Marketing](https://github.com/goldenspiralmarketing). More specifically, Doug was developed by [Kyle Numann](https://github.com/KyleNumann), [Andy Wells](https://github.com/andywells), and [Seth Whiting](https://github.com/SethCWhiting). Doug is based heavily on the [html5blank](http://html5blank.com/) WordPress theme.

Please treat Doug with dignity and respect. Make sure you interact with him at least a little bit every week. Please don't make any snide remarks about Doug's file structure as that tends to be a sensitive issue for him. And whatever you do, don't let him gulp after midnight.
