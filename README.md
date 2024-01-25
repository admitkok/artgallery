<h1>ArtGallery</h1>

The project is an art gallery where users can create an account, create posts, comment on posts and like posts.


## Installation instructions
Clone the repository and install the dependencies:

```sh
git clone https://github.com/ndeblauw/hsdemo.git
composer install
```
Create a database and set the credentials in the .env file.

(Re)generate the tables and seed with dummy data
```sh
php artisan migrate:fresh --seed
```
Set the application key
```sh
php artisan key:generate
```


