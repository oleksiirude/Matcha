<?php

	$password = '$2y$10$AjxhKLprRMFLjNUGaSO6IeUxcTI4RGTubZXgGh/7HXWAOg.1CNlXK';
	$password_admin = '$2y$10$p.I668kvXrO2SjEl1TBKC.PXce5Nu6B/vImuL7bQc3LQMtQ/kcDrG'; 

	$users = array(

/*men*/

		'users' => "
		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
        		VALUES (/*1*/ 'admin', 'admin@gmail.com', '2019-07-12 18:36:03', '$password_admin',
        		'2019-07-20 02:00:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');	

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
        		VALUES (/*2*/ 'maximus', 'maximus@gmail.com', '2019-07-12 18:36:03', '$password',
        		'2019-07-18 01:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*3*/ 'dobby', 'coolguy@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-17 10:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*4*/ 'bigboy', 'bigboy@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-20 18:36:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*5*/ 'captain', 'oldcaptain@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-13 18:56:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*6*/ 'serious', 'carl@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-13 13:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*7*/ 'massive', 'massive@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-14 10:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*8*/ 'johnny', 'johnny@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-15 11:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*9*/ 'womanizer', 'cragson@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-16 12:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*10*/ 'beast', 'username@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-17 13:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*11*/ 'cooler', 'coolerrr@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-18 17:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03'); 

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*12*/ 'kipsta', 'kipsta@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-19 18:33:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*13*/ 'ehorro', 'ehorro@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-19 18:40:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*14*/ 'sergio', 'sergio@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-17 18:17:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*15*/ 'kopa', 'kopa@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-17 18:40:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*16*/ 'dimas', 'dimas@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-16 23:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*17*/ 'nubilas', 'nubilas@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-13 22:40:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*18*/ 'rubae', 'rubae@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-14 19:55:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*19*/ 'crop', 'crop@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 18:50:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');    

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*20*/ 'super', 'super@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-13 20:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*21*/ 'rudolf', 'rudolf@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-14 17:40:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*22*/ 'patriot', 'patriot@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-15 18:42:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*23*/ 'cool', 'cool@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-16 16:42:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*24*/ 'camagru', 'camagru@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-17 17:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*25*/ 'manu', 'manu@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-18 18:51:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*26*/ 'shrai', 'shrai@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-19 18:50:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*27*/ 'virgo', 'virgo@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-20 10:15:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');     

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*28*/ 'kupor', 'kupor@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-20 09:00:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*29*/ 'vitalino', 'vitalino@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-19 10:00:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*30*/ 'phobiq', 'phobiq@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-13 16:40:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*31*/ 'cutor', 'cutor@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-14 17:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*32*/ 'longer', 'longer@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-15 18:39:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*33*/ 'strong', 'strong@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-16 18:40:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*34*/ 'stigor', 'stigor@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-17 18:43:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*35*/ 'ivor', 'ivor@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-18 18:45:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');   

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*36*/ 'nesamovitii', 'nesamovitii@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-19 23:23:59', '2019-07-12 18:26:03', '2019-07-12 18:36:03');     
		        
		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*37*/ 'insane', 'insane@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-20 23:59:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*38*/ 'ilnev', 'ilnev@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-19 22:49:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*39*/ 'ruban', 'ruban@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-18 22:13:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*40*/ 'silver', 'silver@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-17 12:00:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*41*/ 'king', 'poroh@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-16 19:36:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*42*/ 'best', 'best@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-15 11:42:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*43*/ 'sadovii', 'sadovii@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-14 20:42:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');   

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*44*/ 'muraev', 'muraev@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-13 04:40:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03'); 

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*45*/ 'juda', 'juda@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 19:42:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*46*/ 'stefa', 'stefa@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-13 10:48:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*47*/ 'slava', 'slava@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-14 15:16:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');     

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*48*/ 'vilkul', 'vilkul@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-15 10:36:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*49*/ 'shar', 'shar@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-16 19:16:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*50*/ 'zhan', 'zhan@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-17 12:51:55', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*51*/ 'blackfire', 'blackfire@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-18 20:20:21', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*52*/ 'belka', 'belka@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-19 06:16:05', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*53*/ 'rusik', 'rusik@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-20 16:11:13', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*54*/ 'beatmaker', 'beatmaker@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-19 14:09:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*55*/ 'mordar', 'mordar@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-18 22:20:13', '2019-07-12 18:26:03', '2019-07-12 18:36:03');   

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*56*/ 'serg', 'serg@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-17 23:23:23', '2019-07-12 18:26:03', '2019-07-12 18:36:03');     
		        
		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*57*/ 'bard', 'bard@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-16 23:59:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*58*/ 'dminakov', 'dminakov@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-15 09:16:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');
		        
		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*59*/ 'olrudenk', 'olrudenk@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-14 10:42:19', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*60*/ 'yora', 'yora@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-14 10:40:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*61*/ 'bulb', 'bulb@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-13 14:17:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*62*/ 'ramzes', 'ramzes@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-14 13:11:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*63*/ 'baboshka', 'baboshka@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-13 11:41:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*64*/ 'wrestler', 'wrestler@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-16 00:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');   

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*65*/ 'rovnii', 'rovnii@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-18 15:16:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03'); 

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*66*/ 'kiparis', 'kiparis@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-16 19:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*67*/ 'gulechko', 'gulechko@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 18:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*68*/ 'kaban', 'kaban@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-13 21:36:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*69*/ 'sidor', 'sidor@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-14 20:44:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*70*/ 'razumnii', 'razumnii@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-13 19:16:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');	    

