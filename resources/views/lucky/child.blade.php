<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Page Title')
@lang('messages.welcome')
<p> or </p>
{{ __('messages.welcome') }}
@section('sidebar')
    @parent
    @component('alert', ['slon' => 'bar'])
	
    <strong>Whoops!</strong> Something went wrong!
@endcomponent
    <p>This is appended to the master sidebar.</p>
@endsection  @{{time()}}
<script>
var app = @json($fg);
console.log(app);
</script>
@if (@isset($records) === 1)
    I have one record!
@elseif ($records > 1)
    I have multiple records!
@else
    I don't have any records!
@endif
@section('content')
    <p>This is my body content.</p>
@endsection
