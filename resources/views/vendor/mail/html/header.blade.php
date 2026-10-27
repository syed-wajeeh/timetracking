@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if(trim($slot) === config('app.name'))
<img src="{{ asset('images/solidtime-logo.png') }}" srcset="{{ asset('images/solidtime-logo.svg') }}" class="logo" alt="Pattern Tracker">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
