<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class ExportSite extends Command
{
    protected $signature = 'export:site';
    protected $description = 'Export site content';

    public function handle()
    {
        $url = 'http://localhost/';

        $response = Http::get($url);

        if ($response->status() == 302) {
            $redirectUrl = $response->header('Location');
            $this->info("Redirecting to: $redirectUrl");

            $response = Http::get($redirectUrl);
        }

        if ($response->ok()) {
            // Process content if needed
            $this->info('Export successful.');
        } else {
            $this->error("Export failed. HTTP status code: {$response->status()}");
        }
    }
}
