# Ask World
A website for asking question and find answer from the community.

## Installation
Clone Website from github
```
git clone https://github.com/Tanvir-Sadi/askWorld.git
```
Install all the composer packages
```
composer install
composer dump-autoload
```
Next copy `.env.example` to `.env` and `.htaccess.example` to `.htaccess` update `.env` file if necessary. Genarate VAPID KEY for web push functionality. [Learn More](https://www.stephane-quantin.com/en/tools/generators/vapid-keys)
*Make sure you update your public vapid key also in `script.js`*
```js
document.addEventListener('DOMContentLoaded', () => {
    const applicationServerKey =
        'BNM_Z-BptwxKRu0KWtZ6OT0anYfHJHVMPLKlCV0NWvY8uv400LL2z1HUqABCwL0lfL17E75zL4LFFhGomTKlank';
```
Create Database from php my admin sql query.
```sql
CREATE DATABASE ask_world;
```
Import Table using `database.sql` files from this project directory. After that you will see all the table created successfully.

![image](https://user-images.githubusercontent.com/48437977/207918534-7f095da8-0d04-4e8f-8aa7-67c89c56b3e9.png)

Run Webserver and Enjoy!

```
php -S localhost:4242 --docroot=public
```

## Populate Database with dummy data
Import `populate_db.sql` files from this project directory. Successfully doing so you will see that you will see

![image](https://user-images.githubusercontent.com/48437977/208016594-48ea8966-725d-435d-8e8d-4f25060e01ac.png)

Login with following credential.
- **Email**: johndoe@example.com
- **Password**: password
