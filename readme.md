## Cors middleware

** php artisan make:middleware Cors

> App\Http\Middleware\Cors.php

```
$domains = ['http://localhost:8080'];
if(isset($request->server()['HTTP_ORIGIN'])){
    $origin = $request->server()['HTTP_ORIGIN'];
    if(in_array($origin, $domains)){
        header('Access-Control-Allow-Origin: ' . $origin);
        header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
    }
}   
return $next($request);
```

> App\Http\Kernel.php 

    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \App\Http\Middleware\Cors::class,
    ];


