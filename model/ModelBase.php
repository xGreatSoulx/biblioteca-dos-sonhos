<?php

class ModelBase extends PDO{

    public function __construct(){
        $settings = parse_ini_file('config/config.ini', true);

        if (empty($settings)) 
            throw new exception('Unable to open ' . $settings . '.');

        $dns = $settings['database']['driver'] .
        ':host=' . $settings['database']['host'] .
        ';port=' . $settings['database']['port'] .
        ';dbname=' . $settings['database']['schema'];

        parent::__construct($dns, $settings['database']['username'], $settings['database']['password']);
    }
}
?>