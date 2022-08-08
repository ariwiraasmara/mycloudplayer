<div class="is-hidden m-b-0" id="setting">
    <section class="hero is-link p-t-10 p-b-10 p-l-20">
        <p class="title bold">Setting</p>
    </section>

    <div class="m-t-10 p-10 p-l-20 text-is-black">
        <form action="" method="post" name="setting_form" id="setting_form">

            <div class="control">
                <span class="bold">Theme : </span>
                <label class="radio">
                  <input type="radio" name="theme"> Dark
                </label>
                <label class="radio">
                  <input type="radio" name="theme"> Light
                </label>
            </div>

            <div class="control m-t-10">
                <span class="bold">Text Color : </span>
                <label class="radio">
                  <input type="radio" name="text"> Black
                </label>
                <label class="radio">
                  <input type="radio" name="text"> White
                </label>
            </div>

            <div class="field m-t-10">
                <div class="field-label"></div>
                <div class="field-body">
                    <div class="field is-expanded">
                        <div class="field has-addons">
                            <p class="control">
                                <a class="button is-static text-is-black bold">Bar Color</a>
                            </p>
                            <p class="control is-expanded">
                                <input type="number" name="wall_height" class="input" placeholder="Input RGB Hex Color Code..">
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="file has-name is-fullwidth">
                <label class="file-label">
                    <input class="file-input" type="file" name="wall_img">
                    <span class="file-cta">
                        <span class="file-icon">
                            <i class="fas fa-upload"></i>
                        </span>
                        <span class="file-label bold text-is-black">
                            You can upload image for wallpaper
                        </span>
                    </span>
                    <span class="file-name">
                        filename.png
                    </span>
                </label>
            </div>

            <div class="field m-t-10">
                <div class="field-label"></div>
                <div class="field-body">
                    <div class="field is-expanded">
                        <div class="field has-addons">
                            <p class="control">
                                <a class="button is-static text-is-black bold">Wallpaper Height</a>
                            </p>
                            <p class="control is-expanded">
                                <input type="number" name="wall_height" class="input" placeholder="Input number of height..">
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="field m-t-10">
                <div class="field-label"></div>
                <div class="field-body">
                    <div class="field is-expanded">
                        <div class="field has-addons">
                            <p class="control">
                                <a class="button is-static text-is-black bold">Wallpaper Width</a>
                            </p>
                            <p class="control is-expanded">
                                <input type="number" name="wall_width" class="input" placeholder="Input number of width..">
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="field m-t-10">
                <div class="field-label"></div>
                <div class="field-body">
                    <div class="field is-expanded">
                        <div class="field has-addons">
                            <p class="control">
                                <a class="button is-static text-is-black bold">Wallpaper Size</a>
                            </p>
                            <p class="control is-expanded">
                                <input type="text" name="wall_width" class="input" placeholder="Read the description below..">
                            </p>
                        </div>
                        <p class="help">Choose:
                            <span class="italic underline">auto</span>
                            or
                            <span class="italic underline">contain</span>
                            or
                            <span class="italic underline">number of length (it will convert to px)</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="control">
                <div class="select is-fullwidth">
                    <select name="wall_position" id="wall_position" class="text-is-black">
                        <option value="" disabled selected>-- Wallpaper Position --</option>
                        <option value="left top">left top</option>
                        <option value="left center">left center</option>
                        <option value="left bottom">left bottom</option>
                        <option value="right top">right top</option>
                        <option value="right center">right center</option>
                        <option value="right bottom">right bottom</option>
                        <option value="center top">center top</option>
                        <option value="center center">center center</option>
                        <option value="center bottom">center bottom</option>
                    </select>
                </div>
            </div>

            <div class="control m-t-10">
                <div class="select is-fullwidth">
                    <select name="wall_position" id="wall_position" class="text-is-black">
                        <option value="" disabled selected>-- Wallpaper Repeat Type --</option>
                        <option value="repeat">repeat</option>
                        <option value="repeat-x">repeat-x</option>
                        <option value="repeat-y">repeat-y</option>
                        <option value="no-repeat">no-repeat</option>
                    </select>
                </div>
            </div>

            <div class="control m-t-10">
                <div class="select is-fullwidth">
                    <select name="wall_position" id="wall_position" class="text-is-black">
                        <option value="" disabled selected>-- Wallpaper Attachment Type --</option>
                        <option value="scroll">scroll</option>
                        <option value="fixed">fixed</option>
                        <option value="">no attachment</option>
                    </select>
                </div>
            </div>

            <div class="buttons is-centered m-t-30 m-b-40">
                <button type="submit" class="button is-danger is-rounded is-selected" name="setting_ok" id="setting_ok">Update Setting</button>
            </div>

        </form>
    </div>
</div>
