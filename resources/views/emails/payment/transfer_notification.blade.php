<x-mail::message>
# Transfer Payment Notification

A customer has indicated they've completed a bank transfer for the following order:

<x-mail::panel>
**Order Details:**
- **Order ID:** #{{ $order->id }}
- **Customer Name:** {{ $order->first_name }} {{ $order->last_name }}
- **Email:** {{ $order->email }}
- **Phone:** {{ $order->phone }}
- **Total Amount:** ₦{{ number_format($order->total_amount, 2) }}
- **Shipping Fee:** ₦{{ number_format($order->shipping_fee, 2) }}
- **Delivery Zone:** {{ $order->state === 'Lagos' ? 'Inside Lagos' : 'Interstate' }}
</x-mail::panel>

**Bank Transfer Details:**
- **Bank Name:** Access Bank
- **Account Number:** 1848449170
- **Account Name:** Zankpa Zynariya Blessing

Please verify the payment in your bank account and confirm the order.

<x-mail::button :url="route('admin.orderdetails', $order->slug)">
View Order Details
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
