@extends('layouts.app')
@section('exhead')
<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
<script type="text/javascript" src="//cdn.jsdelivr.net/jwplayer/5.10/jwplayer.js"></script>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body jwvideo-player">
                    <h1 class="live-title">Live Cam</h1>
                    <div id='player_1'>This text will be replaced</div>
                    <script type="text/javascript">
                    jwplayer('player_1').setup({
                        file: "http://testing.grappler.tk/files/2013/01/trailer_1080p.mp4",
                        width: "100%",
                        height: "100%",
                        stretching: "uniform",
                        flashplayer:"//cdn.jsdelivr.net/jwplayer/5.10/player.swf"
                      });
                    </script>
                </div>

                <div class="panel-body Wowza-gallery">
                    <h1 class="gallery-title">Input Streams</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('exjs')
<!--<script type="text/javascript" src="{{ asset('js/home.js') }}"></script>-->
@endsection