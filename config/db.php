<?php

$dotenvPath = dirname(__DIR__) . '/.env';
$dotenv = is_file($dotenvPath) ? parse_ini_file($dotenvPath, false, INI_SCANNER_RAW) : [];

if ($dotenv === false) {
    throw new RuntimeException('Unable to parse the database environment file: ' . $dotenvPath);
}

$getDatabaseSetting = static function (string $name) use ($dotenv): string {
    $value = getenv($name);

    if ($value !== false) {
        return $value;
    }

    if (!array_key_exists($name, $dotenv)) {
        throw new RuntimeException("Missing required database setting: {$name}");
    }

    return (string) $dotenv[$name];
};

return [
    'class' => \yii\db\Connection::class,
    'dsn' => 'mysql:host=' . $getDatabaseSetting('DB_HOST') . ';dbname=' . $getDatabaseSetting('DB_NAME'),
    'username' => $getDatabaseSetting('DB_USER'),
    'password' => $getDatabaseSetting('DB_PASSWORD'),
    'charset' => $getDatabaseSetting('DB_CHARSET'),

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
