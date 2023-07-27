@extends('layouts.app')

@section('title', 'Admin Shores Index')

@section('main-content')

<div class="container">

    <h1 class="mb-5">
        Shores Index
    </h1>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            id
                        </th>
                        <th scope="col">
                            Name
                        </th>
                        <th scope="col">
                            Location
                        </th>
                        <th scope="col">
                            Number_of_umbrellas
                        </th>
                        <th scope="col">
                            Number_of_bed
                        </th>
                        <th scope="col">
                            Price
                        </th>
                        <th scope="col">
                            Opening_date
                        </th>
                        <th scope="col">
                            Closing_date
                        </th>
                        <th scope="col">
                            Has_volley_beach
                        </th>
                        <th scope="col">
                            Has_soccer_field
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($shoreList as $shore)

                    <tr>
                        <th scope="row">{{ $shore->id}}</th>
                        <td>
                            {{ $shore->name}}
                        </td>
                        <td>
                            {{ $shore->location}}
                        </td>
                        <td>
                            {{ $shore->number_of_umbrellas}}
                        </td>
                        <td>
                            {{ $shore->number_of_bed}}
                        </td>
                        <td>
                            {{ $shore->price}}
                        </td>
                        <td>
                            {{ $shore->opening_date}}
                        </td>
                        <td>
                            {{ $shore->closing_date}}
                        </td>
                        <td>
                            <p> {{ $shore->has_volley_beach ? 'Yes' : 'No' }} </p>
                        </td>
                        <td>
                            <p> {{ $shore->has_soccer_field ? 'Yes' : 'No' }} </p>
                        </td>
                        
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection