<?php
function security($input)
{
    $input = cleanData($input);
    $sanitized_email = filter_var($input, FILTER_SANITIZE_EMAIL);
    return htmlspecialchars(strip_tags($sanitized_email));
}
function cleanData($data)
{
    $search = array(
        '@SELECT@', '@UPDATE@', '@DELETE@', '@INSERT@', '@AND@',
        '@select@', '@update@', '@delete@', '@insert@', '@and@',
        '@<@',
        '@<script[^>]*?>.*?</script>@si',
        '@<[\/\!]*?[^<>]*?>@si',
        '@<style[^>]*?>.*?</style>@si',
        '@<![\s\S]*?--[ \t\n\r]*>@',
    );
    $output = preg_replace($search, '', $data);
    return $output;
}
