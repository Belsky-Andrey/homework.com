<?php

function dirthree($dir) {
    $files = scandir($dir);
    if (is_array($files)) {
        $files = array_diff($files, array('.', '..'));
        if ($files) {
            echo '<ul>';
            foreach ($files as $name) {
                $path = $dir . '/' . $name;
                $is_dir = is_dir($path);
                echo '<li class="', $is_dir ? 'dir' : 'file', '"><span>', htmlspecialchars($name), '</span>';

                if ($is_dir)
                    dirthree($path);

                echo '</li>';
            }
            echo '</ul>';
        }
    }
    else {
        echo '<i>не могу прочитать</i>';
    }
}

$dir = 'C:';
dirthree($dir);