/*women*/

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES ('cherry', 'cherry@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 18:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES ('caroline', 'caroline@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 18:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES ('kichi', 'amanda@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 18:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES ('pretty', 'ann_johnson@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 18:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES ('tiny', 'prett@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 18:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES ('sunny', 'cleopatra@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 18:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES ('leonna', 'leo@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 18:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES ('chika', 'chika_worldwide@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 18:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES ('love', 'lovanda@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 18:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES ('cloudy', 'eleonora@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 18:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');"
	);

	define('USERS', $users);

	$profiles = array(

/*men*/

		'profiles' => "
		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
                    avatar, avatar_uploaded, photo1, photo2, photo3, rating)
		        VALUES ('2', 'maximus', 'Maxim', 'Chumko', '24', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/maximus/avatar.jpg', '1',
		                'images/profiles/maximus/photo1.jpg',
		                'images/profiles/maximus/photo2.jpg',
		                'images/profiles/maximus/photo3.jpg', '6.4');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, photo3, photo4, rating)
		        VALUES ('3', 'dobby', 'Alexander', 'Cherednichok', '34', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/dobby/avatar.jpg', '1',
		                'images/profiles/dobby/photo1.jpg',
		                'images/profiles/dobby/photo2.jpg',
		                'images/profiles/dobby/photo3.jpg',
		                'images/profiles/dobby/photo4.jpg', '6.0');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, rating)
		        VALUES ('4', 'bigboy', 'Ruslan', 'Drobyazko', '42', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/bigboy/avatar.jpg', '1',
		                'images/profiles/bigboy/photo1.jpg', '14.4');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, rating)
		        VALUES ('5', 'captain', 'Vlad', 'kropolenko', '41', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/captain/avatar.jpg', '1',
		                'images/profiles/captain/photo1.jpg',
		                'images/profiles/captain/photo2.jpg', '24.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('6', 'serious', 'Nikolay', 'Kuzhko', '19', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/serious/avatar.jpg', '1', '3.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, rating)
		        VALUES ('7', 'massive', 'Sergey', 'Stanko', '29', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/massive/avatar.jpg', '1',
		                'images/profiles/massive/photo1.jpg',
		                'images/profiles/massive/photo2.jpg', '7.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, photo3, rating)
		        VALUES ('8', 'johnny', 'Denis', 'Petrenko', '31', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/johnny/avatar.jpg', '1',
		                'images/profiles/johnny/photo1.jpg',
		                'images/profiles/johnny/photo2.jpg',
		                'images/profiles/johnny/photo3.jpg', '8.4');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, photo3, photo4, rating)
		        VALUES ('9', 'womanizer', 'Pavel', 'Kunickii', '37', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/womanizer/avatar.jpg', '1',
		                'images/profiles/womanizer/photo1.jpg',
		                'images/profiles/womanizer/photo2.jpg',
		                'images/profiles/womanizer/photo3.jpg',
		                'images/profiles/womanizer/photo4.jpg', '15.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, rating)
		        VALUES ('10', 'beast', 'Fedor', 'Emalnyanenko', '42', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/beast/avatar.jpg', '1',
		                'images/profiles/beast/photo1.jpg',
		                'images/profiles/beast/photo2.jpg', '24.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('11', 'cooler', 'Vladimir', 'Markov', '27', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/cooler/avatar.jpg', '1', '33.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('12', 'kipsta', 'Vadim', 'Markovenko', '31', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/kipsta/avatar.jpg', '1', '23.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('13', 'ehorro', 'Ehor', 'Putenko', '35', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/ehorro/avatar.jpg', '1', '5.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('14', 'sergio', 'Sergey', 'Leonenko', '28', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/sergio/avatar.jpg', '1', '6.9');                                     

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('15', 'kopa', 'Kiril', 'Eremenko', '40', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/kopa/avatar.jpg', '1', '10.9');


		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('16', 'dimas', 'Dmitrii', 'Golovko', '26', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/dimas/avatar.jpg', '1', '6.3');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('17', 'nubilas', 'Nikolay', 'Lasiskii', '31', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/nubilas/avatar.jpg', '1', '9.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('18', 'rubae', 'Nikita', 'Alexeev', '23', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/rubae/avatar.jpg', '1', '19.9'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('19', 'crop', 'Oleksii', 'Rudchenko', '28', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/crop/avatar.jpg', '1', '8.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('20', 'super', 'Slava', 'Lepsheev', '32', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/super/avatar.jpg', '1', '10.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('21', 'rudolf', 'Rudolf', 'Shneer', '45', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/rudolf/avatar.jpg', '1', '20.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('22', 'patriot', 'Andrey', 'Bilko', '38', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/patriot/avatar.jpg', '1', '40.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('23', 'cool', 'Sasha', 'Andrienko', '32', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/cool/avatar.jpg', '1', '31.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('24', 'camagru', 'Franz', 'Herion', '37', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/camagru/avatar.jpg', '1', '20.9');      

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('25', 'manu', 'Oleksii', 'Shumko', '22', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/manu/avatar.jpg', '1', '69.9');                                       

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('26', 'shrai', 'Maksim', 'Marchuk', '20', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/shrai/avatar.jpg', '1', '8.9');                   
        
        INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('27', 'virgo', 'Vova', 'Klimchuk', '35', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/virgo/avatar.jpg', '1', '17.9');  

        INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('28', 'kupor', 'Konstantin', 'Grigorenko', '31', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/kupor/avatar.jpg', '1', '51.9');  	

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('29', 'vitalino', 'Vitalii', 'Zaicev', '44', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/vitalino/avatar.jpg', '1', '77.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('30', 'phobiq', 'Alexander', 'Shiyan', '35', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/phobiq/avatar.jpg', '1', '25.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('31', 'cutor', 'Borislav', 'Romanov', '30', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/cutor/avatar.jpg', '1', '18.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('32', 'longer', 'Garri', 'Frolov', '25', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/longer/avatar.jpg', '1', '41.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('33', 'strong', 'Gordeii', 'Sergeev', '40', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/strong/avatar.jpg', '1', '41.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('34', 'stigor', 'German', 'Sorokin', '39', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/stigor/avatar.jpg', '1', '24.9');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('35', 'ivor', 'Ivor', 'Muleev', '24', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/ivor/avatar.jpg', '1', '7.9');   

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('36', 'nesamovitii', 'Ihor', 'Korolev', '26', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/nesamovitii/avatar.jpg', '1', '34.9');                  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('37', 'insane', 'David', 'Tarasov', '48', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/insane/avatar.jpg', '1', '66.9');      

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('38', 'ilnev', 'Itan', 'Ilnev', '41', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/ilnev/avatar.jpg', '1', '81.9');   

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('39', 'ruban', 'Sergey', 'Ruaban', '35', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/ruban/avatar.jpg', '1', '90.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('40', 'silver', 'Zurab', 'Zufar', '31', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/silver/avatar.jpg', '1', '55.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('41', 'king', 'Petro', 'Poroshenko', '55', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/king/avatar.jpg', '1', '33.2');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('42', 'best', 'Vladimir', 'Zelenskii', '41', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/best/avatar.jpg', '1', '17.2');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('43', 'sadovii', 'Andrii', 'Sadovii', '49', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/sadovii/avatar.jpg', '1', '18.4');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('44', 'muraev', 'Evgenii', 'Muraev', '40', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/muraev/avatar.jpg', '1', '20.1');        

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('45', 'juda', 'Vladimir', 'Groysman', '38', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/juda/avatar.jpg', '1', '9.9');      

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('46', 'stefa', 'Stanislav', 'Stefanchuk', '41', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/stefa/avatar.jpg', '1', '12.2');     

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('47', 'slava', 'Slava', 'Vakarchuk', '41', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/slava/avatar.jpg', '1', '18.3');     

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('48', 'vilkul', 'Ruslan', 'Vilkul', '43', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/vilkul/avatar.jpg', '1', '23.7');    

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('49', 'shar', 'Anatolii', 'Sharii', '42', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/shar/avatar.jpg', '1', '20.0');         

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('50', 'zhan', 'Zhan', 'Belenyuk', '29', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/zhan/avatar.jpg', '1', '20.4');      

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('51', 'blackfire', 'Oleksii', 'Dmitrenko', '30', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/blackfire/avatar.jpg', '1', '27.3'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('52', 'belka', 'Dmitrii', 'Belchenko', '30', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/belka/avatar.jpg', '1', '77.3');        

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('53', 'rusik', 'Ruslan', 'Zshmachenko', '30', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/rusik/avatar.jpg', '1', '28.9');      

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('54', 'beatmaker', 'Denis', 'Kuszhelnii', '29', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/beatmaker/avatar.jpg', '1', '37.3');   

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('55', 'mordar', 'Oleh', 'Mordachev', '29', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/mordar/avatar.jpg', '1', '57.3');      

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('56', 'serg', 'Sergey', 'Morshin', '32', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/serg/avatar.jpg', '1', '96.3');    

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('57', 'bard', 'Sergey', 'Bardachenko', '29', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/bard/avatar.jpg', '1', '44.5');    

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('58', 'dminakov', 'Denis', 'Minakov', '27', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/dminakov/avatar.jpg', '1', '50.0');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('59', 'olrudenk', 'Oleksii', 'Rudenko', '30', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/olrudenk/avatar.jpg', '1', '40.1');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('60', 'yora', 'Yura', 'Tigibko', '25', 'male', 'heterosexual',
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/yora/avatar.jpg', '1', '13.0');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('61', 'bulb', 'Dmitrii', 'Bulbotenko', '30', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/bulb/avatar.jpg', '1', '41.2');         

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('62', 'ramzes', 'Roma', 'Tkachenko', '30', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/ramzes/avatar.jpg', '1', '17.7');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('63', 'baboshka', 'Dmitrii', 'Baboshkin', '30', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/baboshka/avatar.jpg', '1', '20.1');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('64', 'wrestler', 'Maksim', 'Goncharenko', '28', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/wrestler/avatar.jpg', '1', '9.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('65', 'rovnii', 'Yaroslav', 'Rovnii', '29', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/rovnii/avatar.jpg', '1', '7.4');    

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('66', 'kiparis', 'Maksim', 'Kalinskii', '30', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/kiparis/avatar.jpg', '1', '27.4');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('67', 'gulechko', 'Sergii', 'Gulechko', '30', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/gulechko/avatar.jpg', '1', '24.8');             

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('68', 'kaban', 'Ilya', 'Danyuk', '25', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/kaban/avatar.jpg', '1', '33.6');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('69', 'sidor', 'Oleksii', 'Sirdorenko', '41', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/sidor/avatar.jpg', '1', '44.1');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('70', 'razumnii', 'Andrii', 'Razumnii', '42', 'male', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/razumnii/avatar.jpg', '1', '78.5');    

/*women*/

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, rating)
		        VALUES ('71', 'cherry', 'Alexandra', 'Cherry', '25', 'female', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/cherry/avatar.jpg', '1',
		                'images/profiles/cherry/photo1.jpg',
		                'images/profiles/cherry/photo2.jpg', '4.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, rating)
		        VALUES ('72', 'caroline', 'Caroline', 'Santiago', '24', 'female', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/caroline/avatar.jpg', '1',
		                'images/profiles/caroline/photo1.jpg', '4.4');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, rating)
		        VALUES ('73', 'kichi', 'Lilly', 'Ambrusko', '30', 'female', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/kichi/avatar.jpg', '1',
		                'images/profiles/kichi/photo1.jpg', '4.4');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, photo3, photo4, rating)
		        VALUES ('74', 'pretty', 'Annet', 'Silvio', '41', 'female', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/pretty/avatar.jpg', '1',
		                'images/profiles/pretty/photo1.jpg',
		                'images/profiles/pretty/photo2.jpg',
		                'images/profiles/pretty/photo3.jpg',
		                'images/profiles/pretty/photo4.jpg', '5.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, rating)
		        VALUES ('75', 'tiny', 'Ella', 'Johnson', '37', 'female', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/tiny/avatar.jpg', '1',
		                'images/profiles/tiny/photo1.jpg',
		                'images/profiles/tiny/photo2.jpg', '4.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('76', 'sunny', 'Kate', 'Johnson', '35', 'female', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/sunny/avatar.jpg', '1', '3.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, rating)
		        VALUES ('77', 'leonna', 'Leona', 'Adamson', '44', 'female', 'bisexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/leonna/avatar.jpg', '1',
		                'images/profiles/leonna/photo1.jpg',
		                'images/profiles/leonna/photo2.jpg', '4.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, rating)
		        VALUES ('78', 'chika', 'Chiko', 'Illy', '22', 'female', 'homosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/chika/avatar.jpg', '1',
		                'images/profiles/chika/photo1.jpg',
		                'images/profiles/chika/photo2.jpg', '4.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, rating)
		        VALUES ('79', 'love', 'Kseniya', 'Adamenko', '30', 'female', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.',
		                'images/profiles/love/avatar.jpg', '1',
		                'images/profiles/love/photo1.jpg', '4.4');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio, rating)
		        VALUES ('80', 'cloudy', 'Tanita', 'Kum', '56', 'female', 'heterosexual', 
		        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.', '3.4');"
			);

	define('PROFILES', $profiles);

	$locations = array(

/*men*/

		'locations' => "
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
        		VALUES ('2', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
                		'50.43487594', '30.47985077', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('3', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.40206241', '30.48774719', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('4', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46701114', '30.4863739', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('5', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.42503427', '30.53581238', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('6', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.47181862', '30.47298431', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('7', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46001758', '30.50079346', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('8', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.43443857', '30.54164886', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('9', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.44209186', '30.41496277', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('10', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.43334514', '30.41770935', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('11', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.47291116', '30.43933868', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('12', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.43596933', '30.46302795', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('13', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.40446951', '30.50182343', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('14', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.48754875', '30.46096802', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('15', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.41212764', '30.5406189', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('16', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.4318143', '30.43624878', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('17', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.41650316', '30.48019409', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('18', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.42197199', '30.53272247', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('19', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.43771871', '30.46199799', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('20', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.45608325', '30.37445068', '1');
		
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('21', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.4611104', '30.35007477', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('22', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.41715945', '30.35179138', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('23', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.40381304', '30.38234711', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('24', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.40622005', '30.37204742', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('25', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.45411596', '30.3792572', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('26', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.43618801', '30.42011261', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('27', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.43006471', '30.47504425', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('28', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.48711187', '30.46165466', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('29', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.44930669', '30.50731659', '1');    

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
        		VALUES ('30', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
                		'50.45291369', '30.50662994', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('31', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.42372189', '30.53203583', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('32', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.47859196', '30.57186127', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('33', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46460722', '30.58525085', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('34', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.43990534', '30.60207367', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('35', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.42853376', '30.60001373', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('36', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.41125249', '30.6281662', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('37', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.40446951', '30.62610626', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('38', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.4073141', '30.66009521', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('39', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46766674', '30.63091278', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('40', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.51004248', '30.60447693', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('41', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.49977968', '30.60276031', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('42', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.45739473', '30.64704895', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('43', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.4427478', '30.63640594', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('44', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.50676736', '30.50079346', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('45', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.50529348', '30.4930687', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('46', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.50305528', '30.46955109', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('47', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.48503665', '30.45135498', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('48', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.43607867', '30.38955688', '1');
		
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('49', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.39199504', '30.63262939', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('50', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.40425068', '30.62198639', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('51', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46045471', '30.59211731', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('52', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46285884', '30.58490753', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('53', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.39090063', '30.56911469', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('54', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.39768555', '30.5210495', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('55', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.41212764', '30.63022614', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('56', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.41278399', '30.65769196', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('57', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.41540932', '30.63228607', '1');       

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('58', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.41497177', '30.60619354', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('59', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.40906453', '30.61855316', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('60', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46832232', '30.63159943', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('61', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.45455314', '30.62782288', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('62', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.42831505', '30.64979553', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('63', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.42678405', '30.5979538', '1');
		
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('64', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.42197199', '30.53100586', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('65', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.42153451', '30.53203583', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('66', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46701114', '30.52139282', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('67', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.45258579', '30.50285339', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('68', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.43859337', '30.50765991', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('69', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.43247038', '30.46989441', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('70', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.42765891', '30.4335022', '1'); 

/*women*/

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('71', 'Ukraine', 'Cherkasy Oblast', 'Cherkasy', 'C24J+RF',
		                '49.407121', '32.031213', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('72', 'Portugal', 'Vila Nova de Gaia', 'Vila Nova de Gaia', '49HG+84',
		                '41.128331', '-8.624638', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('73', 'France', 'Montpellier', 'Montpellier', 'HVQH+F2',
		                '43.588632', '3.87762', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('74', 'France', 'Marseille', 'Marseille', '8C5H+XW',
		                '43.309933', '5.429809', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('75', 'Switzerland', 'Bern', 'Bern', 'XF8J+GX',
		                '46.966357', '7.482424', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('76', 'Switzerland', 'Zürich', 'Zürich', '9H84+4P',
		                '47.365288', '8.556798', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('77', 'UK', 'Cardiff', 'Cardiff', 'FRGG+95',
		                '51.475898', '-3.174612', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('78', 'Czechia', 'Brno', 'Brno', '5JF7+C3',
		                '49.173515', '16.612745', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('79', 'Ukraine', 'Zhytomyr Oblast', 'Zarichany', '6MP4+96',
		                '50.235994', '28.655557', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('80', 'Ukraine', 'Kyiv city', 'Kyiv', 'CGHG+89',
		                '50.428266', '30.525979', '1');"
	);

	define('LOCATIONS', $locations);

	$tags = array(
		'tag' => "
				INSERT INTO tags(tag) VALUES ('football');
				INSERT INTO tags(tag) VALUES ('sport');
				INSERT INTO tags(tag) VALUES ('crossfit');
				INSERT INTO tags(tag) VALUES ('photo');
				INSERT INTO tags(tag) VALUES ('nature');
				INSERT INTO tags(tag) VALUES ('backpacking');
				INSERT INTO tags(tag) VALUES ('singing');
				INSERT INTO tags(tag) VALUES ('politics');
				INSERT INTO tags(tag) VALUES ('beer');
				INSERT INTO tags(tag) VALUES ('pub');
				INSERT INTO tags(tag) VALUES ('vodka');
				INSERT INTO tags(tag) VALUES ('fun');
				INSERT INTO tags(tag) VALUES ('painting');
				INSERT INTO tags(tag) VALUES ('architecture');
				INSERT INTO tags(tag) VALUES ('literature');
				INSERT INTO tags(tag) VALUES ('poems');
				INSERT INTO tags(tag) VALUES ('theatre');
				INSERT INTO tags(tag) VALUES ('parties');
				INSERT INTO tags(tag) VALUES ('techno');
				INSERT INTO tags(tag) VALUES ('drugs');
				INSERT INTO tags(tag) VALUES ('rave');
				INSERT INTO tags(tag) VALUES ('music');
				INSERT INTO tags(tag) VALUES ('love');
				INSERT INTO tags(tag) VALUES ('basketball');
				INSERT INTO tags(tag) VALUES ('fitness');
				INSERT INTO tags(tag) VALUES ('gym');
				INSERT INTO tags(tag) VALUES ('finance');
				INSERT INTO tags(tag) VALUES ('sex');
				INSERT INTO tags(tag) VALUES ('pizza');
				INSERT INTO tags(tag) VALUES ('ufc');
				INSERT INTO tags(tag) VALUES ('muscles');
				INSERT INTO tags(tag) VALUES ('food');
				INSERT INTO tags(tag) VALUES ('children');
				INSERT INTO tags(tag) VALUES ('reading');
				INSERT INTO tags(tag) VALUES ('economics');
				INSERT INTO tags(tag) VALUES ('talking');
				INSERT INTO tags(tag) VALUES ('fishing');
				INSERT INTO tags(tag) VALUES ('sea');
				INSERT INTO tags(tag) VALUES ('traveling');
				INSERT INTO tags(tag) VALUES ('hitchhicking');
				INSERT INTO tags(tag) VALUES ('tourism');
				INSERT INTO tags(tag) VALUES ('books');
				INSERT INTO tags(tag) VALUES ('active');
				INSERT INTO tags(tag) VALUES ('hockey');
				INSERT INTO tags(tag) VALUES ('voleyball');
				INSERT INTO tags(tag) VALUES ('bodybuilding');
				INSERT INTO tags(tag) VALUES ('camping');
				INSERT INTO tags(tag) VALUES ('mountains');
				INSERT INTO tags(tag) VALUES ('programming');
				INSERT INTO tags(tag) VALUES ('computers');
				INSERT INTO tags(tag) VALUES ('freelove');
				INSERT INTO tags(tag) VALUES ('flowers');
				INSERT INTO tags(tag) VALUES ('art');
				INSERT INTO tags(tag) VALUES ('cooking');"
	);

	define('TAGS', $tags);

	$interests = array(

/*men*/

		'interests' => "
		INSERT INTO interests(user_id, tag) VALUES ('2', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('2', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('2', 'crossfit');
		INSERT INTO interests(user_id, tag) VALUES ('2', 'photo');
		INSERT INTO interests(user_id, tag) VALUES ('2', 'nature');

		INSERT INTO interests(user_id, tag) VALUES ('3', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('3', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('3', 'backpacking');
		INSERT INTO interests(user_id, tag) VALUES ('3', 'singing');
		INSERT INTO interests(user_id, tag) VALUES ('3', 'politics');

		INSERT INTO interests(user_id, tag) VALUES ('4', 'beer');
		INSERT INTO interests(user_id, tag) VALUES ('4', 'pub');
		INSERT INTO interests(user_id, tag) VALUES ('4', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('4', 'vodka');
		INSERT INTO interests(user_id, tag) VALUES ('4', 'fun');
		INSERT INTO interests(user_id, tag) VALUES ('4', 'fishing');

		INSERT INTO interests(user_id, tag) VALUES ('5', 'painting');
		INSERT INTO interests(user_id, tag) VALUES ('5', 'architecture');
		INSERT INTO interests(user_id, tag) VALUES ('5', 'literature');
		INSERT INTO interests(user_id, tag) VALUES ('5', 'poems');
		INSERT INTO interests(user_id, tag) VALUES ('5', 'theatre');

		INSERT INTO interests(user_id, tag) VALUES ('6', 'parties');
		INSERT INTO interests(user_id, tag) VALUES ('6', 'techno');
		INSERT INTO interests(user_id, tag) VALUES ('6', 'drugs');
		INSERT INTO interests(user_id, tag) VALUES ('6', 'rave');
		INSERT INTO interests(user_id, tag) VALUES ('6', 'music');

		INSERT INTO interests(user_id, tag) VALUES ('7', 'art');
		INSERT INTO interests(user_id, tag) VALUES ('7', 'techno');
		INSERT INTO interests(user_id, tag) VALUES ('7', 'drugs');
		INSERT INTO interests(user_id, tag) VALUES ('7', 'rave');
		INSERT INTO interests(user_id, tag) VALUES ('7', 'love');

		INSERT INTO interests(user_id, tag) VALUES ('8', 'basketball');
		INSERT INTO interests(user_id, tag) VALUES ('8', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('8', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('8', 'gym');
		INSERT INTO interests(user_id, tag) VALUES ('8', 'finance');

		INSERT INTO interests(user_id, tag) VALUES ('9', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('9', 'pizza');
		INSERT INTO interests(user_id, tag) VALUES ('9', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('9', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('9', 'fitness');

		INSERT INTO interests(user_id, tag) VALUES ('10', 'muscles');
		INSERT INTO interests(user_id, tag) VALUES ('10', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('10', 'crossfit');
		INSERT INTO interests(user_id, tag) VALUES ('10', 'gym');
		INSERT INTO interests(user_id, tag) VALUES ('10', 'ufc');

		INSERT INTO interests(user_id, tag) VALUES ('11', 'food');
		INSERT INTO interests(user_id, tag) VALUES ('11', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('11', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('11', 'gym');
		INSERT INTO interests(user_id, tag) VALUES ('11', 'sex');

		INSERT INTO interests(user_id, tag) VALUES ('12', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('12', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('12', 'crossfit');

		INSERT INTO interests(user_id, tag) VALUES ('13', 'art');
		INSERT INTO interests(user_id, tag) VALUES ('13', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('13', 'backpacking');

		INSERT INTO interests(user_id, tag) VALUES ('14', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('14', 'beer');
		INSERT INTO interests(user_id, tag) VALUES ('14', 'football');

		INSERT INTO interests(user_id, tag) VALUES ('15', 'painting');
		INSERT INTO interests(user_id, tag) VALUES ('15', 'architecture');
		INSERT INTO interests(user_id, tag) VALUES ('15', 'literature');

		INSERT INTO interests(user_id, tag) VALUES ('16', 'cooking');
		INSERT INTO interests(user_id, tag) VALUES ('16', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('16', 'children');

		INSERT INTO interests(user_id, tag) VALUES ('17', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('17', 'reading');
		INSERT INTO interests(user_id, tag) VALUES ('17', 'theatre');

		INSERT INTO interests(user_id, tag) VALUES ('18', 'basketball');
		INSERT INTO interests(user_id, tag) VALUES ('18', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('18', 'cooking');

		INSERT INTO interests(user_id, tag) VALUES ('19', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('19', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('19', 'gym');

		INSERT INTO interests(user_id, tag) VALUES ('20', 'fun');
		INSERT INTO interests(user_id, tag) VALUES ('20', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('20', 'love');

		INSERT INTO interests(user_id, tag) VALUES ('21', 'reading');
		INSERT INTO interests(user_id, tag) VALUES ('21', 'theatre');
		INSERT INTO interests(user_id, tag) VALUES ('21', 'fitness');

		INSERT INTO interests(user_id, tag) VALUES ('22', 'parties');
		INSERT INTO interests(user_id, tag) VALUES ('22', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('22', 'rave');

		INSERT INTO interests(user_id, tag) VALUES ('23', 'art');
		INSERT INTO interests(user_id, tag) VALUES ('23', 'economics');
		INSERT INTO interests(user_id, tag) VALUES ('23', 'talking');

		INSERT INTO interests(user_id, tag) VALUES ('24', 'fishing');
		INSERT INTO interests(user_id, tag) VALUES ('24', 'sea');
		INSERT INTO interests(user_id, tag) VALUES ('24', 'cooking');

		INSERT INTO interests(user_id, tag) VALUES ('25', 'basketball');
		INSERT INTO interests(user_id, tag) VALUES ('25', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('25', 'sport');

		INSERT INTO interests(user_id, tag) VALUES ('26', 'traveling');
		INSERT INTO interests(user_id, tag) VALUES ('26', 'hitchhicking');
		INSERT INTO interests(user_id, tag) VALUES ('26', 'tourism');

		INSERT INTO interests(user_id, tag) VALUES ('27', 'architecture');
		INSERT INTO interests(user_id, tag) VALUES ('27', 'theatre');
		INSERT INTO interests(user_id, tag) VALUES ('27', 'fitness');

		INSERT INTO interests(user_id, tag) VALUES ('28', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('28', 'reading');
		INSERT INTO interests(user_id, tag) VALUES ('28', 'theatre');

		INSERT INTO interests(user_id, tag) VALUES ('29', 'muscles');
		INSERT INTO interests(user_id, tag) VALUES ('29', 'music');
		INSERT INTO interests(user_id, tag) VALUES ('29', 'gym');

		INSERT INTO interests(user_id, tag) VALUES ('30', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('30', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('30', 'muscles');

		INSERT INTO interests(user_id, tag) VALUES ('31', 'poems');
		INSERT INTO interests(user_id, tag) VALUES ('31', 'theatre');
		INSERT INTO interests(user_id, tag) VALUES ('31', 'art');

		INSERT INTO interests(user_id, tag) VALUES ('32', 'parties');
		INSERT INTO interests(user_id, tag) VALUES ('32', 'active');
		INSERT INTO interests(user_id, tag) VALUES ('32', 'tourism');

		INSERT INTO interests(user_id, tag) VALUES ('33', 'politics');
		INSERT INTO interests(user_id, tag) VALUES ('33', 'economics');
		INSERT INTO interests(user_id, tag) VALUES ('33', 'theatre');

		INSERT INTO interests(user_id, tag) VALUES ('34', 'painting');
		INSERT INTO interests(user_id, tag) VALUES ('34', 'books');
		INSERT INTO interests(user_id, tag) VALUES ('34', 'reading');

		INSERT INTO interests(user_id, tag) VALUES ('35', 'hockey');
		INSERT INTO interests(user_id, tag) VALUES ('35', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('35', 'bodybuilding');

		INSERT INTO interests(user_id, tag) VALUES ('36', 'tourism');
		INSERT INTO interests(user_id, tag) VALUES ('36', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('36', 'sex');

		INSERT INTO interests(user_id, tag) VALUES ('37', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('37', 'theatre');
		INSERT INTO interests(user_id, tag) VALUES ('37', 'bodybuilding');

		INSERT INTO interests(user_id, tag) VALUES ('38', 'fishing');
		INSERT INTO interests(user_id, tag) VALUES ('38', 'voleyball');
		INSERT INTO interests(user_id, tag) VALUES ('38', 'sport');

		INSERT INTO interests(user_id, tag) VALUES ('39', 'camping');
		INSERT INTO interests(user_id, tag) VALUES ('39', 'backpacking');
		INSERT INTO interests(user_id, tag) VALUES ('39', 'mountains');

		INSERT INTO interests(user_id, tag) VALUES ('40', 'techno');
		INSERT INTO interests(user_id, tag) VALUES ('40', 'parties');
		INSERT INTO interests(user_id, tag) VALUES ('40', 'rave');

		INSERT INTO interests(user_id, tag) VALUES ('41', 'painting');
		INSERT INTO interests(user_id, tag) VALUES ('41', 'architecture');
		INSERT INTO interests(user_id, tag) VALUES ('41', 'art');

		INSERT INTO interests(user_id, tag) VALUES ('42', 'photo');
		INSERT INTO interests(user_id, tag) VALUES ('42', 'programming');
		INSERT INTO interests(user_id, tag) VALUES ('42', 'computers');

		INSERT INTO interests(user_id, tag) VALUES ('43', 'politics');
		INSERT INTO interests(user_id, tag) VALUES ('43', 'economics');
		INSERT INTO interests(user_id, tag) VALUES ('43', 'reading');

		INSERT INTO interests(user_id, tag) VALUES ('44', 'poems');
		INSERT INTO interests(user_id, tag) VALUES ('44', 'books');
		INSERT INTO interests(user_id, tag) VALUES ('44', 'reading');

		INSERT INTO interests(user_id, tag) VALUES ('45', 'hockey');
		INSERT INTO interests(user_id, tag) VALUES ('45', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('45', 'voleyball');

		INSERT INTO interests(user_id, tag) VALUES ('46', 'tourism');
		INSERT INTO interests(user_id, tag) VALUES ('46', 'hitchhicking');
		INSERT INTO interests(user_id, tag) VALUES ('46', 'sex');

		INSERT INTO interests(user_id, tag) VALUES ('47', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('47', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('47', 'bodybuilding');

		INSERT INTO interests(user_id, tag) VALUES ('48', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('48', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('48', 'freelove');

		INSERT INTO interests(user_id, tag) VALUES ('49', 'computers');
		INSERT INTO interests(user_id, tag) VALUES ('49', 'tourism');
		INSERT INTO interests(user_id, tag) VALUES ('49', 'politics');

		INSERT INTO interests(user_id, tag) VALUES ('50', 'active');
		INSERT INTO interests(user_id, tag) VALUES ('50', 'books');
		INSERT INTO interests(user_id, tag) VALUES ('50', 'sex');

		INSERT INTO interests(user_id, tag) VALUES ('51', 'painting');
		INSERT INTO interests(user_id, tag) VALUES ('51', 'architecture');
		INSERT INTO interests(user_id, tag) VALUES ('51', 'poems');

		INSERT INTO interests(user_id, tag) VALUES ('52', 'pub');
		INSERT INTO interests(user_id, tag) VALUES ('52', 'beer');
		INSERT INTO interests(user_id, tag) VALUES ('52', 'computers');

		INSERT INTO interests(user_id, tag) VALUES ('53', 'politics');
		INSERT INTO interests(user_id, tag) VALUES ('53', 'economics');
		INSERT INTO interests(user_id, tag) VALUES ('53', 'theatre');

		INSERT INTO interests(user_id, tag) VALUES ('54', 'ufc');
		INSERT INTO interests(user_id, tag) VALUES ('54', 'books');
		INSERT INTO interests(user_id, tag) VALUES ('54', 'football');

		INSERT INTO interests(user_id, tag) VALUES ('55', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('55', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('55', 'voleyball');

		INSERT INTO interests(user_id, tag) VALUES ('56', 'pizza');
		INSERT INTO interests(user_id, tag) VALUES ('56', 'food');
		INSERT INTO interests(user_id, tag) VALUES ('56', 'children');

		INSERT INTO interests(user_id, tag) VALUES ('57', 'theatre');
		INSERT INTO interests(user_id, tag) VALUES ('57', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('57', 'gym');

		INSERT INTO interests(user_id, tag) VALUES ('58', 'crossfit');
		INSERT INTO interests(user_id, tag) VALUES ('58', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('58', 'freelove');

		INSERT INTO interests(user_id, tag) VALUES ('59', 'programming');
		INSERT INTO interests(user_id, tag) VALUES ('59', 'freelove');
		INSERT INTO interests(user_id, tag) VALUES ('59', 'sea');

		INSERT INTO interests(user_id, tag) VALUES ('60', 'beer');
		INSERT INTO interests(user_id, tag) VALUES ('60', 'nature');
		INSERT INTO interests(user_id, tag) VALUES ('60', 'singing');

		INSERT INTO interests(user_id, tag) VALUES ('61', 'flowers');
		INSERT INTO interests(user_id, tag) VALUES ('61', 'nature');
		INSERT INTO interests(user_id, tag) VALUES ('61', 'poems');

		INSERT INTO interests(user_id, tag) VALUES ('62', 'finance');
		INSERT INTO interests(user_id, tag) VALUES ('62', 'children');
		INSERT INTO interests(user_id, tag) VALUES ('62', 'love');

		INSERT INTO interests(user_id, tag) VALUES ('63', 'food');
		INSERT INTO interests(user_id, tag) VALUES ('63', 'cooking');
		INSERT INTO interests(user_id, tag) VALUES ('63', 'freelove');

		INSERT INTO interests(user_id, tag) VALUES ('64', 'ufc');
		INSERT INTO interests(user_id, tag) VALUES ('64', 'muscles');
		INSERT INTO interests(user_id, tag) VALUES ('64', 'gym');

		INSERT INTO interests(user_id, tag) VALUES ('65', 'literature');
		INSERT INTO interests(user_id, tag) VALUES ('65', 'books');
		INSERT INTO interests(user_id, tag) VALUES ('65', 'reading');

		INSERT INTO interests(user_id, tag) VALUES ('66', 'drugs');
		INSERT INTO interests(user_id, tag) VALUES ('66', 'parties');
		INSERT INTO interests(user_id, tag) VALUES ('66', 'rave');
		INSERT INTO interests(user_id, tag) VALUES ('66', 'techno');

		INSERT INTO interests(user_id, tag) VALUES ('67', 'fun');
		INSERT INTO interests(user_id, tag) VALUES ('67', 'tourism');
		INSERT INTO interests(user_id, tag) VALUES ('67', 'hitchhicking');

		INSERT INTO interests(user_id, tag) VALUES ('68', 'vodka');
		INSERT INTO interests(user_id, tag) VALUES ('68', 'beer');
		INSERT INTO interests(user_id, tag) VALUES ('68', 'pubs');

		INSERT INTO interests(user_id, tag) VALUES ('69', 'backpacking');
		INSERT INTO interests(user_id, tag) VALUES ('69', 'programming');
		INSERT INTO interests(user_id, tag) VALUES ('69', 'football');

		INSERT INTO interests(user_id, tag) VALUES ('70', 'painting');
		INSERT INTO interests(user_id, tag) VALUES ('70', 'art');
		INSERT INTO interests(user_id, tag) VALUES ('70', 'children');


/*women*/

		INSERT INTO interests(user_id, tag) VALUES ('71', 'food');
		INSERT INTO interests(user_id, tag) VALUES ('71', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('71', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('71', 'gym');
		INSERT INTO interests(user_id, tag) VALUES ('71', 'fitness');

		INSERT INTO interests(user_id, tag) VALUES ('72', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('72', 'pizza');
		INSERT INTO interests(user_id, tag) VALUES ('72', 'finance');
		INSERT INTO interests(user_id, tag) VALUES ('72', 'poems');
		INSERT INTO interests(user_id, tag) VALUES ('72', 'painting');

		INSERT INTO interests(user_id, tag) VALUES ('73', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('73', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('73', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('73', 'literature');
		INSERT INTO interests(user_id, tag) VALUES ('73', 'techno');

		INSERT INTO interests(user_id, tag) VALUES ('74', 'parties');
		INSERT INTO interests(user_id, tag) VALUES ('74', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('74', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('74', 'pizza');
		INSERT INTO interests(user_id, tag) VALUES ('74', 'gym');

		INSERT INTO interests(user_id, tag) VALUES ('75', 'crossfit');
		INSERT INTO interests(user_id, tag) VALUES ('75', 'basketball');
		INSERT INTO interests(user_id, tag) VALUES ('75', 'backpacking');
		INSERT INTO interests(user_id, tag) VALUES ('75', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('75', 'singing');

		INSERT INTO interests(user_id, tag) VALUES ('76', 'theatre');
		INSERT INTO interests(user_id, tag) VALUES ('76', 'poems');
		INSERT INTO interests(user_id, tag) VALUES ('76', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('76', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('76', 'fun');

		INSERT INTO interests(user_id, tag) VALUES ('77', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('77', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('77', 'poems');
		INSERT INTO interests(user_id, tag) VALUES ('77', 'politics');
		INSERT INTO interests(user_id, tag) VALUES ('77', 'rave');

		INSERT INTO interests(user_id, tag) VALUES ('78', 'rave');
		INSERT INTO interests(user_id, tag) VALUES ('78', 'techno');
		INSERT INTO interests(user_id, tag) VALUES ('78', 'gym');
		INSERT INTO interests(user_id, tag) VALUES ('78', 'music');
		INSERT INTO interests(user_id, tag) VALUES ('78', 'muscles');

		INSERT INTO interests(user_id, tag) VALUES ('79', 'children');
		INSERT INTO interests(user_id, tag) VALUES ('79', 'backpacking');
		INSERT INTO interests(user_id, tag) VALUES ('79', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('79', 'pizza');
		INSERT INTO interests(user_id, tag) VALUES ('79', 'love');

		INSERT INTO interests(user_id, tag) VALUES ('80', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('80', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('80', 'singing');
		INSERT INTO interests(user_id, tag) VALUES ('80', 'beer');
		INSERT INTO interests(user_id, tag) VALUES ('80', 'pub');"
	);

	define('INTERESTS', $interests);


