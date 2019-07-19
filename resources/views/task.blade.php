@extends('layouts.app')

@section('title')
    @lang('app.app_title')
@endsection

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @lang('app.new_task')
                </div>

                <div class="panel-body">
                    <!-- New Task Form -->
                    <form class="form-horizontal" method="post" action="{{ url('task') }}">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        
                        @include('common.errors')

                        @include('common.status')
                        
                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">
                                @lang('app.task_label')
                            </label>
                            <div class="col-sm-6">
                                <input type="text"
                                    name="name"
                                    id="name"
                                    class="form-control"
                                    placeholder="@lang('app.new_task_placeholder')">
                            </div>
                        </div>
            
                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>
                                    @lang('app.add_task_btn')
                                </button>
                            </div>
                        </div>                        
                    </form>
                </div>
            </div>

            <!-- Current Tasks -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    @lang('app.current_task')
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                            <th>@lang('app.task_label')</th>
                            <th>&nbsp;</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
        
@endsection

