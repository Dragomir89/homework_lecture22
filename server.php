<?php
//print_r($_GET);

$persons = [
		[
			'firstName' => 'Ivan',
			'lastName' => 'Zvezdev',
			'profession' => 'Chef',
			'Bday' => '15-03-1987',
			'gender' => 'male',
			'id' => '1',
			'img' => 'http://www.razkritia.com/wp-content/uploads/2015/03/i-zvezdev.jpg'
		],
		[
			'firstName' => 'John',
			'lastName' => 'Resig',
			'profession' => 'developer',
			'Bday' => '08-09-1988',
			'gender' => 'male',
			'id' => '2',
			'img' => 'https://www.rit.edu/alumni/sites/rit.edu.alumni/files/t7/John%20Resig_headshot.jpg'
		],
		[
			'firstName' => 'Lebron',
			'lastName' => 'James',
			'profession' => 'basketball player',
			'Bday' => '24-11-1987',
			'gender' => 'male',
			'id' => '3',
			'img' => 'http://videos.usatoday.net/Brightcove2/29906170001/2014/09/29906170001_3809140616001_Screen-Shot-2014-09-26-at-10-43-09-PM.jpg?pubId=29906170001'
		],
		[
				'firstName' => 'Azis',
				'lastName' => 'Azis',
				'profession' => 'singer',
				'Bday' => '24-11-1979',
				'gender' => 'male',
				'id' => '4',
				'img' => 'http://signal.bg/uploads/news_images/201102/photo_verybig_12694.jpg'
		],
		[
			'firstName' => 'Grigor',
			'lastName' => 'Dimitrov',
			'profession' => 'tennis palyer',
			'Bday' => '24-11-1989',
			'gender' => 'male',
			'id' => '5',
			'img' => 'http://img.big5.bg/images/grigor.jpg'
		],
		[
			'firstName' => 'Angela',
			'lastName' => 'Merkel',
			'profession' => 'politician',
			'Bday' => '24-11-1969',
			'gender' => 'fmail',
			'id' => '6',
			'img' => 'http://saudigazette.com.sa/wp-content/uploads/2015/08/kanzlerin_merkel_.jpg'
		],
		[
			'firstName' => 'Chuck ',
			'lastName' => 'Norris',
			'profession' => 'actor',
			'Bday' => '24-11-1959',
			'gender' => 'male',
			'id' => '7',
			'img' => 'http://im.ziffdavisinternational.com/ign_es/screenshot/default/chuck-norris610_ebeb.jpg'
		]
];


if (isset($_GET['id'])) {
	
	$recustId = $_GET['id'];
	
	$len = count($persons);
	
	for ($i = 0; $i < $len; $i++) {
		if ($persons[$i]['id'] == $recustId) {
			echo json_encode($persons[$i]);
			return;
		}
	}
	
}


echo json_encode($persons);








