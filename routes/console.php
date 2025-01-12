<?php
/**
 *Tento súbor bol generovaný Laravelom, nie je to moja práca, ale je ho potreba pre funkcionalitu
 */
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();
