<div class="form-group">
    {!! Form::label('questions', 'Questions') !!}
    {!! Form::text('questions', null,['placeholder' => 'Enter Questions','class' => 'form-control']) !!}
    @include('backend.includes.form_error', ['field' => 'questions'])
</div>
<div class="form-group">
    {!! Form::label('answers', 'Answers') !!}
    {!! Form::text('answers', null,['placeholder' => 'Enter Answers','class' => 'form-control']) !!}
    @include('backend.includes.form_error', ['field' => 'answers'])
</div>
<div class="form-group">
  {!! Form::label('status', 'Status') !!}
  {!! Form::radio('status', 1) !!} Active
  {!! Form::radio('status', 0,true) !!} De Active
</div>

<div class="form-group">
  {!! Form::submit($button,['class' => 'btn btn-success']) !!}
</div>
