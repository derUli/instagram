<?php

use UliCMS\Database\DBMigrator;

$migrator = new DBMigrator("instagram",
        ModuleHelper::buildRessourcePath("instagram", "migrations/up"));
$migrator->migrate();
