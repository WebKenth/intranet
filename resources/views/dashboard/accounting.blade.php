@extends('layouts.app')

@section('content')
        <div class="col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading">Dagsrapporter</div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span>Dagsrapport Tirsdag</span>
                            <button class="btn btn-info pull-right">Download</button>
                        </li>
                        <li class="list-group-item">
                            <span>Dagsrapport Onsdag</span>
                            <button class="btn btn-info pull-right">Download</button>
                        </li>
                        <li class="list-group-item">
                            <span>Dagsrapport Torsdag</span>
                            <button class="btn btn-info pull-right">Download</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading">Indkøbskurv</div>

                <div class="panel-body">
                    <ul>
                        <li>Ost</li>
                        <li>Fransbrød</li>
                        <li>Nudler</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-danger">
                <div class="panel-heading">Økonomi</div>

                <div class="panel-body">
                    <ul>
                        <li>-3000kr.</li>
                        <li>-3000kr.</li>
                        <li>-3000kr.</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div> -->
@endsection
