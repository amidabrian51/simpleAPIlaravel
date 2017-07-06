# simpleAPIlaravel


## The Concept

To be build an using the PHP Laravel Framework.



### Welcome to "simpleAPIlaravel"
![Home](http://i.imgur.com/kPaQim4.png)

## Accessing the site

* Download composer.
* cd to the project.
* Rename ```.env.example``` file to ``` .env ```then fillout database information.
* For instance I have put the name of the database as membersapi, username as root and password leave empty.
* Run ``` composer install ``` or ```php composer.phar install ```.
* Run ``` php artisan key:generate ```.
* This will generate a key in your .env file. So you must rename it before this step.
* Run ```php artisan migrate```. This will setup the database.
* Run ```php artisan serve```. This will run the server.

### You can now access your project at http://localhost:8000/api/v1/members .

## Using the site

### Navigating the site

* Lets you view members.


===============================================================================

# Tech Team

Built by:

 - Brian Patterson


## Notes on the build
Built using the laravel Framework.  

## Key learning


## What went well

* Learning about the structure of the laravel Framework.
* How the MVC Framework works within this Framework.
* Separation of concerns using Laravel file structure.
* Learning about creating Models Views and Controllers using Artisan.
* Learning about seeding a project in laravel 5.4.
* How Laravel is very secure with regards to forms.

## Supporting user stories

The following user stories apply:
```
As a user
I want to access the list of members for the API.
```
```
As a user
I want select a member from the API.
```
