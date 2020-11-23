<div class="form-group">
  {!! Form::label('name', 'Name') !!}
  {!! Form::text('name', null,['placeholder' => 'Enter Name','class' => 'form-control']) !!}
    @include('backend.includes.form_error', ['field' => 'name'])
</div>
<div class="form-group">
  {!! Form::label('prfession', 'Profession') !!}
  {!! Form::text('profession', null,['placeholder' => 'Enter Profession','class' => 'form-control']) !!}
    @include('backend.includes.form_error', ['field' => 'profession'])
</div>
<div class="form-group">
  {!! Form::label('description', 'Description') !!}
  {!! Form::textarea('description', null,['placeholder' => 'Enter Description','class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('image', 'Image') !!}
    {!! Form::file('review_image',['class' => 'form-control']) !!}
    @include('backend.includes.form_error', ['field' => 'image'])
</div>
<div class="form-group">
  {!! Form::label('status', 'Status') !!}
  {!! Form::radio('status', 1) !!} Active
  {!! Form::radio('status', 0,true) !!} De Active
</div>
<div class="form-group">
  {!! Form::submit($button,['class' => 'btn btn-success']) !!}
</div>
