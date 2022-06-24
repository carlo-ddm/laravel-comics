{{-- Create un nuovo progetto Laravel, su cui lavoreremo sia oggi che domani.
Oggi concentratevi sul layout: create un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...) eventualmente includendo header e footer tramite due partials.
Create poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file inserito nella cartella config e abbellite il tutto sfruttando Sass. --}}
@extends('layouts.main')
@section('content')
    <main>
        <div class="content">
            <div class="jumbotron"></div>
            <div class="container">
                @foreach ( $comics as $comic )
                {{-- @dump($comics) --}}
                <div class="card">
                    <img src="{{$comic->image}}" alt="{{$comic->title}}">
                    <div>{{$comic->title}}</div>
                    <div>{{$comic->type}}</div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
    <div class="icon-items" >
        <div class="container">
        <ul>
          <li>
            <img src="../img/buy-comics-digital-comics.png" alt="buy-comics-digital-comics">
            <span>digital comics</span>
          </li>
          <li>
            <img src="../img/buy-comics-merchandise.png" alt="buy-comics-merchandise">
            <span>dc merchandis</span>
          </li>
          <li>
            <img src="../img/buy-comics-subscriptions.png" alt="icon.iconTitle">
            <span>subscription</span>
          </li>
          <li>
            <img src="../img/buy-comics-shop-locator.png" alt="icon.iconTitle">
            <span>comic shop locator</span>
          </li>
          <li>
            <img src="../img/buy-dc-power-visa.svg" alt="icon.iconTitle">
            <span>dc power visa</span>
          </li>
        </ul>
        </div>
      </div>
@endsection
