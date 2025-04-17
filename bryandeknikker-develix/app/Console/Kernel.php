<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Log;

class Kernel extends ConsoleKernel
{
    /**
     * Hier registreer je je custom Artisan commands.
     */
    protected $commands = [
        \App\Console\Commands\GenerateSitemap::class,
    ];

    /**
     * Hier plan je je Artisan commands in.
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('blog:publish')
            ->everyMinute()
            ->before(function () {
                Log::info('Blog publish task is about to run');
            })
            ->after(function () {
                Log::info('Blog publish task has run');
            });

        $schedule->command('generate:sitemap')->daily();
    }

    /**
     * Laad de console commands van routes/console.php.
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
