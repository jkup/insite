---
title: Configure Laravel To Work With MAMP's MySQL
layout: post
tags: PHP
---
<pre rel="Terminal"><code>
'connections' => array(

		'mysql' => array(
			'driver'   => 'mysql',
			'host'     => 'localhost',
			'unix_socket'   => '/Applications/MAMP/tmp/mysql/mysql.sock',
			'database' => 'database',
			'username' => 'user',
			'password' => 'pass',
			'charset'  => 'utf8',
			'prefix'   => '',
		),

	),
</code></pre>
