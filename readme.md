# Matcha [125/125]
Project is done in pair with outstanding front-end developer [@dashacherednichenko](https://github.com/dashacherednichenko)

This project at UNIT Factory (School 42) is about creating a dating website.

Primary goal of this app is to help people find their couple. Our site matches people by their gender, sexual preferences, age, common interests, location and fame rating. When user likes someone and someone likes this user back they can do conversation in a real time chat. Also user can block another users if something goes wrong or report to administation about fake profiles.

### Technologies used:
<pre>
1. Back-end: Laravel, MySQL Database
2. Front-end: Vue.js, Bootstrap, JQuery
3. WebSockets: Ratchet PHP Library
</pre>

### To run project:
<pre>
1. Set your .env file (APP_URL, MAIL)
2. Set your own keys for geo api in Matcha/public/js/register/location.js (line 27, 64)
4. Run npm, composer update
5. Run Ratchet ws server [php artisan ratchet-server:up]
6. Run Laravel's build in queue system for email queuing [php artisan queue:work]
7. Create database named [matcha]
8. Run migrations [php artisan migrate:fresh]
9. Set up db connection of filler helper [Matcha/storage/filler/filler.php]
10. Run filler [php filler.php] to fill your db with users [passwords for default users: asdf-2000, for admin: admin]
</pre>
