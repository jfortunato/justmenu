## JustMenu (name TBD)

### Developer friendly online ordering system for restaurants.

> This project is nowhere near production ready. When it has reached a usable state this
README will be updated accordingly.

_JustMenu_ > _JMenu_

> JustMenu is a complete rewrite of my first project "JMenu". JMenu is used in production and has been working
well for quite some time. JustMenu aims to improve both user and developer experience. Old JMenu project [located here](http://teenoapps.com/jmenu).

#### Developer First

> **S.O.L.I.D.**  
> **Test Driven Development**  
> **Modern PHP**  
> **AngularJS**

This project is meant to be a **distributed** system for individual developers to quickly create
online ordering systems for small business restaurants. There is no central "HUB" where all the orders are processed. Instead, any developer (freelancer and corporation alike) can use this project and get started creating a website for local restaurants. **All the control belongs to the developer.**

#### DEMO

Somewhat working [demo available here](http://jfortunato.github.io/JustMenu). This is by no means a finished product.

#### Quickstart
> **requirements**  
>
> * Vagrant [download](http://www.vagrantup.com/downloads.html)
> * Virtualbox [download](http://www.virtualbox.org/wiki/Downloads)

1. Clone down this repo
2. From the project root change into the _vagrant_ directory

        cd vagrant

3. Start vagrant

        vagrant up

4. After vagrant has completed, browse to **localhost:8080** in your web browser of choice to
   view the project.

#### Some of the goals/features of this project

* **Easy for developers**  
  Just composer install and place a few files in the correct place to get going.

* **Menu simplification**  
  On very large menus, items can be combined into a single "or" choice. This helps
  make the menu much easier to navigate as the result will be less items showing up.

* **Easy to create menus**  
  A robust admin section should allow for rapidly building online menus.

* **Adaptable**  
  The system should be able to take on even the most complex menus.

* **Mobile Friendly**  
  Responsive design and touch features to be implemented.

* **Multiple Receiving Options**  
  The restaurant will have the option of the delivery method of the orders, not all of which even require them to have an internet connection in their place of business.
  Some ideas include:
  * Tablets
  * Fax
  * Email
  * SMS
  * Automated phone calls
  * POS Integration

#### Contributing

To get started you can use the quickstart as mentioned above. This will download all the
necessary files as well as run all the commands needed to get up and running. Alternatively, you can use the PHP 5.4 built in server if you don't want to use vagrant. This method is quicker if you've already got the project setup.

        cd public
        php -S localhost:8000

> ##### Compiling assets
> I'm using the unix tool "make" for asset compilation. Why use grunt or gulp when they are just copycats of make? If you are on a system that doesn't support make then you can just `vagrant ssh` into the virtualbox and `make` from there. Unix FTW. Check the Makefile for available targets but the basic ones are:

**Compile Everything**  
This default task will run the make tasks for both sass and uglifyjs

        make

**Sass Compilation**

        make sass

**Javascript Concatenation/Minification**

        make uglifyjs

**Watching files**  
This will automatically compile the assets on save.  
For extra fun get the livereload browser extension for automatic page refreshes.

        make watch
