@extends('errors::illustrated-layout')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Server Error'))
@section('image')
    <img style="width:100%;" src="https://steamuserimages-a.akamaihd.net/ugc/945089495825627536/89DEF6E95FE0B81066AA31C36E8955B63FE31626/?imw=512&imh=512&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true" alt="cronos">
@endsection
