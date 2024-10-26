<x-mail::message>
    # Payment Confirmation

    Dear {{ $order->first_name }},

    We have received your payment for the following order:

    - **Order Reference:** {{ $order->transaction_reference }}
    - **Total Amount:** ${{ number_format($order->total_amount, 2) }}
    - **Payment Status:** Paid

    Your order is now being processed. We will notify you once it is shipped.

    {{-- <x-mail::button :url="''">
        Button Text
    </x-mail::button> --}}

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
