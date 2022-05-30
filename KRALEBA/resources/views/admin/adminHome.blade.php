@extends('layouts.app')

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <div class="container">
        <h3 class="text-center mt-4 mb-5">Users</h3>
        <div class="pull-right mb-1">
            <a class="btn btn-success" href="{{ route('register') }}">
                Create User
            </a>
        </div>
        <table class="table table-bordered table-striped data-table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @php $i = 1; @endphp
            @foreach ($companies as $company)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->email }}</td>
                    @if($company->type == 0)
                        <td>{{__('User')}}</td>
                    @endif

                    @if($company->type == 1)
                        <td>{{__('Admin')}}</td>
                    @endif

                    @if($company->type == 2)
                        <td>{{__('Manager')}}</td>
                    @endif

                    <td class="text-center">
                        @csrf
                        <div class="test1">
                            <form method="POST" action="{{ route('admin.delete', $company->id)}}">

                                <button class="btn btn-xs btn-primary btn-flat btn-sm"
                                        href="{{route('admin.edit', $company->id)}}">Edit
                                </button>
                            </form>
                        </div>
{{--                            <form method="POST">--}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit"
                                        class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm"
                                        data-toggle="tooltip" title='Delete'>Delete
                                </button>
                            </form>
{{--                        </div>--}}

                    </td>
                </tr>
                @php $i++ @endphp
            @endforeach

            </tbody>
        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <script type="text/javascript">
        $('.show-alert-delete-box').click(function (event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: "Are you sure you want to delete this record?",
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                type: "warning",
                buttons: ["Cancel", "Yes!"],
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
        });
    </script>
@endsection

<style>
    .test1 {
        display: inline-block;
    }
</style>
