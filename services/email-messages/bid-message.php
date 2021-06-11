<?php

namespace services\email_messages;

class BidMessage
{
    public function bidMessageBody($operatorName, $tourTitle, $bid)
    {
        $emailBody = '
   <body>
   <div style="margin: 0 auto;max-width: 800px;background: rgba(211,211,211,0.68);padding: 30px">
    <div style="margin: 0 auto;max-width: 600px;background: white">
    <div style="background-color: black;border-top: 5px solid #6b9ce8;border-bottom: 5px solid #6b9ce8;padding: 10px;color: white">
                <p style="color: white;text-align: center;font-size: 26px">
                Your Bid is Rejected.
                </p>
        </div>
        <div style="padding: 15px">
             <div style="margin-left: 10px;margin-right: 10px;font-size: 17px;padding-top: 2px">Operator: ' . $operatorName . '</div>
             <div style="margin-left: 10px;margin-right: 10px;font-size: 17px;padding-top: 2px">Tour Title: ' . $tourTitle . '</div>
             <div style="margin-left: 10px;margin-right: 10px;font-size: 17px;padding-top: 2px">Your Bid: ' . $bid . ' USD</div>
        </div>
  </div>
</div><br>
</div>
 </div>
            </body>
            ';
        return $emailBody;
    }

    public function bidAcceptMessageBody($operatorName, $tourTitle, $bid, $token)
    {
        $emailBody = '
   <body>
   <div style="margin: 0 auto;max-width: 800px;background: rgba(211,211,211,0.68);padding: 30px">
    <div style="margin: 0 auto;max-width: 600px;background: white">
    <div style="background-color: black;border-top: 5px solid #6b9ce8;border-bottom: 5px solid #6b9ce8;padding: 10px;color: white">
                <p style="color: white;text-align: center;font-size: 26px">
                Your Bid is Accepted.
                </p>
        </div>
        <div style="padding: 15px">
             <div style="margin-left: 10px;margin-right: 10px;font-size: 17px;padding-top: 2px">Operator: ' . $operatorName . '</div>
             <div style="margin-left: 10px;margin-right: 10px;font-size: 17px;padding-top: 2px">Tour Title: ' . $tourTitle . '</div>
             <div style="margin-left: 10px;margin-right: 10px;font-size: 17px;padding-top: 2px">Your Bid: ' . $bid . ' USD</div>
             <div style="margin-left: 10px;margin-right: 10px;font-size: 17px;padding-top: 2px">Please Click On Below Link and Pay 10% Of Your Bid To Confirm Booking</div>
             <div style="margin-left: 10px;margin-right: 10px;font-size: 17px;padding-top: 2px"><a href="'. url('customer-payment') .'/'. $token .'"> Click Here To Pay</a></div>
        </div>
  </div>
</div><br>
</div>
 </div>
            </body>
            ';
        return $emailBody;
    }

}
