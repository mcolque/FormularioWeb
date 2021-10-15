<?php
    echo "sha1".sha1("adad")."<br>"; //123

    //TOKEN
    echo "Unique".sha1(uniqid(rand(), true));
?>