<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Student') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('students.store') }}">
                            @csrf

                            <!-- Form fields for student data -->

                            <button type="submit" class="btn btn-primary">{{ __('Create Student') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Students List') }}</div>

                    <div class="card-body">
                        <ul>
                            @foreach($students as $student)
                                <li>{{ $student->name }} - {{ $student->student_id }} - {{ $student->age }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection