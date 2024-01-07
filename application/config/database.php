<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['dsn']      The full DSN string describe a connection to the database.
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database driver. e.g.: mysqli.
|			Currently supported:
|				 cubrid, ibase, mssql, mysql, mysqli, oci8,
|				 odbc, pdo, postgre, sqlite, sqlite3, sqlsrv
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Query Builder class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['encrypt']  Whether or not to use an encrypted connection.
|
|			'mysql' (deprecated), 'sqlsrv' and 'pdo/sqlsrv' drivers accept TRUE/FALSE
|			'mysqli' and 'pdo/mysql' drivers accept an array with the following options:
|
|				'ssl_key'    - Path to the private key file
|				'ssl_cert'   - Path to the public key certificate file
|				'ssl_ca'     - Path to the certificate authority file
|				'ssl_capath' - Path to a directory containing trusted CA certificates in PEM format
|				'ssl_cipher' - List of *allowed* ciphers to be used for the encryption, separated by colons (':')
|				'ssl_verify' - TRUE/FALSE; Whether verify the server certificate or not
|
|	['compress'] Whether or not to use client compression (MySQL only)
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|	['ssl_options']	Used to set various SSL options that can be used when making SSL connections.
|	['failover'] array - A array with 0 or more data for connections if the main should fail.
|	['save_queries'] TRUE/FALSE - Whether to "save" all executed queries.
| 				NOTE: Disabling this will also effectively disable both
| 				$this->db->last_query() and profiling of DB queries.
| 				When you run a query, with this setting set to TRUE (default),
| 				CodeIgniter will store the SQL statement for debugging purposes.
| 				However, this may cause high memory usage, especially if you run
| 				a lot of SQL queries ... disable this to avoid that problem.
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $query_builder variables lets you determine whether or not to load
| the query builder class.
*/
$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'db_wisata',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

// 8. adalah penjelasan setiap elemen:
// 'dsn' adalah Data Source Name (DSN) jika Anda ingin menggunakan DSN untuk koneksi, tetapi dalam contoh ini kosong.
// 'hostname' adalah lokasi dari server basis data. Dalam kasus ini, server basis data berada di 'localhost', yang berarti server MySQL berjalan di komputer yang sama dengan aplikasi CodeIgniter.
// 'username' adalah nama pengguna untuk mengakses basis data. Dalam contoh ini, nama pengguna adalah 'root'.
// 'password' adalah kata sandi untuk mengakses basis data. Dalam contoh ini, tidak ada kata sandi.
// 'database' adalah nama basis data yang akan digunakan. Dalam contoh ini, basis data yang digunakan adalah 'db_wisata'.
// 'dbdriver' adalah driver basis data yang digunakan. Dalam contoh ini, driver 'mysqli' digunakan, yang sesuai dengan MySQL.
// 'dbprefix' adalah awalan tabel yang akan digunakan jika Anda ingin memberikan prefiks pada tabel basis data. Dalam contoh ini, tidak ada awalan yang digunakan.
// 'pconnect' adalah opsi untuk mengaktifkan atau menonaktifkan persistent connections. Dalam contoh ini, persistent connections dinonaktifkan (FALSE).
// 'db_debug' adalah opsi yang menentukan apakah mode debugging basis data aktif. Ini biasanya diatur ke TRUE dalam mode pengembangan (ketika ENVIRONMENT tidak sama dengan 'production') dan FALSE dalam mode produksi.

// 'cache_on' adalah opsi yang menentukan apakah caching basis data diaktifkan. Dalam contoh ini, caching dinonaktifkan (FALSE).
// 'cachedir' adalah direktori tempat cache basis data akan disimpan jika caching diaktifkan. Dalam contoh ini, direktori cache kosong.
// 'char_set' dan 'dbcollat' mengatur pengkodean karakter dan kolasi untuk basis data, dalam contoh ini, pengkodean karakter diatur ke 'utf8' dan kolasi ke 'utf8_general_ci'.
// 'swap_pre', 'encrypt', 'compress', 'stricton', 'failover', dan 'save_queries' adalah pengaturan tambahan untuk penggunaan koneksi basis data yang lebih canggih. Dalam contoh ini, pengaturan ini memiliki nilai default

