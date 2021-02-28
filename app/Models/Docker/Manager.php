<?php

namespace App\Models\Docker;

class Manager {
    public static function version() {
        return exec("docker version");
    }
}