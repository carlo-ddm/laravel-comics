{{-- Create un nuovo progetto Laravel, su cui lavoreremo sia oggi che domani.
Oggi concentratevi sul layout: create un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...) eventualmente includendo header e footer tramite due partials.
Create poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file inserito nella cartella config e abbellite il tutto sfruttando Sass. --}}
@extends('layouts.main')
@section('content')
    <main>
        <div class="content">
            <div class="jumbotron">
            </div>
            <div class="container" >
              {{-- <div class="card" v-for="(card,index) in cards" :key="index">
                <img :src="card.thumb" alt="">
                <span>{{card.series}}</span>
              </div> --}}
              <button><strong>load more</strong></button>
            </div>
          </div>
    </main>
    <div class="icon-items" >
        <div class="container">
        {{-- <ul>
          <li v-for="(icon,index) in icons" :key="`icons_${index}`" >
            <img :src="`${icon.src}`" :alt="icon.iconTitle">
            <span>{{icon.iconTitle}}</span>
          </li>
        </ul> --}}
        </div>
      </div>
@endsection
