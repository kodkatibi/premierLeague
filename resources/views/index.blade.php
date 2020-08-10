@extends('layouts.template')

@section('content')

    <!-- container section start -->
    <section id="container" class="">
        <!--header start-->
        <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i
                        class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="/" class="logo">Ali <span class="lite">Çağlar</span></a>
            <!--logo end-->

        </header>
        <!--header end-->

    @include('includes.sidebar')


    <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!-- page start-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                            <header class="panel-heading">
                                League Table
                            </header>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Teams</th>
                                    <th>Pts</th>
                                    <th>P</th>
                                    <th>W</th>
                                    <th>D</th>
                                    <th>L</th>
                                    <th>GD</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($teams as $team)
                                    <tr>
                                        <td>{{$team->team_name}}</td>
                                        <td>{{$team->team_point}}</td>
                                        <td>{{\App\Models\Match::totalGame($team->id)}}</td>
                                        <td>{{$team->wonGame->count()}}</td>
                                        <td>{{\App\Models\Match::lostGame($team->id)}}</td>
                                        <td>{{\App\Models\Match::lostGame($team->id)}}</td>
                                        <td>{{$team->team_goal}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </section>

                            <a type="button" class="btn btn-info" href="{{route('playGame')}}">Play</a>


                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <section class="panel">
                            <header class="panel-heading">
                                Striped Table
                            </header>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>
                    <div class="col-sm-6">
                        <section class="panel">
                            <header class="panel-heading">
                                Hover Table
                            </header>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sumon</td>
                                    <td>Mosa</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>

                </div>
                <!-- page end-->
            </section>
        </section>
        <!--main content end-->

    </section>
    <!-- container section end -->



@endsection

@section('css')

@endsection

@section('js')

@endsection
