<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <link href="{{asset('css/test.css')}}" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
    <title>Hello, world!</title>
</head>

<body>

    <!--For Page-->
    <div class="page">
        <!--Card-->
        <div class="card">
            <!--Card Header-->
            <div class="card-header">
                <p> <i class="fa fa-bars"></i> <i class="fa fa-calendar ml-4" aria-hidden="true"></i> <i
                        class="fa fa-star ml-4" aria-hidden="true"></i> <span class="float-right"> <span
                            class="mr-4 navTask">Task</span> <span class="mr-4">Archive</span> <i class="fa fa-search"
                            aria-hidden="true"></i> </span> </p>
            </div>
            <!--Card Body-->
            <div class="card-body">
                <p class="heading1"> <span class="today">Today</span> <span class="float-right headingright">7h
                        15min</span> </p>
                <p> <i class="fa fa-calendar mr-2" aria-hidden="true"></i> <span class="task mt-4">Take kids to
                        school</span> <span class="time ml-2">8:00-8:30AM</span> <span class="float-right">30min</span>
                </p>
                <p><i class="	fa fa-circle-thin mr-2"></i> <span class="task">Process email</span> <i
                        class="fa fa-thumb-tack ml-2" aria-hidden="true"></i> <span
                        class="time ml-2">8:00-9:30AM</span><span class="float-right">1h</span> </p>
                <p><i class="fa fa-calendar mr-2" aria-hidden="true"></i> <span class="task">Daily Stand-Up
                        meeting</span> <span class="time ml-2">9:00-10:00AM</span> <span
                        class="float-right">30min</span> </p>
                <p><i class="	fa fa-circle-thin mr-2"></i><span class="task">Create new templates</span> <i
                        class="fa fa-thumb-tack ml-2" aria-hidden="true"></i> <i class="fa fa-user ml-2"></i> <span
                        class="time ml-2">10:00-11:45AM</span> <span class="float-right">1h 45min</span> </p>
                <p><i class="fa fa-calendar mr-2" aria-hidden="true"></i> <span class="task">Lunch with Anna</span>
                    <span class="time ml-2">12:00-12:30PM</span> <span class="float-right">30min</span> </p>
                <p class="text-muted"><i class="fa fa-plus mr-1" aria-hidden="true"></i> Add Task for Today</p>
                <p class="heading2"><span class="tomorrow">Tomorrow</span> <span class="float-right headingright">6h
                        30min</span> </p>
                <p class="task2 mt-4"><i class="fa fa-calendar mr-2" aria-hidden="true"></i> <span
                        class="task">Breakfast with the Marketing team</span> <span class="time ml-2">8:00-8:30AM</span>
                    <span class="float-right">30min</span></p>
            </div>
        </div>
    </div>

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
