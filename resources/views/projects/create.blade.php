@extends('layouts.app')

@section('title', 'Create Project')

@section('content_header')
    <h4>{{ 'Create Project' }}</h4>
@stop

@section('content')

    <form action="{{ route('projectStore') }}" method="post">
        @csrf()
        <div class="card card-outline card-info">

            <!-- /.card-header -->
            <div class="card-body pad">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label><?php echo 'Nomi'; ?></label>
                            <input class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Description</label>
                            <input class="form-control" name="description" required>
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary float-right">&check; Saqlash</button>
            </div>
        </div>
    </form>
@stop
