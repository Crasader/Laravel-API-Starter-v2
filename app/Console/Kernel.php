<?php

namespace App\Console;

use App\Console\Commands\ClearViewsTable;
use App\Console\Commands\GenerateApiDocumentation;
use App\Console\Commands\ImportMediaFile;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        GenerateApiDocumentation::class,
        ImportMediaFile::class,
        ClearViewsTable::class
    ];
    
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('media:import')
                 ->everyMinute()
                 ->withoutOverlapping();
        $schedule->command('clear:views')
                 ->everyMinute();
    }
    
    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
