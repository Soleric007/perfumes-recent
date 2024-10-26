<x-mail::message>
    # Payment Confirmed

    A payment has been successfully received for the following order:

    - **Order Reference:** {{ $order->transaction_reference }}
    - **Customer Name:** {{ $order->first_name }} {{ $order->last_name }}
    - **Email:** {{ $order->email }}
    - **Phone:** {{ $order->phone }}
    - **Total Amount:** ${{ number_format($order->total_amount, 2) }}
    - **Payment Method:** {{ ucfirst($order->payment_method) }}

    Please proceed with processing the order.

    <x-mail::button :url="route('admin.orderdetails', $order->id)">
        View Order
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
