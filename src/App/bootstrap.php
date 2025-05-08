<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";


use Framework\App;
use App\Config\Paths;



use function App\Config\{registerRoutes, registerMiddelware};





$app = new App(Paths::SOURCE . "app/container-definitions.php");

registerRoutes($app);
registerMiddelware($app);



return $app;
