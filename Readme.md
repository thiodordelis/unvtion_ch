This project consist from two folders:

    api - Laravel backend
    client - Frontend (Vue.js)

To install run 

    git clone ...


## Setup

### Laravel 

First setup your database inside the .env file. Database name should be ```cars```.
Then inside the api folder run 

    php artisan serve

Now you have an API endpoint running at ```http://127.0.0.1:8000```

API ENDPOINTS
Get all cars: ```curl http://127.0.0.1:8000/api/cars```
Create new car: ```curl -d 'name=316&brand=bmw&year=1999' http://127.0.0.1:8000/api/car```
