@component('mail::message')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
{{ config('app.name') }}
@endcomponent
@endslot


{{-- Body --}}
<div class="pf-title text-center mb-50">
    <span class="font-weight-bold"> {{ ucfirst($title) }}<br/></span>
</div>

@if(isset($subLine1))
<p class="text-center mb-0">
{!!$subLine1!!}
</p>
@endif

@if(isset($subLine2))
<div class="text-center mb-50">
    <a href="{{$url}}" class="no-underline"> {{$subLine2}}</a>
</div>
@endif

<p class="text-center">
You can check out the new due date and help keep your team <br/> moving forward by taking action below.
</p>

<div class="btn-center">
    @component('mail::button', ['url' => $url])
    {{ $buttonText}}
    @endcomponent
</div>



<div class="divider mb-25"></div>



<p class="pf-footer">
If you have any questions, simply reply to this email. We'd love to help.
</p>
<br/>

<p class="pf-footer">
Regards, <br/>
{{ config('app.name') }} Team.
</p>


{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
@endcomponent
@endslot
@endcomponent
