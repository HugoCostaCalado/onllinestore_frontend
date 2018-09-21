@extends('layouts.master')

@section('content')

<form method="post" action="/register">

  {{ csrf_field() }}

  <div class="form-group">
    <label for="name">Nome do Utilizador: </label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Coloque o nome de utilizador">
  </div>

  <div class="form-group">
    <label for="email">Email address: </label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Coloque aqui o seu E-mail">
    <small id="emailHelp" class="form-text text-muted">Nunca partilharemos o seu E-mail com mais ninguém</small>
  </div>

  <div class="form-group">
    <label for="password">Password: </label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>

  <div class="form-group">
    <label for="password_confirmation">Confirmação da Password: </label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Repita a sua Password">
  </div>

  <div class="form-group">
    <label for="address">Morada: </label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Insira aqui a sua Morada">
  </div>

  <div class="form-group">
    <label for="zipcode">Código Postal: </label>
    <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Insira aqui o código postal">
  </div>

  <div class="form-group">
    <label for="city">Localidade: </label>
    <input type="text" class="form-control" id="city" name="city" placeholder="Localidade">
  </div>

  <div class="form-group">
    <label for="telephone">Telefone: </label>
    <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Telefone Fixo">
  </div>

  <div class="form-group">
    <label for="cellphone">Telemóvel: </label>
    <input type="text" class="form-control" id="cellphone" name="cellphone" placeholder="Telemóvel">
  </div>

  <div class="form-group">
  	<button type="submit" class="btn btn-block btn-dark">Registar</button>
  </div>

  <div class="form-group">

 	@include('layouts.errors')

  </div> 

</form>

@endsection
