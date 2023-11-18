@extends('layouts.app')

@section('title', 'My certificate')

@section('content')
    <div class="project-hero">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col col-lg-8">
                    <h1 class="text-center">certificate</h1>
                    <p class="text-center">certificate yang sudah saya capai sampai saat ini</p>
                </div>
            </div>
        </div>
    </div>

    <div class="project-category">
        <div class="container">
            <div class="row">
                <div class="col text-center badge1">
                    <p class="badge">My certificate</p>
                </div>
            </div>
            <div class="row row-cols-lg-3 row-cols-1 list-projects">
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('css/icon-uiux.png') }}" alt="">
                        <h5>Certified Network Defender</h5>
                        <p>Fundamental understanding of the construct of data transfer, network technologies, understand how networks operate, understand what software is automating and how to analyze the subject material.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('css/icon-mobile.png') }}" alt="">
                        <h5>EC-Council Certified Incident Handler</h5>
                        <p>Create incident handling and response policies and deal with various types of computer security incidents such as network security incidents, malicious code incidents, and insider attack threats.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('css/icon-web.png') }}" alt="">
                        <h5>EC-Council Certified Incident Handler</h5>
                        <p>Create incident handling and response policies and deal with various types of computer security incidents such as network security incidents, malicious code incidents, and insider attack threats. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection