#!/bin/bash
php vendor/bin/openapi --bootstrap development/swagger-constants.php --output public/swagger/swagger.json development/swagger-v1.php app/Http/Controllers