<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

public function getRatescurrency(){
    ///Uncomment this block
   /* $response = Http::withHeaders([ 'Authorization' => 'Bearer czmgWsFwYnl4q8Bf7OksgjRQ' ])
        ->get('http://web-services.oanda.com/rates/api/v2/rates/candles.json?base=TND&start_time=2020-07-05&end_time=2020-08-05&quote=USD&quote=EUR&quote=CAD&quote=AUD');
    $data= $response->json();
   */
  return collect($data['quotes'])->map(function ($el){
        return ['quote_currency'=>$el['quote_currency'],'average_midpoint'=>$el['average_midpoint'],'start_time'=>$el['start_time']];
    });
    }

    public function getRatesvirtualcurrency(){
    ///Uncomment this block
      /*  $response = Http::withHeaders([ 'Authorization' => 'Bearer czmgWsFwYnl4q8Bf7OksgjRQ' ])
            ->get('http://web-services.oanda.com/rates/api/v2/rates/candles.json?base=TND&start_time=2020-07-05&end_time=2020-08-05&quote=BTC&quote=ETH');
        $data= $response->json();

        return collect($data['quotes'])->map(function ($el){
            return ['quote_currency'=>$el['quote_currency'],'average_midpoint'=>$el['average_midpoint'],'start_time'=>$el['start_time']];
        });  */

      return response('[{"quote_currency":"BTC","average_midpoint":"0.0000386598","start_time":"2020-07-05T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000382086","start_time":"2020-07-06T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000379788","start_time":"2020-07-07T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000376705","start_time":"2020-07-08T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000378149","start_time":"2020-07-09T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000382872","start_time":"2020-07-10T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000381091","start_time":"2020-07-11T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000380970","start_time":"2020-07-12T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000380280","start_time":"2020-07-13T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000383180","start_time":"2020-07-14T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000385090","start_time":"2020-07-15T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000389564","start_time":"2020-07-16T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000389180","start_time":"2020-07-17T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000387902","start_time":"2020-07-18T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000387722","start_time":"2020-07-19T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000387656","start_time":"2020-07-20T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000383034","start_time":"2020-07-21T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000382648","start_time":"2020-07-22T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000376962","start_time":"2020-07-23T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000376962","start_time":"2020-07-24T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000374625","start_time":"2020-07-25T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000373660","start_time":"2020-07-26T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000347345","start_time":"2020-07-27T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000331167","start_time":"2020-07-28T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000327749","start_time":"2020-07-29T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000330565","start_time":"2020-07-30T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000325615","start_time":"2020-07-31T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000321161","start_time":"2020-08-01T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000321666","start_time":"2020-08-02T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000324006","start_time":"2020-08-03T00:00:00+00:00"},{"quote_currency":"BTC","average_midpoint":"0.0000326649","start_time":"2020-08-04T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00154926","start_time":"2020-07-05T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00150218","start_time":"2020-07-06T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00147708","start_time":"2020-07-07T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00144664","start_time":"2020-07-08T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00144728","start_time":"2020-07-09T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00147182","start_time":"2020-07-10T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00147074","start_time":"2020-07-11T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00147046","start_time":"2020-07-12T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00145732","start_time":"2020-07-13T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00147443","start_time":"2020-07-14T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00148402","start_time":"2020-07-15T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00151910","start_time":"2020-07-16T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00152566","start_time":"2020-07-17T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00152784","start_time":"2020-07-18T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00152384","start_time":"2020-07-19T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00149469","start_time":"2020-07-20T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00147438","start_time":"2020-07-21T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00145916","start_time":"2020-07-22T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00134366","start_time":"2020-07-23T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00130383","start_time":"2020-07-24T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00126082","start_time":"2020-07-25T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00124738","start_time":"2020-07-26T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00112642","start_time":"2020-07-27T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00115128","start_time":"2020-07-28T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00114196","start_time":"2020-07-29T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00113429","start_time":"2020-07-30T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00107352","start_time":"2020-07-31T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00105364","start_time":"2020-08-01T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00104330","start_time":"2020-08-02T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.000998896","start_time":"2020-08-03T00:00:00+00:00"},{"quote_currency":"ETH","average_midpoint":"0.00122788","start_time":"2020-08-04T00:00:00+00:00"}]'
          ,200);}

    public function getRatemetals(){
        ///Uncomment this block
       /* $response = Http::withHeaders([ 'Authorization' => 'Bearer czmgWsFwYnl4q8Bf7OksgjRQ' ])
            ->get('http://web-services.oanda.com/rates/api/v2/rates/spot.json?base=TND&quote=XAG&quote=XAU');
        $data=collect($response->json());
          return collect($data['quotes'])->map(function ($el){
            return ['quote_currency'=>$el['quote_currency'],'average_midpoint'=>$el['average_midpoint'],'start_time'=>$el['start_time']];
        });
*/
       return response('[{"quote_currency":"XAG","average_midpoint":"'.( (float)random_int(0, 10) / 10).'","start_time":"2020-07-05T00:00:00+00:00"},
       {"quote_currency":"XAU","average_midpoint":"'.( (float)random_int(0, 10) / 10).'","start_time":"2020-07-06T00:00:00+00:00"}]',200);

    }








}





//
