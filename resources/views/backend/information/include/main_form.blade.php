<div class="form-group">
    {!! Form::label('fullName', 'Full Name') !!}
    {!! Form::text('fullName', null,['placeholder' => 'Enter Full Name','class' => 'form-control']) !!}
    @include('backend.includes.form_error', ['field' => 'fullName'])
</div>
<div class="form-group">
    {!! Form::label('website', 'Website') !!}
    {!! Form::text('website', null,['placeholder' => 'Enter Webite','class' => 'form-control']) !!}
    @include('backend.includes.form_error', ['field' => 'website'])
</div><div class="form-group">
    {!! Form::label('dob', 'Date of Birth') !!}
    {!! Form::text('dob', null,['placeholder' => 'Enter Date of Birth','class' => 'form-control']) !!}
    @include('backend.includes.form_error', ['field' => 'dob'])
</div>
<div class="form-group">
    {!! Form::label('heading', 'Heading') !!}
    {!! Form::text('heading', null,['placeholder' => 'Enter Heading','class' => 'form-control']) !!}
    @include('backend.includes.form_error', ['field' => 'heading'])
</div
<div class="form-group">
    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', null,['placeholder' => 'Enter Email','class' => 'form-control']) !!}
    @include('backend.includes.form_error', ['field' => 'email'])
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null,['placeholder' => 'Enter Slug','class' => 'form-control']) !!}
    @include('backend.includes.form_error', ['field' => 'slug'])
</div>
<div class="form-group">
    {!! Form::label('detail', 'Details') !!}
    {!! Form::textarea('detail', null,['placeholder' => 'Enter Details','class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('expBody1', 'Experience Body 1') !!}
    {!! Form::text('expBody1', null,['placeholder' => 'Enter Experience Body 1','class' => 'form-control']) !!}
    @include('backend.includes.form_error', ['field' => 'expBody1'])
</div>
<div class="form-group">
    {!! Form::label('expTitle1', 'Experience Title 1') !!}
    {!! Form::textarea('expTitle1', null,['placeholder' => 'Enter Experience Title 1','class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('expBody2', 'Experience Body 2') !!}
    {!! Form::text('expBody2', null,['placeholder' => 'Enter Experience Body 2','class' => 'form-control']) !!}
    @include('backend.includes.form_error', ['field' => 'expBody2'])
</div>
<div class="form-group">
    {!! Form::label('expTitle2', 'Experience Title 2') !!}
    {!! Form::textarea('expTitle2', null,['placeholder' => 'Enter Experience Title 2','class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('expBody3', 'Experience Body 3') !!}
    {!! Form::text('expBody3', null,['placeholder' => 'Enter Experience Body 3','class' => 'form-control']) !!}
    @include('backend.includes.form_error', ['field' => 'expBody3'])
</div>
<div class="form-group">
    {!! Form::label('expTitle3', 'Experience Title 3') !!}
    {!! Form::textarea('expTitle3', null,['placeholder' => 'Enter Experience Title 3','class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('status', 'Status') !!}
    {!! Form::radio('status', 1) !!} Active
    {!! Form::radio('status', 0,true) !!} De Active
</div>
<div class="form-group">
    {!! Form::label('image', 'Image') !!}
    {!! Form::file('information_image',['class' => 'form-control']) !!}
    @include('backend.includes.form_error', ['field' => 'image'])
</div>
<div class="form-group">
    {!! Form::submit($button,['class' => 'btn btn-success']) !!}
</div>
