@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success"  role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        @php

                        $myName = "hein htet zan";

                        @endphp



                        <x-alert color="success" mark="30" :href="$myName" >
                            San kyi tar
                        </x-alert>

                        <x-alert>
                            kyaw gyi
                        </x-alert>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
