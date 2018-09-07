@extends('layouts.master')

@section('meta-desc-content', 'Frisørne Tina Maltby og Tinne Holmen byder velkommen til deres salon. Telefon: 49132356 Adresse: Skovparken 10 Espergærde')

@section('content')
    @include('layouts.picture')

    <section class="section-produkter">
        <div class="container">
            <div class="row">
                <div class="prod-wrapper">
                    <div class="contact">
                        <h2>KONTAKT OS</h2>
                        <hr>
                        <a href="tel://49132356">
                        <h4><b>Telefon:</b> 49132356</h4>
                        </a>
                        <h4><b>Email:</b> holmenogmaltby@gmail.com</h4>
                        <h4><b>Adresse:</b> Skovparken 10, Espergærde</h4>
                    </div>
                    {{-- <div class="col-sm-4">
                        <div class="produkt">
                            <a href="#">
                            <div class="produkt-icon">
                                <div class="fa fa-id-card"></div>
                            </div>
                            <h3>Book Online</h3>
                            <p>Med vores online booking system, vil du frit kunne vælge dine egne tider, hvornår det passer dig.</p>
                            </a>
                        </div>
                    </div> --}}
                    <div class="col-sm-6">
                        <div class="produkt">
                            <a href="/produkter">
                            <div class="produkt-icon">
                                <div class="fa fa-heart"></div>
                            </div>
                            <h3>Produkter</h3>
                            <p>Vores produkter består af organiske farve systemer, bestående af økologiske ingredienser, fri for ammoniak og med minimum mængde af kemikalier.</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="produkt">
                            <a href="/omos">
                            <div class="produkt-icon">
                                <div class="fa fa-user-circle"></div>
                            </div>
                            <h3>Om os</h3>
                            <p>Vi er to frisøre med mange års erfaring. Vi har drevet forretning i Espergærde i ca.30 år. Vi henter blandt andet vores inspiration fra kurser i både ind og udland.
                            </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-maps">
        <div class="container">
            <div class="maps-overlay">
                <div class="maps" id="maps">
                    
                </div>
            </div>
        </div>
    
    </section>

    

@endsection

