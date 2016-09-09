<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--<title>Guidebook</title>--}}
    <title>{{ $pageTitle }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/supplemental.css">

    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!--Bootstrap-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'INVALID', 'auto');
        ga('send', 'pageview');

    </script>

</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://cecentral.com"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/">Guidebook<span class="sr-only">(current)</span></a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="disabled"><a href="/readme">Login</a></li>
                <li>
                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search" disabled>
                        </div>
                        <button type="submit" class="btn btn-default" disabled>Submit</button>
                    </form>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="btn disabled pull-left" disabled>Preface</a></li>
                        <li><a href="/">Table of Contents</a></li>
                        <li><a href="#" class="btn disabled pull-left" disabled>Activities</a></li>
                        <li><a href="#" class="btn disabled pull-left" disabled>Members</a></li>
                        <li><a href="#" class="btn disabled pull-left" disabled>Clients</a></li>
                        <li><a href="#" class="btn disabled pull-left" disabled>Reports</a></li>
                        <li><a href="#" class="btn disabled pull-left" disabled>Finance</a></li>
                        <li><a href="#" class="btn disabled pull-left" disabled>Ideas</a></li>
                        <li><a href="#" class="btn disabled pull-left" disabled>Tools</a></li>
                        <li role="separator" id="divider" class="divider"></li>
                        <li><a href="http://cecentral.atlassian.net">Jira</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>



<div class = "container">

    <div class="flex-center position-ref">

        @yield('body')

    </div>
</div>

<script>
    $(document).ready(function () {
        $("img").addClass("img-responsive");
    });
</script>

<script type="text/javascript" src="https://cecentral.atlassian.net/s/1136c0e400521f6211e2d32621089b59-T/tn9djs/100011/c/1000.0.9/_/download/batch/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector.js?locale=en-US&collectorId=b27e03cf"></script>

</body>
</html>