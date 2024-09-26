@extends('layouts.main')

@section('content')
<tabel class=" table">
@foreach ($hasil as $item)
    {{ $item['status'] }}
@endforeach 
