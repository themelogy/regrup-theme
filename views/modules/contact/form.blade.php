{!! Form::open(['route' => 'contact.send', 'class' => 'contact', 'method'=>'post']) !!}
{!! Form::hidden('from', Request::path()) !!}
<div class="row padding-xs-top">
    <div class="col-md-6 col-sm-6">
        <div class="form-group">
            {!! Form::text('first_name', old('first_name'), ['class'=>'form-control','placeholder'=>trans('contact::contacts.form.first_name')]) !!}
            {!! $errors->first("first_name", '<span class="help-block red-text">:message</span>') !!}
        </div>
        <div class="form-group">
            {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>trans('contact::contacts.form.email')]) !!}
            {!! $errors->first("email", '<span class="help-block red-text">:message</span>') !!}
        </div>
    </div>
    <div class="col-md-6 col-sm-6">
        <div class="form-group">
            {!! Form::text('last_name', old('last_name'), ['class'=>'form-control', 'placeholder'=>trans('contact::contacts.form.last_name')]) !!}
            {!! $errors->first("last_name", '<span class="help-block red-text">:message</span>') !!}
        </div>
        <div class="form-group">
            {!! Form::text('phone', old('phone'), ['class'=>'form-control', 'placeholder'=>trans('contact::contacts.form.phone')]) !!}
            {!! $errors->first("phone", '<span class="help-block red-text">:message</span>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {!! Form::textarea('enquiry', old('enquiry'), ['rows'=>4,'class'=>'form-control', 'placeholder'=>trans('contact::contacts.form.enquiry')]) !!}
            {!! $errors->first("enquiry", '<span class="help-block red-text">:message</span>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <button type="submit" name="submit" class="btn submit-button text-uppercase">{{ trans('contact::contacts.form.submit') }}</button>
    </div>
    <div class="col-md-9 text-right">
        {!! Captcha::display(null, ['style'=>'transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;']) !!}
        {!! $errors->first("g-recaptcha-response", '<span class="help-block red-text">:message</span>') !!}
    </div>
</div>
{!! Form::close() !!}