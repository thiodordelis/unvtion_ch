This project consist from two folders:

    api - Laravel backend
    client - Frontend (Vue.js)

To install run 

    git clone https://github.com/thiodordelis/unvtion_ch.git


## Setup

### Laravel 

First, setup your database(mysql) inside the .env file. Database name should be ```cars```. 
After you have a working database with valid credentials run:

    php artisan migrate:fresh --seed

Then run 

    composer install

Then inside the api folder run 

    php artisan serve

Now you have an API endpoint running at ```http://127.0.0.1:8000```

API ENDPOINTS

* Get all cars: ```curl http://127.0.0.1:8000/api/cars```

* Create new car: ```curl -d 'name=316&brand=bmw&year=1999' http://127.0.0.1:8000/api/car```

### Frontend
Inside the client folder run:

    npm run serve

then visit ```http://127.0.0.1:8080```