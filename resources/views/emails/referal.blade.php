@component('mail::message')
# Invitation From {{ auth()->user()->name }}!

Your friend {{ auth()->user()->name }} has invited you to create an account on CouponThrills.com.
Use the referal code given below and earn 50 tokens immediately as you join!

# Referal Code : REFBY{{ auth()->id() }}

@component('mail::button', ['url' => 'https://couponthrills.com/register'])
Join Now
@endcomponent

Thanks,<br>
Team at CouponThrills
@endcomponent
