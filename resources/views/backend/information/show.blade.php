@extends('layouts.backend')

@section('title',$panel . ' ' . $page_title)

@section('content')
  <!-- Content Header (Page header) -->
  @include('backend.includes.breadcrumb')

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">
          {{$panel}} {{$page_title}}
          <a href="{{route($base_route . '.index')}}" class="btn btn-success"> <i class="fa fa-list"></i> List {{$panel}} </a>
        </h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <table class="table table-bordered">
          <tr>
            <th>Full Name</th>
            <td>{{$data['row']->fullName}}</td>
          </tr>
          <tr>
            <th>Date of Birth</th>
            <td>{{$data['row']->dob}}</td>
          </tr>
            <tr>
                <th>Website</th>
                <td>{{$data['row']->website}}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$data['row']->email}}</td>
            </tr>
            <tr>
                <th>Slug</th>
                <td>{{$data['row']->slug}}</td>
            </tr>
            <tr>
                <th>Experience Title 1</th>
                <td>{{$data['row']->expTitle1}}</td>
            </tr>
            <tr>
                <th>Experience Body 1</th>
                <td>{{$data['row']->expBody1}}</td>
            </tr>
            <tr>
                <th>Experience Title 2</th>
                <td>{{$data['row']->expTitle1}}</td>
            </tr>
            <tr>
                <th>Experience Body 2</th>
                <td>{{$data['row']->expBody1}}</td>
            </tr>
            <tr>
                <th>Experience Title 3</th>
                <td>{{$data['row']->expTitle1}}</td>
            </tr>
            <tr>
                <th>Experience Body 3</th>
                <td>{{$data['row']->expBody1}}</td>
            </tr>
          <tr>
            <th>Status</th>
            <td>
              @if ($data['row']->status == 1)
                <span class="label label-success">Active</span>
              @else
                <span class="label label-danger">DeActive</span>
              @endif
            </td>
          </tr>
          <tr>
            <th>Created At</th>
            <td>{{$data['row']->created_at}}</td>
          </tr><tr>
            <th>Updated_at</th>
            <td>{{$data['row']->updated_at}}</td>
          </tr>
          <tr>
            <th>Created By</th>
            <td>{{$data['row']->createdBy->name}}</td>
          </tr>

          <tr>
            <td>
              <a href="{{route( $base_route . '.edit',$data['row']->id)}}" class="btn btn-info">Edit</a>
            </td>
            <td>

              {!! Form::close() !!}
            </td>
          </tr>

        </table>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        Footer
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
@endsection
