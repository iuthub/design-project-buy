@extends('admin.layouts.app-admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Create news @endslot
            @slot('parent') Main @endslot
            @slot('active') News @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.article.store')}}" method="post">
            {{ csrf_field() }}

            @include('admin.articles.partials.form')

            <input type="hidden" name="created_by" value="{{Auth::id()}}">

        </form>
    </div>

@endsection
