@extends('layouts.app')

@section('title') Home @stop

@section("content")
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-6">
            <x-card-frame title="Home">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque aut corporis cum deserunt dignissimos fugiat id, laborum, magni minus molestias nam, natus possimus quis saepe sapiente sit suscipit voluptates?
                </p>

{{--                <a class="venobox" data-gall="group" href="{{ asset('images/post-1.jpeg') }}">--}}
{{--                    <img src="{{ asset('images/post-1.jpeg') }}" class="w-50" alt="image alt"/>--}}
{{--                </a>--}}
{{--                <a class="venobox" data-gall="group" href="{{ asset('images/post-2.jpeg') }}">--}}
{{--                    <img src="{{ asset('images/post-2.jpeg') }}" class="w-50" alt="image alt"/>--}}
{{--                </a>--}}

                <x-veno-box small="{{ asset('images/post-1.jpeg') }}" big="{{ asset('images/post-5.jpeg') }}"></x-veno-box>
                <x-veno-box small="{{ asset('images/post-2.jpeg') }}" gall="aa"></x-veno-box>
                <x-veno-box small="{{ asset('images/post-3.jpeg') }}" gall="aa"></x-veno-box>

            </x-card-frame>
        </div>
    </div>
@stop

@section("foot")
    <script>


    </script>
@endsection



