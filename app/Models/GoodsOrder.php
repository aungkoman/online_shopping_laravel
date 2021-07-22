<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodsOrder extends Model
{
    use HasFactory;
    // OrderItem တွေက သူ့ကို ညွှန်‌ပေးနေတာ သိလို့
    // reversed relationship အတွက် လာရေးပေးထားတာမျိုး
    // yes, this relationship is called One to Many
    public function order_items()
    {
        return $this->hasMany(OrderItem::class);
    }

    // order_status_id က ရှိပြီးသား
    // ဒီကောင်က relationship လာချိတ်ပေးတာမျိုး
    // one to many မှာ ဒီကောင်က many ဆိုတော့ column_id ရော၊ method ရော ရေးပေးရတယ်။
    public function order_status()
    {
        return $this->belongsTo(OrderStatus::class);
    }

    // ထုံးစံအတိုင်းပဲ OrderHistory မှာလည်း ဒီ model ကို ညွှန်းထားတာတွေရှိမှာပဲ
    // One to Many ပဲ ဆိုကြပါစို့
    // Many ဘက်မှာ ဒီ model ရဲ့ model_id column ပါမယ်။
    // One ဘက်မှာကတော့ method လေးတစ်ခုပဲ ရေးရမယ်။
    public function order_histories()
    {
        return $this->hasMany(OrderHistory::class);
    }

    public function mmuser()
    {
        return $this->belongsTo(MmUser::class);
    }

    // အိုကေ၊ ဒါဆို (၃) ခုလုံးနဲ့ အဆင်ပြေပြီ။

    protected $fillable = [
        "id",
        "mmuser_id",
        "payment_address",
        "order_status_id",
    ];
}
