@extends('admin.layouts.app-admin')

@section('content')
<div class="container">

    @component('admin.components.breadcrumb')
        @slot('title') List of categories @endslot
        @slot('parent') Main @endslot
        @slot('active') Categories @endslot
    @endcomponent

    <hr>

        <a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i>Create category</a>
        <table class="table table-striped">
            <thread>
                <th>Name</th>
                <th>Publication</th>
                <th class="text-right">Activity</th>
            </thread>
            <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{$category->title}}</td>
                    <td>{{$category->published}}</td>
                    <td>
                        <a href="{{route('admin.category.edit', ['id'=>$category->id])}}"><i class="fa fa-edit"></i></a>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center"><h2>Oops! No data!</h2></td>
                    </tr>
            </tbody>
        </table>
</div>
@endsection
