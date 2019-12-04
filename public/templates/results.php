<div class="container is-white">

    <div class="box table__wrapper is-white">
        <h1 class="title">Results</h1>

        <?php
            if ($_SERVER["QUERY_STRING"] == "") {                  
                if (!$result = $conn->landing()) {
                    die ("Death". $conn->error);
                };
            } else {
                if (!$result = $conn->search($_SERVER["QUERY_STRING"])) {
                    die ("Death" . $conn->error);
                }
            }
                                
            // loop over rows and create table
            if ($result->num_rows > 0) {
        ?>
        <table class='table is-fullwidth'>
            <thead>
                <tr>
                    <th>Title</th>
                    <th><abbr title='Audio'>Audio Example</abbr></th>
                    <th>PDF</th>
                    <th><abbr title='Comp.'>Composer</abbr></th>
                    <th><abbr title='Arr.'>Arranger</abbr></th>
                    <th><abbr title='Lyr.'>Lyricist</abbr></th>
                    <th>Style</th><!--'tempo' in database is 'Style' -->
                    <th><abbr title='Key'>Opening Key</abbr></th>
                    <th><abbr title='ML'>Moonlighter</abbr></th>
                    <th><abbr title='RD'>Red Dot</abbr></th>
                    <th>DEL</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Title</th>
                    <th><abbr title='Audio'>Audio Example</abbr></th>
                    <th>PDF</th>
                    <th><abbr title='Comp.'>Composer</abbr></th>
                    <th><abbr title='Arr.'>Arranger</abbr></th>
                    <th><abbr title='Lyr.'>Lyricist</abbr></th>
                    <th>Style</th><!--'tempo' in database is 'Style' -->
                    <th><abbr title='Key'>Opening Key</abbr></th>
                    <th><abbr title='ML'>Moonlighter</abbr></th>
                    <th><abbr title='RD'>Red Dot</abbr></th>
                    <th>DEL</th>
                </tr>
            </tfoot>
            <tbody>
        <?php
            while($row = $result->fetch_assoc()) {
                echo "<tr>";

                foreach( $row as $key => $value) {

                    echo "<td>";
                    
                    if ($key == "pdfLink") {
                        echo "<a class='button is-danger is-outlined' href='$value'><i class='fal fa-file-pdf is-danger'></i></a>";
                    } elseif ($key == "video_link") {
                        if ($value == "") {
                            echo "<a class='button is-danger is-outlined' disabled><i class='fab fa-youtube is-danger'></i></a>";
                        } else {
                            echo "<a class='button is-danger is-outlined' href='$value' target='_blank'><i class='fab fa-youtube is-danger'></i></a>";
                        }
                    } elseif ($key == "moonlighter" || $key == "red_dot") {
                        
                        if ($value == 0) {
                            echo "<span class='icon has-text-danger'>";
                            echo "<i class='fas fa-ban'></i>";
                            echo "</span>";
                        } else {
                            echo "<span class='icon has-text-success'>";
                            echo "<i class='fas fa-check'></i>";
                            echo "</span>";
                        }
                    } else {
                        echo $value;
                    }
                    
                    
                    echo "</td>";

                }
                $title = $row['title'];
                echo "<td><a href='/delete/?$title' class='button is-danger'><i class='fal fa-trash-alt'></i></a></td>";
                echo "</tr>";

            }
        ?>

            </tbody>
        </table>

        <?php
            } else {
                echo "<h2>No Results</h2>";
                echo "<img src='https://loading.io/assets/img/p/landing/upload.svg'></img>";
            }
        ?>


    </div>
</div>