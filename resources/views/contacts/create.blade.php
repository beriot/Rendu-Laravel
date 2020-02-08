@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Créer un contact</h3>
                <form action="{{route('contacts.store')}}" method="post">
                    <!-- TODO mise en place de la form pour créer un contact -->
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input name="name" type="text"
                               class="form-control @error('name') is-invalid @enderror" id="name"
                               placeholder="Entrer votre title"
                               value="{{  old('name', "") }}">

                        @error('name')
                        <div class="invalid-feedback">
                            Le nom est requis ou est trop long
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tel">Tel</label>
                        <input name="tel" type="tel"
                               class="form-control @error('tel') is-invalid @enderror" id="tel"
                               placeholder="Entrer votre numéro de téléphone"
                               value="{{  old('tel', "") }}">

                        @error('tel')
                        <div class="invalid-feedback">
                            Le numéro de téléphone est requis ou est trop long
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="text"
                               class="form-control @error('email') is-invalid @enderror" id="email"
                               placeholder="Entrer votre email"
                               value="{{  old('eamil', "") }}">

                        @error('email')
                        <div class="invalid-feedback">
                            L'email 'est requis ou est trop long
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Créer</button>

                </form>
            </div>
        </div>
    </div>
@endsection
