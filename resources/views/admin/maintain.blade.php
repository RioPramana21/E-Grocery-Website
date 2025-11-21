@extends('layout.layout')

@section('title', $title)
@section('main')
@if($message=Session::get('success_message'))
<div class="card col-6 mx-auto mt-5 alert alert-success" role="alert" style="width:30rem;">
    {{$message}}
</div>
@endif
<table class="table mx-auto my-3" style="width: 40%">
<thead class="thead-dark">
    <tr style="background-color: #a1d2f3" class="text-dark">
        <th scope="col"><u>@lang('public.user lists')</u></th>
        <th scope="col"><u>@lang('public.action list')</u></th>
    </tr>
</thead>
@foreach ($users as $user)
    <tbody>
        <tr>
            <td>{{$user->first_name}} {{$user->last_name}} -
                @if ($user->role_id == 1)
                    Admin
                @elseif ($user->role_id == 2)
                    @lang('public.user')
                @endif
            </td>
            <td>
                <a href="{{route('update_role', ['id'=>$user->id])}}" class="btn btn-primary text-decoration-none text-white">@lang('public.update role')</a>
                <a href="{{route('delete_role', ['id'=>$user->id])}}" class="btn btn-danger text-decoration-none text-white">@lang('public.delete')</a>
            </td>
        </tr>
    </tbody>
@endforeach
</table>
@endsection
