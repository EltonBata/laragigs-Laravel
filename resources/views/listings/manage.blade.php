@extends('layouts.home')
@section('title', 'Manage')
@section('content')


    <x-alert-success />

    <div class="row">
        <div class="mx-auto col-sm-8 mb-2 border bg-light py-3 rounded-1 mt-3">
            <h4 class="text-center">MANAGE GIGS</h4>

            @unless ($listings->isEmpty())

                <table class="table table-striped">
                    <tbody>
                        @foreach ($listings as $listing)
                            <tr>
                                <td>
                                    <a href="{{ route('listing.show', $listing->id) }}" class="btn link">
                                        {{ $listing->title }}</a>

                                </td>
                                <td>
                                    <a href="{{ route('listing.edit', $listing->id) }}" class="btn text-primary link">edit</a>

                                </td>
                                <td>
                                    <form action="{{ route('listing.destroy', $listing->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn text-danger link">delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="m-3">No listing found</p>
            @endunless


        </div>
    </div>


@endsection
