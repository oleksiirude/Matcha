<?php
	$password = '$2y$10$AjxhKLprRMFLjNUGaSO6IeUxcTI4RGTubZXgGh/7HXWAOg.1CNlXK';
	$password_admin = '$2y$10$p.I668kvXrO2SjEl1TBKC.PXce5Nu6B/vImuL7bQc3LQMtQ/kcDrG';
	$bio = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue augue, placerat in ipsum vel, convallis consequat justo. Cras vulputate fermentum egestas. Morbi placerat justo vel libero laoreet imperdiet. Morbi orci nibh, cursus id augue vel, congue interdum nisi. In nisi ipsum, tristique nec tortor et, tempor interdum ante. In hac habitasse platea dictumst. Mauris lacus quam, pharetra eleifend ex nec, eleifend aliquam felis.';

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
		        VALUES (/*71*/ 'cherry', 'cherry@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-15 14:40:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*72*/ 'caroline', 'caroline@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-19 13:13:13', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*73*/ 'kichi', 'amanda@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-21 18:40:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*74*/ 'pretty', 'ann_johnson@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-14 17:07:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*75*/ 'tiny', 'prett@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-16 17:40:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*76*/ 'sunny', 'cleopatra@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-17 15:16:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*77*/ 'leonna', 'leo@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-18 16:32:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*78*/ 'chika', 'chika_worldwide@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-21 17:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*79*/ 'love', 'lovanda@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-21 18:49:13', '2019-07-12 18:26:03', '2019-07-12 18:36:03');
		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*80*/ 'cloudy', 'eleonora@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-21 14:42:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*81*/ 'vika', 'vika@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-21 14:42:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*82*/ 'samara', 'samara@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-19 13:41:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*83*/ 'kitty', 'kitty@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-18 22:36:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*84*/ 'anna', 'ann@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-17 23:47:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*85*/ 'kissa', 'kissa@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-18 23:11:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*86*/ 'catty', 'catty@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-18 21:23:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*87*/ 'flower', 'flower@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-19 20:21:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*88*/ 'igirl', 'igirl@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-14 17:17:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*89*/ 'cute', 'cute@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-13 22:42:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');   

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*90*/ 'reddy', 'reddy@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-14 12:42:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*91*/ 'miumiu', 'miumiu@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-15 19:49:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*92*/ 'murmur', 'murmur@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-16 18:40:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*93*/ 'hello', 'hello@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-16 14:11:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*94*/ 'yours', 'yours@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-17 04:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*95*/ 'little', 'little@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-18 00:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*96*/ 'potion', 'potion@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-19 12:12:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*97*/ 'bird', 'bird@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-19 13:40:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*98*/ 'confident', 'confident@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-20 13:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');   

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*99*/ 'beloved', 'beloved@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-21 18:18:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');    

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*100*/ 'pet', 'pet@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-21 15:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');   

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*101*/ 'petty', 'petty@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-13 19:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*102*/ 'sexxxy', 'sexxxy@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-14 22:40:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*103*/ 'curl', 'curl@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-15 21:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*104*/ 'wave', 'wave@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-16 22:16:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*105*/ 'morning', 'morning@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-17 22:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*106*/ 'evening', 'evening@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-18 21:33:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*107*/ 'sunset', 'sunset@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-19 18:40:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*108*/ 'sun', 'sun@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-19 19:56:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03'); 

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*109*/ 'sea', 'sea@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-19 17:07:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03'); 

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*110*/ 'wild', 'wild@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-20 18:00:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');    

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*111*/ 'wildy', 'wildy@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-21 10:00:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*112*/ 'tiger', 'tiger@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-20 12:40:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*113*/ 'puma', 'puma@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-21 11:10:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*114*/ 'clever', 'clever@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-21 14:32:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*115*/ 'krispi', 'krispi@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-17 10:11:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*116*/ 'kuki', 'kuki@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-18 13:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*117*/ 'shevy', 'shevy@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-19 21:30:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*118*/ 'compari', 'compari@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-19 22:02:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');   

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*119*/ 'mara', 'mara@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-18 22:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');  

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*120*/ 'martini', 'martini@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-19 07:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');  

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*121*/ 'tiva', 'tiva@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-17 18:01:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*122*/ 'jodi', 'jodi@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-17 18:40:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*123*/ 'matilda', 'matilda@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-17 16:00:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');
		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*124*/ 'kilimondshara', 'kilimondshara@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-18 01:59:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*125*/ 'bestgirlinyourlife', 'bestgirlinyourlife@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-18 02:00:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*126*/ 'cabanga', 'cabanga@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-16 04:40:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*127*/ 'shmoka', 'shmoka@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-14 11:11:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*128*/ 'casatca', 'casatca@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-15 13:40:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03'); 

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*129*/ 'barcelona', 'barcelona@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-15 16:18:30', '2019-07-12 18:26:03', '2019-07-12 18:36:03');  

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*130*/ 'cosmo', 'cosmo@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-15 15:15:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');  

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*131*/ 'teva', 'teva@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-16 10:53:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*132*/ 'monka', 'monka@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-17 19:18:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*133*/ 'viva', 'viva@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-18 20:40:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*134*/ 'cuttiest', 'cuttiest@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-18 21:48:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*135*/ 'light', 'light@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-19 23:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*136*/ 'cuba', 'cuba@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-18 15:36:09', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*137*/ 'kimi', 'kimi@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-19 13:03:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*138*/ 'enrose', 'enrose@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-19 14:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');   

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*139*/ 'tictac', 'tictac@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-19 19:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');  

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*140*/ 'miracle', 'miracle@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-19 08:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');  

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*141*/ 'fabious', 'fabious@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-18 11:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*142*/ 'beautiful', 'beautiful@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-18 14:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*143*/ 'fancy', 'fancy@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-13 17:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');   

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*144*/ 'cozy', 'cozy@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-14 18:16:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');  

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*145*/ 'mummy', 'mummy@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-16 18:41:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

/*homo men*/

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*146*/ 'shiva', 'shiva@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-22 14:40:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');        	

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*147*/ 'como', 'como@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-23 12:40:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*148*/ 'rapirus', 'rapirus@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 13:40:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03'); 
		        
		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*149*/ 'komus', 'komus@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-22 11:11:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*150*/ 'slaver', 'slaver@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-21 19:00:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03'); 
		        
		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*151*/ 'winner', 'winner@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-20 10:30:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*152*/ 'sweetty', 'sweetty@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-22 17:44:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');     
		       
		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*153*/ 'lover', 'lover@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-21 13:42:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*154*/ 'carlos', 'carlos@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-20 13:33:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*155*/ 'shibu', 'shibu@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-17 12:33:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

/*homo women*/

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*156*/ 'marta', 'marta@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-22 14:40:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');        	

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*157*/ 'josse', 'josse@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-23 12:40:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*158*/ 'liver', 'liver@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 13:40:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03'); 
		        
		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*159*/ 'ammuse', 'ammuse@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-22 11:11:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*160*/ 'constant', 'constant@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-21 19:00:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03'); 
		        
		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*161*/ 'raptor', 'raptor@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-20 10:30:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*162*/ 'lillo', 'lillo@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-22 17:44:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');     
		       
		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*163*/ 'quma', 'quma@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-21 13:42:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*164*/ 'shiny', 'shiny@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-20 13:33:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*165*/ 'bubble', 'bubble@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-17 12:33:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');


/*bi men*/

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*166*/ 'corma', 'corma@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-21 13:40:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');        	

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*167*/ 'parabelum', 'parabelum@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-23 12:42:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*168*/ 'kuzha', 'kuzha@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 13:40:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03'); 
		        
		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*169*/ 'snowden', 'snowden@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-22 11:11:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*170*/ 'everest', 'everest@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-21 19:00:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03'); 
		        
		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*171*/ 'rapt', 'rapt@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-20 10:30:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*172*/ 'hovard', 'hovard@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-22 17:44:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');     
		       
		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*173*/ 'harry', 'harry@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-21 13:42:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*174*/ 'joom', 'joom@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-20 13:33:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*175*/ 'bubba', 'bubba@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-17 12:33:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

