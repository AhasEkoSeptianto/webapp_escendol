{{-- card payment view info --}}
<div class="fixed bottom-0 right-0 bg-gray-100 border-l-2 border-t-2 rounded-lg border-green-300 z-20 hidden" id="containerCart">
    <div class="header bg-green-300 p-2 flex items-center relative ">
        <img src="{{asset('/image/icons/payment.svg')}}" class="w-5" alt="">
        <p class="ml-2">Payment</p>
        <img src="{{asset('/image/icons/cancel.svg')}}" alt="" class="absolute right-0 w-3 mr-2 cursor-pointer" onmousedown="is_showPaymentCart('close')">
    </div>
    <div class="payment p-2 w-96 max-h-96 overflow-auto divide-y bg-white divide-gray-300 relative" id="cart">
        {{-- here display payment history from user payment --}}
    </div>
	<button class="w-full bg-blue-400 text-gray-100 m-1 p-1">Buy</button>
</div>