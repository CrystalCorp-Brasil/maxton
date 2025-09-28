<?php
    use Illuminate\Support\Facades\File;

    foreach(File::allFiles(__DIR__.'/*') as $route_file){
        require $route_file->getPathname();
    }
