@extends('layouts.app')


@section('title', 'ens')
@section('content')
    <div class="row">
        <div id="list-example" class="list-group col-3 ml-0">
            @include('admin.notificationbarre')
        </div>
        <div class="container col-9">




            <table class="table border-2">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Read at</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($notifications as $notification)
                        <tr>
                            @if($notification->reat_at !=null)
                            <td>{{ $notification->data['nom'] }}</td>
                            <td>{{ $notification->data['prenom'] }}</td>
                            <td>{{ $notification->data['email'] }}</td>
                            <td>{{ $notification->data['telephone'] }}</td>
                            <td>{{ $notification->read_at}}</td>
                            <div class="d-flex gap-2 w-100 justify-content-end">
                                <td><a href="{{ route('viewNotification', ['id' => $notification->id]) }}"><i class="ti ti-info-circle"></i></a>

                                    <form action="{{ route('deleteNotification', $notification) }}" method="post">
                                        @method('delete')
                                        @csrf

                                        <button class="btn btn-sm btn-danger"><i class="ti ti-trash"></i></button>
                                    </form>


                                </td>
                            </div>
@endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
