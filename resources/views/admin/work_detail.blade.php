@extends('admin._layout')

@section('title', 'QC Work Detail')

@section('style')
<livewire:styles />
@endsection

@section('content')

<livewire:work-detail :user="$user"/>   

@endsection


@section('script')
<livewire:scripts />
@endsection