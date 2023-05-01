@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Dashboard</h1>
        <p class="lead">Only authenticated users can access this section.</p>
        <a class="" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a>
        @endauth

        @guest
            <div class="content">
                <h2>
                    Bienvenue sur l'application de prise de rendez-vous dans les hôpitaux publics
                </h2>
                <p>
                    Pour mieux accueillir ses patients, le Ministère de la santé à mis en place un système informatisé de gestion des rendez-vous, qui permet aux patients de prendre rendez-vous par internet ou par téléphone

                    Ce service vous permet de réduire le nombre des déplacements

                    Ce service vous permet de réduire les frais liés aux déplacements

                    Ce service vous garanties une optimisation de votre temps et de votre énergie
                </p>
                <img src="{!! url('assets/img/imgg.png') !!}" alt="">
                <div class="btn">
                    <button>Prendre un rendez-vous</button>
                    <button>Gérer mes rendez-vous</button>
                </div>
            </div>
            
        @endguest
    </div>
@endsection