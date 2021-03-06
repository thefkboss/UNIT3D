@extends('layout.default')

@section('breadcrumb')
    <li>
        <a href="{{ route('staff_dashboard') }}" itemprop="url" class="l-breadcrumb-item-link">
            <span itemprop="title" class="l-breadcrumb-item-link-title">Staff Dashboard</span>
        </a>
    </li>
    <li>
        <a href="{{ route('staff_type_index') }}" itemprop="url" class="l-breadcrumb-item-link">
            <span itemprop="title" class="l-breadcrumb-item-link-title">Torrent Types</span>
        </a>
    </li>
    <li class="active">
        <a href="{{ route('staff_type_edit_form', ['slug' => $type->slug, 'id' => $type->id]) }}" itemprop="url"
           class="l-breadcrumb-item-link">
            <span itemprop="title" class="l-breadcrumb-item-link-title">Edit Torrent Type</span>
        </a>
    </li>
@endsection

@section('content')
    <div class="container box">
        <h2>Edit A Torrent Type</h2>
        <form role="form" method="POST" action="{{ route('staff_type_edit', ['slug' => $type->slug, 'id' => $type->id]) }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $type->name }}">
        </div>

        <div class="form-group">
            <label for="name">Position</label>
            <input type="text" class="form-control" name="position" value="{{ $type->position }}">
        </div>

        <button type="submit" class="btn btn-default">{{ trans('common.submit') }}</button>
        </form>
    </div>
@endsection
