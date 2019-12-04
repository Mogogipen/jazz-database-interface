<nav class="navbar is-dark" role="navigation" aria-label="main navigation"
    style="margin-bottom: 1rem;box-shadow:0px 3px 3px #8c8c8c;">
    <div class="navbar-brand">
        <div class="navbar-item">

            <!-- <img src="./assets/jazzhublogo.png" alt="cool_logo" /> -->
            <h1 class="title has-text-white" style="padding-left: 10px;"><i class="fal fa-cloud-music"></i> &nbsp;Jazz
                Hub</h1>
        </div>
    </div>
    <div class="navbar-end">
        <div class="navbar-item">
            <div class="buttons">
                <a id="showModal" class="button is-primary">
                    Add Song
                </a>
                <a href="/logout" class="button is-light">
                    Log out
                </a>
            </div>
        </div>
    </div>
</nav>

<div id="modal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content is-vcentered">
        <div class="box">
            <form method="POST" action="/add">
            <div class="field">

                <label class="label">Title</label>
                <div class="control">
                    <input class="input" name="title" type="text" placeholder="Song Title" required>
                </div>

                <label class="label">Composer</label>
                <div class="control">
                    <input class="input" name="composer" type="text" placeholder="First Last" required>
                </div>

                <label class="label">Lyricist</label>
                <div class="control">
                    <input class="input" name="lyricist" type="text" placeholder="First Last" required>
                </div>

                <label class="label">Arranger</label>
                <div class="control">
                    <input class="input" name="arranger" type="text" placeholder="First Last" required>
                </div>

                <label class="label">BPM</label>
                <div class="control">
                    <input class="input" name="bpm" type="text" placeholder="Speed" required>
                </div>

                <!-- ??? Not sure how to add an option to dropdown if what is inputed is a new tempo.. -->
                <label class="label">Tempo</label>
                <div class="control">
                    <input class="input" name="tempo" type="text" placeholder="Dance Style" required>
                </div>

                <label class="label">Opening Key</label>
                <div class="control">
                    <input class="input" name="openingKey" type="text" placeholder="'E-flat Major'" required>
                </div>

                <label class="label">PDF Link</label>
                <div class="control">
                    <input class="input" name="pdfLink" type="text" placeholder="Link to Google Drive" required>
                </div>

                <label class="label">YouTube Audio Example</label>
                <div class="control">
                    <input class="input" name="video_link" type="text" placeholder="Link to YouTube Video" required>
                </div>

                <div class="field">
                    <label class="label">Moonlighter</label>
                    <div class="control">
                        <div class="select">
                            <select required>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="field">
                    <label class="label">Red Dot</label>
                    <div class="control">
                        <div class="select">
                            <select required>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                </div>

                <label class="label">Required Clarinets</label>
                <div class="control">
                    <input class="input" name="ClarinetReq" type="text" value="0"  required>
                </div>

                <label class="label">Required Sopranos</label>
                <div class="control">
                    <input class="input" name="SopranoReq" type="text" value="0" required>
                </div>

                <label class="label">Required Altos</label>
                <div class="control">
                    <input class="input" name="AltoReq" type="text" value="0" required>
                </div>

                <label class="label">Required Tenors</label>
                <div class="control">
                    <input class="input" name="TenorReq" type="text" value="0" required>
                </div>

                <label class="label">Required Bari</label>
                <div class="control">
                    <input class="input" name="BariReq" type="text" value="0" required>
                </div>

                <label class="label">Required Trombones</label>
                <div class="control">
                    <input class="input" name="TromboneReq" type="text" value="0" required>
                </div>

                <label class="label">Required Trumpets</label>
                <div class="control">
                    <input class="input" name="TrumpetReq" type="text" value="0" required>
                </div>

                <label class="label">Required Piano</label>
                <div class="control">
                    <input class="input" name="PianoReq" type="text" value="0" required>
                </div>

                <label class="label">Required Bass</label>
                <div class="control">
                    <input class="input" name="BassReq" type="text" value="0" required>
                </div>

                <label class="label">Required Guitars</label>
                <div class="control">
                    <input class="input" name="GuitarReq" type="text" value="0" required>
                </div>

                <label class="label">Required Drums</label>
                <div class="control">
                    <input class="input" name="DrumsReq" type="text" value="0" required>
                </div>

                <hr>

                <div class="field is-grouped is-grouped-right">
                    <div class="control">
                        <button class="button is-primary">Submit</button>
                    </div>
                </div>

            </div>
            </form>
        </div>
    </div>
    <button id="hideModal" class="modal-close is-large" aria-label="close"></button>
</div>