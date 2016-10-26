<?php

function page_header1() {
    print '<html><head><title>Welcome to my site</title></head>';
    print '<body bgcolor="#ffffff">';
}

function page_header2($color) {
    print '<html><head><title>Welcome to my site</title></head>';
    print '<body bgcolor="#' . $color . '">';

}

function page_header3($color = 'cc3399') {
    print '<html><head><title>Welcome to my site</title></head>';
    print '<body bgcolor="#' . $color . '">';
}

function page_header4($color, $title) {
    print '<html><head><title>Welcome to ' . $title . '</title></head>';
    print '<body bgcolor="#' . $color . '">';
}

function page_header5($color, $title, $header = 'Welcome') {
    print '<html><head><title>Welcome to'  . $title . '</title></head>';
    print '<body bgcolor="#' . $color .'">';
    print "<h1>$header</h1>";
}

// オプションの引数が2つ
function page_header6($color, $title = 'the page', $header = 'Welcome') {
    print '<html><head><title>Welcome to ' . $title . '</title></head>';
    print '<body bgcolor="#' . $color . '">';
    print "<h1>$header</h1>";
}

// すべての引数にオプションが設定されている
function page_header7($color = '336699', $title = 'the page', $header = 'Welcome') {
    print '<html><head><title>Welcome to ' . $title . '</title></head>';
    print '<body bgcolor="#' . $color . '">';
    print "<h1>$header</h1>";
}

$user = 'よしの';

//page_header();
//page_header2();
//page_header3();
//page_header4('66cc66','my homepage');
//page_header5('66cc99','my wonderful page'); // uses default $header
//page_header5('66cc99','my wonderful page','This page is great!'); // no defaults
//page_header6('66cc99'); // uses default $title and $header
//page_header6('66cc99','my wonderful page'); // uses default $header
//page_header6('66cc99','my wonderful page','This page is great!'); // no defaults
//page_header7(); // uses all defaults
//page_header7('66cc99'); // uses default $title and $header
//page_header7('66cc99','my wonderful page'); // uses default $header
page_header7('66cc99','my wonderful page','This page is great!'); // no defaults

print "Welcome, $user";
page_footer();

function page_footer() {
    print '<hr>Thanks for visiting.';
    print '</body></html>';
}