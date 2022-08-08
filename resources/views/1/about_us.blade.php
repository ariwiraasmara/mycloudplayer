@extends('index')
@section('content')
<div class="p-50">
    <div class="box1 p-30 m-b-50">
        <div class="title center bold text-is-black">{{ $title }}</div>

        <div class="m-t-30 justify content text-is-black">
            <p class="center">
                Cloud Storage Drive <span class="italic">(music files only)</span> <br/>
                + <br/>
                Music Player <span class="italic">(built-in)</span>
            </p>
            <p>
                <span class="bold italic underline">My Cloud Player</span> is a music platform that can store your <span class="italic">(only)</span> music files, after you store it, you can play it on the built-in player. So that you can hear the music wherever and whenever you are!
                <br/><br/>
                Doesn't matter you're logged in on your PC Device (any os) or Smarphone Device (any os) or any other OS, just enter and use our platform. We hope it suits you!
                <br/><br/>
                Well, technically it's created based on our creator experiences. 🤭
                <br/><br/>
                Wether it's just for your music collection or store your favorites and/or likes musics.
                <br/><br/>
                Interested in our product? Feel free to register <a href="signin" class="is-link">here</a>, it won't charge you for the first time use! Well, anyway you got free 4GB storage for the first time. If you Kepo, you can check our upgrade storage level, <a href="upgradestorage">here</a>
            </p>
        </div>

        <div class="center">
            <a href="login" class="button is-link is-large text-is-white is-rounded-full">
                <ion-icon name="home-outline"></ion-icon>
            </a>
        </div>

    </div>
</div>
@endsection
