<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    {!! Form::label('user_id', 'User Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('user_id', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('fname') ? 'has-error' : ''}}">
    {!! Form::label('fname', 'Fname', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('fname', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('fname', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('lneme') ? 'has-error' : ''}}">
    {!! Form::label('lneme', 'Lneme', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('lneme', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('lneme', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('fname_kana') ? 'has-error' : ''}}">
    {!! Form::label('fname_kana', 'Fname Kana', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('fname_kana', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('fname_kana', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('lnem_kana') ? 'has-error' : ''}}">
    {!! Form::label('lnem_kana', 'Lnem Kana', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('lnem_kana', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('lnem_kana', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('birthday') ? 'has-error' : ''}}">
    {!! Form::label('birthday', 'Birthday', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('birthday', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('birthday', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tel1') ? 'has-error' : ''}}">
    {!! Form::label('tel1', 'Tel1', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tel1', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('tel1', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tel2') ? 'has-error' : ''}}">
    {!! Form::label('tel2', 'Tel2', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tel2', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('tel2', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tel3') ? 'has-error' : ''}}">
    {!! Form::label('tel3', 'Tel3', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tel3', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('tel3', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('address1') ? 'has-error' : ''}}">
    {!! Form::label('address1', 'Address1', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('address1', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('address1', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('address2') ? 'has-error' : ''}}">
    {!! Form::label('address2', 'Address2', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('address2', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('address2', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('address3') ? 'has-error' : ''}}">
    {!! Form::label('address3', 'Address3', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('address3', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('address3', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('other') ? 'has-error' : ''}}">
    {!! Form::label('other', 'Other', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('other', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('other', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('admintext') ? 'has-error' : ''}}">
    {!! Form::label('admintext', 'Admintext', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('admintext', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('admintext', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