/*bi women*/

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*176*/ 'bibba', 'bibba@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-22 14:40:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');        	

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*177*/ 'jorra', 'jorra@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-23 12:40:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*178*/ 'komo', 'komo@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 13:40:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03'); 
		        
		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*179*/ 'lerro', 'lerro@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-22 11:11:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*180*/ 'petra', 'petra@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-21 19:00:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03'); 
		        
		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*181*/ 'rapira', 'rapira@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-20 10:30:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*182*/ 'poppy', 'poppy@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-22 17:44:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');     
		       
		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*183*/ 'titta', 'titta@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-21 13:42:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*184*/ 'lossy', 'lossy@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-20 13:33:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES (/*185*/ 'himma', 'himma@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-17 12:33:00', '2019-07-12 18:26:03', '2019-07-12 18:36:03');"
	);

	define('USERS', $users);
	$profiles = array(

/*men*/

		'profiles' => "
		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
                    avatar, avatar_uploaded, photo1, photo2, photo3, rating)
		        VALUES ('2', 'maximus', 'Maxim', 'Chumko', '1995-12-28', 'male', 'heterosexual', '$bio',
		                'images/profiles/maximus/avatar.jpg', '1',
		                'images/profiles/maximus/photo1.jpg',
		                'images/profiles/maximus/photo2.jpg',
		                'images/profiles/maximus/photo3.jpg', '6.4');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, photo3, photo4, rating)
		        VALUES ('3', 'dobby', 'Alexander', 'Cherednichok', '1985-05-20', 'male', 'heterosexual', '$bio',
		                'images/profiles/dobby/avatar.jpg', '1',
		                'images/profiles/dobby/photo1.jpg',
		                'images/profiles/dobby/photo2.jpg',
		                'images/profiles/dobby/photo3.jpg',
		                'images/profiles/dobby/photo4.jpg', '6.0');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, rating)
		        VALUES ('4', 'bigboy', 'Ruslan', 'Drobyazko', '1977-05-01', 'male', 'heterosexual', '$bio',
		                'images/profiles/bigboy/avatar.jpg', '1',
		                'images/profiles/bigboy/photo1.jpg', '14.4');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, rating)
		        VALUES ('5', 'captain', 'Vlad', 'kropolenko', '1978-05-01', 'male', 'heterosexual', '$bio',
		                'images/profiles/captain/avatar.jpg', '1',
		                'images/profiles/captain/photo1.jpg',
		                'images/profiles/captain/photo2.jpg', '24.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('6', 'serious', 'Nikolay', 'Kuzhko', '2000-03-05', 'male', 'heterosexual', '$bio',
		                'images/profiles/serious/avatar.jpg', '1', '3.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, rating)
		        VALUES ('7', 'massive', 'Sergey', 'Stanko', '1989-02-21', 'male', 'heterosexual', '$bio',
		                'images/profiles/massive/avatar.jpg', '1',
		                'images/profiles/massive/photo1.jpg',
		                'images/profiles/massive/photo2.jpg', '7.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, photo3, rating)
		        VALUES ('8', 'johnny', 'Denis', 'Petrenko', '1987-02-10', 'male', 'heterosexual', '$bio',
		                'images/profiles/johnny/avatar.jpg', '1',
		                'images/profiles/johnny/photo1.jpg',
		                'images/profiles/johnny/photo2.jpg',
		                'images/profiles/johnny/photo3.jpg', '8.4');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, photo3, photo4, rating)
		        VALUES ('9', 'womanizer', 'Pavel', 'Kunickii', '1982-12-10', 'male', 'heterosexual', '$bio',
		                'images/profiles/womanizer/avatar.jpg', '1',
		                'images/profiles/womanizer/photo1.jpg',
		                'images/profiles/womanizer/photo2.jpg',
		                'images/profiles/womanizer/photo3.jpg',
		                'images/profiles/womanizer/photo4.jpg', '15.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, rating)
		        VALUES ('10', 'beast', 'Fedor', 'Emalnyanenko', '1977-10-12', 'male', 'heterosexual', '$bio',
		                'images/profiles/beast/avatar.jpg', '1',
		                'images/profiles/beast/photo1.jpg',
		                'images/profiles/beast/photo2.jpg', '24.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('11', 'cooler', 'Vladimir', 'Markov', '1993-06-12', 'male', 'heterosexual', '$bio',
		                'images/profiles/cooler/avatar.jpg', '1', '33.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('12', 'kipsta', 'Vadim', 'Markovenko', '1988-07-07', 'male', 'heterosexual', '$bio',
		                'images/profiles/kipsta/avatar.jpg', '1', '23.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('13', 'ehorro', 'Ehor', 'Putenko', '1984-03-11', 'male', 'heterosexual', '$bio',
		                'images/profiles/ehorro/avatar.jpg', '1', '5.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('14', 'sergio', 'Sergey', 'Leonenko', '1991-06-01', 'male', 'heterosexual', '$bio',
		                'images/profiles/sergio/avatar.jpg', '1', '6.9');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('15', 'kopa', 'Kiril', 'Eremenko', '1978-09-01', 'male', 'heterosexual', '$bio',
		                'images/profiles/kopa/avatar.jpg', '1', '10.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('16', 'dimas', 'Dmitrii', 'Golovko', '1993-10-11', 'male', 'heterosexual', '$bio',
		                'images/profiles/dimas/avatar.jpg', '1', '6.3');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('17', 'nubilas', 'Nikolay', 'Lasiskii', '1987-06-11', 'male', 'heterosexual', '$bio',
		                'images/profiles/nubilas/avatar.jpg', '1', '9.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('18', 'rubae', 'Nikita', 'Alexeev', '1998-06-01', 'male', 'heterosexual', '$bio',
		                'images/profiles/rubae/avatar.jpg', '1', '19.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('19', 'crop', 'Oleksii', 'Rudchenko', '1991-02-01', 'male', 'heterosexual', '$bio',
		                'images/profiles/crop/avatar.jpg', '1', '8.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('20', 'super', 'Slava', 'Lepsheev', '1986-01-02', 'male', 'heterosexual', '$bio',
		                'images/profiles/super/avatar.jpg', '1', '10.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('21', 'rudolf', 'Rudolf', 'Shneer', '1974-06-27', 'male', 'heterosexual', '$bio',
		                'images/profiles/rudolf/avatar.jpg', '1', '20.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('22', 'patriot', 'Andrey', 'Bilko', '1981-12-01', 'male', 'heterosexual', '$bio',
		                'images/profiles/patriot/avatar.jpg', '1', '40.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('23', 'cool', 'Sasha', 'Andrienko', '1987-03-11', 'male', 'heterosexual', '$bio',
		                'images/profiles/cool/avatar.jpg', '1', '31.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('24', 'camagru', 'Franz', 'Herion', '1982-03-17', 'male', 'heterosexual', '$bio',
		                'images/profiles/camagru/avatar.jpg', '1', '20.9');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('25', 'manu', 'Oleksii', 'Shumko', '1999-01-02', 'male', 'heterosexual', '$bio',
		                'images/profiles/manu/avatar.jpg', '1', '69.9');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('26', 'shrai', 'Maksim', 'Marchuk', '2000-06-01', 'male', 'heterosexual', '$bio',
		                'images/profiles/shrai/avatar.jpg', '1', '8.9');   

        INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('27', 'virgo', 'Vova', 'Klimchuk', '1984-03-20', 'male', 'heterosexual', '$bio',
		                'images/profiles/virgo/avatar.jpg', '1', '17.9'); 

        INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('28', 'kupor', 'Konstantin', 'Grigorenko', '1987-09-22', 'male', 'heterosexual', '$bio',
		                'images/profiles/kupor/avatar.jpg', '1', '51.9');  	

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('29', 'vitalino', 'Vitalii', 'Zaicev', '1976-02-03', 'male', 'heterosexual', '$bio',
		                'images/profiles/vitalino/avatar.jpg', '1', '77.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('30', 'phobiq', 'Alexander', 'Shiyan', '1984-09-22', 'male', 'heterosexual', '$bio',
		                'images/profiles/phobiq/avatar.jpg', '1', '25.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('31', 'cutor', 'Borislav', 'Romanov', '1988-08-02', 'male', 'heterosexual', '$bio',
		                'images/profiles/cutor/avatar.jpg', '1', '18.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('32', 'longer', 'Garri', 'Frolov', '1993-10-12', 'male', 'heterosexual', '$bio',
		                'images/profiles/longer/avatar.jpg', '1', '41.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('33', 'strong', 'Gordeii', 'Sergeev', '1979-09-22', 'male', 'heterosexual', '$bio',
		                'images/profiles/strong/avatar.jpg', '1', '41.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('34', 'stigor', 'German', 'Sorokin', '1980-10-23', 'male', 'heterosexual', '$bio',
		                'images/profiles/stigor/avatar.jpg', '1', '24.9');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('35', 'ivor', 'Ivor', 'Muleev', '1994-10-22', 'male', 'heterosexual', '$bio',
		                'images/profiles/ivor/avatar.jpg', '1', '7.9');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('36', 'nesamovitii', 'Ihor', 'Korolev', '1993-12-31', 'male', 'heterosexual', '$bio',
		                'images/profiles/nesamovitii/avatar.jpg', '1', '34.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('37', 'insane', 'David', 'Tarasov', '1971-09-22', 'male', 'heterosexual', '$bio',
		                'images/profiles/insane/avatar.jpg', '1', '66.9');   

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('38', 'ilnev', 'Itan', 'Ilnev', '1978-10-02', 'male', 'heterosexual', '$bio',
		                'images/profiles/ilnev/avatar.jpg', '1', '81.9');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('39', 'ruban', 'Sergey', 'Ruaban', '1984-09-02', 'male', 'heterosexual', '$bio',
		                'images/profiles/ruban/avatar.jpg', '1', '90.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('40', 'silver', 'Zurab', 'Zufar', '1987-09-02', 'male', 'heterosexual', '$bio',
		                'images/profiles/silver/avatar.jpg', '1', '55.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('41', 'king', 'Petro', 'Poroshenko', '1964-10-10', 'male', 'heterosexual', '$bio',
		                'images/profiles/king/avatar.jpg', '1', '33.2');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('42', 'best', 'Vladimir', 'Zelenskii', '1979-07-22', 'male', 'heterosexual', '$bio',
		                'images/profiles/best/avatar.jpg', '1', '17.2');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('43', 'sadovii', 'Andrii', 'Sadovii', '1971-03-02', 'male', 'heterosexual', '$bio',
		                'images/profiles/sadovii/avatar.jpg', '1', '18.4');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('44', 'muraev', 'Evgenii', 'Muraev', '1977-12-22', 'male', 'heterosexual', '$bio',
		                'images/profiles/muraev/avatar.jpg', '1', '20.1'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('45', 'juda', 'Vladimir', 'Groysman', '1979-12-22', 'male', 'heterosexual', '$bio',
		                'images/profiles/juda/avatar.jpg', '1', '9.9');     

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('46', 'stefa', 'Stanislav', 'Stefanchuk', '1981-07-29', 'male', 'heterosexual', '$bio',
		                'images/profiles/stefa/avatar.jpg', '1', '12.2');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('47', 'slava', 'Slava', 'Vakarchuk', '1979-12-22', 'male', 'heterosexual', '$bio',
		                'images/profiles/slava/avatar.jpg', '1', '18.3');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('48', 'vilkul', 'Ruslan', 'Vilkul', '1977-09-12', 'male', 'heterosexual', '$bio',
		                'images/profiles/vilkul/avatar.jpg', '1', '23.7');   

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('49', 'shar', 'Anatolii', 'Sharii', '1978-02-23', 'male', 'heterosexual', '$bio',
		                'images/profiles/shar/avatar.jpg', '1', '20.0');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('50', 'zhan', 'Zhan', 'Belenyuk', '1990-09-22', 'male', 'heterosexual', '$bio',
		                'images/profiles/zhan/avatar.jpg', '1', '20.4');    

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('51', 'blackfire', 'Oleksii', 'Dmitrenko', '1988-11-16', 'male', 'heterosexual', '$bio',
		                'images/profiles/blackfire/avatar.jpg', '1', '27.3'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('52', 'belka', 'Dmitrii', 'Belchenko', '1989-02-22', 'male', 'heterosexual', '$bio',
		                'images/profiles/belka/avatar.jpg', '1', '77.3');   

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('53', 'rusik', 'Ruslan', 'Zshmachenko', '1989-03-12', 'male', 'heterosexual', '$bio',
		                'images/profiles/rusik/avatar.jpg', '1', '28.9');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('54', 'beatmaker', 'Denis', 'Kuszhelnii', '1989-12-07', 'male', 'heterosexual', '$bio',
		                'images/profiles/beatmaker/avatar.jpg', '1', '37.3'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('55', 'mordar', 'Oleh', 'Mordachev', '1990-09-30', 'male', 'heterosexual', '$bio',
		                'images/profiles/mordar/avatar.jpg', '1', '57.3');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('56', 'serg', 'Sergey', 'Morshin', '1986-09-06', 'male', 'heterosexual', '$bio',
		                'images/profiles/serg/avatar.jpg', '1', '96.3');    

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('57', 'bard', 'Sergey', 'Bardachenko', '1989-12-22', 'male', 'heterosexual', '$bio',
		                'images/profiles/bard/avatar.jpg', '1', '44.5');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('58', 'dminakov', 'Denis', 'Minakov', '1992-10-22', 'male', 'heterosexual', '$bio', 
		        		'images/profiles/dminakov/avatar.jpg', '1', '50.0');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('59', 'olrudenk', 'Oleksii', 'Rudenko', '1988-09-22', 'male', 'heterosexual', '$bio',
		                'images/profiles/olrudenk/avatar.jpg', '1', '40.1');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('60', 'yora', 'Yura', 'Tigibko', '1994-09-24', 'male', 'heterosexual','$bio',
		                'images/profiles/yora/avatar.jpg', '1', '13.0');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('61', 'bulb', 'Dmitrii', 'Bulbotenko', '1987-05-15', 'male', 'heterosexual', '$bio',
		                'images/profiles/bulb/avatar.jpg', '1', '41.2');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('62', 'ramzes', 'Roma', 'Tkachenko', '1987-05-16', 'male', 'heterosexual', '$bio',
		                'images/profiles/ramzes/avatar.jpg', '1', '17.7');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('63', 'baboshka', 'Dmitrii', 'Baboshkin', '1987-07-15', 'male', 'heterosexual', '$bio',
		                'images/profiles/baboshka/avatar.jpg', '1', '20.1');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('64', 'wrestler', 'Maksim', 'Goncharenko', '1992-05-15', 'male', 'heterosexual', '$bio',
		                'images/profiles/wrestler/avatar.jpg', '1', '9.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('65', 'rovnii', 'Yaroslav', 'Rovnii', '1989-12-15', 'male', 'heterosexual', '$bio',
		                'images/profiles/rovnii/avatar.jpg', '1', '7.4');   

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('66', 'kiparis', 'Maksim', 'Kalinskii', '1988-11-15', 'male', 'heterosexual', '$bio',
		                'images/profiles/kiparis/avatar.jpg', '1', '27.4'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('67', 'gulechko', 'Sergii', 'Gulechko', '1988-12-13', 'male', 'heterosexual', '$bio',
		                'images/profiles/gulechko/avatar.jpg', '1', '24.8');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('68', 'kaban', 'Ilya', 'Danyuk', '1994-09-17', 'male', 'heterosexual', '$bio', 
		        		'images/profiles/kaban/avatar.jpg', '1', '33.6');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('69', 'sidor', 'Oleksii', 'Sirdorenko', '1978-04-07', 'male', 'heterosexual', '$bio',
		                'images/profiles/sidor/avatar.jpg', '1', '44.1');
		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('70', 'razumnii', 'Andrii', 'Razumnii', '1977-12-07', 'male', 'heterosexual', '$bio',
		                'images/profiles/razumnii/avatar.jpg', '1', '78.5');    

/*women*/

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, rating)
		        VALUES ('71', 'cherry', 'Alexandra', 'Cherry', '1993-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/cherry/avatar.jpg', '1',
		                'images/profiles/cherry/photo1.jpg',
		                'images/profiles/cherry/photo2.jpg', '64.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, rating)
		        VALUES ('72', 'caroline', 'Carolina', 'Samsenko', '1994-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/caroline/avatar.jpg', '1',
		                'images/profiles/caroline/photo1.jpg', '34.4');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, rating)
		        VALUES ('73', 'kichi', 'Lilly', 'Ambrusko', '1988-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/kichi/avatar.jpg', '1',
		                'images/profiles/kichi/photo1.jpg', '44.4');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, photo3, photo4, rating)
		        VALUES ('74', 'pretty', 'Annet', 'Dobkina', '1978-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/pretty/avatar.jpg', '1',
		                'images/profiles/pretty/photo1.jpg',
		                'images/profiles/pretty/photo2.jpg',
		                'images/profiles/pretty/photo3.jpg',
		                'images/profiles/pretty/photo4.jpg', '25.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, rating)
		        VALUES ('75', 'tiny', 'Ella', 'Hmara', '1981-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/tiny/avatar.jpg', '1',
		                'images/profiles/tiny/photo1.jpg',
		                'images/profiles/tiny/photo2.jpg', '44.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('76', 'sunny', 'Kate', 'Johnson', '1984-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/sunny/avatar.jpg', '1', '13.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, rating)
		        VALUES ('77', 'leonna', 'Leona', 'Klimchak', '1975-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/leonna/avatar.jpg', '1',
		                'images/profiles/leonna/photo1.jpg',
		                'images/profiles/leonna/photo2.jpg', '44.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, rating)
		        VALUES ('78', 'chika', 'Lera', 'Illenko', '1998-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/chika/avatar.jpg', '1',
		                'images/profiles/chika/photo1.jpg',
		                'images/profiles/chika/photo2.jpg', '24.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, rating)
		        VALUES ('79', 'love', 'Kseniya', 'Adamenko', '1988-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/love/avatar.jpg', '1',
		                'images/profiles/love/photo1.jpg', '14.4');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('80', 'cloudy', 'Tanita', 'Kum', '1963-06-07', 'female', 'heterosexual', '$bio', 
		        		'images/profiles/cloudy/avatar.jpg', '1', '4.4');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('81', 'vika', 'Victoria', 'Bilenko', '1992-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/vika/avatar.jpg', '1', '31.9'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('82', 'samara', 'Samara', 'Morgan', '1995-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/samara/avatar.jpg', '1', '11.9');   

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('83', 'kitty', 'Kateryna', 'Rodchenko', '1994-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/kitty/avatar.jpg', '1', '24.9'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('84', 'anna', 'Anna', 'Tomchuk', '1992-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/anna/avatar.jpg', '1', '40.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('85', 'kissa', 'Valya', 'Shomko', '1988-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/kissa/avatar.jpg', '1', '10.2'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('86', 'catty', 'Nina', 'Alieva', '1986-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/catty/avatar.jpg', '1', '25.5'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('87', 'flower', 'Anabet', 'Kozachenko', '1989-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/flower/avatar.jpg', '1', '14.7'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('88', 'igirl', 'Alisa', 'Moloyovich', '1992-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/igirl/avatar.jpg', '1', '70.5');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('89', 'cute', 'Ira', 'Titarenko', '1997-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/cute/avatar.jpg', '1', '8.5');   

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('90', 'reddy', 'Valeria', 'Fuks', '1986-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/reddy/avatar.jpg', '1', '41.2');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('91', 'miumiu', 'Lida', 'Goloborodchenko', '1975-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/miumiu/avatar.jpg', '1', '45.2'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('92', 'murmur', 'Tanya', 'Morzeeva', '1999-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/murmur/avatar.jpg', '1', '78.7');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('93', 'hello', 'Olga', 'Kushmak', '1990-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/hello/avatar.jpg', '1', '27.9');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('94', 'yours', 'Kateryna', 'Tarashanskaya', '1988-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/yours/avatar.jpg', '1', '10.2');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('95', 'little', 'Dariia', 'Ivanova', '1986-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/little/avatar.jpg', '1', '50.2'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('96', 'potion', 'Anastasia', 'Ivleva', '1984-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/potion/avatar.jpg', '1', '31.8');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('97', 'bird', 'Vika', 'Fomenko', '1992-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/bird/avatar.jpg', '1', '64.6');   

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('98', 'confident', 'Victoria', 'Lotchuk', '1990-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/confident/avatar.jpg', '1', '17.5');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('99', 'beloved', 'Alexandra', 'Titakova', '1986-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/beloved/avatar.jpg', '1', '88.5'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('100', 'pet', 'Evgenia', 'Dobrovolskaya', '1994-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/pet/avatar.jpg', '1', '11.2');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('101', 'petty', 'Jane', 'Lavrinets', '1990-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/petty/avatar.jpg', '1', '15.2');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('102', 'sexxxy', 'Elvira', 'Sexxxy', '1984-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/sexxxy/avatar.jpg', '1', '98.7');     

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('103', 'curl', 'Alina', 'Grosu', '1991-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/curl/avatar.jpg', '1', '25.0');   

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('104', 'wave', 'Tamara', 'Gurieva', '1989-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/wave/avatar.jpg', '1', '60.2');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('105', 'morning', 'Marina', 'Nakonechnaya', '1988-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/morning/avatar.jpg', '1', '20.5');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('106', 'evening', 'Kira', 'Ninova', '1997-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/evening/avatar.jpg', '1', '81.8'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('107', 'sunset', 'Zara', 'Fomenchenko', '1984-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/sunset/avatar.jpg', '1', '14.5');   

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('108', 'sun', 'Sofia', 'Dron', '1993-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/sun/avatar.jpg', '1', '77.5');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('109', 'sea', 'Sasha', 'Ivanko', '1979-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/sea/avatar.jpg', '1', '18.5');   

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('110', 'wild', 'Elena', 'Kiss', '1976-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/wild/avatar.jpg', '1', '31.1');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('111', 'wildy', 'Fiona', 'Lavrok', '1985-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/wildy/avatar.jpg', '1', '25.2');   

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('112', 'tiger', 'Vera', 'Voichuk', '1987-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/tiger/avatar.jpg', '1', '18.7'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('113', 'puma', 'Veronika', 'Mumko', '1983-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/puma/avatar.jpg', '1', '35.0');   

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('114', 'clever', 'Tatyana', 'Golovko', '1974-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/clever/avatar.jpg', '1', '16.2');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('115', 'krispi', 'Margo', 'Nakos', '1968-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/krispi/avatar.jpg', '1', '7.5');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('116', 'kuki', 'Anna', 'Kovaleva', '1998-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/kuki/avatar.jpg', '1', '89.8');   

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('117', 'shevy', 'Gina', 'Soloveeva', '1993-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/shevy/avatar.jpg', '1', '34.5');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('118', 'compari', 'Sofia', 'Burbak', '1991-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/compari/avatar.jpg', '1', '17.5');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('119', 'mara', 'Marina', 'Ivashevich', '1988-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/mara/avatar.jpg', '1', '38.5');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('120', 'martini', 'Galya', 'Onoprienko', '1998-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/martini/avatar.jpg', '1', '11.1'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('121', 'tiva', 'Malvina', 'Yakimchuk', '1989-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/tiva/avatar.jpg', '1', '45.2');   

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('122', 'jodi', 'Liza', 'Loik', '2000-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/jodi/avatar.jpg', '1', '78.1'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('123', 'matilda', 'Matilda', 'Vovko', '1992-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/matilda/avatar.jpg', '1', '15.0');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('124', 'kilimondshara', 'Liza', 'Boyko', '1979-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/kilimondshara/avatar.jpg', '1', '26.2');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('125', 'bestgirlinyourlife', 'Anna', 'Radchenko', '1999-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/bestgirlinyourlife/avatar.jpg', '1', '77.5');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('126', 'cabanga', 'Evelena', 'Hoienko', '1998-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/cabanga/avatar.jpg', '1', '19.8');   

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('127', 'shmoka', 'Yana', 'Solomko', '1992-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/shmoka/avatar.jpg', '1', '24.5'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('128', 'casatca', 'Laura', 'Bonitta', '1993-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/casatca/avatar.jpg', '1', '37.5');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('129', 'barcelona', 'Hanna', 'Africa', '1986-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/barcelona/avatar.jpg', '1', '58.9'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('130', 'cosmo', 'Jannet', 'Kovalchuk', '1992-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/cosmo/avatar.jpg', '1', '71.1');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('131', 'teva', 'Angelina', 'Yakumiv', '1986-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/teva/avatar.jpg', '1', '15.2');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('132', 'monka', 'Inna', 'Martinyuk', '1987-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/monka/avatar.jpg', '1', '48.1');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('133', 'viva', 'Inga', 'Kumko', '1988-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/viva/avatar.jpg', '1', '65.0');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('134', 'cuttiest', 'Izabella', 'Dmutriv', '1985-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/cuttiest/avatar.jpg', '1', '26.1');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('135', 'light', 'Rita', 'Petrova', '1997-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/light/avatar.jpg', '1', '17.5');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('136', 'cuba', 'Elza', 'Buzina', '1994-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/cuba/avatar.jpg', '1', '39.2');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('137', 'kimi', 'Yanita', 'Solko', '1990-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/kimi/avatar.jpg', '1', '34.5');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('138', 'enrose', 'Roza', 'Shneimann', '1991-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/enrose/avatar.jpg', '1', '87.5');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('139', 'tictac', 'Anna', 'Greckaya', '1986-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/tictac/avatar.jpg', '1', '18.9');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('140', 'miracle', 'Tata', 'Yurova', '1987-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/miracle/avatar.jpg', '1', '21.1');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('141', 'fabious', 'Simona', 'Bushanina', '1990-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/fabious/avatar.jpg', '1', '19.2'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('142', 'beautiful', 'Yana', 'Sokolova', '1982-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/beautiful/avatar.jpg', '1', '84.5'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('143', 'fancy', 'Vera', 'Logdanidi', '1986-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/fancy/avatar.jpg', '1', '17.5');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('144', 'cozy', 'Monika', 'Belkova', '1970-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/cozy/avatar.jpg', '1', '99.2');   

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('145', 'mummy', 'Snezhana', 'Didenko', '1992-06-07', 'female', 'heterosexual', '$bio',
		                'images/profiles/mummy/avatar.jpg', '1', '31.1');

/*homo men*/

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('146', 'shiva', 'Edgar', 'Zaharov', '1993-06-07', 'male', 'homosexual', '$bio',
		                'images/profiles/shiva/avatar.jpg', '1', '19.2');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('147', 'como', 'Sasha', 'Kupchenko', '1991-06-07', 'male', 'homosexual', '$bio',
		                'images/profiles/como/avatar.jpg', '1', '16.5');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('148', 'rapirus', 'Ehor', 'Shtutmann', '1994-06-07', 'male', 'homosexual', '$bio',
		                'images/profiles/rapirus/avatar.jpg', '1', '17.7');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('149', 'komus', 'Lesha', 'Komarov', '1992-06-07', 'male', 'homosexual', '$bio',
		                'images/profiles/komus/avatar.jpg', '1', '28.9');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('150', 'slaver', 'Serg', 'Yurov', '1994-06-07', 'male', 'homosexual', '$bio',
		                'images/profiles/slaver/avatar.jpg', '1', '21.1');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('151', 'winner', 'Oleh', 'Kurtov', '1990-06-07', 'male', 'homosexual', '$bio',
		                'images/profiles/winner/avatar.jpg', '1', '19.9'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('152', 'sweetty', 'Sweet', 'Candy', '1994-06-07', 'male', 'homosexual', '$bio',
		                'images/profiles/sweetty/avatar.jpg', '1', '24.5'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('153', 'lover', 'Nikolya', 'Loshanskii', '1997-06-07', 'male', 'homosexual', '$bio',
		                'images/profiles/lover/avatar.jpg', '1', '17.5');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('154', 'carlos', 'Carlos', 'Robeev', '1986-06-07', 'male', 'homosexual', '$bio',
		                'images/profiles/carlos/avatar.jpg', '1', '24.2');   

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('155', 'shibu', 'Snezh', 'Didov', '1993-06-07', 'male', 'homosexual', '$bio',
		                'images/profiles/shibu/avatar.jpg', '1', '31.1');

/*homo women*/

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('156', 'marta', 'Toto', 'Iiova', '1971-06-07', 'female', 'homosexual', '$bio',
		                'images/profiles/marta/avatar.jpg', '1', '22.1');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('157', 'josse', 'Yanina', 'Sokolovko', '1988-06-07', 'female', 'homosexual', '$bio',
		                'images/profiles/josse/avatar.jpg', '1', '14.5');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('158', 'liver', 'Linda', 'Kaufmann', '1991-06-07', 'female', 'homosexual', '$bio',
		                'images/profiles/liver/avatar.jpg', '1', '27.5');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('159', 'ammuse', 'The', 'Greatest', '1988-06-07', 'female', 'homosexual', '$bio',
		                'images/profiles/ammuse/avatar.jpg', '1', '18.9');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('160', 'constant', 'Olivia', 'Kuznecova', '1991-06-07', 'female', 'homosexual', '$bio',
		                'images/profiles/constant/avatar.jpg', '1', '23.2');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('161', 'raptor', 'Juretta', 'Raptor', '1992-06-07', 'female', 'homosexual', '$bio',
		                'images/profiles/raptor/avatar.jpg', '1', '29.2'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('162', 'lillo', 'Anastasia', 'Sopko', '1991-06-07', 'female', 'homosexual', '$bio',
		                'images/profiles/lillo/avatar.jpg', '1', '14.5'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('163', 'quma', 'Vera', 'Shneev', '1986-06-07', 'female', 'homosexual', '$bio',
		                'images/profiles/quma/avatar.jpg', '1', '27.5');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('164', 'shiny', 'Tatyana', 'Baranina', '2000-09-17', 'female', 'homosexual', '$bio',
		                'images/profiles/shiny/avatar.jpg', '1', '10.2');   

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('165', 'bubble', 'Olha', 'Kupova', '1973-02-13', 'female', 'homosexual', '$bio',
		                'images/profiles/bubble/avatar.jpg', '1', '11.1');
/*bi men*/

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('166', 'corma', 'Andrew', 'Petrov', '1993-10-07', 'male', 'bisexual', '$bio',
		                'images/profiles/corma/avatar.jpg', '1', '22.1');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('167', 'parabelum', 'Sergeii', 'Rudenko', '1991-06-07', 'male', 'bisexual', '$bio',
		                'images/profiles/parabelum/avatar.jpg', '1', '14.5');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('168', 'kuzha', 'Ivan', 'Kuzha', '1991-06-07', 'male', 'bisexual', '$bio',
		                'images/profiles/kuzha/avatar.jpg', '1', '27.5');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('169', 'snowden', 'Snow', 'Man', '1993-06-07', 'male', 'bisexual', '$bio',
		                'images/profiles/snowden/avatar.jpg', '1', '18.9');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('170', 'everest', 'Ivor', 'Kuznecov', '1988-06-07', 'male', 'bisexual', '$bio',
		                'images/profiles/everest/avatar.jpg', '1', '23.2');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('171', 'rapt', 'Oleksii', 'Jurko', '1992-06-07', 'male', 'bisexual', '$bio',
		                'images/profiles/rapt/avatar.jpg', '1', '29.2'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('172', 'hovard', 'Hovard', 'Shusev', '1986-06-07', 'male', 'bisexual', '$bio',
		                'images/profiles/hovard/avatar.jpg', '1', '14.5'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('173', 'harry', 'Harry', 'Prince', '1998-06-07', 'male', 'bisexual', '$bio',
		                'images/profiles/harry/avatar.jpg', '1', '27.5');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('174', 'joom', 'Vitalii', 'Baranin', '1986-06-07', 'male', 'bisexual', '$bio',
		                'images/profiles/joom/avatar.jpg', '1', '10.2');   

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('175', 'bubba', 'Yura', 'Konopalcev', '1985-06-07', 'male', 'bisexual', '$bio',
		                'images/profiles/bubba/avatar.jpg', '1', '11.1');
/*bi women*/

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('176', 'bibba', 'Julia', 'Presnicka', '1988-06-07', 'female', 'bisexual', '$bio',
		                'images/profiles/bibba/avatar.jpg', '1', '22.1');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('177', 'jorra', 'Yana', 'Rudenko', '1998-06-07', 'female', 'bisexual', '$bio',
		                'images/profiles/jorra/avatar.jpg', '1', '14.5');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('178', 'komo', 'Anastasia', 'Ludenko', '1993-06-07', 'female', 'bisexual', '$bio',
		                'images/profiles/komo/avatar.jpg', '1', '27.5');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('179', 'lerro', 'Lera', 'Gosmann', '1987-06-07', 'female', 'bisexual', '$bio',
		                'images/profiles/lerro/avatar.jpg', '1', '18.9');  

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('180', 'petra', 'Petra', 'Livadia', '1991-06-07', 'female', 'bisexual', '$bio',
		                'images/profiles/petra/avatar.jpg', '1', '23.2');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('181', 'rapira', 'Zarina', 'Star', '1989-06-07', 'female', 'bisexual', '$bio',
		                'images/profiles/rapira/avatar.jpg', '1', '29.2'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('182', 'poppy', 'Dariia', 'Jurkevich', '1987-06-07', 'female', 'bisexual', '$bio',
		                'images/profiles/poppy/avatar.jpg', '1', '14.5'); 

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('183', 'titta', 'Tatyana', 'Shom', '1996-06-07', 'female', 'bisexual', '$bio',
		                'images/profiles/titta/avatar.jpg', '1', '27.5');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('184', 'lossy', 'Lara', 'Ivankov', '1997-06-07', 'female', 'bisexual', '$bio',
		                'images/profiles/lossy/avatar.jpg', '1', '10.2');   

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('185', 'himma', 'Ira', 'Korneev', '1992-06-07', 'female', 'bisexual', '$bio',
		                'images/profiles/himma/avatar.jpg', '1', '11.1');"
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
        		VALUES ('71', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
                		'50.51833843', '30.49633026', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('72', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.51506388', '30.43796539', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('73', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.4980326', '30.43144226', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('74', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46701114', '30.4668045', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('75', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.47181862', '30.47298431', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('76', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.44930669', '30.51074982', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('77', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.5074224', '30.49942017', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('78', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.49410143', '30.51315308', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('79', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46722968', '30.41255951', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('80', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.45214859', '30.4486084', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('81', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.52292241', '30.4561615', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('82', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.52183102', '30.51761627', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('83', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.52183102', '30.48019409', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('84', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.48645655', '30.50045013', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('85', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.45171139', '30.42869568', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('86', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.40195299', '30.47607422', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('87', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.41333095', '30.63674927', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('88', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.43520396', '30.41976929', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('89', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.43257973', '30.38406372', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('90', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.44045198', '30.53100586', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('91', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.42651065', '30.59555054', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('92', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.42826037', '30.61443329', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('93', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.41480769', '30.65580368', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('94', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.45559144', '30.61889648', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('95', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.45362413', '30.6810379', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('96', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.40977563', '30.62473297', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('97', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.40102294', '30.62747955', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('98', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.39369132', '30.64653397', '1');    
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
        		VALUES ('99', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
                		'50.38679637', '30.61477661', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('100', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.42618257', '30.59675217', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('101', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.37059478', '30.45444489', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('102', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.39040814', '30.44345856', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('103', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.38592075', '30.44260025', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('104', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.43165028', '30.4343605', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('105', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.4226829', '30.37479401', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('106', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.45296834', '30.38560867', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('107', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.45253114', '30.42766571', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('108', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46651944', '30.34578323', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('109', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.50900538', '30.43453217', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('110', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.41633909', '30.40174484', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('111', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.4771172', '30.44019699', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('112', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.51326279', '30.42886734', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('113', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.4679399', '30.48740387', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('114', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.44487954', '30.52911758', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('115', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.43132224', '30.54130554', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('116', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46498967', '30.47401428', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('117', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46717504', '30.4810524', '1');		
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('118', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46630091', '30.46062469', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('119', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46367841', '30.47040939', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('120', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46356913', '30.47864914', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('121', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.45668435', '30.44448853', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('122', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.47897429', '30.44139862', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('123', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.52177645', '30.461483', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('124', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.51992104', '30.4668045', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('125', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.50682194', '30.46388626', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('126', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.49000611', '30.46440125', '1');       
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('127', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.47088994', '30.40826797', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('128', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46826769', '30.41273117', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('129', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46848622', '30.42131424', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('130', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46029079', '30.37307739', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('131', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.4588701', '30.36724091', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('132', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.45198464', '30.38303375', '1');	
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('133', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.45799582', '30.36226273', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('134', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.45843296', '30.36741257', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('135', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.45362413', '30.37015915', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('136', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.41469831', '30.60670853', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('137', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.40430539', '30.62868118', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('138', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.39314414', '30.64035416', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('139', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.39347245', '30.64979553', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('140', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.39478566', '30.63262939', '1');  
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('141', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.45876082', '30.58988571', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('142', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.44859619', '30.52362442', '1');  
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('143', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.44214653', '30.53255081', '1'); 	
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('144', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.44990788', '30.49804688', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('145', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46630091', '30.47212601', '1');

/*homo men*/

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
        		VALUES ('146', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
                		'50.39527811', '30.64670563', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('147', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.38608493', '30.69957733', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('148', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.36528426', '30.60722351', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('149', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.43596933', '30.63537598', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('150', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.44034265', '30.60001373', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('151', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.48820406', '30.60516357', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('152', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.57702335', '30.4788208', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('153', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.50371037', '30.46199799', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('154', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46657408', '30.4668045', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('155', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.42831505', '30.47813416', '1');

/*homo women*/

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('156', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.40206241', '30.48500061', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('157', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.44733912', '30.51006317', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('158', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.4390307', '30.41770935', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('159', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.4919173', '30.46474457', '1');      
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('160', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.47160011', '30.46749115', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('161', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.44733912', '30.52276611', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('162', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.43072081', '30.47676086', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('163', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.42153451', '30.48843384', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('164', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.42394062', '30.44208527', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('165', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.47465917', '30.41152954', '1');

/*bi men*/

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('166', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.43334514', '30.42011261', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('167', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.432033', '30.46268463', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('168', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.39702899', '30.5241394', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('169', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.4689779', '30.41015625', '1');      
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('170', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46395159', '30.4788208', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('171', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.43247038', '30.54096222', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('172', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.40381304', '30.41564941', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('173', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46089184', '30.36792755', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('174', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.43968668', '30.5979538', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('175', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.41190885', '30.61855316', '1');

/*bi women*/

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('176', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.48121363', '30.60035706', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('177', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46569993', '30.63228607', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('178', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.43728137', '30.62301636', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('179', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.41584686', '30.63743591', '1');      
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('180', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.42000329', '30.53203583', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('181', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.40884573', '30.62335968', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('182', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.39396491', '30.63400269', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('183', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.43159561', '30.47779083', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('184', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.40600123', '30.48568726', '1');
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('185', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
		                '50.46329594', '30.46714783', '1');"
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
		INSERT INTO interests(user_id, tag) VALUES ('80', 'pub');
		INSERT INTO interests(user_id, tag) VALUES ('81', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('81', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('81', 'crossfit');
		INSERT INTO interests(user_id, tag) VALUES ('81', 'photo');
		INSERT INTO interests(user_id, tag) VALUES ('81', 'nature');
		INSERT INTO interests(user_id, tag) VALUES ('82', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('82', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('82', 'backpacking');
		INSERT INTO interests(user_id, tag) VALUES ('82', 'singing');
		INSERT INTO interests(user_id, tag) VALUES ('82', 'politics');
		INSERT INTO interests(user_id, tag) VALUES ('83', 'beer');
		INSERT INTO interests(user_id, tag) VALUES ('83', 'pub');
		INSERT INTO interests(user_id, tag) VALUES ('83', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('83', 'vodka');
		INSERT INTO interests(user_id, tag) VALUES ('83', 'fun');
		INSERT INTO interests(user_id, tag) VALUES ('83', 'fishing');
		INSERT INTO interests(user_id, tag) VALUES ('84', 'painting');
		INSERT INTO interests(user_id, tag) VALUES ('84', 'architecture');
		INSERT INTO interests(user_id, tag) VALUES ('84', 'literature');
		INSERT INTO interests(user_id, tag) VALUES ('84', 'poems');
		INSERT INTO interests(user_id, tag) VALUES ('84', 'theatre');
		INSERT INTO interests(user_id, tag) VALUES ('85', 'parties');
		INSERT INTO interests(user_id, tag) VALUES ('85', 'techno');
		INSERT INTO interests(user_id, tag) VALUES ('85', 'drugs');
		INSERT INTO interests(user_id, tag) VALUES ('85', 'rave');
		INSERT INTO interests(user_id, tag) VALUES ('85', 'music');
		INSERT INTO interests(user_id, tag) VALUES ('86', 'art');
		INSERT INTO interests(user_id, tag) VALUES ('86', 'techno');
		INSERT INTO interests(user_id, tag) VALUES ('86', 'drugs');
		INSERT INTO interests(user_id, tag) VALUES ('86', 'rave');
		INSERT INTO interests(user_id, tag) VALUES ('86', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('87', 'basketball');
		INSERT INTO interests(user_id, tag) VALUES ('87', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('87', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('87', 'gym');
		INSERT INTO interests(user_id, tag) VALUES ('87', 'finance');
		INSERT INTO interests(user_id, tag) VALUES ('88', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('88', 'pizza');
		INSERT INTO interests(user_id, tag) VALUES ('88', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('88', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('88', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('89', 'muscles');
		INSERT INTO interests(user_id, tag) VALUES ('89', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('89', 'crossfit');
		INSERT INTO interests(user_id, tag) VALUES ('89', 'gym');
		INSERT INTO interests(user_id, tag) VALUES ('89', 'ufc');
		INSERT INTO interests(user_id, tag) VALUES ('90', 'food');
		INSERT INTO interests(user_id, tag) VALUES ('90', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('90', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('90', 'gym');
		INSERT INTO interests(user_id, tag) VALUES ('90', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('91', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('91', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('91', 'crossfit');
		INSERT INTO interests(user_id, tag) VALUES ('92', 'art');
		INSERT INTO interests(user_id, tag) VALUES ('92', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('92', 'backpacking');
		INSERT INTO interests(user_id, tag) VALUES ('93', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('93', 'beer');
		INSERT INTO interests(user_id, tag) VALUES ('93', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('94', 'painting');
		INSERT INTO interests(user_id, tag) VALUES ('94', 'architecture');
		INSERT INTO interests(user_id, tag) VALUES ('94', 'literature');
		INSERT INTO interests(user_id, tag) VALUES ('95', 'cooking');
		INSERT INTO interests(user_id, tag) VALUES ('95', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('95', 'children');
		INSERT INTO interests(user_id, tag) VALUES ('96', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('96', 'reading');
		INSERT INTO interests(user_id, tag) VALUES ('96', 'theatre');
		INSERT INTO interests(user_id, tag) VALUES ('97', 'basketball');
		INSERT INTO interests(user_id, tag) VALUES ('97', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('97', 'cooking');
		INSERT INTO interests(user_id, tag) VALUES ('98', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('98', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('98', 'gym');
		INSERT INTO interests(user_id, tag) VALUES ('99', 'fun');
		INSERT INTO interests(user_id, tag) VALUES ('99', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('99', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('100', 'reading');
		INSERT INTO interests(user_id, tag) VALUES ('100', 'theatre');
		INSERT INTO interests(user_id, tag) VALUES ('100', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('101', 'parties');
		INSERT INTO interests(user_id, tag) VALUES ('101', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('101', 'rave');
		INSERT INTO interests(user_id, tag) VALUES ('102', 'art');
		INSERT INTO interests(user_id, tag) VALUES ('102', 'economics');
		INSERT INTO interests(user_id, tag) VALUES ('102', 'talking');
		INSERT INTO interests(user_id, tag) VALUES ('103', 'fishing');
		INSERT INTO interests(user_id, tag) VALUES ('103', 'sea');
		INSERT INTO interests(user_id, tag) VALUES ('103', 'cooking');
		INSERT INTO interests(user_id, tag) VALUES ('104', 'basketball');
		INSERT INTO interests(user_id, tag) VALUES ('104', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('104', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('105', 'traveling');
		INSERT INTO interests(user_id, tag) VALUES ('105', 'hitchhicking');
		INSERT INTO interests(user_id, tag) VALUES ('105', 'tourism');
		INSERT INTO interests(user_id, tag) VALUES ('106', 'architecture');
		INSERT INTO interests(user_id, tag) VALUES ('106', 'theatre');
		INSERT INTO interests(user_id, tag) VALUES ('106', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('107', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('107', 'reading');
		INSERT INTO interests(user_id, tag) VALUES ('107', 'theatre');
		INSERT INTO interests(user_id, tag) VALUES ('108', 'muscles');
		INSERT INTO interests(user_id, tag) VALUES ('108', 'music');
		INSERT INTO interests(user_id, tag) VALUES ('108', 'gym');
		INSERT INTO interests(user_id, tag) VALUES ('109', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('109', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('109', 'muscles');
		INSERT INTO interests(user_id, tag) VALUES ('110', 'poems');
		INSERT INTO interests(user_id, tag) VALUES ('110', 'theatre');
		INSERT INTO interests(user_id, tag) VALUES ('110', 'art');
		INSERT INTO interests(user_id, tag) VALUES ('111', 'parties');
		INSERT INTO interests(user_id, tag) VALUES ('111', 'active');
		INSERT INTO interests(user_id, tag) VALUES ('111', 'tourism');
		INSERT INTO interests(user_id, tag) VALUES ('112', 'politics');
		INSERT INTO interests(user_id, tag) VALUES ('112', 'economics');
		INSERT INTO interests(user_id, tag) VALUES ('112', 'theatre');
		INSERT INTO interests(user_id, tag) VALUES ('113', 'painting');
		INSERT INTO interests(user_id, tag) VALUES ('113', 'books');
		INSERT INTO interests(user_id, tag) VALUES ('113', 'reading');
		INSERT INTO interests(user_id, tag) VALUES ('114', 'hockey');
		INSERT INTO interests(user_id, tag) VALUES ('114', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('114', 'bodybuilding');
		INSERT INTO interests(user_id, tag) VALUES ('115', 'tourism');
		INSERT INTO interests(user_id, tag) VALUES ('115', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('115', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('116', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('116', 'theatre');
		INSERT INTO interests(user_id, tag) VALUES ('116', 'bodybuilding');
		INSERT INTO interests(user_id, tag) VALUES ('117', 'fishing');
		INSERT INTO interests(user_id, tag) VALUES ('117', 'voleyball');
		INSERT INTO interests(user_id, tag) VALUES ('117', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('118', 'camping');
		INSERT INTO interests(user_id, tag) VALUES ('118', 'backpacking');
		INSERT INTO interests(user_id, tag) VALUES ('118', 'mountains');
		INSERT INTO interests(user_id, tag) VALUES ('119', 'techno');
		INSERT INTO interests(user_id, tag) VALUES ('119', 'parties');
		INSERT INTO interests(user_id, tag) VALUES ('119', 'rave');
		INSERT INTO interests(user_id, tag) VALUES ('120', 'painting');
		INSERT INTO interests(user_id, tag) VALUES ('120', 'architecture');
		INSERT INTO interests(user_id, tag) VALUES ('120', 'art');
		INSERT INTO interests(user_id, tag) VALUES ('121', 'photo');
		INSERT INTO interests(user_id, tag) VALUES ('121', 'programming');
		INSERT INTO interests(user_id, tag) VALUES ('121', 'computers');
		INSERT INTO interests(user_id, tag) VALUES ('122', 'politics');
		INSERT INTO interests(user_id, tag) VALUES ('122', 'economics');
		INSERT INTO interests(user_id, tag) VALUES ('122', 'reading');
		INSERT INTO interests(user_id, tag) VALUES ('123', 'poems');
		INSERT INTO interests(user_id, tag) VALUES ('123', 'books');
		INSERT INTO interests(user_id, tag) VALUES ('123', 'reading');
		INSERT INTO interests(user_id, tag) VALUES ('124', 'hockey');
		INSERT INTO interests(user_id, tag) VALUES ('124', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('124', 'voleyball');
		INSERT INTO interests(user_id, tag) VALUES ('125', 'tourism');
		INSERT INTO interests(user_id, tag) VALUES ('125', 'hitchhicking');
		INSERT INTO interests(user_id, tag) VALUES ('125', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('126', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('126', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('126', 'bodybuilding');
		INSERT INTO interests(user_id, tag) VALUES ('127', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('127', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('127', 'freelove');
		INSERT INTO interests(user_id, tag) VALUES ('128', 'computers');
		INSERT INTO interests(user_id, tag) VALUES ('128', 'tourism');
		INSERT INTO interests(user_id, tag) VALUES ('128', 'politics');
		INSERT INTO interests(user_id, tag) VALUES ('129', 'active');
		INSERT INTO interests(user_id, tag) VALUES ('129', 'books');
		INSERT INTO interests(user_id, tag) VALUES ('129', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('130', 'painting');
		INSERT INTO interests(user_id, tag) VALUES ('130', 'architecture');
		INSERT INTO interests(user_id, tag) VALUES ('130', 'poems');
		INSERT INTO interests(user_id, tag) VALUES ('131', 'pub');
		INSERT INTO interests(user_id, tag) VALUES ('131', 'beer');
		INSERT INTO interests(user_id, tag) VALUES ('131', 'computers');
		INSERT INTO interests(user_id, tag) VALUES ('132', 'politics');
		INSERT INTO interests(user_id, tag) VALUES ('132', 'economics');
		INSERT INTO interests(user_id, tag) VALUES ('132', 'theatre');
		INSERT INTO interests(user_id, tag) VALUES ('133', 'ufc');
		INSERT INTO interests(user_id, tag) VALUES ('133', 'books');
		INSERT INTO interests(user_id, tag) VALUES ('133', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('134', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('134', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('134', 'voleyball');
		INSERT INTO interests(user_id, tag) VALUES ('135', 'pizza');
		INSERT INTO interests(user_id, tag) VALUES ('135', 'food');
		INSERT INTO interests(user_id, tag) VALUES ('135', 'children');
		INSERT INTO interests(user_id, tag) VALUES ('136', 'theatre');
		INSERT INTO interests(user_id, tag) VALUES ('136', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('136', 'gym');
		INSERT INTO interests(user_id, tag) VALUES ('137', 'crossfit');
		INSERT INTO interests(user_id, tag) VALUES ('137', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('137', 'freelove');
		INSERT INTO interests(user_id, tag) VALUES ('138', 'programming');
		INSERT INTO interests(user_id, tag) VALUES ('138', 'freelove');
		INSERT INTO interests(user_id, tag) VALUES ('138', 'sea');
		INSERT INTO interests(user_id, tag) VALUES ('139', 'beer');
		INSERT INTO interests(user_id, tag) VALUES ('139', 'nature');
		INSERT INTO interests(user_id, tag) VALUES ('139', 'singing');
		INSERT INTO interests(user_id, tag) VALUES ('140', 'flowers');
		INSERT INTO interests(user_id, tag) VALUES ('140', 'nature');
		INSERT INTO interests(user_id, tag) VALUES ('140', 'poems');
		INSERT INTO interests(user_id, tag) VALUES ('141', 'finance');
		INSERT INTO interests(user_id, tag) VALUES ('141', 'children');
		INSERT INTO interests(user_id, tag) VALUES ('141', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('142', 'food');
		INSERT INTO interests(user_id, tag) VALUES ('142', 'cooking');
		INSERT INTO interests(user_id, tag) VALUES ('142', 'freelove');
		INSERT INTO interests(user_id, tag) VALUES ('143', 'ufc');
		INSERT INTO interests(user_id, tag) VALUES ('143', 'muscles');
		INSERT INTO interests(user_id, tag) VALUES ('143', 'gym');
		INSERT INTO interests(user_id, tag) VALUES ('144', 'literature');
		INSERT INTO interests(user_id, tag) VALUES ('144', 'books');
		INSERT INTO interests(user_id, tag) VALUES ('144', 'reading');
		INSERT INTO interests(user_id, tag) VALUES ('145', 'parties');
		INSERT INTO interests(user_id, tag) VALUES ('145', 'rave');
		INSERT INTO interests(user_id, tag) VALUES ('145', 'techno');
		INSERT INTO interests(user_id, tag) VALUES ('146', 'tourism');
		INSERT INTO interests(user_id, tag) VALUES ('146', 'hitchhicking');
		INSERT INTO interests(user_id, tag) VALUES ('146', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('147', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('147', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('147', 'bodybuilding');
		INSERT INTO interests(user_id, tag) VALUES ('148', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('148', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('148', 'freelove');
		INSERT INTO interests(user_id, tag) VALUES ('149', 'computers');
		INSERT INTO interests(user_id, tag) VALUES ('149', 'tourism');
		INSERT INTO interests(user_id, tag) VALUES ('149', 'politics');
		INSERT INTO interests(user_id, tag) VALUES ('150', 'active');
		INSERT INTO interests(user_id, tag) VALUES ('150', 'books');
		INSERT INTO interests(user_id, tag) VALUES ('150', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('151', 'painting');
		INSERT INTO interests(user_id, tag) VALUES ('151', 'architecture');
		INSERT INTO interests(user_id, tag) VALUES ('151', 'poems');
		INSERT INTO interests(user_id, tag) VALUES ('152', 'pub');
		INSERT INTO interests(user_id, tag) VALUES ('152', 'beer');
		INSERT INTO interests(user_id, tag) VALUES ('152', 'computers');
		INSERT INTO interests(user_id, tag) VALUES ('153', 'politics');
		INSERT INTO interests(user_id, tag) VALUES ('153', 'economics');
		INSERT INTO interests(user_id, tag) VALUES ('153', 'theatre');
		INSERT INTO interests(user_id, tag) VALUES ('154', 'ufc');
		INSERT INTO interests(user_id, tag) VALUES ('154', 'books');
		INSERT INTO interests(user_id, tag) VALUES ('154', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('155', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('155', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('155', 'voleyball');
		INSERT INTO interests(user_id, tag) VALUES ('156', 'pizza');
		INSERT INTO interests(user_id, tag) VALUES ('156', 'food');
		INSERT INTO interests(user_id, tag) VALUES ('156', 'children');
		INSERT INTO interests(user_id, tag) VALUES ('157', 'theatre');
		INSERT INTO interests(user_id, tag) VALUES ('157', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('157', 'gym');
		INSERT INTO interests(user_id, tag) VALUES ('158', 'crossfit');
		INSERT INTO interests(user_id, tag) VALUES ('158', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('158', 'freelove');
		INSERT INTO interests(user_id, tag) VALUES ('159', 'programming');
		INSERT INTO interests(user_id, tag) VALUES ('159', 'freelove');
		INSERT INTO interests(user_id, tag) VALUES ('159', 'sea');
		INSERT INTO interests(user_id, tag) VALUES ('160', 'beer');
		INSERT INTO interests(user_id, tag) VALUES ('160', 'nature');
		INSERT INTO interests(user_id, tag) VALUES ('160', 'singing');
		INSERT INTO interests(user_id, tag) VALUES ('161', 'flowers');
		INSERT INTO interests(user_id, tag) VALUES ('161', 'nature');
		INSERT INTO interests(user_id, tag) VALUES ('161', 'poems');
		INSERT INTO interests(user_id, tag) VALUES ('162', 'finance');
		INSERT INTO interests(user_id, tag) VALUES ('162', 'children');
		INSERT INTO interests(user_id, tag) VALUES ('162', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('163', 'food');
		INSERT INTO interests(user_id, tag) VALUES ('163', 'cooking');
		INSERT INTO interests(user_id, tag) VALUES ('163', 'freelove');
		INSERT INTO interests(user_id, tag) VALUES ('164', 'ufc');
		INSERT INTO interests(user_id, tag) VALUES ('164', 'muscles');
		INSERT INTO interests(user_id, tag) VALUES ('164', 'gym');
		INSERT INTO interests(user_id, tag) VALUES ('164', 'literature');
		INSERT INTO interests(user_id, tag) VALUES ('164', 'books');
		INSERT INTO interests(user_id, tag) VALUES ('164', 'reading');
		INSERT INTO interests(user_id, tag) VALUES ('165', 'parties');
		INSERT INTO interests(user_id, tag) VALUES ('165', 'rave');
		INSERT INTO interests(user_id, tag) VALUES ('165', 'techno');
		INSERT INTO interests(user_id, tag) VALUES ('166', 'food');
		INSERT INTO interests(user_id, tag) VALUES ('166', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('166', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('167', 'gym');
		INSERT INTO interests(user_id, tag) VALUES ('167', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('167', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('168', 'pizza');
		INSERT INTO interests(user_id, tag) VALUES ('168', 'finance');
		INSERT INTO interests(user_id, tag) VALUES ('168', 'poems');
		INSERT INTO interests(user_id, tag) VALUES ('169', 'painting');
		INSERT INTO interests(user_id, tag) VALUES ('169', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('169', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('170', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('170', 'literature');
		INSERT INTO interests(user_id, tag) VALUES ('170', 'techno');
		INSERT INTO interests(user_id, tag) VALUES ('171', 'parties');
		INSERT INTO interests(user_id, tag) VALUES ('171', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('171', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('172', 'pizza');
		INSERT INTO interests(user_id, tag) VALUES ('172', 'gym');
		INSERT INTO interests(user_id, tag) VALUES ('172', 'crossfit');
		INSERT INTO interests(user_id, tag) VALUES ('173', 'basketball');
		INSERT INTO interests(user_id, tag) VALUES ('173', 'backpacking');
		INSERT INTO interests(user_id, tag) VALUES ('173', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('174', 'singing');
		INSERT INTO interests(user_id, tag) VALUES ('174', 'theatre');
		INSERT INTO interests(user_id, tag) VALUES ('174', 'poems');
		INSERT INTO interests(user_id, tag) VALUES ('175', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('175', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('175', 'fun');
		INSERT INTO interests(user_id, tag) VALUES ('176', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('176', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('176', 'poems');
		INSERT INTO interests(user_id, tag) VALUES ('177', 'painting');
		INSERT INTO interests(user_id, tag) VALUES ('177', 'books');
		INSERT INTO interests(user_id, tag) VALUES ('177', 'reading');
		INSERT INTO interests(user_id, tag) VALUES ('178', 'hockey');
		INSERT INTO interests(user_id, tag) VALUES ('178', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('178', 'bodybuilding');
		INSERT INTO interests(user_id, tag) VALUES ('179', 'tourism');
		INSERT INTO interests(user_id, tag) VALUES ('179', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('179', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('180', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('180', 'theatre');
		INSERT INTO interests(user_id, tag) VALUES ('180', 'bodybuilding');
		INSERT INTO interests(user_id, tag) VALUES ('181', 'fishing');
		INSERT INTO interests(user_id, tag) VALUES ('181', 'voleyball');
		INSERT INTO interests(user_id, tag) VALUES ('181', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('182', 'camping');
		INSERT INTO interests(user_id, tag) VALUES ('182', 'backpacking');
		INSERT INTO interests(user_id, tag) VALUES ('182', 'mountains');
		INSERT INTO interests(user_id, tag) VALUES ('183', 'techno');
		INSERT INTO interests(user_id, tag) VALUES ('183', 'parties');
		INSERT INTO interests(user_id, tag) VALUES ('183', 'rave');
		INSERT INTO interests(user_id, tag) VALUES ('184', 'painting');
		INSERT INTO interests(user_id, tag) VALUES ('184', 'architecture');
		INSERT INTO interests(user_id, tag) VALUES ('184', 'art');
		INSERT INTO interests(user_id, tag) VALUES ('185', 'photo');
		INSERT INTO interests(user_id, tag) VALUES ('185', 'programming');
		INSERT INTO interests(user_id, tag) VALUES ('185', 'computers');"

	);
	define('INTERESTS', $interests);