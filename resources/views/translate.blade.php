    @extends('layout.index')

@section('content')
<div class="content-wrapper clearfix">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{__("analitics")}}
        </h1>
        <button id = "viev" type="button">{{__('view')}}</button>
        <ol class="breadcrumb">
            <li><a href="/view"><i class="fa fa-dashboard"></i>{{__("view")}}</a></li>
        </ol>
    </section>


    <section class="content">
        {{-- FOUR BLOCKS --}}
        <div class="row">
            <a href="/dashboard">
                <div class="col-lg-4 col-xs-12">
                    <div class="small-box bg-light-blue clearbox">
                        <div class="inner clearfix">
                            <div class="dashboard-info-left">
                                <i class="fa fa-file"></i>
                            </div>
                            <div class="dashboard-info-middle">
                                <span> {{__('documentsatotal')}}</span>
                            </div>
                            <div class="dashboard-info-right">
                                <span class="badge">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/dashboard/?type=1">
                <div class="col-lg-4 col-xs-12">
                    <div class="small-box bg-red">
                        <div class="inner clearfix">
                            <div class="dashboard-info-left">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <div class="dashboard-info-middle">
                                <span> {{__("documentwork")}}</span>
                            </div>
                            <div class="dashboard-info-right">
                                <span class="badge">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/dashboard/?type=2">
                <div class="col-lg-4 col-xs-12">
                    <div class="small-box bg-green">
                        <div class="inner clearfix">
                            <div class="dashboard-info-left">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <div class="dashboard-info-middle">
                                <span> {{ __('dcumentsfinished')}}</span>
                            </div>
                            <div class="dashboard-info-right">
                                <span class="badge">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="small-box bg-teal">
                    <div class="inner clearfix">
                        <div class="dashboard-info-left">
                            <i class="fa fa-calendar "></i>
                        </div>
{{--                        <input type="text" id="daterange" name="daterange" class="pull-right" value="{{ date("d.m.Y",strtotime($start_date)) }} - {{ date("d.m.Y",strtotime($end_date)) }}">--}}
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive" >
            <table class="table table-bordered table-striped table-hover table-condensed">
                <thead class="theader-dark">
                <tr>
                    <td class="td-va">{{__("document")}}</td>
                    <td class="td-w60 td-ca td-va">{{__("stage")}} 1</td>
                    <td class="td-w60 td-ca td-va">{{__("stage")}} 2</td>
                    <td class="td-w60 td-ca td-va">{{__("stage")}} 3</td>
                    <td class="td-w60 td-ca td-va">{{__("stage")}} 4</td>
                    <td class="td-w60 td-ca td-va">{{__("stage")}} 5</td>
                    <td class="td-w60 td-ca td-va">{{__("stage")}} 6</td>
                    <td class="td-w60 td-ca td-va">{{__("stage")}} 7</td>
                    <td class="td-w60 td-ca td-va">{{__("stage")}} 8</td>
                    <td class="td-ca td-va">{{__("date")}}<br>{{__("create")}}</td>
                    <td class="td-ca td-va">{{__("date")}}<br>{{__("completion")}}</td>
                    <td class="td-w40 td-ca td-va">{{__("control")}}<br>{{__("completion")}}</td>
                </tr>
                </thead>
            </table>

        </div>
    </section>
</div>
    <script>
        b = document.getElementById("viev").onclick = () => location.href="/view";
    </script>
@endsection
