# vue-vite-spa-crud
Laravel + Vue(Vite) SPA CRUD for User Posts

1. Download vue-vite-spa-crud
2. Copy folder to Laravel projects folder
3. Copy vue-vite-spa-crud\\.env.example to vue-vite-spa-crud\\.env
4. Update .env APP_URL=http://localhost to APP_URL=http://localhost:8000
5. CLI: cd vue-vite-spa-crud
6. composer install
7. php artisan key:generate
8. mysql -u root -p -e "CREATE DATABASE vue_vite_spa_crud"
9. php artisan migrate:fresh --seed
10. npm install
11. php artisan serve
12. npm run dev

http://localhost:8000

User Logins
-----------
admin@admin.com  |  password
<br>
editor@edit.com  |  password
