@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('G Calendar') }}</div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Summary</th>
                                <th scope="col">Created By</th>
                                <th scope="col">Start Time</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $item)
                                <tr>
                                    <th scope="row">
                                        <a href="{{ $item->htmlLink }}" target="_blank">{{ $item->id }}</a>
                                    </th>
                                    <td>{{ $item->summary }}</td>
                                    <td>{{ $item->creator->email }}</td>
                                    <td>{{ date_format(date_create($item->start->dateTime),"F jS Y H:i:s") }}</td>
                                    <td>{{ $item->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
