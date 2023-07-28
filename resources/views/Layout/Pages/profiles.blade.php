@extends('Layout.master')
@section('title', 'Profiles')

@section('content')

    <header class="masthead-candidates">
        <div class="img-overlay">
            <div class="container">
                <h2 class="section-heading text-uppercase">Les Candidates</h2>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-danger btn-xl text-uppercase mt-5" href="#section-1">Inscrire</a>
            </div>
        </div>
    </header>

    <section>
        <div class="select-categorie">
            <select class="form-select" aria-label="Default select example">
                <option selected>All categories</option>
                <option value="1">Homme</option>
                <option value="2">Femme</option>
                <option value="3">Enfants</option>
                <option value="3">Haute-Couture</option>
                <option value="3">Accessoires</option>
            </select>
        </div>
        <div class="profile-container">
        </div>
    </section>
@endsection
