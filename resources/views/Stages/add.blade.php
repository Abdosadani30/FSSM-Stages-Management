@extends('layouts.master')
@section('title')
Proposer un stage
@endsection
@section('css')
@endsection
 
 @section('title_page1')
 Menu
 @endsection 

 @section('title_page2')
    reteur
 @endsection 

 @section('content')

<form action="/Stages/store" method="POST" class="ml-5">
    @csrf
    <h3>Informations personnelles </h3>
    <div class="row my-4">
            <label for="nom" class="form-label">Nom</label>
        <div class="mb-3 col-4">
            <input type="text" name="nom" class="form-control pt-2" placeholder="Nom" aria-describedby="helpId">
        </div>
            <label for="prenom" class="form-label">Prénom</label>        
        <div class="mb-3 col-3">
            <input type="text" name="prenom" class="form-control pt-2" placeholder="Prenom" aria-describedby="helpId">
        </div>
            <label for="filiere" class="form-label">Filière</label>
        <div class="col-3">
            <select class="w-5 pt-2 form-control" name="filiere" id="1">
                <option selected>Selectionner filière</option>
                <option value="SMP">SMP</option>
                <option value="SMC">SMC</option>
                <option value="SMA">SMA</option>
                <option value="SMI">SMI</option>
                <option value="SVI">SVI</option>
                <option value="STU">STU</option>
            </select>
        </div>
    </div>
    <h3>Stage</h3>
    <div class="row my-4">
        <label for="sujet" class="form-label col-4">Sujet du stage</label>
        <input class="col-5 mt-1 form-control" type="text" name="sujet" placeholder="Sujet">
    </div>
    <div class="row my-4">
        <label for="description" class="form-label col-4">Description</label>
        <textarea class="col-5 mt-3 form-control" name="description" rows="3" placeholder="Description"></textarea>
    </div>
    <div class="row my-4">
        <label for="duree" class="form-label col-4">Durée du stage</label>
        <input class="form-control col-2 mt-1" type="number" value="2" min="1" max="6" name="duree" id="">
        <h6 class="ml-2" >mois</h6>
    </div>
    <h3>Entreprise</h3>
    <div class="row my-4">
        <label for="entreprise" class="form-label mt-1 col-3">Nom de l'entreprise</label>
        <input class="form-control col-5" type="text" name="entreprise">
    </div>
    <div class="row my-4">
        <label for="entreprise" class="form-label mt-1 col-2">Responsable de l'entreprise</label>
        <input class="form-control col-3" type="text" name="entreprise">
        <label for="entreprise" class="form-label mt-1 col-3">Encadrant de l'entreprise</label>
        <input class="form-control col-3" type="text" name="entreprise">
    </div>
    <div class="row my-4">
        <label for="email-entreprise" class="form-label mt-1 col-3">Email</label>
        <input class="form-control col-3" type="email" name="email-entreprise">
        <label for="tel-entreprise" class="form-label mt-1 col-2">Téléphone</label>
        <input class="form-control col-3" type="tel" name="tel-entreprise">
    </div>
        <button type="submit" class="btn btn-primary btn-sm float-end" data-bs-toggle="button" aria-pressed="false" autocomplete="off">Envoyer mon stage</button>
    <?php
        if(session('success')){
            dd(session('success'));
        }
    ?>
 @endsection 
 @section('scripts')
 @endsection
 