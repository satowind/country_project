# country_project

Is a laravel project

Clone the project

cd into the project

run composer install

run php artisan migrate after database setup

run php artisan serve 

go to post man or any tool used to test the api 

the urls are as follows

using posst 127.0.0.1:8000/api/register  supply the right parameters register

using post 127.0.0.1:8000/api/login  supply the right parameters {email and password} to authenticate

using post 127.0.0.1:8000/api/countries  supply the right parameters remember to supply token to insert

using get 127.0.0.1:8000/api/countries  remember to supply token to fetch

using put 127.0.0.1:8000/api/countries/{the id}  supply the right id and dont forget the token update

using delete 127.0.0.1:8000/api/countries/{the id}  supply the right id and dont forget the token delete

using get 127.0.0.1:8000/api/activities/{the number you want to fetch per page}  supply the right number you require and dont forget the token
using get 127.0.0.1:8000/api/activities/{the number you want to fetch per page}?page=2  fetches the second batch of data etc

