@extends('admin.index')

@section('head')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawCharts);

        function drawCharts() {
            drawBlogChart();
            drawUserChart();
        }

        function drawBlogChart() {
            var data = google.visualization.arrayToDataTable([
                ['Status', 'Amount'],
                ['Publish', {{ $publish_blog }}],
                ['Draft', {{ $draft_blog }}],
                ['Disable', {{ $disable_blog }}],
            ]);

            var options = {
                title: 'Blog Summary',
                pieHole: 0.2,
            };

            var chart = new google.visualization.PieChart(document.getElementById('blogchart'));
            chart.draw(data, options);
        }

        function drawUserChart() {
            var data = google.visualization.arrayToDataTable([
                ['Status', 'Amount'],
                ['Normal', {{ $user }}],
                ['Admin', {{ $admin_user }}],
                ['Suspend', {{ $suspend_user }}],
            ]);

            var options = {
                title: 'User Summary',
                pieHole: 0.2,
            };

            var chart = new google.visualization.PieChart(document.getElementById('userchart'));
            chart.draw(data, options);
        }
    </script>
@endsection

@section('show')
    <div class="row-card col-md-12 col-sm-12 col-xs-12" style="padding: 1%">
        <h2 class="primary-section-heading">
            Summary
        </h2>
        <div class="col-md-6 col-sm-6" style="padding: 10px">
            <div class="summary-card">
                <h2>
                    <a href="{{ url('admin/blog') }}">Blog</a>
                    <a href="{{ url('admin/blog/create') }}" class="btn btn-default">Create</a>
                </h2>
                <hr>
                <div id="blogchart" class="chart"></div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6" style="padding: 10px">
            <div class="summary-card">
                <h2>
                    <a href="{{ url('admin/user') }}">User</a>
                    <a href="{{ url('admin/user/create') }}" class="btn btn-default">Create</a>
                </h2>
                <hr>
                <div id="userchart" class="chart"></div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6" style="padding: 10px">
            <div class="summary-card-small">
                <h2>
                    <a href="{{ url('admin/curricula') }}">Curricula</a>
                </h2>
                <hr>
                <h4>Amount: {{ $curricula }}</h4>
                <a href="{{ url('admin/curricula/create') }}" class="btn btn-default btn-block">Create</a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6" style="padding: 10px">
            <div class="summary-card-small">
                <h2>
                    <a href="{{ url('admin/teacher') }}">Teacher</a>
                </h2>
                <hr>
                <h4>Amount: {{ $teacher }}</h4>
                <a href="{{ url('admin/teacher/create') }}" class="btn btn-default btn-block">Create</a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6" style="padding: 10px">
            <div class="summary-card-small">
                <h2>
                    <a href="{{ url('admin/staff') }}">Staff</a>
                </h2>
                <hr>
                <h4>Amount: {{ $staff }}</h4>
                <a href="{{ url('admin/staff/create') }}" class="btn btn-default btn-block">Create</a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6" style="padding: 10px">
            <div class="summary-card-small">
                <h2>
                    <a href="{{ url('admin/research') }}">Research</a>
                </h2>
                <hr>
                <h4>Amount: {{ $research }}</h4>
                <a href="{{ url('admin/research/create') }}" class="btn btn-default btn-block">Create</a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6" style="padding: 10px">
            <div class="summary-card-small">
                <h2>
                    <a href="{{ url('admin/image') }}">Image</a>
                </h2>
                <hr>
                <h4>Amount: {{ $image }}</h4>
                <a href="{{ url('admin/image/create') }}" class="btn btn-default btn-block">Create</a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6" style="padding: 10px">
            <div class="summary-card-small">
                <h2>
                    <a href="{{ url('admin/file') }}">File</a>
                </h2>
                <hr>
                <h4>Amount: {{ $file }}</h4>
                <a href="{{ url('admin/file/create') }}" class="btn btn-default btn-block">Create</a>
            </div>
        </div>
        {{--<div class="col-md-3" style="padding: 10px">
            <div class="bg-danger" style="height: 300px;padding: 5%">
                <h2>Thesis</h2>
                <hr>
                <h4>Amount: {{ $thesis }}</h4>
                <a href="{{ url('admin/thesis/create') }}" class="btn btn-default">Create</a>
            </div>
        </div>--}}
    </div>
@endsection