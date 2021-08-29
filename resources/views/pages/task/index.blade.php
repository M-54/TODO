@extends('layouts.default')
@section('title','Tasks Page')
@section('content')
    <form action="{{ route('task.update') }}" method="POST">
    @csrf
    <!--For Page-->
        <div class="page">
            <!--Card-->
            <div class="card">
                <!--Card Header-->
                <div class="card-header d-flex flex-row">
                    <h1 class="col-8">Tasks List</h1>
                    <a href="{{ route('task.create') }}" class="btn btn-primary btn-lg col-2 m-2"><b>Create
                            Task</b></a>
                    <button name='update' type="submit"
                            class="btn btn-secondary btn-lg col-2 m-2"><b>Update</b></button>
                </div>
                <!--Card Body-->
                <div class="card-body">
                    <p class="heading1"><span class="today">Today</span></p>
                    @if (empty($today_tasks))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            There is no Task for Today!
                        </div>
                    @endif
                    @foreach ($today_tasks as $task)
                        <div class="d-flex flex-row">
                            <div class="m-2">
                                <i class="fa fa-calendar mr-2" aria-hidden="true"></i>
                                @if ($task->is_done)
                                    <del>
                                        <span class="task mt-4">{{ $task->title }}</span>
                                        <span class="time ml-2">{{ $task->created_at }}</span>
                                    </del>
                                    <span class="float-right">Updated at : {{ $task->updated_at }}</span>
                                @endif
                                @if (!$task->is_done)
                                    <span class="task mt-4">{{ $task->title }}</span>
                                    <span class="time ml-2">{{ $task->created_at }}</span>
                                @endif
                            </div>

                            <div class="form-check m-2">
                                @if (!$task->is_done)
                                    <input name="{{ $task->id }}" class="form-check-input" type="checkbox"
                                           id="flexSwitchCheckDefault" value="{{ $task->id }}">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">
                                    </label>
                                @endif

                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="card-body">
                    <p class="heading1"><span class="today">Yesterday</span></p>
                    @if (empty($yesterday_tasks))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            There is no Task for Yesterday!
                        </div>
                    @endif
                    @foreach ($yesterday_tasks as $task)
                        <div class="d-flex flex-row">
                            <div class="m-2">
                                <i class="fa fa-calendar mr-2" aria-hidden="true"></i>
                                @if ($task->is_done)
                                    <del>
                                        <span class="task mt-4">{{ $task->title }}</span>
                                        <span class="time ml-2">{{ $task->created_at }}</span>
                                    </del>
                                    <span class="float-right">Updated at : {{ $task->updated_at }}</span>
                                @endif
                                @if (!$task->is_done)
                                    <span class="task mt-4">{{ $task->title }}</span>
                                    <span class="time ml-2">{{ $task->created_at }}</span>
                                @endif
                            </div>

                            <div class="form-check m-2">
                                @if (!$task->is_done)
                                    <input name="{{ $task->id }}" class="form-check-input" type="checkbox"
                                           id="flexSwitchCheckDefault" value="{{ $task->id }}">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">
                                    </label>
                                @endif

                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="card-body">
                    <p class="heading1"><span class="today">Last Days</span></p>
                    @if (empty($lastdays_tasks))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            There is no Task for Last Days!
                        </div>
                    @endif
                    @foreach ($lastdays_tasks as $task)
                        <div class="d-flex flex-row">
                            <div class="m-2">
                                <i class="fa fa-calendar mr-2" aria-hidden="true"></i>
                                @if ($task->is_done)
                                    <del>
                                        <span class="task mt-4">{{ $task->title }}</span>
                                        <span class="time ml-2">{{ $task->created_at }}</span>
                                    </del>
                                    <span class="float-right">Updated at : {{ $task->updated_at }}</span>
                                @endif
                                @if (!$task->is_done)
                                    <span class="task mt-4">{{ $task->title }}</span>
                                    <span class="time ml-2">{{ $task->created_at }}</span>
                                @endif
                            </div>

                            <div class="form-check m-2">
                                @if (!$task->is_done)
                                    <input name="{{ $task->id }}" class="form-check-input" type="checkbox"
                                           id="flexSwitchCheckDefault" value="{{ $task->id }}">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">
                                    </label>
                                @endif

                            </div>
                        </div>
                    @endforeach
                </div>



            </div>

        </div>
    </form>
@endsection
