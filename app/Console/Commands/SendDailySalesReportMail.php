<?php

namespace App\Console\Commands;

use App\Mail\DailyReport;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SendDailySalesReportMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:report';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to send daily mail with sales report';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sales = DB::table('sales')
        ->whereDate('created_at', '=', date('Y-m-d'))
        ->sum('sale_value');

        Mail::to(users: 'gabrielragonhaprofissional@outlook.com')->send(new DailyReport($sales));
    }
}
