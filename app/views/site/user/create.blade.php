@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.register') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
	<h1>Signup</h1>
</div>
<form method="POST" action="{{{ (Confide::checkAction('UserController@store')) ?: URL::to('user')  }}}" accept-charset="UTF-8">
	<input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
    <input type="hidden" name="network" value="{{{ Input::old('network') ? Input::old('network') : $data['network'] }}}">
    <input type="hidden" name="network_id" value="{{{ Input::old('network_id') ? Input::old('network_id') : $data['network_id']  }}}">

	<fieldset>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Login with Social Networks</h3>
  </div>
  <div class="panel-body">
	<a href="{{{ URL::to('oauth/facebook') }}}" class="zocial facebook">Sign in with Facebook</a>
	<a href="{{{ URL::to('oauth/google') }}}" class="zocial googleplus">Sign in with Google+</a>
	<a href="{{{ URL::to('oauth/twitter') }}}" class="zocial twitter">Sign in with Twitter</a>
	<a href="{{{ URL::to('oauth/linkedin') }}}" class="zocial linkedin">Sign in with LinkedIn</a>
  </div>
</div>
		<div class="form-group">
            <label for="username">{{{ Lang::get('confide::confide.username') }}}</label>
            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.username') }}}" type="text" name="username" id="username" value="{{{ Input::old('username') }}}">
	</div>
	<div class="form-group">
  <div class="btn-group" data-toggle="buttons">
    <label class="btn btn-default active">
        <input type="radio" name="userType" id="userType" value="Business" checked>
    Business </label>
    <label class="btn btn-default">
        <input type="radio" name="userType" id="userType" value="Shopper">
    Shopper </label>
 </div> 
	</div>
        <div class="form-group">
            <label for="email">{{{ Lang::get('confide::confide.e_mail') }}} <small>{{ Lang::get('confide::confide.signup.confirmation_required') }}</small></label>
            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
        </div>
        <div class="form-group">
            <label for="password">{{{ Lang::get('confide::confide.password') }}}</label>
            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
        </div>
        <div class="form-group">
            <label for="password_confirmation">{{{ Lang::get('confide::confide.password_confirmation') }}}</label>
            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
        </div>

        <div class="form-actions form-group">
          <button type="submit" class="btn btn-primary">{{{ Lang::get('confide::confide.signup.submit') }}}</button>
        </div>

    </fieldset>
</form>
@stop
