@extends('layouts.backend')

@section('title',$panel . ' ' . $page_title)

@section('content')
  <!-- Content Header (Page header) -->

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
          <h1 class="card-description" style="text-align: center;">Details of {{$data['row']->fullName}}</h1>

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
            <th>Questions</th>
            <td>{{$data['row']->questions}}</td>
          </tr>
            <tr>
                <th>Answser</th>
                <td>{{$data['row']->answers}}</td>
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
            <th>updated_at</th>
            <td>{{$data['row']->updated_at}}</td>
          </tr>
          <tr>
            <th>Created By</th>
            <td>{{$data['row']->createdBy->name}}</td>
          </tr>

          <tr>
            <td>
              <a href="{{route( $base_route . '.edit',$data['row']->id)}}" class="btn btn-info"><i class="mdi mdi-table-edit"></i>Edit</a>
            </td>
            <td>
                <a href="{{route('backend.information.index')}}" class="btn btn-info"><i class="mdi mdi mdi-view-list"></i> List Sale</a>
{{--              {!! Form::open(['route' => [$base_route . '.destroy',$data['row']->id], 'method' => 'delete','onsubmit' => "return confirm('are you sure to delete?')"]) !!}--}}
{{--              {!! Form::submit('Delete',['class' => 'btn btn-danger']) !!}--}}
              {!! Form::close() !!}
            </td>
          </tr>

        </table>
      </div>
      <!-- /.box-body -->

      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
@endsection
