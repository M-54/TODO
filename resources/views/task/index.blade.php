<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link href="{{ asset('css/test.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Hello, world!</title>
</head>

<body>
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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
