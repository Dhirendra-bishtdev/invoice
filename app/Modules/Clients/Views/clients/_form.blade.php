@include('clients._js_unique_name')
@include('clients._js_login')

<div class="row">
    <div class="col-md-4" id="col-client-name">
        <div class="form-group">
            <label>* {{ trans('fi.client_name') }}:</label>
            {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control']) !!}
            <p class="help-block">
                <small>{{ trans('fi.help_text_client_name') }}
                    <a href="javascript:void(0)" id="btn-show-unique-name"
                       tabindex="-1">{{ trans('fi.view_unique_name') }}</a>
                </small>
            </p>
        </div>
    </div>
    <div class="col-md-3" id="col-client-unique-name" style="display: none;">
        <div class="form-group">
            <label>* {{ trans('fi.unique_name') }}:</label>
            {!! Form::text('unique_name', null, ['id' => 'unique_name', 'class' => 'form-control']) !!}
            <p class="help-block">
                <small>{{ trans('fi.help_text_client_unique_name') }}</small>
            </p>
        </div>
    </div>
    <div class="col-md-4" id="col-client-email">
        <div class="form-group">
            <label>{{ trans('fi.email_address') }}: </label>
            {!! Form::text('email', null, ['id' => 'email', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4" id="col-client-active">
        <div class="form-group">
            <label>{{ trans('fi.active') }}:</label>
            {!! Form::select('active', ['0' => trans('fi.no'), '1' => trans('fi.yes')], ((isset($editMode) and $editMode) ? null : 1), ['id' => 'active', 'class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-2">
        <div class="form-group">
            <label>{{ trans('fi.allow_login') }}:</label>
            {!! Form::select('allow_login', [0 => trans('fi.no'), 1 => trans('fi.yes')], null, ['id' => 'allow_login', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div id="div-client-passwords" style="display: none;">
        <div class="col-md-5">
            <div class="form-group">
                <label>{{ trans('fi.password') }}:</label>
                {!! Form::password('password', ['id' => 'password', 'class' => 'form-control']) !!}
                <small>{{ trans('fi.help_text_client_password') }}</small>
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label>{{ trans('fi.password_confirmation') }}:</label>
                {!! Form::password('password_confirmation', ['id' => 'password_confirmation', 'class' => 'form-control']) !!}
                <small>{{ trans('fi.help_text_client_password') }}</small>
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <label>{{ trans('fi.address') }}: </label>
    {!! Form::textarea('address', null, ['id' => 'address', 'class' => 'form-control', 'rows' => 4]) !!}
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label>{{ trans('fi.city') }}: </label>
            {!! Form::text('city', null, ['id' => 'city', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>{{ trans('fi.state') }}: </label>
            {!! Form::text('state', null, ['id' => 'state', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>{{ trans('fi.postal_code') }}: </label>
            {!! Form::text('zip', null, ['id' => 'zip', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>{{ trans('fi.country') }}: </label>
            {!! Form::text('country', null, ['id' => 'country', 'class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label>{{ trans('fi.phone_number') }}: </label>
            {!! Form::text('phone', null, ['id' => 'phone', 'class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label>{{ trans('fi.fax_number') }}: </label>
            {!! Form::text('fax', null, ['id' => 'fax', 'class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label>{{ trans('fi.mobile_number') }}: </label>
            {!! Form::text('mobile', null, ['id' => 'mobile', 'class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label>{{ trans('fi.web_address') }}: </label>
            {!! Form::text('web', null, ['id' => 'web', 'class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label>{{ trans('fi.default_currency') }}: </label>
            {!! Form::select('currency_code', $currencies, ((isset($client)) ? $client->currency_code : config('fi.baseCurrency')), ['id' => 'currency_code', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>{{ trans('fi.language') }}: </label>
            {!! Form::select('language', $languages, ((isset($client)) ? $client->language : config('fi.language')), ['id' => 'language', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>{{ trans('fi.default_invoice_template') }}: </label>
            {!! Form::select('invoice_template', $invoiceTemplates, null, ['id' => 'invoice_template', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>{{ trans('fi.default_quote_template') }}: </label>
            {!! Form::select('quote_template', $quoteTemplates, null, ['id' => 'quote_template', 'class' => 'form-control']) !!}
        </div>
    </div>
</div>

@if ($customFields->count())
    @include('custom_fields._custom_fields')
@endif