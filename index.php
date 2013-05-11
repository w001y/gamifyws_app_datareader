<!DOCTYPE html>
<html>
<head>
    <title>Gamify.WS Data Reader</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
</head>
<body>

<div class="container">

    <div class="row">
        <div class="span3">
            <h4>Gamify.WS Data Reader</h4>
            <img src="http://gamify.ws/img/logo.png" />
        </div>
        <div class="span3">
            <h6>What's This?</h6>
            <p>
                This little app interacts with the Gamify.WS gamification API and gives you some current data from your scheme.
            </p>
        </div>
        <div class="span3">
            <h6>Getting Started</h6>
            <p>
                <a href="http://gamify.ws/#scheme_register" target="_blank">Register a scheme</a> using the Gamify.ws API, and once you have your API key and secret, plug them into the classes/gamify.class.php file, request a salt below, then get started.
            </p>
        </div>
    </div>

    <div class="row">


        <div class="span4">
            <h5>Methods</h5>
            <a href="#" class="call btn btn-small" data-method="request_salt">Get Salt</a>
            <a href="#" class="call btn btn-small" data-method="scheme_get_my_id">Scheme ID</a>
            <a href="#" class="call btn btn-small" data-method="scheme_get_details">Scheme Details</a><br />
            <a href="#" class="call btn btn-small" data-method="scheme_get_calls_last_hour"># Calls in Last Hour</a><br />

            <br />
            <br />

            <a href="#" class="call btn btn-small" data-method="scheme_get_items" data-type="users">Users</a>
            <a href="#" class="call btn btn-small" data-method="scheme_get_items" data-type="actions">Actions</a>
            <a href="#" class="call btn btn-small" data-method="scheme_get_items" data-type="action_groups">Action Groups</a><br />
            <a href="#" class="call btn btn-small" data-method="scheme_get_items" data-type="badges">Badges</a>
            <a href="#" class="call btn btn-small" data-method="scheme_get_items" data-type="levels">Levels</a>
            <a href="#" class="call btn btn-small" data-method="scheme_get_items" data-type="updates">Updates</a><br /><br />
            <a href="#" class="call btn btn-small" data-method="scheme_get_items" data-type="actions_awarded">Awarded Actions</a>
            <a href="#" class="call btn btn-small" data-method="scheme_get_items" data-type="action_groups_awarded">Awarded Action Groups</a>
            <a href="#" class="call btn btn-small" data-method="scheme_get_items" data-type="points_awarded">Awarded Points</a>
            <a href="#" class="call btn btn-small" data-method="scheme_get_items" data-type="badges_awarded">Awarded Badges</a>





        </div>


        <div class="span8">
            Reply
            <div><pre  id="ajax_reply"></pre></div>
        </div>

    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
