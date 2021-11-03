<?php

namespace App\Console;

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
        \App\Console\Commands\Inspire::class,
        \App\Console\Commands\EmailRecordatorioEvento::class,
        \App\Console\Commands\EmailBalanceEmpresa::class,
        \App\Console\Commands\EmailBalanceEmpresaConsolidado::class,
        \App\Console\Commands\MedicionVariablesFinca::class,

     //   \App\Console\Commands\EmailFincasAguacateEmpresa::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('email:evento')
                 ->dailyAt('05:45');
        $schedule->command('email:medicionfincameteo')
                 ->dailyAt('05:55');
                 //  ->everyMinute();
        $schedule->command('email:medicionfincameteo')
                 ->dailyAt('09:55');
        $schedule->command('email:medicionfincameteo')
                 ->dailyAt('15:08');
        $schedule->command('email:medicionfincameteo')
                 ->dailyAt('23:14');
        $schedule->command('email:consolidado')
                 ->dailyAt('13:37');
        
    }
}

