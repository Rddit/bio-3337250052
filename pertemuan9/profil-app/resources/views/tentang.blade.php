@extends('layouts.app')
@section('title', 'Tentang Mata Kuliah')
@section('content')
    <h1>{{ $info['matakuliah'] }}</h1>
    <p>{{ $info['semester'] }}</p>
    <p>{{ $info['dosen'] }}</p>
@endsection