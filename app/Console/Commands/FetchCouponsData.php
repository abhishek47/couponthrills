<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Coupon;
use Illuminate\Console\Command;

class FetchCouponsData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'coupomated:fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch the coupons data from coupomated service';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $json = \File::get("database/coupons.json");
        $data = json_decode($json);
        $coupons = $data->DATAFEED->COUPON_ITEM;
        
        foreach($coupons as $coupon)
        {
            if(!Coupon::where('cid', $coupon->CM_CID)->exists()) {
                preg_match_all('!\d+!', $coupon->DISCOUNT, $matches);
                
                $tokens = 5; 
                
                if(isset($matches[0][0])) { 
                if($matches[0][0] <= 20) { $tokens = 10; }

                if($matches[0][0] < 50 && $matches[0][0] > 20) { $tokens = 15; }

                if($matches[0][0] >= 50) { $tokens = 20; } 
                } 
                
                Coupon::create([
                        'cid' => $coupon->CM_CID,
                        'title' => $coupon->TITLE,
                        'description' => $coupon->DESCRIPTION,
                        'code' => $coupon->COUPON,
                        'type' => $coupon->TYPE,
                        'link' => $coupon->LINK,
                        'validity' => $coupon->VALIDITY_DATE,
                        'discount' => $coupon->DISCOUNT,
                        'tokens' => $tokens,
                        'categories' => $coupon->CATS_TEXT,
                        'store_name' => $coupon->STORE_NAME
                    ]);
           }
        }

          $this->info('Coupons Data Updated');
    }
}
