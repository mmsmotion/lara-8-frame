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

                        <button class="aa btn btn-primary" >Show Alert</button>
                        <button class="bb btn btn-primary" >Show toast</button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section("foot")
    <script>

        document.querySelector(".aa").addEventListener("click",function (){
            Swal.fire({
                icon: 'info',
                title: 'Oops...',
                text: 'Something went wrong!',
            })
        });

        document.querySelector(".bb").addEventListener("click",_=>{

            const Toast = Swal.mixin({
                toast: true,
                position: 'center',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'error',
                title: 'Signed in successfully'
            })
        });

    </script>
@endsection
