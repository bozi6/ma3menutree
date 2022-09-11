<main class="container-fluid">
    <div class="row">
        <h1>System Colors</h1>
        <div class="tip"><strong>Hint:</strong><br/>
            <span class="hardkey">MA</span> + <span class="hardkey">MA</span> + <span
                    class="hardkey">Clear</span> activates the default color theme and resets all values of that
            theme to the manufacturer defaults.
        </div>

        <h2>Sheet Colors for Fixture Names and IDs</h2>

        <p>The fixture names and numbers in sheets have three different color combinations.</p>

        <p><strong>White:</strong></p>

        <figure class="figure">
            <img alt="" class="img-fluid" height="118" src="/img/window_fixture-sheet_gray-color_v1-1.png" width="278"/>
            <figcaption class="figure-caption"><em>White names and numbers with a dark gray background</em></figcaption>
        </figure>

        <p>White fixture names and IDs on a dark gray background indicate fixtures that are not selected. It is
            the default color combination.</p>

        <p><strong>Yellow:</strong></p>

        <figure class="figure"><img alt="" height="118" src="/img/window_fixture-sheet_yellow-color_v1-1.png"
                                    width="278"/>
            <figcaption class="figure-caption"><em>Yellow names and numbers on a medium gray background</em>
            </figcaption>
        </figure>

        <p>Yellow fixture names and IDs on a medium gray background indicate fixtures that are selected.</p>

        <p><strong>Dim Orange:</strong></p>

        <figure class="figure"><img alt="" src="/img/window_fixture-sheet_orange-color_v1-1.png"/>
            <figcaption class="figure-caption"><em>Orange names and numbers on a medium gray background</em>
            </figcaption>
        </figure>

        <p>Orange fixture names and IDs on a medium gray background indicate fixtures that are in the current
            selection, but not the current sub-selection. For example, multiple fixtures are selected and <span
                    class="hardkey">Next</span> has been pressed.</p>

        <p><strong>Green:</strong></p>

        <figure class="figure"><img alt="" src="/img/window_fixture-sheet_green-color_v1-4.png"/>
            <figcaption class="figure-caption"><em>Green names and numbers on a medium gray background</em></figcaption>
        </figure>

        <p>Green fixture names and IDs on a medium gray background indicate fixtures with inverted encoder
            control of at least one attribute, based on selection and MAtricks settings.</p>

        <p><strong>Light Green:</strong></p>

        <figure class="figure"><img alt="" src="/img/window_fixture-sheet_light-green-color_v1-8.png"/>
            <figcaption class="figure-caption"><em>Fixture 2 appears with light green name and number on a medium gray
                    background</em>
            </figcaption>
        </figure>

        <p>Light green fixture names and IDs on a medium gray background indicate edge fixtures, based on
            selection and MAtricks settings. Edge fixtures do not follow all values. For example, when creating
            a mirrored circle with three fixtures and two wings, the edge fixture in the center will only tilt,
            but not pan. This is done in order to keep the symmetry.

        <p><strong>Fading between Yellow and Light Red:</strong></p>

        <figure class="figure"><img alt="" src="/img/window_fixture-sheet_light-red-color_v1-8.png"/>
            <figcaption class="figure-caption"><em>Light red names and numbers on a medium gray background</em>
            </figcaption>
        </figure>

        <p>Fixture names and IDs fading between yellow and light red on a medium gray background indicate at
            least one multipatch instance of this primary fixture is selected. </p>

        <hr/>
        <h2>Sheet Colors for Absolute Attribute Values</h2>

        <p>The cells showing attribute values in the fixture sheet and sequence sheet, with the track sheet mode
            enabled, have several combinations of text and background colors.</p>

        <p><strong>Black:</strong></p>

        <figure class="figure"><img alt="" src="/img/window_fixture-sheet_default-color_v1-1.png"/>
            <figcaption class="figure-caption"><em>Black background for on the W attribute</em></figcaption>
        </figure>

        <p>There is no object to be&nbsp;edited. In this case, this fixture does not include a white color
            mixing attribute.</p>

        <p><strong>Light gray text with a gray background:</strong></p>

        <figure class="figure"><img alt="" src="/img/window_fixture-sheet_default-color_v1-1.png"/>
            <figcaption class="figure-caption"><em>Light gray text with a gray background on R, G, and B attributes</em>
            </figcaption>
        </figure>

        <p>The values of these attributes are at their default levels.</p>

        <p><strong>Red text with gray background:</strong></p>

        <figure class="figure"><img alt="" src="/img/window_fixture-sheet_programmer-color_v1-1.png"/>
            <figcaption class="figure-caption"><em>Red text with gray background on R, G, and B attributes</em>
            </figcaption>
        </figure>

        <p>These attributes have values in the programmer, but they are not active. By default, they will not be
            included in any store or update actions.</p>

        <p><strong>White text with a red background:</strong></p>

        <figure class="figure"><img alt="" src="/img/window_fixture-sheet_active-color_v1-1.png"/>
            <figcaption class="figure-caption"><em>White text with a red background on R, G, and B attributes</em>
            </figcaption>
        </figure>

        <p>These attributes have active values in the programmer. By default, they will be included in any store
            or update actions.</p>

        <p><strong>Cyan text with a gray background:</strong></p>

        <figure class="figure"><img alt="" src="/img/window_fixture-sheet_new-selected-color_v1-1.png"/>
            <figcaption class="figure-caption"><em>Cyan text with a gray background on R, G, and B attributes</em>
            </figcaption>
        </figure>

        <p>These attributes have new values in the current cue outputting from the selected sequence. A dimmer
            value displayed with cyan text indicates a new, higher value in the current cue outputting from the
            selected sequence.</p>

        <p><strong>Green text with a gray background:</strong></p>

        <figure class="figure"><img alt="" src="/img/window_fixture-sheet_dim-down-color_v1-2.png"/>
            <figcaption class="figure-caption"><em>Green text with a gray background on R, G, and B attributes</em>
            </figcaption>
        </figure>

        <p>A dimmer value displayed with green text indicates a new, lower value in the current cue outputting
            from the selected sequence. This color is only used for descending dimmer values.</p>

        <p><strong>Magenta text with a gray background:</strong></p>

        <figure class="figure"><img alt=""
                                    src="/img/window_fixture-sheet_tracked-selected-color_v1-1.png"/>
            <figcaption class="figure-caption"><em>Magenta text with a gray background on R, G, and B attributes</em>
            </figcaption>
        </figure>

        <p>These attributes have tracked values in the current cue outputting from the selected sequence.</p>

        <p><strong>White text with a gray background:</strong></p>

        <figure class="figure"><img alt=""
                                    src="/img/window_fixture-sheet_blocked-selected-color_v1-1.png"/>
            <figcaption class="figure-caption"><em>White text with a gray background on R, G, and B attributes</em>
            </figcaption>
        </figure>

        <p>These attributes have blocked values in the current cue outputting from the selected sequence.</p>

        <p><strong>Yellow text with a gray background:</strong></p>

        <figure class="figure"><img alt="" src="/img/window_fixture-sheet_new-unselected-color_v1-1.png"/>
            <figcaption class="figure-caption"><em>Yellow text with a gray background on R, G, and B attributes</em>
            </figcaption>
        </figure>

        <p>These attributes have new or blocked values in the current cue outputting from a sequence that is not
            selected. This color combination does not appear in the sequence sheet.</p>

        <p><strong>Black text with a deep sea green background:</strong></p>

        <figure class="figure"><img alt="" src="/img/window_fixture-sheet_MIB-ready-color_v1-2.png"/>
            <figcaption class="figure-caption"><em>Black text with a deep sea green background on R, G, and B
                    attributes</em>
            </figcaption>
        </figure>

        <p>These attributes have completed a move in black. </p>

        <p><strong>Black text with a sea green background:</strong></p>

        <figure class="figure"><img alt="" src="/img/window_fixture-sheet_MIB-fade-color_v1-2.png"/>
            <figcaption class="figure-caption"><em>Black text with a sea green background on R, G, and B attributes</em>
            </figcaption>
        </figure>

        <p>These attributes are currently fading through a move in black command. This color combination does
            not appear in the sequence sheet. </p>

        <p><strong>Dim yellow text with a gray background:</strong></p>

        <figure class="figure"><img alt="" src="/img/window_fixture-sheet_tracked-unselected-color_v1-1.png"/>
            <figcaption class="figure-caption"><em>Dim yellow text with a gray background on R, G, and B attributes</em>
            </figcaption>
        </figure>

        <p>These attributes have tracked values in the current cue outputting from a sequence that is not
            selected. This color combination does not appear in the sequence sheet.</p>

        <p><strong>Dark blue background:</strong></p>

        <figure class="figure"><img alt="" src="/img/window_fixture-sheet_cue-fade-color_v1-8.png"/>
            <figcaption class="figure-caption"><em>Various colors of text with a dark blue background on Dim, P, and T
                    attributes</em>
            </figcaption>
        </figure>

        <p>These attributes are currently fading through cue transitions. Text colors continue to specify the
            source of the data. This background color combination does not appear in the sequence sheet.</p>

        <hr/>
        <h2>Sheet Colors for Additional Attribute Layers</h2>

        <p>Along with the absolute value, other layers of values may influence the output of an attribute. The
            color of the values from these layers matches the colors in the layer control bar in the encoder
            toolbar. </p>

        <p>The combinations of text and background colors for the additional layers all use the following
            pattern:</p>

        <ul>
            <li>White text on a background of the layer's color shows a value in the programmer.</li>
            <li>The text of the layer's color on a gray background shows a value from the current cue in the
                selected sequence.
            </li>
            <li>Yellow text on a gray background shows a value from a cue outputting from a sequence that is not
                selected.
            </li>
        </ul>

        <p><strong>Mauve background or text:</strong></p>

        <figure class="figure"><img alt="" src="/img/window_fixture-sheet_relative-color_v1-1.png"/>
            <figcaption class="figure-caption"><em>Mauve background and text.</em></figcaption>
        </figure>

        <p>There is a relative value on the dimmers of these two fixtures. The top value with a mauve background
            comes from the programmer. The bottom value with mauve text comes from the current cue in a selected
            sequence.</p>

        <p><strong>Green background or text:</strong></p>

        <figure class="figure"><img alt="" src="/img/window_fixture-sheet_fade-color_v1-1.png"/>
            <figcaption class="figure-caption"><em>Green background and text.</em></figcaption>
        </figure>

        <p>There is an individual fade time on the dimmers of these two fixtures. The top value with a green
            background comes from the programmer. The bottom value with green text comes from the current cue in
            a selected sequence.</p>

        <p><strong>Orange background or text:</strong></p>

        <figure class="figure"><img alt="" src="/img/window_fixture-sheet_delay-color_v1-1.png"/>
            <figcaption class="figure-caption"><em>Orange background and text.</em></figcaption>
        </figure>

        <p>There is an individual delay time on the dimmers of these two fixtures. The top value with an orange
            background comes from the programmer. The bottom value with orange text comes from the current cue
            in a selected sequence.</p>

        <p><strong>Purple background or text:</strong></p>

        <figure class="figure"><img alt="" src="/img/window_fixture-sheet_phaser-color_v1-1.png"/>
            <figcaption class="figure-caption"><em>Purple background and text.</em></figcaption>
        </figure>

        <p>There is a phaser value on the dimmers of these two fixtures. All layers of phaser values share the
            same purple color. The top value with a purple background comes from the programmer. The bottom
            value with purple text comes from the current cue in a selected sequence.</p>

        <p><strong>Shamrock background or text:</strong></p>

        <figure class="figure"><img alt="" src="/img/window_fixture-sheet_magic-color_v1-4.png"/>
            <figcaption class="figure-caption"><em>Shamrock background and text.</em></figcaption>
        </figure>

        <p>There is a GridPos value on the dimmers of these two fixtures. Both values come from the programmer.
            The top value with a shamrock background shows an active GridPos value. The bottom value with
            shamrock text shows a deactivated GridPos value.</p>

        <div class="tip"><strong>Hint:</strong><br/>
            Darkened versions of any of the above programmer colors indicate data from a programmer part, which
            is not the current part shown in the sheet.<br/>
            <br/>
            &nbsp;
        </div>

    </div>

    </div>
</main>
