<?php
      function generate_password($length) {

        // Array di caratteri possibili per la password
        $chars = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9), array('!', '@', '#', '$', '%', '^', '&', '*'));
        $password = "";
        for ($i = 0; $i < $length; $i++) {
            $password .= $chars[array_rand($chars)];
        }
        return $password;
    }

?>