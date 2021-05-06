@component('mail::message')
# Congratulations

Your shop is now active

@component('mail::button', ['url' => url('/seller/shops')])
Visit Your Shop
@endcomponent

Thanks,<br>
Schooly
@endcomponent
