<?php
namespace App\Repositories;

use App\Models\User;
use App\Traits\Notification;
use Illuminate\Support\Facades\Hash;
use Modules\GeneralSetting\Entities\EmailTemplateType;
use Modules\GeneralSetting\Entities\NotificationSetting;
use Modules\GeneralSetting\Entities\UserNotificationSetting;
use Modules\Marketing\Entities\ReferralCodeSetup;
use Modules\Marketing\Entities\ReferralUse;
use Modules\Marketing\Entities\ReferralCode;

class AuthRepository{

    use Notification;

    public function register($data){

        $field = $data['email'];
        if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
            $email = $data['email'];
        }else{
            $phone = $data['email'];
        }
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => isset($data['last_name'])?$data['last_name']:null,
            'username' => isset($phone)?$phone:NULL,
            'email' => isset($email)?$email:NULL,
            'password' => Hash::make($data['password']),
            'role_id' => 4,
            'phone' => isset($phone)?$phone:NULL,
            'currency_id' => app('general_setting')->currency,
            'lang_code' => app('general_setting')->language_code,
            'currency_code' => app('general_setting')->currency_code,
        ]);

        // User Notification Setting Create
        (new UserNotificationSetting())->createForRegisterUser($user->id);
        $this->typeId = EmailTemplateType::where('type','register_email_template')->first()->id;//register email templete typeid
        $notification = NotificationSetting::where('slug','register')->first();
        if ($notification) {
            $this->notificationSend($notification->id,$user->id);
        }
        if(isset($data['referral_code'])){
            $referralData = ReferralCodeSetup::first();
            $referralExist = ReferralCode::where('referral_code', $data['referral_code'])->first();
            if ($referralExist) {
                $referralExist->update(['total_used' => $referralExist->total_used + 1]);
                ReferralUse::create([
                    'user_id' => $user->id,
                    'referral_code' => $data['referral_code'],
                    'discount_amount' => $referralData->amount
                ]);
            }
        }
        return $user;
    }
    public function getRegister($user)
    {
        $field = $user['email'];
        $email = null;
        $phone = null;
         if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
          $email= $field;
        }elseif (preg_match("/^\\+?\\d{1,4}?[-.\\s]?\\(?\\d{1,3}?\\)?[-.\\s]?\\d{1,4}[-.\\s]?\\d{1,4}[-.\\s]?\\d{1,9}$/", $field)) {
            $phone= $field;
        }
        $user_exist = User::where('email',$email)->Where('username',$phone)->where('is_active',0)->first();
        if($user_exist){
            $user_exist->update([
                'is_active' => 1,
                'last_name' => isset($user['last_name'])?$user['last_name']:null,
                'first_name' => isset($user['first_name'])?$user['first_name']:null,
                'username' => isset($phone)?$phone:NULL,
                'email' => isset($email)?$email:NULL,
                'password' => Hash::make($user['password']),
                'role_id' => 4,
                'phone' => isset($phone)?$phone:NULL,
            ]);
           return $user_exist;
        }
        return false;
    }

    public function changePassword($user, $data){

        if($user && Hash::check($data['old_password'], $user->password)){

            User::where('id', $user['id'])->update([
                'password' => Hash::make($data['password'])
            ]);
            return true;

        }else{
            return false;
        }
    }

}
