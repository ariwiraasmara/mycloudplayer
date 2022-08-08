<div id="musiclist" class="is-hidden m-l-r-10">
    <div class="field has-addons">
        <div class="control is-link">
            <div class="select is-fullwidth is-rounded">
                <select name="select_playlist" id="select_playlist" class="">
                  <option value="" disabled selected>-- Select Playlist --</option>
                </select>
            </div>
        </div>
        <div class="control is-expanded">
            <input type="text" name="" id="" class="input is-rounded" placeholder="Find your music here within selected playlist..">
        </div>
    </div>

    <div class="m-b-50 has-text-black">
        @for ($x=1; $x < 101; $x++)
        <div class="item-list">
            Item Number {{ $x }}
        </div>
        @endfor
    </div>
</div>
