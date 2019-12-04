<?php
    
class Database {

	const host     = "remotemysql.com"; //database server
	const user     = "qrqC8dUpwU"; //database login name
    const pass     = "1IMCHvlKQc"; //database login password
	const database = "qrqC8dUpwU"; //database name

	public $link;

	public function Database() {
        $this->link = new mysqli(
            self::host, 
            self::user,
            self::pass,
            self::database);
        
		if (mysqli_connect_error()) {
            echo mysqli_connect_error();
            echo "DEAD";
			exit();
		}
    }
    
    public function landing() {
        if (!$result = $this->link->query("SELECT title, video_link, pdfLink, composer, arranger, lyricist, tempo, openingKey, moonlighter, red_dot FROM songs")) {
            die ("Death: ". $this->link->error);
        };
        
        return $result;
    }

    public function str_ends($haystack,  $needle) {
        return 0 === substr_compare($haystack, $needle, -strlen($needle));
    }

    public function add($post_variables) {

        $query = $this->link->prepare("INSERT INTO songs(title,composer,lyricist,arranger,bpm,tempo,openingKey,pdfLink,moonlighter,red_dot,video_link,ClarinetReq,SopranoReq,AltoReq,TenorReq,BariReq,TromboneReq,TrumpetReq,PianoReq,BassReq,GuitarReq,DrumsReq) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        
        $query->bind_param(
            'ssssssssiisiiiiiiiiiii', 
            $post_variables["title"],
            $post_variables["composer"],
            $post_variables["lyricist"],
            $post_variables["arranger"],
            $post_variables["bpm"],
            $post_variables["tempo"],
            $post_variables["openingKey"],
            $post_variables["pdfLink"],
            $post_variables["moonlighter"],
            $post_variables["red_dot"],
            $post_variables["video_link"],
            $post_variables["ClarinetReq"],
            $post_variables["SopranoReq"],
            $post_variables["AltoReq"],
            $post_variables["TenorReq"],
            $post_variables["BariReq"],
            $post_variables["TromboneReq"],
            $post_variables["TrumpetReq"],
            $post_variables["PianoReq"],
            $post_variables["BassReq"],
            $post_variables["GuitarReq"],
            $post_variables["DrumsReq"]
        );

        $query->execute();

        echo $query->error;

        printf("%d Row inserted.\n", $query->affected_rows);

        $query->close();
    }

     public function search($query_string) {
        $keys = array(
            "ClarinetReq", 
            "SopranoReq", 
            "AltoReq", 
            "TenorReq", 
            "BariReq", 
            "TromboneReq", 
            "TrumpetReq", 
            "PianoReq", 
            "GuitarReq", 
            "BassReq", 
            "DrumsReq", 
            "tempo", 
            "moonlighter", 
            "red_dot"
        );
        
        $pieces = parse_str($this->link->real_escape_string($query_string), $output);
        
        $query = "SELECT title, video_link, pdfLink, composer, arranger, lyricist, tempo, openingKey, moonlighter, red_dot FROM songs WHERE ";

        foreach ($output as $key => $value) {
            $newvalue = $this->link->real_escape_string($value);
            
            if (!in_array($key, $keys)) {
                die ("Quit ya cheatin!");
            }

            if($key == "tempo" || $key == "moonlighter" || $key == "red_dot") {
                if ($newvalue != "null") {
                    $query = $query . "$key = '$newvalue' AND ";
                }
            } else {
                if($value != NULL){
                    $query = $query . "$key >= $newvalue AND ";
                }
            }
        }

        if ($this->str_ends($query, " AND ")) {
            $query = substr($query, 0, -5);
        }

        echo $query;

        if (!$result = $this->link->query($query)) {
            return False;
        };

        return $result;
    }

    public function delete($query_string) {
        $query = $this->link->real_escape_string($query_string);
        echo $query;
        if (!$result = $this->link->query("DELETE FROM songs WHERE title = '$query'")) {
            return False;
        };
        return True;
    }

    public function login($username, $password) {
        if (!$result = $this->link->query("SELECT password FROM users WHERE username='$username'")) {
            return False;
        };

        $row = $result->fetch_assoc();

        if (password_verify($password, $row["password"])) {
            return True;
        }
        return False;
    }
}
?>