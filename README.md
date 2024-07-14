
![Logo](https://i.ibb.co/c3bWKy2/image.png)


# Library Information System (PerpusKu)

The Library Information System (PerpusKu) is a website-based system
with the Laravel 8 Framework. SIPerpus functions to make things easier
library management. This system takes the case of the library at SMP Negeri 5 Central Bengkulu.



## Integration
Apart from using Laravel 8, this system also integrates the Framework
Bootstrap as front-end. This system uses SQL database and in 
The development uses MySQL Workbench software.


## User Features
- Data Processing Management
- Transaction Management (Borrowing and Returning Books)
- Report Management

## System Features

- Laravel 8
- Using Eloquent from Laravel
- Templating for header and footer
- Full CRUD Integrating
- Authentication from Laravel
- Paginations
- Search Data

## Optimization

N+1 Problems

## Run Locally

Clone the project

```bash
  git clone https://github.com/paley777/siperpus.git
```

Go to the project directory

```bash
  cd siperpus
```

Install dependencies

```bash
  composer install
```

Delete Cache

```bash
  php artisan cache:clear
```
Generate Laravel Key

```bash
  php artisan key:generate
```
Make Storage Link

```bash
  php artisan storage:link
```
Migrate

```bash
   php artisan migrate
```
Start the server

```bash
   php artisan serve
```


## Screenshots

![App Screenshot](https://i.ibb.co/M9vf84D/image.png)


## Suggestion

For suggestions and input on this system, please email valleryan1212@gmail.com
