@extends('layouts.master')


@section('content')
    @include('layouts.picture')

    <section class="section-produkter">
        <div class="container">
            <div class="row">
                <div class="prod-wrapper">
                    <div class="contact">
                        <h2>KONTAKT OS</h2>
                        <hr>
                        <a href="tel://24242111">
                        <h4>Telefon: 48484848</h4>
                        </a>
                        <h4>Email: holmen@email.com</h4>
                        <h4>Adresse: holmen Espergærde 12</h4>
                    </div>
                    <div class="col-sm-4">
                        <div class="produkt">
                            <a href="#">
                            <div class="produkt-icon">
                                <div class="fa fa-id-card"></div>
                            </div>
                            <h3>Book Online</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea beatae vel quas vitae laborum ad, quia neque labore sit officiis ullam. Accusamus vero voluptate consequuntur, id sint est error dolore.</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="produkt">
                            <a href="/produkter">
                            <div class="produkt-icon">
                                <div class="fa fa-heart"></div>
                            </div>
                            <h3>Produkter</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea beatae vel quas vitae laborum ad, quia neque labore sit officiis ullam. Accusamus vero voluptate consequuntur, id sint est error dolore.</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="produkt">
                            <a href="/omos">
                            <div class="produkt-icon">
                                <div class="fa fa-user-circle"></div>
                            </div>
                            <h3>Om os</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea beatae vel quas vitae laborum ad, quia neque labore sit officiis ullam. Accusamus vero voluptate consequuntur, id sint est error dolore.</p>
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

