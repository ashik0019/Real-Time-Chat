<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Real Time Chat </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        .list-group{
            overflow: scroll;
            max-height: 200px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row mt-5" id="app">
        <div class="col-md-2"></div>
        <div class=" col-md-8  col-sm-12">
            <li class="list-group-item active">Chat Room</li>

            <ul class="list-group" v-chat-scroll>
                <message
                    v-for="value, index in chat.message"
                    :key=value.index
                    :color= chat.color[index]
                    :user = chat.user[index]
                    :time = chat.time[index]
                >@{{value}}
                </message>
            </ul>
            <div class="badge badge-pill badge-primary">@{{ typing }}</div>
            <input type="text" v-model="message" @keyup.enter="send()" class="form-control" placeholder="Type your message here..">
        </div>
    </div>
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
