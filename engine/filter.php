<?php



function strip_data($text)
{
    $quotes = array ("\x27", "\x22", "\x60", "\t", "\n", "\r", "*", "%", "<", ">", "?", "!" );
    $goodquotes = array ("-", "+", "#" );
    $repquotes = array ("\-", "\+", "\#" );
    $text = trim( strip_tags( $text ) );
    $text = str_replace( $quotes, '', $text );
    $text = str_replace( $goodquotes, $repquotes, $text );
    $text = ereg_replace(" +", " ", $text);
            
    return $text;
}

?>