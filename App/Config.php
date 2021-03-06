<?php

namespace App;

/**
 * Application configuration
 *
 * PHP version 7.0
 */
class Config
{

    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'localhost';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'mvclogin';

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'mvcuser';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = 'mvcuser';

    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = true;
    
    /**
     * Secret key for hashing
     * @var boolean
     */
    const SECRET_KEY = 'b3M1DoeC1Z9xA3OPI26g6948O5Xu3i75';
//    http://randomkeygen.com/
    
    /**
     * Mailgun API key
     *
     * @var string
     */
    const MAILGUN_API_KEY = 'your-mailgun-api-key';

    /**
     * Mailgun domain
     *
     * @var string
     */
    const MAILGUN_DOMAIN = 'your-mailgun-domain';
}
