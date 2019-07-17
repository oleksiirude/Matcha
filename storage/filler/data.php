<?php

	$password = '$2y$10$AjxhKLprRMFLjNUGaSO6IeUxcTI4RGTubZXgGh/7HXWAOg.1CNlXK';
	$password_admin = '$2y$10$p.I668kvXrO2SjEl1TBKC.PXce5Nu6B/vImuL7bQc3LQMtQ/kcDrG'; 

	$users = array(

		'users' => "
		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
        		VALUES ('admin', 'admin@gmail.com', '2019-07-12 18:36:03', '$password_admin',
        		'2019-07-12 18:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');	

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
        		VALUES ('maximus', 'maximus@gmail.com', '2019-07-12 18:36:03', '$password',
        		'2019-07-12 18:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES ('dobby', 'coolguy@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 18:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES ('bigboy', 'bigboy@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 18:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES ('captain', 'oldcaptain@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 18:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES ('serious', 'carl@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 18:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES ('massive', 'massive@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 18:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES ('johnny', 'johnny@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 18:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES ('womanizer', 'cragson@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 18:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES ('beast', 'username@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 18:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

		INSERT INTO users(login, email, email_verified_at, password, last_activity, created_at, updated_at)
		        VALUES ('cooler', 'coolerrr@gmail.com', '2019-07-12 18:36:03', '$password',
		        '2019-07-12 18:46:03', '2019-07-12 18:26:03', '2019-07-12 18:36:03');

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
		'profiles' => "
		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
                    avatar, avatar_uploaded, photo1, photo2, photo3, rating)
		        VALUES ('2', 'maximus', 'Max', 'Chumko', '24', 'male', 'heterosexual', 'My name is Max',
		                'images/profiles/maximus/avatar.jpg', '1',
		                'images/profiles/maximus/photo1.jpg',
		                'images/profiles/maximus/photo2.jpg',
		                'images/profiles/maximus/photo3.jpg', '5.4');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, photo3, photo4, rating)
		        VALUES ('3', 'dobby', 'Crag', 'Filler', '34', 'male', 'heterosexual', 'My name is Greg',
		                'images/profiles/dobby/avatar.jpg', '1',
		                'images/profiles/dobby/photo1.jpg',
		                'images/profiles/dobby/photo2.jpg',
		                'images/profiles/dobby/photo3.jpg',
		                'images/profiles/dobby/photo4.jpg', '5.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, rating)
		        VALUES ('4', 'bigboy', 'Bobby', 'Fellan', '51', 'male', 'heterosexual', 'My name is Bobby-BIGBOY',
		                'images/profiles/bigboy/avatar.jpg', '1',
		                'images/profiles/bigboy/photo1.jpg', '4.4');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, rating)
		        VALUES ('5', 'captain', 'Danny', 'Milko', '43', 'male', 'heterosexual', 'My name is Danny',
		                'images/profiles/captain/avatar.jpg', '1',
		                'images/profiles/captain/photo1.jpg',
		                'images/profiles/captain/photo2.jpg', '4.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('6', 'serious', 'John', 'Alvadaroz', '19', 'male', 'homosexual', 'My name is John and I am gay',
		                'images/profiles/serious/avatar.jpg', '1', '3.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, rating)
		        VALUES ('7', 'massive', 'Rob', 'Staniel', '29', 'male', 'bisexual', 'I love any person, if you know what I mean',
		                'images/profiles/massive/avatar.jpg', '1',
		                'images/profiles/massive/photo1.jpg',
		                'images/profiles/massive/photo2.jpg', '4.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, photo3, rating)
		        VALUES ('8', 'johnny', 'Daniel', 'Pitter', '31', 'male', 'heterosexual', 'My name is Daniel',
		                'images/profiles/johnny/avatar.jpg', '1',
		                'images/profiles/johnny/photo1.jpg',
		                'images/profiles/johnny/photo2.jpg',
		                'images/profiles/johnny/photo3.jpg', '5.4');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, photo3, photo4, rating)
		        VALUES ('9', 'womanizer', 'Pippo', 'Enzaghi', '37', 'male', 'heterosexual', 'My name is Pippo, I am from Italy',
		                'images/profiles/womanizer/avatar.jpg', '1',
		                'images/profiles/womanizer/photo1.jpg',
		                'images/profiles/womanizer/photo2.jpg',
		                'images/profiles/womanizer/photo3.jpg',
		                'images/profiles/womanizer/photo4.jpg', '5.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, rating)
		        VALUES ('10', 'beast', 'Fedor', 'Emalnyanenko', '42', 'male', 'heterosexual', 'I am a sexy beast!',
		                'images/profiles/beast/avatar.jpg', '1',
		                'images/profiles/beast/photo1.jpg',
		                'images/profiles/beast/photo2.jpg', '4.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('11', 'cooler', 'Sancho', 'Gonzalez', '27', 'male', 'heterosexual', 'Hello, like me!',
		                'images/profiles/cooler/avatar.jpg', '1', '3.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, rating)
		        VALUES ('12', 'cherry', 'Alexandra', 'Cherry', '25', 'female', 'heterosexual', 'My name is Cherry',
		                'images/profiles/cherry/avatar.jpg', '1',
		                'images/profiles/cherry/photo1.jpg',
		                'images/profiles/cherry/photo2.jpg', '4.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, rating)
		        VALUES ('13', 'caroline', 'Caroline', 'Santiago', '24', 'female', 'heterosexual', 'My name is Caroline',
		                'images/profiles/caroline/avatar.jpg', '1',
		                'images/profiles/caroline/photo1.jpg', '4.4');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, rating)
		        VALUES ('14', 'kichi', 'Lilly', 'Ambrusko', '30', 'female', 'heterosexual', 'My name is Lilly',
		                'images/profiles/kichi/avatar.jpg', '1',
		                'images/profiles/kichi/photo1.jpg', '4.4');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, photo3, photo4, rating)
		        VALUES ('15', 'pretty', 'Annet', 'Silvio', '41', 'female', 'heterosexual', 'My name is Annet',
		                'images/profiles/pretty/avatar.jpg', '1',
		                'images/profiles/pretty/photo1.jpg',
		                'images/profiles/pretty/photo2.jpg',
		                'images/profiles/pretty/photo3.jpg',
		                'images/profiles/pretty/photo4.jpg', '5.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, rating)
		        VALUES ('16', 'tiny', 'Ella', 'Johnson', '37', 'female', 'heterosexual', 'My name is Ella',
		                'images/profiles/tiny/avatar.jpg', '1',
		                'images/profiles/tiny/photo1.jpg',
		                'images/profiles/tiny/photo2.jpg', '4.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, rating)
		        VALUES ('17', 'sunny', 'Kate', 'Johnson', '35', 'female', 'heterosexual', 'My name is Kate',
		                'images/profiles/sunny/avatar.jpg', '1', '3.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, rating)
		        VALUES ('18', 'leonna', 'Leona', 'Adamson', '44', 'female', 'bisexual', 'My name is Leonnnnnna )))',
		                'images/profiles/leonna/avatar.jpg', '1',
		                'images/profiles/leonna/photo1.jpg',
		                'images/profiles/leonna/photo2.jpg', '4.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, photo2, rating)
		        VALUES ('19', 'chika', 'Chiko', 'Illy', '22', 'female', 'homosexual', 'My name is LOVE',
		                'images/profiles/chika/avatar.jpg', '1',
		                'images/profiles/chika/photo1.jpg',
		                'images/profiles/chika/photo2.jpg', '4.9');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio,
		                    avatar, avatar_uploaded, photo1, rating)
		        VALUES ('20', 'love', 'Kseniya', 'Adamenko', '30', 'female', 'heterosexual', 'My name is Ksyu',
		                'images/profiles/love/avatar.jpg', '1',
		                'images/profiles/love/photo1.jpg', '4.4');

		INSERT INTO profiles(user_id, login, name, surname, age, gender, preferences, bio, rating)
		        VALUES ('21', 'cloudy', 'Tanita', 'Kum', '56', 'female', 'heterosexual', 'My name is Tanita', '3.4');"
			);

	define('PROFILES', $profiles);

	$locations = array(
		'locations' => "
		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
        		VALUES ('2', 'Ukraine', 'Kyiv city', 'Kyiv', 'FC89+93',
                		'50.4659968', '30.417715200000004', '0');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('3', 'Canada', 'MB', 'Winnipeg', 'VW29+4C',
		                '49.85033', '-97.081395', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('4', 'USA', 'MN', 'Minneapolis', 'XQF4+C8',
		                '44.973536', '-93.244137', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('5', 'Slovakia', 'Bratislava', 'Bratislava', '44JM+63',
		                '48.130527', '17.132649', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('6', 'Germany', 'Munich', 'Munich', '4J26+XW',
		                '48.10241', '11.612327', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('7', 'UK', 'London', 'Clapham', 'FV7G+JC',
		                '51.464023', '-0.123919', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('8', 'UK', 'Manchester', 'Manchester', 'CQRM+67',
		                '53.440549', '-2.216814', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('9', 'Italy', 'Metropolitan City of Rome', 'Rome', 'VG45+QM',
		                '41.856924', '12.509146', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('10', 'Russia', 'Moscow', 'Central Administrative Okrug', 'PJHJ+GM',
		                '55.728833', '37.631657', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('11', 'Spain', 'Barcelona', 'Barcelona', '944J+G9',
		                '41.356317', '2.13093', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('12', 'Ukraine', 'Cherkasy Oblast', 'Cherkasy', 'C24J+RF',
		                '49.407121', '32.031213', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('13', 'Portugal', 'Vila Nova de Gaia', 'Vila Nova de Gaia', '49HG+84',
		                '41.128331', '-8.624638', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('14', 'France', 'Montpellier', 'Montpellier', 'HVQH+F2',
		                '43.588632', '3.87762', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('15', 'France', 'Marseille', 'Marseille', '8C5H+XW',
		                '43.309933', '5.429809', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('16', 'Switzerland', 'Bern', 'Bern', 'XF8J+GX',
		                '46.966357', '7.482424', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('17', 'Switzerland', 'Zürich', 'Zürich', '9H84+4P',
		                '47.365288', '8.556798', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('18', 'UK', 'Cardiff', 'Cardiff', 'FRGG+95',
		                '51.475898', '-3.174612', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('19', 'Czechia', 'Brno', 'Brno', '5JF7+C3',
		                '49.173515', '16.612745', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('20', 'Ukraine', 'Zhytomyr Oblast', 'Zarichany', '6MP4+96',
		                '50.235994', '28.655557', '1');

		INSERT INTO locations(user_id, country, region, city, gps_code, latitude, longitude, allow)
		        VALUES ('21', 'Ukraine', 'Kyiv city', 'Kyiv', 'CGHG+89',
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
				INSERT INTO tags(tag) VALUES ('children');"
	);

	define('TAGS', $tags);

	$interests = array(
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

		INSERT INTO interests(user_id, tag) VALUES ('7', 'parties');
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

		INSERT INTO interests(user_id, tag) VALUES ('12', 'food');
		INSERT INTO interests(user_id, tag) VALUES ('12', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('12', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('12', 'gym');
		INSERT INTO interests(user_id, tag) VALUES ('12', 'fitness');

		INSERT INTO interests(user_id, tag) VALUES ('13', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('13', 'pizza');
		INSERT INTO interests(user_id, tag) VALUES ('13', 'finance');
		INSERT INTO interests(user_id, tag) VALUES ('13', 'poems');
		INSERT INTO interests(user_id, tag) VALUES ('13', 'painting');

		INSERT INTO interests(user_id, tag) VALUES ('14', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('14', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('14', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('14', 'literature');
		INSERT INTO interests(user_id, tag) VALUES ('14', 'techno');

		INSERT INTO interests(user_id, tag) VALUES ('15', 'parties');
		INSERT INTO interests(user_id, tag) VALUES ('15', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('15', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('15', 'pizza');
		INSERT INTO interests(user_id, tag) VALUES ('15', 'gym');

		INSERT INTO interests(user_id, tag) VALUES ('16', 'crossfit');
		INSERT INTO interests(user_id, tag) VALUES ('16', 'basketball');
		INSERT INTO interests(user_id, tag) VALUES ('16', 'backpacking');
		INSERT INTO interests(user_id, tag) VALUES ('16', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('16', 'singing');

		INSERT INTO interests(user_id, tag) VALUES ('17', 'theatre');
		INSERT INTO interests(user_id, tag) VALUES ('17', 'poems');
		INSERT INTO interests(user_id, tag) VALUES ('17', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('17', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('17', 'fun');

		INSERT INTO interests(user_id, tag) VALUES ('18', 'love');
		INSERT INTO interests(user_id, tag) VALUES ('18', 'sex');
		INSERT INTO interests(user_id, tag) VALUES ('18', 'poems');
		INSERT INTO interests(user_id, tag) VALUES ('18', 'politics');
		INSERT INTO interests(user_id, tag) VALUES ('18', 'rave');

		INSERT INTO interests(user_id, tag) VALUES ('19', 'rave');
		INSERT INTO interests(user_id, tag) VALUES ('19', 'techno');
		INSERT INTO interests(user_id, tag) VALUES ('19', 'gym');
		INSERT INTO interests(user_id, tag) VALUES ('19', 'music');
		INSERT INTO interests(user_id, tag) VALUES ('19', 'muscles');

		INSERT INTO interests(user_id, tag) VALUES ('20', 'children');
		INSERT INTO interests(user_id, tag) VALUES ('20', 'backpacking');
		INSERT INTO interests(user_id, tag) VALUES ('20', 'fitness');
		INSERT INTO interests(user_id, tag) VALUES ('20', 'pizza');
		INSERT INTO interests(user_id, tag) VALUES ('20', 'love');

		INSERT INTO interests(user_id, tag) VALUES ('21', 'football');
		INSERT INTO interests(user_id, tag) VALUES ('21', 'sport');
		INSERT INTO interests(user_id, tag) VALUES ('21', 'singing');
		INSERT INTO interests(user_id, tag) VALUES ('21', 'beer');
		INSERT INTO interests(user_id, tag) VALUES ('21', 'pub');"
	);

	define('INTERESTS', $interests);


