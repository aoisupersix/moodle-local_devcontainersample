<?php
unset($CFG);
global $CFG;
$CFG = new stdClass();
$CFG->dbtype = getenv('MOODLE_DBTYPE');
$CFG->dblibrary = 'native';
$CFG->dbhost = getenv('MOODLE_DBHOST');
$CFG->dbname = getenv('MOODLE_DBNAME');
$CFG->dbuser = getenv('MOODLE_DBUSER');
$CFG->dbpass = getenv('MOODLE_DBPASSWORD');
$CFG->prefix = getenv('MOODLE_PREFIX');
$CFG->dboptions = array(
    'dbport' => getenv('MOODLE_DBPORT'),
    );
$CFG->wwwroot = getenv('MOODLE_WWWROOT_URL');
$CFG->dirroot = '/var/www/html';
$CFG->dataroot = '/var/www/moodledata';
$CFG->unicodedb = true;
$CFG->phpunit_prefix = 'test_';
$CFG->phpunit_dataroot = '/var/www/phpunitdata';

// Admin settings
$CFG->lang = 'ja';
$CFG->admin = 'admin';
$CFG->noreplyaddress = 'noreply@example.com';
$CFG->smtphosts = getenv('MOODLE_SMTPHOSTS');

// NOT FOR PRODUCTION SERVERS!
@error_reporting(E_ALL | E_STRICT);
@ini_set('display_errors', '1');
$CFG->debug = (E_ALL | E_STRICT);
$CFG->debugdisplay = 1;

require_once("$CFG->dirroot/lib/setup.php");
