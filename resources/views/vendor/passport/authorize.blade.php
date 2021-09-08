@extends('backoffice::layouts.login')
@section('content')
    <div class="demo-card-wide mdl-card mdl-shadow--2dp passport-authorize">
        <div class="mdl-card__title" style="padding-bottom:0px">
            <h2 class="mdl-card__title-text">@lang('Authorization Request')</h2>
        </div>
        <div class="mdl-card__supporting-text">
            <!-- Introduction -->
            <p>{{ __(':client is requesting permission to access your account', [
            'client' => "<strong>{ $client->name }</strong>"]) }}</p>

            <!-- Scope List -->
            @if (count($scopes) > 0)
                <div class="scopes">
                    <p><strong>@lang('This application will be able to'):</strong></p>

                    <ul>
                        @foreach ($scopes as $scope)
                            <li>{{ $scope->description }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="buttons">
                <!-- Authorize Button -->
                <form method="post" action="/oauth/authorize" class="authorize-button">
                    {{ csrf_field() }}

                    <input type="hidden" name="state" value="{{ $request->state }}">
                    <input type="hidden" name="client_id" value="{{ $client->id }}">
                    <button type="submit"
                            class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored">
                        @lang('Authorize')
                    </button>
                </form>

                <!-- Cancel Button -->
                <form method="post" action="/oauth/authorize" class="cancel-button">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <input type="hidden" name="state" value="{{ $request->state }}">
                    <input type="hidden" name="client_id" value="{{ $client->id }}">
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--accent">
                        @lang('Cancel')
                    </button>
                </form>
            </div>

        </div>
    </div>
@stop
@section('title')
    | @lang('Authorization')
@stop
